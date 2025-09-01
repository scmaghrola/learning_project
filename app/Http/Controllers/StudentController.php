<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       $students = Student::find(101);
        
       echo "<pre>";
       print_r($students->toArray());
       echo "</pre>";
    //    exit;

        // $studentData = [
        //     'name' => 'Subhash Maghrola',
        //     'email' => 'subhash.maghrola13@example.com',
        //     'age' => "1990-06-01",
        //     'address' => 'Maghrola, India',
        //     'phone' => '9876543210',
        //     'course' => 'MCA',
        //     'enrollment_date' => now(),
        // ];
        // // Example: Create a new student record
        // $student = Student::create($studentData);

        // echo "<pre>";
        // print_r($student);
        // echo "</pre>";
        // // exit;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
    public function destroy(string $id)
    {
        //
    }
}
