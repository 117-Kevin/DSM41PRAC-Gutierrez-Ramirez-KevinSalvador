<?php

namespace App\Http\Controllers;

use App\Models\groups;
use App\Models\students;
//use App\Http\Requests\StoregroupsRequest;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //cosulta eloquent laravel
      $grupos = groups::all();
      //return $grupos;
      return view('Groups.index', compact ('grupos'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $estudiantes = students::all('id','name');
        return view('Groups.add', compact('estudiantes'));
        //return view('Groups.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoregroupsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input=$request->all();
        groups::create($input);
        return redirect('groups')->with('message','Se ha creado correctamente el grupo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $grupos = groups::find($id);
        //return $grupos;
        return view('Groups.show', compact ('grupos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $grupos = groups::findOrFail($id);
        return view('Groups.edit')->with('groups', $grupos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategroupsRequest  $request
     * @param  \App\Models\groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $grupos = groups::findOrFail($id);

        $input=$request->all();
        $grupos->update($input);
        return redirect('groups')->with('messageedit','Se ha actualizado correctamente el grupo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $grupos = groups::findOrFail($id);
        $grupos->delete();
        return redirect('groups')->with('danger','se elimino correctamente el grupo');
    }
}
