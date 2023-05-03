<?php

namespace App\Http\Controllers;

use App\Models\recordatorios;
use Illuminate\Http\Request;
use App\Models\temas;

class recordatoriosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $usuario_id =auth()->id();
        $recordatorio = recordatorios::where('id_users',$usuario_id)->get();
        return view('recordatorios.index',compact('recordatorio'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $temas=temas::all();
        return view('recordatorios.create',compact('temas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $usuario_id =auth()->id();


        $recordatorio= new recordatorios;
        $recordatorio-> fecha=$request->Fecha;
        $recordatorio-> recordatorio=$request->Recordatorio;
        $recordatorio-> importancia=$request->Importancia;
        $recordatorio-> id_users=$usuario_id;
        $recordatorio->id_temas=$request->temas;
        $recordatorio-> save();
        return redirect()->route('recordatorios.index')->with('success','recordatorio Creada');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $recordatorio= recordatorios::find($id);
        return view('recordatorios.show',compact('recordatorio')); 

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $recordatorio=recordatorios::find($id);
        $temas=temas::all();
        return view('recordatorios.edit', compact('recordatorio','temas'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $recordatorio=recordatorios::find($id);
        $usuario_id =auth()->id();

        $temas = temas::where('nombre',$request->temas)
           ->first();

        $recordatorio-> fecha=$request->Fecha;
        $recordatorio-> recordatorio=$request->Recordatorio;
        $recordatorio-> importancia=$request->Importancia;
        $recordatorio-> id_temas=$request->temas;
        $recordatorio-> save();
        return redirect()->route('recordatorios.index')->with('success','Nota Creada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $recordatorio=recordatorios::find($id);
        $recordatorio->delete();
        return redirect()->route('recordatorios.index');


    }
}
