<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;
use App\ReviewRepositary\ReporitaryInterface;
use Exception;

class ReviewsController extends Controller
{
    protected $repositaryinterface;

    public function __construct(ReporitaryInterface $repositaryinterface)
    {
        $this->repositaryinterface = $repositaryinterface;
    }

    // add user review from the user side
    public function store(Request $request)
    {
        $data =  $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'message' => 'required',
                'rating' => 'required|integer',
            ]
        );

        try {
            $response =  $this->repositaryinterface->store($data);

            return response()->json([
                'data' => $response
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // get all review for admin

    public function index()
    {
        try {
            $response =  $this->repositaryinterface->index();
            return response()->json([
                'data' =>  $response
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update(Reviews $id, Request $request)
    {

        $data =  $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'message' => 'required',
                'rating' => 'required|integer',
            ]
        );
        try {
            $response =  $this->repositaryinterface->update($id,   $data);
            return response()->json([
                'data' =>  $response
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy(Reviews $id)
    {
        try {
            $this->repositaryinterface->delete($id);
            return response()->json([
                'data' =>  'Deleted'
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
