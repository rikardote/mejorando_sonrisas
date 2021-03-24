@extends('layouts.argon')

@section('content')
<div class="row">
  <div class="col-xl-12 order-xl-1">
    <div class="card">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Modificar Cita</h3>
          </div>
          <div class="col-4 text-right">
            <a href="{{ route('citas.index') }}" class="btn btn-sm btn-primary">Volver</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('citas.update', $cita->id) }}" method="POST">
            @method('PUT')
            @csrf
          <h6 class="heading-small text-muted mb-4">Modificar Cita</h6>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="nombre">Cliente</label>
                  <select  id="cliente" name="cliente_id" class="form-control">
                    @foreach($clientes as $client)
                        <option value="{{ $client->id }}" {{ $cita->cliente_id == $client->id ? 'selected' : '' }} >{{ $client->id }} - {{ $client->nombre }}</option>
                    @endforeach
                </select>
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label" for="fecha">Fecha</label>
                    <input type="date" id="" name="fecha" class="form-control" placeholder="10/01/2020"  value="{{ $cita->fecha }}">
                  </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label" for="horario">Horario</label>
                      <input type="time" id="" name="horario" class="form-control" value="{{ $cita->horario }}">
                    </div>
                  </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="nombre">Medico Tratante</label>
                    <select  id="medico" name="medico_id" class="form-control">

                      @foreach($medicos as $medico)
                          <option value="{{ $medico->id }}" {{ $cita->medico_id == $medico->id ? 'selected' : '' }} >{{ $medico->nombre }}</option>
                      @endforeach
                  </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="fecha">Nota</label>
                    <input type="text" id="" name="nota" class="form-control" placeholder="Ingresa alguna nota o comentario" value="{{ $cita->nota }}">
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

@section('css')
<link rel="stylesheet" href="{{ asset('assets/vendor/select2/dist/css/select2.min.css') }}"
type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">

@endsection

@section('scripts')
    <script src="/assets/vendor/select2/dist/js/select2.full.min.js"></script>
    <script>
        $(function () {
        $('#cliente').each(function () {
            $(this).select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
            closeOnSelect: !$(this).attr('multiple'),
            });
        });
        });
    </script>
    <script>
        $(function () {
            $('#medico').each(function () {
                $(this).select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
                closeOnSelect: !$(this).attr('multiple'),
                });
            });
        });
    </script>
@endsection
