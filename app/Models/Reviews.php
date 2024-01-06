<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
<<<<<<< HEAD

   protected $primary_key = 'id';
   protected $table = 'reviews';

    protected $fillable = [
        'name',
        'email',
        'message',  
        'rating',
    ];

=======
    protected $table ="reviews";
    protected $fillable = ['name', 'message', 'email', 'rating'];
>>>>>>> origin/darshana
}
