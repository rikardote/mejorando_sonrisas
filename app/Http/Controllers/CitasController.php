<?php

namespace App\Http\Controllers;

use App\Cita;
use App\Medico;
use App\Cliente;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Cita::with('cliente', 'medico')->get();
        //dd($citas);
        return view('citas.index', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        $medicos = Medico::all();

        return view('citas.create', compact('clientes', 'medicos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cita = $request->all();
        $cita['fecha'] = Carbon::createFromFormat('d-m-Y', $cita['fecha']);
        Cita::create($cita);
        toastr()->success('Cita programada exitosamente');


        return redirect()->route('citas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cita = Cita::findOrFail($id);
        $clientes = Cliente::all();
        $medicos = Medico::all();

        return view('citas.edit', compact('clientes', 'cita', 'medicos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $cita = Cita::findOrFail($id);
        $input = $request->only('fecha', 'horario', 'medico_id', 'cliente_id', 'nota');
        $cita->fill($input);

        $cita->save();
        //toastr()->info('Cita modificada exitosamente!');
        Alert::success('Excelente', 'Cita modificada exitosamente');
        return redirect()->route('citas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cita = Cita::findOrFail($id);
        $cita->delete();
        toastr()->warning('Cita eliminada exitosamente!');
        return redirect()->back();
    }
}
