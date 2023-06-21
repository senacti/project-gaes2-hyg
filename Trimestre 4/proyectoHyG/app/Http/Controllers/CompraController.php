<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $compras=Compra::all();
        return view('compras.indexCompras',compact('compras'));
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
        $compras = new Compra;
        $compras->fecha=$request->input('fecha');
        $compras->proveedor=$request->input('proveedor');
        $compras->producto=$request->input('producto');
        $compras->cantidad=$request->input('cantidad');
        $compras->precio=$request->input('precio');
        $compras->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Compra $compras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compra $compras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $compras=Compra::find($id);
        $compras->fecha=$request->input('fecha');
        $compras->producto=$request->input('proveedor');
        $compras->producto=$request->input('producto');
        $compras->cantidad=$request->input('cantidad');
        $compras->precio=$request->input('precio');
        $compras->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $compras=Compra::find($id);
        $compras->delete();
        return redirect()->back();
    }
}
