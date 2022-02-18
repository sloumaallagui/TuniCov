<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DetailsController extends Controller
{
    public function create()
    {
        return view('auth.register-details');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dresse' => [ 'string', 'max:255'],
            'description' => [ 'string', 'max:255'],
            'photo' =>  ['image','mimes:jpeg,png,jpg,gif,svg',"max:8048"],
            'compte_fb' => [ 'string', 'max:1024'],
            'date_naiss' => [ 'date'],
            'tel' => [ 'numeric',"digits_between:8,8"],
            "sexe"=>["boolean"]
        ]);
        $id = Auth::id();
       $imageName = time().'.'.$request->photo->extension();
       $request->file("photo")->storeAs(
           "profil_pic",
           $imageName,
           'public'
       );
        //dd($imageName);
       //$name=Storage::disk('local')->put('profil_pic',$request->photo);

        DB::table('users')
        ->where('id', $id)
        ->update(
        ['adresse' =>$request->adresse,
        'description' =>$request->description,
        'compte_fb' =>$request->description,
        'date_naiss' =>$request->date_naiss,
        'photo' =>$imageName,
        'tel' =>$request->tel,
        "sexe"=>$request->sexe
        ]
    );

  return "id".$id;
}
}
