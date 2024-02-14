<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\PropertyApplication;
use App\Propertygallery;
use App\User;
use DataTables;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class UserPropertyController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index()
  {
    if (request()->ajax()) {
      $data = Property::select(['id', 'name',  'created_at', 'onSale', 'img_url'])
        ->where('user_id', auth()->user()->id)
        ->get();
      return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('image', function ($row) {
          return '<img class="datatable-img" src="' . asset($row->img_url) . '" alt="Listings image" />';
        })
        ->addColumn('created_at', function ($row) {
          return date('d/m/Y h:i A', strtotime($row->created_at));
        })
        ->addColumn('actions', function ($row) {
          $btns = '<a class="btn btn-info  btn-sm btn-block btn-sm-block" href="' . $row->path() . '" ><i class="fas fa-eye"></i> View</a>
          <a class="btn btn-primary btn-sm btn-block btn-sm-block" href="/account/property-listings/' . $row->id . '/edit"><i class="fas fa-pen-square"></i> Edit</a>
          <button class="btn btn-danger btn-block btn-sm btn-sm-block" onclick="tableDelete(' . $row->id . ')" ><i class="fas fa-trash-alt"></i> Delete</button>';
          return $btns;
        })
        ->rawColumns(['actions', 'image', 'created_at'])
        ->make(true);
    }
    return view('real-estate.account.property-listings');
  }

  public function create()
  {
    return view('real-estate.account.property-create');
  }

  public function show(Request $request, Property $property)
  {
    return redirect()->route('property.show', ['property' => $property]);
  }

  public function store(Request $request)
  {
    //dd($request);
    if ($request) {

      $validatedData =  $this->validate($request, [
        'name' => 'required|min:3',
        'address' => 'required|min:3',
        'price' => 'required|integer',
        'negotiable' => 'boolean|sometimes',
        'bed' => 'required|integer',
        'bath' => 'required|integer',
        'area' => 'required|integer',
        'description' => 'required|min:5',
        'more_description' => 'nullable',
        'img' => 'required|image|max:5000',
        'agent' => 'required|min:3',
        'telephone' => 'required|min:10',
        'email' => 'required|email',
      ]);

      $property = Property::create([
        'name' => $validatedData['name'],
        'address' => $validatedData['address'],
        'price'  => $validatedData['price'],
        'negotiable' => isset($validatedData['negotiable']) ? ($validatedData['negotiable'] ? 1 : 0) : 0,
        'bed' => $validatedData['bed'],
        'bath'  => $validatedData['bath'],
        'area'  => $validatedData['area'],
        'description'  => $validatedData['description'],
        'more_description' => $validatedData['more_description'],
        'agent' => $validatedData['agent'],
        'telephone' => $validatedData['telephone'],
        'email' => $validatedData['email'],
        'user_id' => auth()->user()->id
      ]);

      if ($request->hasFile('img')) {
        $fileName = $request->file('img')->getClientOriginalName();
        $actualFileName = pathinfo($fileName, PATHINFO_FILENAME);
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
        $fileNameToStore = $actualFileName . time() . '.' . $fileExtension;
        $path = $request->file('img')->storeAs('public/properties', $fileNameToStore);

        if ($property->img_url) {
          Storage::delete('public/properties/' . basename($property->img_url));
        }
        $property->update([
          'img_url' => 'storage/properties/' . $fileNameToStore,
        ]);
      }

      if ($request->hasFile('images')) {

        $dir = 'public/property/' . $property->id;
        Storage::makeDirectory($dir);
        $image_url = 'storage/property/' . $property->id;
        //dd($property->id, $dir);
        $images = $request->file('images');
        foreach ($images as $image) {

          $fileName = $image->getClientOriginalName();
          $actualFileName = pathinfo($fileName, PATHINFO_FILENAME);
          $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
          $fileNameToStore = $actualFileName . time() . '.' . $fileExtension;
          $propertyimage = $image->storeAs($dir, $fileNameToStore);

          $propertygallery =  Propertygallery::create([
            'property_id' => $property->id,
            'url' => $dir,
            'image' => $image_url . '/' . $fileNameToStore
          ]);
        }
      }
      return redirect()->route('user.propertyListings')->with('success', 'Property Added');
    } else {
      return redirect()->route('user.propertyListings')->with('warning', 'Something went wrong');
    }

    // $this->propertyValidate($request);
    // $property = new Property;
    // if ($this->propertySave($request, $property)) {
    //   return redirect()->route('user.propertyListings')->with('success', 'Property Added');
    // } else {
    //   return redirect()->route('user.propertyListings')->with('warning', 'Something went wrong');
    // }
  }

  public function edit(Property $property)
  {
    return view('real-estate.account.property-edit', compact('property'));
  }

  public function update(Request $request, Property $property)
  {
    $this->propertyValidate($request, ['img' => 'sometimes|image|max:5000']);

    if ($property->user_id === auth()->user()->id) {
      if ($this->propertySave($request, $property)) {
        Alert::toast('Listing successfully updated!', 'success');
      } else {
        Alert::toast('Request aborted!', 'warning');
      }
    } else {
      Alert::toast('Edit aborted!', 'error');
    }

    return redirect()->back();
  }

  public function destroy(Property $property)
  {
    if ($property->user_id == auth()->user()->id) {
      if ($property->delete()) {
        return ['data' => true, 'msg' => 'Record deleted!'];
      } else {
        return ['data' => false, 'msg' => 'Failed! Something went wrong.'];
      }
    } else {
      return ['data' => false, 'msg' => 'Failed! Something went wrong.'];
    }
  }

  protected function propertyValidate($req, $merge = [])
  {
    return $req->validate(array_merge([
      'name' => 'required|min:3',
      'address' => 'required|min:3',
      'price' => 'required|integer',
      'negotiable' => 'boolean|sometimes',
      'bed' => 'required|integer',
      'bath' => 'required|integer',
      'area' => 'required|integer',
      'description' => 'required|min:5',
      'img' => 'required|image|max:5000',
      'agent' => 'required|min:3',
      'telephone' => 'required|min:10',
      'email' => 'required|email',
    ], $merge));
  }
  protected function propertySave($request, $property)
  {
    $property->name = $request->name;
    $property->address = $request->address;
    $property->price = $request->price;
    $property->negotiable = $request->negotiable ? 1 : 0;
    $property->bed = $request->bed;
    $property->bath = $request->bath;
    $property->area = $request->area;
    $property->description = $request->description;
    $property->agent = $request->agent;
    $property->telephone = $request->telephone;
    $property->email = $request->email;
    $property->user_id = auth()->user()->id;

    if ($request->hasFile('img')) {
      $fileName = $request->file('img')->getClientOriginalName();
      $actualFileName = pathinfo($fileName, PATHINFO_FILENAME);
      $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
      $fileNameToStore = $actualFileName . time() . '.' . $fileExtension;
      $path = $request->file('img')->storeAs('public/properties', $fileNameToStore);

      if ($property->img_url) {
        Storage::delete('public/properties/' . basename($property->img_url));
      }
      $property->img_url = 'storage/properties/' . $fileNameToStore;
      $property->save();
    }


    //return true;


    if ($request->hasFile('images')) {

      $dir = Storage::makeDirectory('storage/property/' . $property->id);
      $images = $request->file('images');
      foreach ($images as $image) {

        $fileName = $image->getClientOriginalName();
        $actualFileName = pathinfo($fileName, PATHINFO_FILENAME);
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
        $fileNameToStore = $actualFileName . time() . '.' . $fileExtension;
        $propertyimage = $image->storeAs($dir, $fileNameToStore);

        $propertygallery = new Propertygallery();
        $propertygallery->property_id = $property->id;
        $propertygallery->url = $dir;
        $propertygallery->image = $propertyimage;
        $propertygallery->save();
      }
    }
  }

  public function propertyenqueries()
  {

    $owner = auth()->user()->id;

    if (request()->ajax()) {

      $data = PropertyApplication::select(['id', 'property_id', 'name', 'email', 'telephone', 'created_at'])
        ->where('id', 1)
        ->get();
      return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('created_at', function ($row) {
          return date('d/m/Y h:i A', strtotime($row->created_at));
        })
        ->addColumn('actions', function ($row) {
          $btns = `<a class="btn btn-info  btn-sm btn-block btn-sm-block" href="' . $row->path() . '" ><i class="fas fa-eye"></i> View</a>
          <a class="btn btn-primary btn-sm btn-block btn-sm-block" href="/account/property-listings/' . $row->id . '/edit"><i class="fas fa-pen-square"></i> Edit</a>
          <button class="btn btn-danger btn-block btn-sm btn-sm-block" onclick="tableDelete(' . $row->id . ')" ><i class="fas fa-trash-alt"></i> Delete</button>`;
          return $btns;
        })
        ->rawColumns(['actions', 'created_at'])
        ->make(true);
    }
    return view('real-estate.account.property-enqueries');
  }

  public function savehome(Request $request, $id)
  {
    try {
      //dd($request);
      $user = User::find(auth()->user()->id);
      $user->properties()->attach($request->id);
      Alert::toast('Added to your homes!', 'success');
      return redirect()->back();
    } catch (\Exception $e) {
      return response()->json(['error' => $e->getMessage()], 500);
    }
  }
}
