<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PropertyApplication;
use RealRashid\SweetAlert\Facades\Alert;
use DataTables;
use Illuminate\Support\Facades\Log;

//use Yajra\DataTables\Facades\DataTables;

class PropertyApplicationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'telephone' => 'required|min:10',
            'message' => 'required|min:6'
        ]);

        $propertyApplication = new PropertyApplication;
        $propertyApplication->property_id = $request->property_id;
        $propertyApplication->name = $request->name;
        $propertyApplication->email = $request->email;
        $propertyApplication->telephone = $request->telephone;
        $propertyApplication->message = $request->message;
        if ($propertyApplication->save()) {
            Alert::toast('Your application has been sent!', 'success');
        } else {
            Alert::toast('Failed to send your appication!', 'warning');
        }
        return redirect()->back();
    }

    // public function propertyenqueries(){

    //     $owner = auth()->user()->id;
    
    //     if (request()->ajax()) {
    
    //       $data = PropertyApplication::select(['id', 'property_id', 'name', 'email', 'telephone', 'created_at'])
    //         ->where('id', 1)
    //         ->get();
    //       return DataTables::of($data)
    //         ->addIndexColumn()
    //         ->addColumn('created_at', function ($row) {
    //           return date('d/m/Y h:i A', strtotime($row->created_at));
    //         })
    //         ->addColumn('actions', function ($row) {
    //           $btns = '<a class="btn btn-info  btn-sm btn-block btn-sm-block" href="' . $row->path() . '" ><i class="fas fa-eye"></i> View</a>
    //           <a class="btn btn-primary btn-sm btn-block btn-sm-block" href="/account/property-listings/' . $row->id . '/edit"><i class="fas fa-pen-square"></i> Edit</a>
    //           <button class="btn btn-danger btn-block btn-sm btn-sm-block" onclick="tableDelete(' . $row->id . ')" ><i class="fas fa-trash-alt"></i> Delete</button>';
    //           return $btns;
    //         })
    //         ->rawColumns(['actions', 'created_at'])
    //         ->make(true);
    //     }
    //     return view('real-estate.account.property-enqueries');
       
    //   }

      public function propertyenqueries(){

        $owner = auth()->user()->id;
    
        if (request()->ajax()) {

          $data = PropertyApplication::select('property_applications.*')
            ->join('properties', 'property_applications.property_id', '=', 'properties.id')
            ->where('properties.user_id', $owner)
             // Select the columns you need from PropertyApplication
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
            ->rawColumns([ 'created_at', 'actions'])
            ->make(true);
        }
        return view('real-estate.account.property-enqueries');
       
      }

}
