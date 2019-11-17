<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $solicitudes = Solicitud::all();
        $solicitudes = Solicitud::orderBy('id', 'desc')->paginate(10);
        return view('solicitudes.index')->with('solicitudes', $solicitudes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paginas.cliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'ahorros' => 'required',
            'precio' => 'required'
        ]);
        //Crea solicitud
        $solicitud = new Solicitud;
        $solicitud->nombre = $request->input('nombre');
        $solicitud->email = $request->input('email');
        $solicitud->telefono = $request->input('telefono');
        $solicitud->ahorros = $request->input('ahorros');
        $solicitud->precio = $request->input('precio');
        $solicitud->save();

        return redirect('/')->with('success', 'Solicitud generada, la procesara alguno de nuestros expertos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitud = Solicitud::find($id);

        return view('solicitudes.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
}
