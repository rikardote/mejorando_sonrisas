@extends('layouts.argon')

@section('content')
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Citas</h3>
          </div>
          <div class="col text-right">
            <a href="{{ route('citas.create') }}" class="btn btn-sm btn-primary">Programar Citas</a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush" id="user-table">
          <thead class="thead-light">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Cliente</th>
              <th scope="col">Fecha</th>
              <th scope="col">Horario</th>
              <th scope="col">Medico tratante</th>
              <th scope="col">Opciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($citas as $cita)
              <tr>
                <td scope="row">{{ $cita->id }}</td>
                <td scope="row">{{ $cita->cliente->nombre }}</td>
                <td scope="row">{{ $cita->fechadmy }}</td>
                <td scope="row">{{ $cita->horario }}</td>
                <td scope="row">{{ $cita->medico->nombre }}</td>
                <td>
                  <form action="{{ route('citas.destroy', $cita->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <a href="{{ route('citas.edit', $cita->id) }}" class="btn btn-sm btn-primary">Editar</a>
                  <a href="{{ route('clientes.show', $cita->cliente_id) }}" class="btn btn-sm btn-dark">Historia Clinica</a>
                  <a href="{{ route('citas.show', $cita->id) }}" class="btn btn-sm btn-warning">Iniciar Consulta</a>
                  <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')


@endsection
