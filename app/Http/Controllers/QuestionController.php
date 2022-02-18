<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Question;
use App\Models\Covoiturage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TrajetController;

class QuestionController extends Controller
{
    public function question(Request $request)
    {

        $user_id = Auth::user()->id;
        $user=User::find($user_id);
        $cov_id = $request->cov_id;
        $cov=Covoiturage::find($cov_id);



        $reqCovtest=Question::where("user_id",$user_id)
                                    ->where("cov_id",$cov_id);


            $qst=Question::create([
                "content" => $request->content,

            ]);
         $cov->covQuestions()->save($qst);

          $user->userQuestions()->save($qst);


            $qst->save();

                return redirect("Trajet/".$cov_id);
        }









        }

