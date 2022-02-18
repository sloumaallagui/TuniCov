<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Review;
use App\Models\Message;
use App\Models\Question;
use App\Models\Covoiturage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;

class AdminController extends Controller
{
   static function loginView(){
    if(session('login')=='on'){
        $users=User::all();
        $admin=Admin::find(session('id'));
        $covs=Covoiturage::all();
        $revs=Review::all();
        $coms=Question::all();
        return view("admin.index",["users"=>$users,"admin"=>$admin,"covs"=>$covs,"revs"=>$revs,"coms"=>$coms]);

   }else{
    return view("admin.login");

   }
  }
  function logout(){
    session(['login' => 'off']);
    return view("admin.login");
  }
  function login(Request $request){

      $res=Admin::where("login",$request->login)->where("password",sha1($request->password))->get();
        if($res->count()>0){
            session(['login' => 'on']);
            session(['id' => $res->first()->id]);
            $users=User::all();
            $admin=Admin::find(session('id'));
            $covs=Covoiturage::all();
            $revs=Review::all();
        $coms=Question::all();
        return view("admin.index",["users"=>$users,"admin"=>$admin,"covs"=>$covs,"revs"=>$revs,"coms"=>$coms]);

        }else{
            session(['login' => 'off']);
            return view("admin.login");
        }
    }
    static function verifLogin(){
        if(!(session('login')=='on')){
            return view("admin.login");
        }
    }
    function index(){
        AdminController::verifLogin();
        $users=User::all();
            $admin=Admin::find(session('id'));
            $covs=Covoiturage::all();
            $revs=Review::all();
        $coms=Question::all();
        return view("admin.index",["users"=>$users,"admin"=>$admin,"covs"=>$covs,"revs"=>$revs,"coms"=>$coms]);
    }
    static function users(){
        AdminController::verifLogin();
        $users=User::all();
            $admin=Admin::find(session('id'));
            $covs=Covoiturage::all();
            $revs=Review::all();
        $coms=Question::all();
        return view("admin.users",["users"=>$users,"admin"=>$admin,"covs"=>$covs,"revs"=>$revs,"coms"=>$coms]);

    }
    static function covs(){
        AdminController::verifLogin();
        $users=User::all();
            $admin=Admin::find(session('id'));
            $covs=Covoiturage::all();
            $revs=Review::all();
        $coms=Question::all();
        return view("admin.covs",["users"=>$users,"admin"=>$admin,"covs"=>$covs,"revs"=>$revs,"coms"=>$coms]);

    }
    static function coms(){
        AdminController::verifLogin();
        $users=User::all();
            $admin=Admin::find(session('id'));
            $covs=Covoiturage::all();
            $revs=Review::all();
        $coms=Question::all();
        return view("admin.coms",["users"=>$users,"admin"=>$admin,"covs"=>$covs,"revs"=>$revs,"coms"=>$coms]);

    }
    static function revs(){
        AdminController::verifLogin();
        $users=User::all();
            $admin=Admin::find(session('id'));
            $covs=Covoiturage::all();
            $revs=Review::all();
        $coms=Question::all();
        return view("admin.revs",["users"=>$users,"admin"=>$admin,"covs"=>$covs,"revs"=>$revs,"coms"=>$coms]);

    }
    function modifyUser(Request $request){
        $user=User::find($request->id);
        $admin=Admin::find(session('id'));
        return view("admin.modifyuser",["user"=>$user,"admin"=>$admin]);
    }
    function saveUser(Request $request){
        $user=User::find($request->id);
        $user->name=$request->name;
        $user->lastname=$request->lastname;
        $user->tel=$request->tel;
        $user->email=$request->email;
        $user->description=$request->description;
        $user->date_naiss=$request->date_naiss;
        $user->save();
       return  AdminController::users();
    }
    function deleteCov(Request $request){
        $cov=Covoiturage::find($request->id);
        DB::table('covoiturages')->where('id', '=', $request->id)->delete();
        return   AdminController::covs();
    }
    function deleteRev(Request $request){
        $rev=Review::find($request->id);
        DB::table('reviews')->where('id', '=', $request->id)->delete();

        return   AdminController::revs();
    }
    function deleteCom(Request $request){
        $rev=Question::find($request->id);
        DB::table('questions')->where('id', '=', $request->id)->delete();

        return   AdminController::coms();
    }
    function deleteUser(Request $request){
        $user=User::find($request->id);
        DB::table('users')->where('id', '=', $request->id)->delete();

        return   AdminController::users();
    }
    function deleteAdmin(Request $request){
    $admin=Admin::find($request->id);
        DB::table('admins')->where('id', '=', $request->id)->delete();

        $admin=Admin::find(session('id'));
        $admins=Admin::all();
        return view("admin.reglage",["admin"=>$admin,"admins"=>$admins]);
    }
    function deleteMessage(Request $request){
        $message=Message::find($request->id);
            DB::table('messages')->where('id', '=', $request->id)->delete();
            $messages=Message::all();
            $admin=Admin::find(session('id'));
            return view("admin.messages",["messages"=>$messages,"admin"=>$admin]);
        }
    static function reglage(){
        $admin=Admin::find(session('id'));
        $admins=Admin::all();
        return view("admin.reglage",["admin"=>$admin,"admins"=>$admins]);

    }
    static function messages(){
        $messages=Message::all();
        $admin=Admin::find(session('id'));
        return view("admin.messages",["messages"=>$messages,"admin"=>$admin]);

    }
    function createAdmin(Request $request){
        $admin=Admin::find(session('id'));
        $admins=Admin::all();
        $adminnv=Admin::create([
            "login" => $request->login,
            "password" =>sha1( $request->password),
            "type" => $request->type,

        ]);
        $adminnv->save();
        return view("admin.reglage",["admin"=>$admin,"admins"=>$admins]);


    }


}
