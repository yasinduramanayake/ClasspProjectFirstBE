<?php

namespace App\Helper;

use App\Models\Category;
use App\Models\order_product;
use App\Models\Orders;
use App\Models\Product;
use App\Models\User;

class helper
{

    protected $cat_arr = [];
    protected $cat_obj;

    protected $pro_arr = [];
    protected $pro_obj;

    protected $usr_arr = [];
    protected $usr_obj;

    protected $odr_arr = [];
    protected $odr_obj;

    protected $odr_pro_arr = [];
    protected $odr_pro_obj;

    public static function insertCategories()
    {
        $catogories = array(
            ['name' => 'Tv', 'description' => 'Smart Tv'],
            ['name' => 'Mobiles', 'description' => 'iPhone'],
            ['name' => 'Laptops', 'description' => 'OLED'],
            ['name' => 'Camera', 'description' => 'DSLR'],
        );
        $cat_arr = $catogories;

        $cat_obj = new Category();
        $cat_obj->insert($cat_arr);
    }

    public static function insertProducts()
    {
        $products = array(
            ['name' => 'Sony', 'price' => '450000', 'description' => 'Smart Tv', 'imageurl' => 'testurl', 'category_id' => 1],
            ['name' => 'Samsung', 'price' => '350000', 'description' => 'Smart Tv', 'imageurl' => 'testurl', 'category_id' => 1],
            ['name' => 'Canon', 'price' => '50000', 'description' => 'Camera', 'imageurl' => 'testurl', 'category_id' => 5],
            ['name' => 'Apple', 'price' => '750000', 'description' => 'Phone', 'imageurl' => 'testurl', 'category_id' => 3],
        );
        $pro_arr = $products;

        $pro_obj = new Product();
        $pro_obj->insert($pro_arr);
    }

    public static function insertUsers()
    {
        $users = array(
            ['name' => 'Darshana', 'email' => 'darshana5125@gmail.com', 'password' => '123'],
            ['name' => 'John', 'email' => 'john@gmail.com', 'password' => '123'],
            ['name' => 'Tim', 'email' => 'tim@gmail.com', 'password' => '123'],

        );
        $usr_arr = $users;

        $usr_obj = new User();
        $usr_obj->insert($usr_arr);
    }

    public static function insertOrders()
    {
        $orders = array(
            ['status' => 'Pending', 'reference_id' => '001', 'user_id' => 1],
            ['status' => 'Pending', 'reference_id' => '002', 'user_id' => 1],
            ['status' => 'Shipped', 'reference_id' => '003', 'user_id' => 2],

        );
        $odr_arr = $orders;

        $odr_obj = new Orders();
        $odr_obj->insert($odr_arr);
    }

    public static function insertOrderProducts()
    {
        $order_products = array(
            ['quantity' => '2', 'order_id' => '1', 'product_id' => 3],
            ['quantity' => '4', 'order_id' => '1', 'product_id' => 4],
            ['quantity' => '2', 'order_id' => '2', 'product_id' => 3],
            ['quantity' => '4', 'order_id' => '2', 'product_id' => 5],
            ['quantity' => '1', 'order_id' => '3', 'product_id' => 4],
            ['quantity' => '1', 'order_id' => '2', 'product_id' => 6],

        );
        $odr_pro_arr = $order_products;

        $odr_pro_obj = new order_product();
        $odr_pro_obj->insert($odr_pro_arr);
    }


}
