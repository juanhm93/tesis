<?php

namespace App\Http\Controllers;

use App\Models\Gerencia;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Http\Requests\InsertGerenciaHabRequest;

class GerenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gerencias = Gerencia::all();

        return view('gerenciahab.index',compact('gerencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gerenciahab.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertGerenciaHabRequest $request)
    {
        // dd($request->all());
        DB::table('gerencias')->insert([
            "siglas" => $request->input('siglas'), 
            "gerenciahabilitadora" => $request->input('gerenciashabilitadoras'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        
        return redirect()->route('gerenciashabilitadoras.index')->with('info','La gerencia habilitadora se creo satisfactoriamente');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gerencia  $gerencia
     * @return \Illuminate\Http\Response
     */
    public function show(Gerencia $gerencia)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gerencia  $gerencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Gerencia $gerencia, $id)
    {
        $gerencias  = Gerencia::findOrFail($id);
        
        return view('gerenciahab.edit', compact('gerencias'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gerencia  $gerencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gerencia $gerencia, $id)
    {
        
        
        DB::table('gerencias')->where('id',$id)->update([
            "siglas" => $request->input('siglas'), 
            "gerenciahabilitadora" => $request->input('gerenciashabilitadoras'),
            "updated_at" => Carbon::now()
        ]);
        
        
        return redirect()->route('gerenciashabilitadoras.index')->with('info','La gerencia habilitadora se actualizo satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gerencia  $gerencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gerencia $gerencia, $id)
    {
        Gerencia::destroy($id);

        return redirect()->route('gerenciashabilitadoras.index')->with('info','La gerencia habilitadora se elimino satisfactoriamente');
        
    }
}
