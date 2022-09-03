<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skills;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skills::all();
        $portfolio = Project::all();
        return view('home', compact('skills', 'portfolio'));
    }
}
