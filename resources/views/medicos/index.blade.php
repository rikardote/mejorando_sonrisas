@extends('layouts.argon')

@section('content')
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Medicos</h3>
          </div>
          <div class="col text-right">
            <a href="{{ route('medicos.create') }}" class="btn btn-sm btn-primary">Nuevo Medico</a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush" id="user-table">
          <thead class="thead-light">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Opciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($medicos as $medico)
              <tr>
                <td scope="row">{{ $medico->id }}</td>
                <td scope="row">{{ $medico->nombre }}</td>
                <td>
                  <form action="{{ route('medicos.destroy', $medico->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <a href="{{ route('medicos.edit', $medico->id) }}" class="btn btn-sm btn-primary">Editar</a>
                  <a href="{{ route('medicos.show', $medico->id) }}" class="btn btn-sm btn-dark">Ver</a>
                  <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                </form>
                </td>
              </tr>
            @endforeach
          </tbody>
          <tbody></tbody>
          <tfoot>

              <td></td>

              <td></td>
              <td></td>
            </tr>
          </tfoot>
        </table>
      </div>
      <div class="card-footer border-0">

      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')

@endsection
