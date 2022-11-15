<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\teachers;
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
        return Response()->json(['teachers'=>$maestros],200);
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
        $input = $request->all();
        teachers::create($input);

        return ('El maestro se creo con exito');
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
        return Response()->json($maestros,200);
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
        return ('El maestro se actualizo con exito');
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
        return ('El maestro se elimino de manera exitosa');
    }
}
