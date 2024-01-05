<?php

namespace App\Http\Controllers;

use App\CategoryRepository\categoryinterface;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryinterface;

    public function __construct(categoryinterface $categoryinterface)
    {
        $this->categoryinterface = $categoryinterface;
    }

    public function add(Request $request)
    {

        try {
            $data = $request->validate(
                [
                    'name' => 'required|string',
                    'description' => 'string',
                ]
            );

            $createdata = $this->categoryinterface->add($data);
            return response()->json(['data' => $createdata]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function update(Category $id, Request $request)
    {
        try {
            $data = $request->validate(
                [
                    'name' => 'required|string',
                    'description' => 'string',
                ]
            );

            $updatedata =  $this->categoryinterface->update($id, $data);
            return response()->json(['data' => $updatedata]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function index()
    {
        try {
            $alldata = $this->categoryinterface->index();
            return response()->json(['data' => $alldata]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function delete(Category $id)
    {
        try {
            $deletedata = $this->categoryinterface->delete($id);
            return response()->json(['data' => $deletedata]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
