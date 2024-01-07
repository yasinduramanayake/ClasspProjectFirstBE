<?php



namespace App\CategoryRepository;

use App\CategoryRepository\categoryinterface;
use App\Models\Category;
use App\Helper\helper;
use Spatie\QueryBuilder\QueryBuilder;

class categoryimplementation  implements categoryinterface
{

    public function store($data)
    {
        $getarray = helper::insertCategories();
        // dd( $getarray);
        foreach ($getarray as $arryobject) {
            $createtable =   Category::create(
                [
                    'name' => $arryobject['name'],
                    'description' => $arryobject['description']
                ]
            );
        }
        $createtable = Category::create($data);
        return  $createtable;
    }


        // return $alldata = Product::with('category')->get();
    public function getallcategory()
    {

        $getallcategory = QueryBuilder::for(Category::class)
        ->allowedFilters(['id'])
        ->get();
        // return  $getallcategory = Category::with('products')->get('name');
        // $getallcategory = Category::all();
        return $getallcategory;
    }

    public function updatecategory($id, $data)
    {
        $updatecategory = $id->update($data);
        return $updatecategory;
    }
    public function deletecategory($id)
    {
        $deletecategory = $id->delete();
        return $deletecategory;
    }
}
