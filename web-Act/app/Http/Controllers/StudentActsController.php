<?php

namespace App\Http\Controllers;

use App\Models\StudentActs;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class StudentActsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $studs = StudentActs::all();
        return view('Components.display', compact('studs'));
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
        $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|email',
            'age' => 'required|numeric|min:1|max:100'
    ]);

    $addNew = new StudentActs();
    $addNew->name = $request->name;
    $addNew->email = $request->email;
    $addNew->age = $request->age;
    $addNew->save();

        
    return back()->with('message', 'A new Student added successfully!');

 
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentActs $studentActs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentActs $studentActs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentActs $studentActs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentActs $studentActs)
    {
        //
    }
}
