<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MealController extends Controller
{
    //
    public function query(Request $req)
    {
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

        app()->setLocale($req->query('lang'));
        $query = Meal::query()->withTranslation();

        /*if ($req->has('category')) {
            $categoryId = $req->query('category');

            if ($categoryId == (string)(int)$categoryId) {

                $query = $query->where('category_id', $categoryId);
            } elseif ($categoryId == 'null') {

                $query = $query->whereNull('category_id');
            } elseif ($categoryId == '!null') {

                $query = $query->whereNotNull('category_id');
            }
        }*/


        if ($req->has('tags')) {
            $tags = explode(',', $req->query('tags'));

            foreach ($tags as $tag) {
                $query = $query->whereHas('tags', function ($q) use ($tag) {
                    $q->where('tags.id', '=', $tag);
                });
            }
        }

        
        if ($req->has('with')) {

            $with = explode(',', $req->query('with'));

    		$props = array(
				'ingredients',
				'category',
				'tags'
			);
		
			$list = array_intersect($props, $with);

			$query = $query->with($list);
        }
        
        if ($req->has('diff_time')) {
            $diffDate = new \DateTime();
		    $diffDate->setTimestamp($req->query('diff_time'));

            $query = $query->withTrashed()
                    ->where('created_at','>',$diffDate)
                    ->orWhere('updated_at','>',$diffDate)
                    ->orWhere('deleted_at','>',$diffDate);
            
        }

    	/*
    	if($request->has('per_page')){


    	}*/
        


        return response()->json($query);
    }
}
