<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;
use App\ReviewRepository\reviewinterface;
use Exception;

class ReviewController extends Controller
{
    protected $reviewinterface;

    public function __construct(reviewinterface $reviewinterface)
    {
        $this->reviewinterface =  $reviewinterface;
    }

    public function add(Request $request)
    {

        try {
            $data = $request->validate(
                [
                    'name' => 'string',
                    'message' => 'string',
                    'email' => 'string',
                    'rating' => 'integer',
                ]
            );

            $createdata = $this->reviewinterface->add($data);
            return response()->json(['data' => $createdata]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update(Reviews $id, Request $request)
    {
        try {
            $data = $request->validate(
                [
                    'name' => 'string',
                    'message' => 'string',
                    'email' => 'string',
                    'rating' => 'integer',
                ]
            );

            $updatedata =  $this->reviewinterface->update($id, $data);
            return response()->json(['data' => $updatedata]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()],500);
        }
    }

    public function index()
    {
        try {
            $alldata = $this->reviewinterface->index();
            return response()->json(['data' => $alldata]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()],500);
        }
    }

    public function delete(Reviews $id)
    {
        try {
            $deletedata = $this->reviewinterface->delete($id);
            return response()->json(['data' => $deletedata]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()],500);
        }
    }
}
