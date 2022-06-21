<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MealController extends Controller
{
    //
    public function query(Request $req){


        $validator = Validator::make($req->all(), [
            'per_page' => 'sometimes|integer',
            'page' => 'sometimes|integer',
            'category' => 'sometimes|string',
            'tags' => 'sometimes|string',
            'with' => 'sometimes|string',
            'lang' => 'required',
            'diff_time' => 'sometimes|integer',
        ]);
 
        if ($validator->fails()) {
            return "<h2>Incorrect query</h2>";
        }
 
        $validated = $validator->validated();

        return $validated['with'];

        //return $req->with;
        //return Meal::all();
    }
}
