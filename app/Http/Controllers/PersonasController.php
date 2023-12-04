<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     * Mostrar la página de inicio
     */
    public function index()
    {
       // $nombre='Liseth Poma';
       $datos=Personas::all();
       return view('welcome', compact('datos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     * muestra un formulario para agregar un nuevo registro
     */
    public function create()
    {
        return "Aqui puedes agregar";
    }

    /**
     * Store a newly created resource in storage.
     * Guarda los datos a la bdd
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * obtener un registro espeifico de la tabla
     */
    public function show(Personas $personas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * mostrar los datos que se van a editar en el formulario
     */
    public function edit(Personas $personas)
    {
        return "Aqui puedes editar";
    }

    /**
     * Update the specified resource in storage.
     * actualizar los datos en la base
     */
    public function update(Request $request, Personas $personas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * eliminar un registro de la base de datos
     */
    public function destroy(Personas $personas)
    {
        //
    }
}
