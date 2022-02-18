<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function getUserDetails(){
        $id = Auth::id();
        $user = User::find($id);
        return view("index",["user"=>$user]);
    }
}
