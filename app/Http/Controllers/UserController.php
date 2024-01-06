<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\UserRepository\userinterface;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userinterface;

    public function __construct(userinterface $userinterface)
    {
        $this->userinterface = $userinterface;
    }

    public function add(Request $request)
    {

        try {
            $data = $request->validate(
                [
                    'name' => 'string|required',                   
                    'email' => 'string|required',
                    'password' => 'string|required',
                ]
            );

            $createdata = $this->userinterface->add($data);
            return response()->json(['data' => $createdata]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update(User $id, Request $request)
    {
        try {
            $data = $request->validate(
                [
                    'name' => 'string',
                    'email' => 'string',

                ]
            );

            $updatedata =  $this->userinterface->update($id, $data);
            return response()->json(['data' => $updatedata]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()],500);
        }
    }

    public function index()
    {
        try {
            $alldata = $this->userinterface->index();
            return response()->json(['data' => $alldata]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()],500);
        }
    }

    public function delete(User $id)
    {
        try {
            $deletedata = $this->userinterface->delete($id);
            return response()->json(['data' => $deletedata]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()],500);
        }
    }
}
