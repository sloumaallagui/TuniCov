<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function review(Request $request)
    {

        $user_id = Auth::user()->id;
        $reviewer_user=User::find($user_id);

        $user_id = $request->id;
        $reviewed_user=User::find($user_id);


            $rev=Review::create([
                "content" => $request->content,
                "nb_star" => $request->nb_star

            ]);

        $reviewed_user->reviews()->save($rev);
        $reviewer_user->doReviews()->save($rev);
        $rev->save();
          /*$rev->reviewed_user_id=$reviewed_user->id;
          $rev->reviewed_user_id=$reviewed_user->id; */
           // $rev->save();


           return view("user.viewprofile",["user"=>$reviewed_user]);
}
}
