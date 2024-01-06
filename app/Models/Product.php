<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
<<<<<<< HEAD

  
    protected $table = 'products';
    protected $primary_key= 'id';


    Protected $fillable = ['name','price','description','imageurl','category_id'];
=======
    protected $table ="products";
    protected $fillable = ['name', 'price', 'description', 'imageurl'];
>>>>>>> origin/darshana
}
