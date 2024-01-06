<?php

namespace App\Helper;

use App\Models\Category;
use App\Models\Product;

class helper
{

    // protected $cat_arr=[];
    // protected $cat_obj;

    // protected $pro_arr=[];
    // protected $pro_obj;
    
    public static function insertCategories()
    {
        $obj = [
            [
                'name' => 'jhhbj',
                'description' => 'sfdsr'
            ],
            [
                'name' => 'jfgedsrg',
                'description' => 'sfdsrdfg'
            ],
            [
                'name' => 'jhhbjdfrg',
                'description' => 'sfdsrdfrg'
            ],
            [
                'name' => 'jhhbjfgbv',
                'description' => 'sfdsrfghb'
            ],
            [
                'name' => 'jhhbjfg',
                'description' => 'sfdsrfdtbgv'
            ]

        ];

        return ($obj);
    }

    // public static function insertCategories()
    // {
    //     $catogories = array(
    //         ['name' => 'Tv', 'description' => 'Smart Tv'],
    //         ['name' => 'Mobiles', 'description' => 'iPhone'],
    //         ['name' => 'Laptops', 'description' => 'OLED'],
    //         ['name' => 'Camera', 'description' => 'DSLR'],
    //     );
    //     $cat_arr = $catogories;

    //     $cat_obj = new Category();
    //     $cat_obj->insert($cat_arr);
    // }

    // public static function insertProducts()
    // {
    //     $products = array(
    //         ['name' => 'Sony', 'price' => '450000', 'description' => 'Smart Tv', 'imageurl' => 'testurl', 'category_id' => 1],
    //         ['name' => 'Samsung', 'price' => '350000', 'description' => 'Smart Tv', 'imageurl' => 'testurl', 'category_id' => 1],
    //         ['name' => 'Canon', 'price' => '50000', 'description' => 'Camera', 'imageurl' => 'testurl', 'category_id' => 4],
    //         ['name' => 'Apple', 'price' => '750000', 'description' => 'Phone', 'imageurl' => 'testurl', 'category_id' => 3],
    //     );
    //     $pro_arr = $products;

    //     $pro_obj = new Product();
    //     $pro_obj->insert($pro_arr);
    // }


    
}
