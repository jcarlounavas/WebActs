<?php

namespace App\Http\Controllers;

use App\Models\StudentActs;
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
