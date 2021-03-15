@extends('layouts.argon')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="mb-0">Detalles del cliente</h3>
  </div>
  <div class="card-body">
    <div class="mb-2">
      <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <th> ID </th>
            <td> {{ $cliente->id }} </td>
          </tr>
          <tr>
            <th> Nombre </th>
            <td> {{ $cliente->nombre }} </td>
          </tr>
          <tr>
            <th> E-mail </th>
            <td> {{ $cliente->email }} </td>
          </tr>
          <tr>
            <th> Direccion </th>
            <td> {{ $cliente->direccion }} </td>
          </tr>
          <tr>
            <th> Telefono Principal </th>
            <td> {{ $cliente->telefono_1 }} </td>
          </tr>
          <tr>
            <th> Telefono Secundario </th>
            <td> {{ $cliente->telefono_2 }} </td>
          </tr>
          <tr>
            <th> Fecha de Nacimiento </th>
            <td> {{ $cliente->nacimiento }} </td>
          </tr>
          <tr>
            <th> Sexo </th>
            <td> {{ $cliente->gender }} </td>
          </tr>
          <tr>
            <th> Ocupacion </th>
            <td> {{ $cliente->ocupacion }} </td>
          </tr>

        </tbody>
      </table>
    </div>
    <a class="btn btn-sm btn-default" href="{{ route('clientes.index') }}">Volver</a>
  </div>
</div>
@endsection
