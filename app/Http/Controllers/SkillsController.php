<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use App\Http\Requests\StoreskillsRequest;
use App\Http\Requests\UpdateskillsRequest;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skills::all();
        return view('home', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreskillsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreskillsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function show(skills $skills)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function edit(skills $skills)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateskillsRequest  $request
     * @param  \App\Models\skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateskillsRequest $request, skills $skills)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function destroy(skills $skills)
    {
        //
    }
}
