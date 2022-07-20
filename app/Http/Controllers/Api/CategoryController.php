<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return response()->json(['message' => 'Success', 'data' => $data], 201);
    }

    public function create(Request $request)
    {
        $data = [
            'name' => $request->name
        ];

        Category::create($data);
        return response()->json(['message' => 'Data Created Successfully'], 201);
    }

    public function show($id)
    {
        $data = Category::findOrFail($id);
        return response()->json(['message' => 'Success', 'data' => $data], 201);
    }

    public function edit($id, Request $request)
    {
        Category::findOrFail($id)->update(['name' => $request->name]);
        return response()->json(['message' => 'Data Updated'], 201);
    }
}
