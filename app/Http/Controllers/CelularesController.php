<?php

namespace App\Http\Controllers;
use App\Models\Celulare;

use Illuminate\Http\Request;

class CelularesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $celulares = Celulare::get();

        return view('index', compact('celulares'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Celulare::create([
            'marca_id'=> request('marca_id'),
            'Modelo'=> request('Modelo'),
            'Precio'=>request('Precio'),
            'Almacenamiento'=>request('Almacenamiento'),
            'Ram'=>request('Ram'),
            'Expandible'=>request('Expandible'),
            'Pantalla'=>request('Pantalla'),
            'Resolucion'=>request('Resolucion'),
            'Bateria'=>request('Bateria'),
            'Procesador'=>request('Procesador'),
            'Nucleos'=>request('Nucleos'),
            'Camaras'=>request('Camaras'),
            'SO'=>request('SO'),
            'Colores'=>request('Colores'),
            'Foto'=>request('Foto')->store('public')    

        ]);
        return redirect()->route('Marcas.index');  
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
    }

    public function select($id){
        return celulares::where('Marca',"=",$id)->get();
    }

    public function Categorias(Celulare $id){
        $categorias = Celulare::get();
        return view('home', compact($categorias));

    }
}
