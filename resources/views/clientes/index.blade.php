@extends('layouts.argon')

@section('content')
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Clientes</h3>
          </div>
          <div class="col text-right">
            <a href="{{ route('clientes.create') }}" class="btn btn-sm btn-primary">Nuevo cliente</a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush" id="clientes-table">
          <thead class="thead-light">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">E-mail</th>
              <th scope="col">Edad</th>
              <th scope="col">Sexo</th>
              <th scope="col">Opciones</th>

              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($clientes as $cliente)
              <tr>
                <td scope="row">{{ $cliente->id }}</td>
                <td scope="row">{{ $cliente->nombre }}</td>
                <td>
                  <i class="bg-danger"></i>
                  <span class="status">{{ $cliente->email }}</span>
                </td>
                <td scope="row">{{ $cliente->age }}</td>
                <td scope="row">{{ $cliente->gender }}</td>
                <td>
                  <form action="{{ route('clientes.destroy', $cliente->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-sm btn-primary">Editar</a>
                  <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-sm btn-dark">Historia Clinica</a>
                  <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                </form>
                </td>
              </tr>
            @endforeach
          </tbody>
          <tbody></tbody>
          <tfoot>
            <tr>

            </tr>
            <tr>
              <td></td>
              <td>
                <select data-column="1" class="form-control filter-select">
                  <option value="">Select name</option>
                  @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->nombre }}">{{ $cliente->nombre }}</option>
                  @endforeach
                </select>
              </td>
              <td></td>
              <td></td>
            </tr>
          </tfoot>
        </table>
      </div>
      <div class="card-footer border-0">
        {{-- {{ $users->links() }} --}}
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')

@endsection
