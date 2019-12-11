<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proyecto;

use App\Empleado;


use App\Http\Requests\validaciondeproyectos;

class Controlador_Proyectos_Con_Recursos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyecto=Proyecto::all();
        $empleado=Empleado::all();


        return view('proyectos.index',compact('proyecto','empleado'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validaciondeproyectos $request)
    {
        $proyecto=new Proyecto;
        $proyecto->nombre=$request->nombre;
        $proyecto->titulo=$request->titulo;
        $proyecto->fechainicio=$request->fechainicio;
        $proyecto->fechafin=$request->fechafin;
        $proyecto->horasestimadas=$request->horasestimadas;
        $proyecto->save();

        return redirect('proyectos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto=Proyecto::find($id);

        $empleado=Empleado::all();

        return view('proyectos.show',compact('proyecto','empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto=Proyecto::find($id);

        return view('proyectos.edit',compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validaciondeproyectos $request, $id)
    {
        $proyecto=Proyecto::find($id);

        $proyecto->update($request->all());


        return redirect('proyectos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyecto=Proyecto::find($id);

        $proyecto->delete();

        return redirect('proyectos');
    }
}
