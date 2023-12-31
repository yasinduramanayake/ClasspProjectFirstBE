<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table='orders';
    protected $primary_key='id';
 
    protected $fillable = [
     'status',
     'reference_id',
     'user_id',
    ];
}
