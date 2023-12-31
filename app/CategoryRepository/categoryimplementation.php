<?php



namespace App\CategoryRepository;
use App\CategoryRepository\categoryinterface;
use App\Models\Category;
use App\Helper\helper;


class categoryimplementation  implements categoryinterface{

    public function store($data){
        $getarray = helper::insertCategories();
        // dd( $getarray);
        foreach($getarray as $arryobject){
            $createtable=   Category::create(
                [
                    'name' => $arryobject['name'],
                    'description' => $arryobject['description']
                ]
            );

        }
        $createtable = Category::create($data);
        return  $createtable;
    }
    public function getallcategory(){
        $getallcategory = Category::all();
        return $getallcategory;
    }

    public function updatecategory($id, $data){
        $updatecategory = $id->update($data);
        return $updatecategory;
    }
    public function deletecategory($id){
        $deletecategory = $id->delete();
        return $deletecategory ;

    }





}