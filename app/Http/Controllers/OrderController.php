<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\OrderRepository\orderinterface;
use Exception;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderinterface;

    public function __construct(orderinterface $orderinterface)
    {
        $this->orderinterface = $orderinterface;
    }

    public function add(Request $request)
    {

        try {
            $data = $request->validate(
                [
                    'status' => 'required|string',
                    'reference_id' => 'integer',
                ]
            );

            $createdata = $this->orderinterface->add($data);
            return response()->json(['data' => $createdata]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function update(Orders $id, Request $request)
    {
        try {
            $data = $request->validate(
                [
                    'name' => 'required|string',
                    'description' => 'string',
                ]
            );

            $updatedata =  $this->orderinterface->update($id, $data);
            return response()->json(['data' => $updatedata]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function index()
    {
        try {
            $alldata = $this->orderinterface->index();
            return response()->json(['data' => $alldata]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function delete(Orders $id)
    {
        try {
            $deletedata = $this->orderinterface->delete($id);
            return response()->json(['data' => $deletedata]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
