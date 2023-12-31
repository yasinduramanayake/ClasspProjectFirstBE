<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\CategoryRepository\categoryinterface;
use Exception;

use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{
    protected $repositoryinterface;
    public function __construct(categoryinterface $repositoryinterface)
    {
        $this->repositoryinterface = $repositoryinterface;

    }
    // insert category
    public function store(Request $request)
    {
        try{
            $data =  $request->validate(
                [
                    'name' => 'required|string',
                    'description' => 'required|string'
                ]
            );

            $createtable = $this->repositoryinterface->store($data);
            return response()->json(['data' => $createtable]);

           }catch(Exception $e){
            return response()->json(['error' => $e->getMessage(),500]);
           }

    }

    // get all category

    public function getallcategory()
    {

        try{
            $getallcategory = $this->repositoryinterface-> getallcategory();
            return response()->json(['data' =>  $getallcategory]);

           }catch(Exception $e){
            return response()->json(['error' => $e->getMessage(),500]);
           }

    }

    //  update category
    public function  updatecategory(Category $id, Request $request){


        try{
            $data =  $request->validate(
                [
                    'name' => 'required|string',
                    'description' => 'required|string'

                ]
            );
            $updatecategory= $this->repositoryinterface->updatecategory($id,$data);
            return response()->json(['data' =>$updatecategory]);

           }catch(Exception $e){
            return response()->json(['error' => $e->getMessage(),500]);
           }




    }

    // delete category
    public function deletecategory(Category $id){
        try{
            $deletecategory= $this->repositoryinterface->deletecategory($id);
            return response()->json(['data' =>$deletecategory]);

           }catch(Exception $e){
            return response()->json(['error' => $e->getMessage(),500]);
           }


    }


}