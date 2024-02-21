<?php

namespace App\Http\Controllers;

use App\Resume;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $logged_in = auth()->user()->id;
        $validatedData = $this->validate($request,[
            'move_in' => 'nullable',
            'move_from'=> 'nullable',
            'tenants'=> 'nullable',
            'pets'=> 'nullable',
            'drugs'=> 'nullable',
            'profession'=> 'nullable',

        ]);
       $resume = Resume::updateOrCreate([
        'user_id' => $logged_in
       ],[
        'move_in' => $validatedData['move_in'],
        'move_from'=> $validatedData['move_from'],
        'tenants'=> $validatedData['tenants'],
        'pets'=> $validatedData['pets'],
        'drugs'=> $validatedData['drugs'],
        'profession'=> $validatedData['profession'],

       ]);

       if ($resume){
        Alert::toast('Resume successfully updated!', 'success');
       }
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Resume $resume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resume $resume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resume $resume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resume $resume)
    {
        //
    }
}
