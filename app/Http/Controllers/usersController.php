<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class usersController extends Controller
{
    public function users(){
        $users = App\User::all();
         return view('users', compact('users'));
     }
}
