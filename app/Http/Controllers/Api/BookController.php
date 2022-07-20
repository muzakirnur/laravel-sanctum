<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $data = Book::with('category')->paginate(10);
        return response()->json(['message' => 'success', 'data' => $data], 201);
    }

    public function create(Request $request)
    {
        $data = Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
        ]);

        return response()->json(['message' => 'Data Created', 'data' => $data], 201);
    }

    public function show($id)
    {
        $data = Book::findOrFail($id);
        return response()->json(['message' => 'Success', 'data' => $data], 201);
    }

    public function update($id, Request $request)
    {
        Book::findOrFail($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
        ]);

        return response()->json(['message' => 'Data Updated'], 201);
    }
}
