<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::query()->withCount('lands')->latest()->get();

        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        if ($data['image']) {
            # upload User Image
            $image = $request->file('image')->store('public/profiles' );

            $image =explode('/', $image) ;
            $data['image'] = end($image);
        }
        $data = $request->validated();
        if ($data['id_image']) {
            # upload User Image
            $image = $request->file('image')->store('public/national_id' );

            $image =explode('/', $image) ;
            $data['id_image'] = end($image);
        }
        $data['password'] = Hash::make("password");
        $user = User::create($data);
        Session::flash('success',"User created");
        return redirect()->route('users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update([
            'email'=>$data['email'],
            'name'=>$data['name'],
            'dob'=>$data['dob'],
            'phone'=>$data['phone'],
            'email'=>$data['email'],
            'address'=> $data['address'],
            'role'=> $data['role'],
            'kra_pin'=> $data['kra_pin'],
            'gender'=> $data['gender']
        ]);
        Session::flash('success',"User Updated");
        return redirect()->route('users.show',$user);
    }
    public function updateUser(Request $request, User $user)
    {
        # update user profile
        // update only the image, phone  and email
        $data = $request->validate([
            'image'=>["image","nullable","max:3000","mimes:jpeg,png,jpg"],
            'phone'=>["required","string","max:15","min:10","unique:users,phone,".$user->id],
            'email'=>["required","string","email","max:255","unique:users,email,".$user->id],

        ]);
        // update password if previous password is correct
        if ($request->password || $request->old_password) {
            # update password
            $request->validate([
                'password'=>["required","string","min:8"],
                'old_password'=>["required","string","min:8","max:255"],
            ]);
            if ($request->password !== $request->confirm_password ){
                Session::flash('error',"The password confirmation does not match.");
                return redirect()->back();
            }

            if (Hash::check($request->old_password, $user->password)) {
                # update password
                $user->update([
                    'password'=>Hash::make($request->password)
                ]);
                Session::flash('success',"Password Updated");
            }else{
                Session::flash('error',"Old password is incorrect");
                return redirect()->back();
            }
        }
        if ( isset($data['image']) ) {
            // dd($data['image']);
            // check if user has an image
            if ($user->image) {
                # delete old image
                Storage::delete('public/profiles/'.$user->image);
            }
            # upload User Image
            $image = $request->file('image')->store('public/profiles' );

            $image =explode('/', $image) ;
            $data['image'] = end($image);
        }
        $user->update($data);
        Session::flash('success',"User Updated");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        Session::flash('success',"User deleted");
        return redirect()->route('users.index');
    }
}
