@extends('layouts.argon')

@section('content')
<div class="row">
  <div class="col-xl-12 order-xl-1">
    <div class="card">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Nueva Cita</h3>
          </div>
          <div class="col-4 text-right">
            <a href="{{ route('citas.index') }}" class="btn btn-sm btn-primary">Volver</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('citas.store') }}" method="POST">
          @csrf
          <h6 class="heading-small text-muted mb-4">Programar Cita</h6>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="nombre">Cliente</label>
                  <select  id="cliente" name="cliente_id" class="form-control" data-placeholder="Choose anything" data-allow-clear="1">
                    <option> Selecciona un cliente</option>
                    @foreach($clientes as $client)
                        <option value="{{ $client->id }}">{{ $client->id }} - {{ $client->nombre }}</option>
                    @endforeach
                </select>
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label" for="fecha">Fecha</label>
                    <input type="text" id="calendar" name="fecha" class="form-control" placeholder="10/01/2020">
                  </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label" for="horario">Horario</label>
                      <input type="text" id="time" name="horario" class="form-control">
                    </div>
                  </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="nombre">Medico Tratante</label>
                    <select  id="medico" name="medico_id" class="form-control" data-placeholder="Choose anything" data-allow-clear="1">
                    <option> Selecciona un medico</option>
                    @foreach($medicos as $medico)
                          <option value="{{ $medico->id }}">{{ $medico->nombre }}</option>
                    @endforeach
                  </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="fecha">Nota</label>
                    <input type="text" id="" name="nota" class="form-control" placeholder="Ingresa alguna nota o comentario">
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

<script>

    flatpickr('#calendar', {
        dateFormat: "d-m-Y",
        locale: "es",
    });
    flatpickr('#time', {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        minTime: "08:00",
        maxTime: "20:00",
    });

</script>
@endsection
