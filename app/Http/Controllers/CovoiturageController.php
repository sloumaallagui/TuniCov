<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Place;
use App\Mail\TestMail;
use App\Models\Covoiturage;
use App\Models\DestPassage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class CovoiturageController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(["rechercherTrajet","rechercherTrajetD1","rechercherTrajetN","rechercherTrajetNext"]);
    }
    function proposerTrajet(){
        $id = Auth::id();
        $user = User::find($id);
        return view("user.ProposerTrajet",["user"=>$user]);

    }
    function rechercherTrajet(){
        $id = Auth::id();
        $user = User::find($id);
        $covs=Covoiturage::with("dest_deps")->get()->take(10);

        return view("user.RechercherTrajet",["user"=>$user,"covs"=>$covs]);
    }
    function rechercherTrajetNext($next){
        $id = Auth::id();
        $user = User::find($id);
        $covs=Covoiturage::with("dest_deps")->get()->take($next);
        return view("user.RechercherTrajetD1",["user"=>$user,"covs"=>$covs]);
    }
    function rechercherTrajetN(){
        $id = Auth::id();
        $user = User::find($id);
        $covs=Covoiturage::with("dest_deps","user")->orderBy("created_at")->get();
        return view("user.RechercherTrajet",["user"=>$user,"covs"=>$covs]);
    }
    function rechercherTrajetPD($dest){
        $id = Auth::id();
        $user = User::find($id);
        $departid=Place::where("name",$dest)->first()->id;
        $covs=Covoiturage::orWhere("dest_dep",$departid)->orWhere("dest_arrive",$departid)
        ->get();
        return view("user.RechercherTrajet",["user"=>$user,"covs"=>$covs]);
    }
    function rechercherTrajetD1($dep,$arrive,$y,$m,$d){
        $id = Auth::id();
        $user = User::find($id);
        $departid=Place::where("name",$dep)->first()->id;
        $arriveid=Place::where("name",$arrive)->first()->id;
        $covs=Covoiturage::where("dest_dep",$departid)->where("dest_arrive",$arriveid)->where('date', '<=', $y.'-'.$m.'-'.$d)->get();
        return view("user.RechercherTrajetD1",["user"=>$user,"covs"=>$covs]);
    }
    function mesTrajets(){
        $id = Auth::id();
    $user = User::find($id);
    $covs=Covoiturage::where("user_id",$id)->get();
  //  dd($covs);

    return view("user.MesTrajet",["user"=>$user,"covs"=>$covs]);


    }
    function enregistrerTrajet(Request $request){
        $cov = Covoiturage::find($request->cov_id);
        $cov->description= $request->description;
        $cov->prix = $request->prix;
        if(isset($request->input('non_fummeur')[0]))
        $cov->non_fummeur= boolval($request->input('non_fummeur')[0]);
        if(isset($request->input('femme_uniq')[0]))
        $cov->femme_uniq= boolval($request->input('femme_uniq')[0]);
        if(isset($request->input('climatise')[0]))
        $cov->climatise= boolval($request->input('climatise')[0]);
        $cov->save();
        $id = Auth::id();
        $covs=Covoiturage::where("user_id",$id)->get();

        $user = User::find($id);
        Mail::to($user->email)->send(new TestMail($user,'tunicov.test/Trajet/'.$cov->id,'Votre demande de covoiturage de '.$cov->dest_deps->name.'à '.$cov->dest_arrives->name.' à été publier avec succés'));

        return view("user.MesTrajet",["user"=>$user,"covs"=>$covs]);
    }

    function ajouterCovoiturage(Request $request)
    {

        $user = User::find($request->user()->id);


        $cov = Covoiturage::create([
            "user_id" => $request->user()->id,
            "date" => $request->date,
            "nombre" => $request->qtyInput
        ]);

        $place = Place::where("name", $request->dest_dep_ajoute)->firstorfail();

       $place->covoituragesDep()->save($cov);
        $place = Place::where("name", $request->dest_arrive_ajoute)->firstorfail();
        $place->covoituragesArrive()->save($cov);

        $user->covoiturages()->save($cov);

            $i=1;
            while(!is_null($request["destpassage_".$i])){
                $place = Place::where("name", $request["destpassage_".$i])->firstorfail();
                $place->dest_passages()->attach($cov->id);

                $i++;
            }


        return view("user.AjouteCovoiturageAdditionel",['user'=>$user,"dest_dep"=>$request->dest_dep_ajoute,"dest_arrive"=>$request->dest_arrive_ajoute,"cov_id"=>$cov->id]);
    }
}

