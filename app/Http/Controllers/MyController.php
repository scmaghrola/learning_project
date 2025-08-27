<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo " Display a listing of the resource.";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "Show the form for creating a new resource.";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "Store a newly created resource in storage.";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         echo "Display the specified resource. id= $id";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo "Show the form for editing the specified resource. id = $id";
    }
    
    /**
     * Update the specified resource in storage.
    */
    public function update(Request $request, string $id)
    {
        //
        echo "Update the specified resource in storage. id = $id";
    }
    
    /**
     * Remove the specified resource from storage.
    */
    public function destroy(string $id)
    {
        //
        echo "Remove the specified resource from storage. id = $id";
    }
}
