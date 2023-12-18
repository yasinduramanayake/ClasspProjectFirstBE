<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // insert category
    public function store(Request $request)
    {
        $data =  $request->validate(
            [
                'name' => 'required|string',
                'description' => 'required|string'

            ]
        );

        $createtable = Category::create($data);
        return response()->json(['data' => $createtable]);
    }

    // get all category

    public function getallcategory()
    {

        $getallcategory = Category::all();
        return response()->json(['data' => $getallcategory]);
    }

    //  update category
    public function updatecategory(Category $id, Request $request){

        $data =  $request->validate(
            [
                'name' => 'required|string',
                'description' => 'required|string'

            ]
        );

        $updatecategory = $id->update($data);
        return response()->json(['data'=> $updatecategory]);

    }

    // delete category
    public function deletecategory(Category $id){

        $deletecategory = $id->delete();
        return response()->json(['data' => $deletecategory]);
    }


}
