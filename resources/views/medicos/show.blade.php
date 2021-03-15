@extends('layouts.argon')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="mb-0">Detalles Medicos</h3>
  </div>
  <div class="card-body">
    <div class="mb-2">
      <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <th> ID </th>
            <td> {{ $medico->id }} </td>
          </tr>
          <tr>
            <th> Nombre </th>
            <td> {{ $medico->nombre }} </td>
          </tr>

        </tbody>
      </table>
    </div>
    <a class="btn btn-sm btn-default" href="{{ route('medicos.index') }}">Volver</a>
  </div>
</div>
@endsection
