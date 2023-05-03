<?php

namespace App\Http\Controllers;

use App\Models\notas;
use App\Models\temas;
use Illuminate\Http\Request;

class notasControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $usuario_id =auth()->id();
        $notas = notas::where('id_users',$usuario_id)->get();
        return view('notas.index',compact('notas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        //
        $temas=temas::all();
        return view('notas.create', compact('temas'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
     
        $usuario_id =auth()->id();

        $nota= new notas;
        $nota-> palabrasC=$request->Palabras_clave;
        $nota-> resumen=$request->Resumen;
        $nota-> contenido=$request->Contenido;
        $nota-> id_users=$usuario_id;
        $nota-> id_temas=$request->temas;
        $nota-> save();
        return redirect()->route('notas.index')->with('success','Nota Creada');




    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $nota= notas::find($id);
        return view('notas.show',compact('nota'));  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $nota=notas::find($id);
        $temas=temas::all();
        return view('notas.edit', compact('nota','temas'));

       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
         $nota=notas::find($id);
         $usuario_id =auth()->id();

         $temas = temas::where('nombre',$request->temas)
            ->first();

         $nota-> palabrasC=$request->Palabras_clave;
         $nota-> resumen=$request->Resumen;
         $nota-> contenido=$request->Contenido;
         $nota-> id_temas=$request->temas;
         $nota-> save();
         return redirect()->route('notas.index')->with('success','Nota Creada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $nota=notas::find($id);
        $nota->delete();
        return redirect()->route('notas.index');

       
    }
}
