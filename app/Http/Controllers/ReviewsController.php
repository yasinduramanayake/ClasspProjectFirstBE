<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{

    // add user review from the user side
    public function store(Request $request)
    {
        $data =  $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'message' => 'required',
                'rating' => 'required',
            ]
        );
        $response =    Reviews::create($data);

        return response()->json([
            'data' => $response
        ]);
    }

    // get all review for admin

    public function index()
    {
        $reviews =  Reviews::all();

        return response()->json([
            'data' => $reviews
        ]);
    }
}
