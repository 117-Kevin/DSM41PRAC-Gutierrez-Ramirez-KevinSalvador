<?php

namespace App\Http\Controllers;

use App\Models\students;
use App\Models\subjects;
use App\Http\Requests\StorestudentsRequest;
use illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = students::all();
        //return $estudiantes;
        return view('Students.index', compact ('estudiantes'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $asignaturas = subjects::all('id','name');
        return view('Students.add', compact('asignaturas'));
        //return view('Students.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorestudentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input=$request->all();
        students::create($input);
        return redirect('students')->with('message','Se ha creado correctamente al estudiante');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $estudiantes = students::find($id);
        //return $estudiantes;
        return view('Students.show')->with('students',$estudiantes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //$asignaturas = subjects::all($id);
        $estudiantes = students::find($id);
        return view('Students.edit')->with('students',$estudiantes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatestudentsRequest  $request
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $estudiantes = students::findOrFail($id);
        $input=$request->all();
        $estudiantes->update($input);
        return redirect('students')->with('message','Se ha actualizado el registro correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $estudiantes = students::findOrFail($id);

        $estudiantes->delete();
        return redirect('students')->with('danger','se elimino correctamente el estudiante');
    }
}
