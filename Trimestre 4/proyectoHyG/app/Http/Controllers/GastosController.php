<?php

namespace App\Http\Controllers;

use App\Models\Gastos;
use Illuminate\Http\Request;

class GastosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $gastos=Gastos::all();
        return view('gastos.indexGastos',compact('gastos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gastos = new Gastos;
        $gastos->fecha=$request->input('fecha');
        $gastos->descripcion=$request->input('descripcion');
        $gastos->valor=$request->input('valor');
        $gastos->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Gastos $gastos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gastos $gastos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $gastos=Gastos::find($id);
        $gastos->fecha=$request->input('fecha');
        $gastos->descripcion=$request->input('descripcion');
        $gastos->valor=$request->input('valor');
        $gastos->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gastos=Gastos::find($id);
        $gastos->delete();
        return redirect()->back();
    }
}
