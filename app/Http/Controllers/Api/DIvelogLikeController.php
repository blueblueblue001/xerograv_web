<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Divelog;
use Illuminate\Http\Request;

class DIvelogLikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Divelog $divelog)
    {
      $divelog->liked()->attach(auth()->id());
      return response()->json(['message' => 'Divelog liked successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Divelog $divelog)
    {
      $divelog->liked()->detach(auth()->id());
      return response()->json(['message' => 'Divelog disliked successfully']);
    }
}
