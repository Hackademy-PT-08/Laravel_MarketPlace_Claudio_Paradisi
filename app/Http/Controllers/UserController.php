<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Vista profilo
    public function profile () {

        return view('user.profile');

    }

    public function index(){
        $pictures = User::find(auth()->user()->id)->pictures;

        return view('user.my-pictures', ['pictures' => $pictures]);
    }
}
