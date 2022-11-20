<?php

namespace App\Http\Controllers;

use App\Models\subjects;
use illuminate\Http\Request;
use GuzzleHttp\Psr7\Response;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //cosulta loquente laravel
        $asignaturas = subjects::all();
        //return $asignaturas;
        return view('Subjects.index',compact('asignaturas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Subjects.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoresubjectsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asignaturas = new subjects();
        $asignaturas->name = $request->post('name');
        $asignaturas->description = $request->post('description');
        $asignaturas->save();
        return redirect('subjects.index')->with('message','Se ha creado correctamente la asignatura');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $asignaturas = subjects::find($id);
        //return  $asignaturas;
        return view('Subjects.show', compact('asignaturas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //  
        $asignaturas = subjects::find($id);
        //return $asignaturas;
        return view('Subjects.edit')->with('subjects', $asignaturas);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesubjectsRequest  $request
     * @param  \App\Models\subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $asignaturas = subjects::findOrFail($id);
        
        $input=$request->all();
        $asignaturas->update($input);
        return redirect('subject')->with('messageedit','Se actualizo correctamente la asignatura');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $asignaturas = subjects::findOrFail($id);
        $asignaturas->delete();
        return redirect('subjects')->with('danger','se eliminocorrectamente la asignatura');
    }
}
