<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;

class OrderController extends Controller
{
    public function store(Request $request){
        $data=$request->validate(
            [
                'status' => 'required',
                'reference_id' => 'required',
                'user_id' => 'required'
            ]
            );
    
          $createddata= Orders::create($data);
          return response()->json(['data'=>$createddata]);
      }
}
