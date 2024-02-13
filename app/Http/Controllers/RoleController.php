<?php

namespace App\Http\Controllers;

use App\Mymodel;
use App\Role;
use Illuminate\Http\Request;
use Bouncer;
use Session;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['roles']= Role::all();
        return view('admin.roles.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data['models']=Mymodel::all();
        return view('admin.roles.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $role=Bouncer::Role()->firstOrCreate([
            'name' => $request->rolename,
            'title' => $request->rolename,
        ]); 

              
      Session::flash('alert-success', 'Role created');

     return redirect('roles/'.$role->id.'/edit');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $data['role']=Role::find($id);
        $data['models']=Mymodel::all();

        return view('admin.roles.view',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $data['role']=Role::find($id);
        $data['models']=Mymodel::all();
        return view('admin.roles.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }

    public function update_role(Request $request)
    {
       Controller::has_ability('Edit_Role');

        $role= Bouncer::role()->find($request->role_id);


       $role->update([
            'name' => $request->rolename,
            'title' => $request->rolename,
        ]);
        
    }

    public function update_permission(Request $request)
    {
       //Controller::has_ability('Edit_Role');

        $role= Bouncer::role()->find($request->role_id);

        if(Controller::can_model($request->model,$request->action,$role)=="checked"){

             $ability = Bouncer::ability()->firstOrCreate([
                    'name' => $request->action."_".$request->model,
                    'title' =>$request->action." ".$request->model,
                ]);    

             Bouncer::disallow($role)->to($ability);


        }else{

            $ability = Bouncer::ability()->firstOrCreate([
                    'name' => $request->action."_".$request->model,
                    'title' =>$request->action." ".$request->model,
                ]);

             Bouncer::allow($role)->to($ability);

        }
        
    }
}
