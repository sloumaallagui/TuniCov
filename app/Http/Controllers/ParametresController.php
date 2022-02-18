<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParametresController extends Controller
{

function parametres(){
    $user=Auth::user();

    return view("user.parametres",["user"=>$user]);
}

function profil(){
    $user=Auth::user();
    return view("user.profil",["user"=>$user]);

}
function update(Request $request){
   $userAuth=Auth::user();
   $user=User::find($userAuth->id);
   $user->name=$request->nom;
   $user->lastname=$request->prenom;
   $user->email=$request->email;
   $user->tel=$request->tel;
   $user->date_naiss=$request->date_naiss;
   $user->adresse=$request->adresse;
   $user->compte_fb=$request->compte_fb;
   $user->description=$request->description;
    $user->save();
    return view("user.update",["user"=>$user]);
}
function viewprofile(Request $request){
    $user=User::find($request->id);
     return view("user.viewprofile",["user"=>$user]);
 }
}
