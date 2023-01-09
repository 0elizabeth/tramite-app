<?php

namespace App\Http\Controllers;

use App\Models\Tdocumento;
use Illuminate\Http\Request;

class TdocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tdocumentos = Tdocumento::all();
        return view('Documentos.tdocumentos.index', compact('tdocumentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Tdocumentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tdocumento = new Tdocumento();
        $tdocumento->nombre = $request->nombre;
        $tdocumento->save();
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tdocumento = Tdocumento::findOrFaild($id);
        return view('Tdocumento.edit', compact('tdocumento'));
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
        $tdocumento = Tdocumento::findOrFaild($id);
        $tdocumento->nombre = $request->nombre;
        $tdocumento-> update();
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
        $tdocumento = Tdocumento::findOrFaild($id);
        $tdocumento->delete();
    }
}
