<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    public function users(){
        $users = App\User::all();
         return view('users', compact('users'));
     }

     public function create(){
       return view('adduser');
    }

    public function edit(App\User  $user){
        return view('edituser', compact('user'));
    }

    public function update(App\User  $user){

        request()->validate([
            'name' => 'required',
            'password' => 'confirmed',
        ]);

        $user->fill([
            'name' => request('name'),
            'password' =>request('password') ?  Hash::make(request('password')) : $user->password
        ]);
        $user->save();

        return redirect('users/edit/'.$user->id)->with('mensaje', 'Usuario Actualizado!');
    }

    function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);
        
        $adduser = new App\User;
        $adduser->name = $request->name;
        $adduser->email = $request->email;
        $adduser->password = Hash::make($request->password);

        $adduser->save();

        return redirect('users')->with('mensaje', 'Usuario Agregado!');
    }
}
