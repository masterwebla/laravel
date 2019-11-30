<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;

class ServiciosController extends Controller
{
    //Función para listar los servicios
    public function index()
    {
        $servicios = Servicio::all();
        return view('servicios.index',compact('servicios'));
    }

    //Función para mostrar el formulario para crear un servicio
    public function create()
    {
        return view('servicios.crear');
    }

    //Función para guardar el servicio
    public function store(Request $request)
    {
        //Validar los campos
        $request->validate([
            'nombre'=>'required|unique:servicios|max:255',
            'descripcion'=>'required'
        ]);

        //Insertar los campos en la Base de Datos
        Servicio::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion
        ]);

        //Redireccionar al usuario al listado de servicios
        return redirect()->route('servicios.index');
    }

    //Función para mostrar toda la información de un Servicio
    public function show($id)
    {
        //
    }

    //Función para abrir el formulario de edición
    public function edit($id)
    {
        //
    }

    //Función para actualizar el servicio
    public function update(Request $request, $id)
    {
        //
    }

    //Función para borrar un registro
    public function destroy($id)
    {
        //
    }
}
