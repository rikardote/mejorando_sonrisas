@extends('layouts.argon')

@section('content')
<div class="row">
  <div class="col-xl-12 order-xl-1">
    <div class="card">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Editar informacion de Medicos</h3>
          </div>
          <div class="col-4 text-right">
            <a href="{{ route('medicos.index') }}" class="btn btn-sm btn-primary">Volver</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('medicos.update', $medico->id) }}" method="POST">
            @method('PUT')
            @csrf
          <h6 class="heading-small text-muted mb-4">informacion de Medicos</h6>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="nombre">Nombre</label>
                  <input type="text" id="" class="form-control" name="nombre" placeholder="Ingresa el nombre" value=" {{ $medico->nombre }} ">
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <button class="btn btn-sm btn-success">Guardar</button>
                </div>
              </div>
            </div>
          </div>
          <hr class="my-4" />

        </form>
      </div>
    </div>
  </div>
</div>
@endsection
