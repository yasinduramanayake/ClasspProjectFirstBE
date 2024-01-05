<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_product extends Model
{
    use HasFactory;
    protected $table = "order_products";
    protected $fillable = ['quantity', 'order_id', 'product_id'];
}
