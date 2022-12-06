<?php

namespace App\Http\Controllers;

use App\Models\teachers;
use App\Models\subjects;
use App\Models\groups;
//use App\Http\Requests\StorestudentsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $grupos = groups::all('id','name');
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
        //return "entre asl storasge";
        //$request->validate(['imagenes'=>'required | image | mimes:png,jpg,jpeg | max:248 ']);
        $imagen = new teachers ();
        //$imagen->name=$request->input('name');
        //$imagen->sexo=$request->input('sexo');
        //$imagen->edad=$request->input('edad');
        //$imagen->direccion=$request->input('direccion');
        //$imagen->telefono=$request->input('telefono');
        //$imagenes = $request->file('imagenes')->store('public/imagenes');
        //$url=Storage::url($imagenes);
        if ($request->hasfile('imagenes')){
            $file = $request->file('imagenes');
            $destinationpath = 'img/imagenes/';
            $fileName = time(). '-' . $file->getClientOriginalName();
            $uploadSucces = $request->file('imagenes')->move($destinationpath, $fileName);
            $imagen -> imagenes = $destinationpath . $fileName;
        }
            $imagen->sexo=$request->input('sexo');
            $imagen->name=$request->input('name');
            $imagen->edad=$request->input('edad');  
            $imagen->direccion=$request->input('direccion');
            $imagen->telefono=$request->input('telefono');
            $imagen->subject_id=$request->input('subject_id');
            $imagen->group_id=$request->input('group_id');
            
            $imagen->save();

        //
        //$request->validate(['imagenes'=>'required | image | mimes:png,jpg,jpeg | max:248 ']);
        //$fileName = time().'.'.$request->imagenes->extension();
        //$request->imagenes->move(public_path('imagenes'),$fileName);
        //return back()->with("sucess Imagen se subio con exito");
        //return ("Se subio con exito"); 
        //$input=$request->all();
        //teachers::create($input);
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
        //$maestros = teachers::all($id);
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
