<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

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
        return view('dashboard.pages.skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.skills.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => "required|unique:skills|max:255",
            'percent' => "required|integer|min:0|max:100",
        ]);
        Skills::create($validatedData);

        return redirect('/skills')->with('success', "Insert Data Berhasil");
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
    public function edit($id)
    {
        $skill = Skills::findOrFail($id);
        return view('dashboard.pages.skills.edit', compact(['skill']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests $request
     * @param  \App\Models\skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => "required|max:255",
            'percent' => "required|integer|min:0|max:100",
        ]);

        Skills::where('id', $id)->update($validatedData);
        return redirect('/skills')->with('success', 'Data Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Skills::destroy($id);
        return redirect('/skills')->with('success', 'Data Berhasil Dihapus');
    }
}
