<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primary_key= 'id';


    Protected $fillable = ['name','price','description','imageurl','category_id'];

    public function category(){
      return  $this->belongsTo('App\Models\Category' , 'category_id','id');
    }

}
