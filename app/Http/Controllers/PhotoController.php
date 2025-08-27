<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        dd('index call');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        dd(__FUNCTION__. ' call');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());

        
        //
        // dd(__FUNCTION__. ' call');
        info('name = '. $user->name);
        return response()->json([
            'status' => 'success',
            'message' => 'Photo created successfully',
            'data' => [
                'id' => rand(100, 999),
                'title' => $request->input('title', 'Sample Photo'),
                'url' => $request->input('url', 'https://picsum.photos/200/302'),
            ]
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        dd(__FUNCTION__. ' call');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    
    {
        //
        dd(__FUNCTION__. ' call');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        dd(__FUNCTION__. ' call');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        dd(__FUNCTION__. ' call');
    }
}
