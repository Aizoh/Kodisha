<?php

namespace App\Http\Controllers;

use App\User;
use App\UserInfo;
use App\Role;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Bouncer;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'store']);
    }

    public function index(){
        $data['users'] = User::all();
        $data['spaces']=Role::all();
        return view('admin.users.index', $data);
    }

    public function store(Request $request)
    {
        //logging out first if auth user
        if (auth()->user()) {
            Alert::info('You were logged out!')->toToast();
            Auth::logout(auth()->user());
        }

        $validator = Validator::make($request->only('email', 'password'), [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('email')) {
                Alert::warning('Please use valid Email !', $errors->first('email'))->toToast();
            } else {
                Alert::warning('Please use a valid Password !', $errors->first('password'))->toToast();
            }
            return redirect('/login')->withInput();
        }

        //if the validation passes
        $user = User::where('email', '=', request()->email)->first();
        if ($user === null) {
            $username = explode("@", request()->email)[0];

            $newUser = new User;
            $newUser->name = $username;
            $newUser->email = request()->email;
            $newUser->password = Hash::make(request()->password);
            //putting default values in user info


            if ($newUser->save()) {
                $newUserInfo = new UserInfo;
                $newUserInfo->user_id = $newUser->id;
                $newUserInfo->profile_img = 'img/changeprofile.png';
                $newUserInfo->fullname = $username;
                $newUserInfo->user_type = 1;
                $newUserInfo->location = 'Not specified';
                $newUserInfo->save();
                Auth::login($newUser);
                return redirect()->route('page', 'user-profile');
            } else {
                return redirect()->back();
            }
        } else {
            //user exists
            if (Hash::check(request()->password, $user->password)) {
                Auth::login($user);
                return redirect()->route('page', 'user-profile');
            } else {
                Alert::warning('Incorrect password')->toToast();
                return redirect('/login')->withInput();
            }
        }
    }

 
    public function create()
    {
        //
        //return view('auth.register');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
        $data['spaces']=Role::all();
        $data['users']=User::all();
        $user = User::find($id);
        $data['user']=$user;

        return view('admin.users.edit',$data);
    }


    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[           
            'name' => 'required|string|max:255',
            'userspace' => 'required',
            'email' => 'required|string|email|max:255',

        ]);

        $user = User::find($id);
        $user->update($request->all());
        //Bouncer::reset($user);

        //$user->roles()->detach();
        //Bouncer::refreshFor($user);
        Bouncer::sync($user)->roles([]);
        Bouncer::sync($user)->abilities([]);
        Bouncer::sync($user)->forbiddenAbilities([]);
      
        $role=Bouncer::role()->find($request->userspace);

        Bouncer::assign($role)->to($user);
        //Bouncer::refreshFor($user);

        return redirect('users');
    }


    public function destroy($id)
    {
        //
    }
}
