<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\TestMail;

use App\Models\Question;


use App\Models\Covoiturage;
use Illuminate\Http\Request;
use App\Models\ReqCovoiturage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class TrajetController extends Controller

{
    public function __construct(){
        $this->middleware('auth');
    }
   static function getTrajetDetails($id){
      $cov=Covoiturage::find($id);
      $user=Auth::user();
      $cov->nb_vue+=1;
      $cov->save();
      $reqCovtest=ReqCovoiturage::where("user_id",$user->id)
       ->where("cov_id",$cov->id)->first();
    $questions=Question::where("cov_id",$id)->get();


    return view("user.Trajet",["cov"=>$cov,"user"=>$user,"req"=> $reqCovtest,"questions"=>$questions]);

    }
    public function descision(Request $request){
        $reqs=ReqCovoiturage::where("id",$request->id)->get();
        $req=$reqs->first();
        $req->status=$request->status;
        $req->save();
        $user=User::find($req->user_id);
        Mail::to($user->email)->send(new TestMail($user,'tunicov.test/trajet/'.$req->cov_id,'Une nouvelle demande de  '.$req->user->name.' '.$req->user->lastname.' vister notre site plateforme pour plus d'."'".'information'));
        return TrajetController::getTrajetDetails($request->covid);

    }

    public function reqCovoiturageUser(Request $request)
    {

        $user_id = Auth::user()->id;
        $user=User::find($user_id);
        $cov_id = $request->covid;
        $cov=Covoiturage::find($cov_id);



        $reqCovtest=ReqCovoiturage::where("user_id",$user_id)
                                    ->where("cov_id",$cov_id);
        if($reqCovtest->count()>=1){
            $reqCovtest->delete();

            $covr=new ReqCovoiturage;
            $covr->qty="500";
            return response()->json($covr);


        }
        else{
            $reqCov=ReqCovoiturage::create([
                "place" => $request->place,
                "qty" => $request->qty,
                "status" =>0
            ]);
         $cov->userReq()->save($reqCov);

          $user->reqCov()->save($reqCov);


            $reqCov->save();
            Mail::to($user->email)->send(new TestMail($cov->user,'Tunicov.test/profil','Vous avez une nouvelle demande à votre trajet de  '.$cov->dest_deps->name.' à '.$cov->dest_arrives->name .' de '.$user->name.' '.$user->lastname));

            return response()->json($reqCov);
        }









        }

}
