<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Inventario;
use Illuminate\Http\Request;


class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos=Inventario::all();
        return view('inventario.index',compact('productos'));
        return view('inventario.inventario',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function pdf (){
        
        $home = Inventario::all();
        $pdf = Pdf::loadView('inventario.pdf', compact('inventario'));
        return $pdf->stream();
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productos = new Inventario;
        $productos->nombre=$request->input('nombre');
        $productos->cantidad=$request->input('cantidad');
        $productos->precio_unit=$request->input('Valor');
        $productos->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventario $inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $productos=Inventario::find($id);
        // return view(producto)
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $productos=Inventario::find($id);
        $productos->nombre=$request->input('nombre');
        $productos->cantidad=$request->input('cantidad');
        $productos->precio_unit=$request->input('Valor');
        $productos->update();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $productos=Inventario::find($id);
        $productos->delete();
        return redirect()->back();
    }
}
