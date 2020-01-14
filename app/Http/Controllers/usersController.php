<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function users(){
        $users = App\User::paginate(3);
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

        return redirect('users/edit/'.$user->id)->with('mensaje', "El usuario $user->email ha sido actualizado exitosamente!");
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

        return redirect('users')->with('mensaje', "El usuario $request->email ha sido agregado exitosamente!");
    }

    public function delete($id){
        $deleteuser = App\User::findOrFail($id);
        $nameuser = $deleteuser->email;
        $deleteuser->delete();

        return redirect('/users')->with('mensaje', "El usuario $nameuser ha sido eliminado exitosamente!");
    }
}
