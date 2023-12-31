<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======

  
    protected $table = 'products';
    protected $primary_key= 'id';


    Protected $fillable = ['name','price','description','imageurl','category_id'];
>>>>>>> 7eab8903f3c052f913d1d76be0ec41b5afff2e5f
}
