<?php

namespace App\Http\Controllers;

use App\Refer;
use App\Cliente;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        //$names = $user->sortBy('name')->pluck('name')->unique();
        //$emails = $user->sortBy('email')->pluck('email')->unique();
        return view('clientes.index', compact('clientes'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $refers = Refer::all();
        for($y = date('Y'); $y >= date('Y', strtotime('-100 years')); $y--){
            $years[$y] = $y;
        }
        $calendarInfo = cal_info(CAL_GREGORIAN);
        $months = array_combine(range(1, count($calendarInfo['months'])), $calendarInfo['months']);
         /*for($m = 1; $m <= 12; $m++){
            $months[$m] = str_pad($m, 2, 0, STR_PAD_LEFT);
        }*/
        for($d = 1; $d <= 31; $d++){
            $days[$d] = str_pad($d, 2, 0, STR_PAD_LEFT);
        }

        return view('clientes.create', compact('refers', 'years', 'months', 'days'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = $request->all();
        $cliente['fecha'] = $cliente['day'].'-'.$cliente['month'].'-'.$cliente['year'];
        $cliente['fecha_nacimiento'] = Carbon::createFromFormat('d-m-Y', $cliente['fecha']);
        Cliente::create($cliente);
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::with('historia_clinica')->findOrFail($id);
        //dd($cliente);
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        $refers = Refer::all();
        return view('clientes.edit', compact('cliente', 'refers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $input = $request->only('nombre', 'email', 'direccion', 'telefono_1', 'telefono_2', 'fecha_nacimiento', 'ocupacion');
        $cliente->fill($input);
        // dd($user);
        $cliente->save();
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->back();
    }
}
