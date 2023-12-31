<?php



namespace App\CategoryRepository;
use App\CategoryRepository\categoryinterface;
use App\Models\Category;


// extends dammama dannawa inheritance parent kiylaa
// "implement eken interface eken use akrnawakiyala"
class categoryimplementation  implements categoryinterface{

    public function store($data){
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
