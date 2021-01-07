<?php

namespace App\Http\Controllers;

use App\Models\TipoDispositivo;
use Illuminate\Http\Request;

class TipoDispositivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $td = TipoDispositivo::all();

        return view('dispositivos.tipoDispositivo')->with('td', $td);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dispositivos.td_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $td = new TipoDispositivo();
        $td->nombre = $request->get('nombre');
        $td->descripcion = $request->get('descripcion');
        $td->save();

        return redirect('/td')->with('created', 'ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoDispositivo  $tipoDispositivo
     * @return \Illuminate\Http\Response
     */
    public function show(TipoDispositivo $tipoDispositivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $td = TipoDispositivo::all()->find($id);

        return view('dispositivos.td_edit')->with('td', $td);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $td = TipoDispositivo::find($id);

        $td->nombre = $request->get('nombre');
        $td->descripcion = $request->get('descripcion');
        $td->save();

        return redirect('/td')->with('edited', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $td = TipoDispositivo::find($id);
        $td->delete();

        return redirect('/td')->with('delete', 'ok');

    }
}
