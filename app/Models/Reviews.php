<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

   protected $primary_key = 'id';
   protected $table = 'reviews';

    protected $fillable = [
        'name',
        'email',
        'message',  
        'rating',
    ];

}
