<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// 🔽 追加
use App\Models\Divelog;

class DivelogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divelogs = Divelog::with('user')->latest()->get();
        return response()->json($divelogs);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'divelog' => 'required|max:255',
          ]);
          $divelog = $request->user()->divelogs()->create($request->only('divelog'));
          return response()->json($divelog, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Divelog $divelog)
    {
        return response()->json($divelog);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Divelog $divelog)
    {
      $request->validate([
        'divelog' => 'required|string|max:255',
      ]);
  
      $divelog->update($request->all());
  
      return response()->json($divelog);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Divelog $divelog)
    {
        $divelog->delete();
        return response()->json(['message' => 'Divelog deleted successfully']);
    }
}
