<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Project::all();
        return view('dashboard.pages.portfolio.index', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.portfolio.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'type' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg|max:10240',
            'description' => 'required|min:3',
            'github' => 'required'
        ]);
        $validatedData['image'] = $request->file('image')->store('image/project');
        Project::create($validatedData);

        return redirect('/portfolio')->with('success', 'Insert Data Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('dashboard.pages.portfolio.edit', [
            'portfolio' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|min:3',
            'type' => 'required',
            'description' => 'required|min:3',
            'github' => 'required',
            'image' => 'image|mimes:jpg,jpeg|max:10240',
        ];

        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            $oldImage = Project::findOrFail($id);
            Storage::delete($oldImage->image);
            $validatedData['image'] = $request->file('image')->store('image/project');
        }

        Project::where('id', $id)->update($validatedData);

        return redirect('/portfolio')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        Storage::delete($project->image);
        Project::destroy($project->id);

        return redirect('/portfolio')->with('success', 'Post Berhasil Dihapus');
    }
}
