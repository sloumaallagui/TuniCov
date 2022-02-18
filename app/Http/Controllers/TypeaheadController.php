<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class TypeaheadController extends Controller
{
    public function autocompleteSearch(Request $request)
    {

            $places = [];

            if($request->has('q')){
                $search = $request->q;
                $places =Place::select("id", "name")
                        ->where('name', 'LIKE', "%$search%")
                        ->get();
            }
            return response()->json($places);
        }
    }

