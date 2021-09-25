<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skills;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    


    public function index()
    {
        //display data 
        $skill = Skills::all();

        return view('pages.Skills')->with('skill', $skill);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.CreateSkill');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'description' => 'required|string',
            'year_skill_aquired' => 'required|'
        ]);

        $skill = Skills::create([
            'name' => $fields['name'],
            'category' => $fields['category'],
            'description' => $fields['description'],
            'year_skill_aquired' => $fields['year_skill_aquired']
        ]);

        return redirect('/skills');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show all details of one
        $item = Skills::find($id);

        return view('pages.ViewSkill')->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Skills::find($id);
        return view('pages.EditSkill')->with('item', $item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'description' => 'required|string',
            'year_skill_aquired' => 'required|'
        ]);
         
        $skill = Skills::find($id);
        $item = $request->update([
            'name' => $fields['name'],
            'category' => $fields['category'],
            'description' => $fields['description'],
            'year_skill_aquired' => $fields['year_skill_aquired']
        ]);

        return redirect('/skills');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skills::find($id);
        $skill->delete();
        return redirect('/skills');
    }
}
