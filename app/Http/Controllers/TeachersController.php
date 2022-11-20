<?php

namespace App\Http\Controllers;

use App\Models\teachers;
use App\Models\subjects;
//use App\Http\Requests\StorestudentsRequest;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $maestros = teachers::all();
        //return $estudiantes;
        return view('teachers.index', compact ('maestros'));
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
        $grupos = subjects::all('id','name');
        return view('teachers.add', compact('asignaturas','grupos'));
        //return view('Students.add');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input=$request->all();
        teachers::create($input);
        return redirect('teachers')->with('message','Se ha creado correctamente al estudiante');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $maestros = teachers::find($id);
        //return $estudiantes;
        return view('teachers.show')->with('teachers',$maestros);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //$asignaturas = subjects::all($id);
        $maestros = teachers::find($id);
        return view('teachers.edit')->with('teachers', $maestros);
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
        //
        $maestros = teachers::findOrFail($id);
        $input=$request->all();
        $maestros->update($input);
        return redirect('teachers')->with('message','Se ha actualizado el registro correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $maestros = teachers::findOrFail($id);

        $maestros->delete();
        return redirect('teachers')->with('danger','se elimino correctamente el estudiante');
    }
}
