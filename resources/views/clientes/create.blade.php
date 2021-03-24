@extends('layouts.argon')

@section('content')
<div class="row">
  <div class="col-xl-12 order-xl-1">
    <div class="card">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Nuevo Cliente</h3>
          </div>
          <div class="col-4 text-right">
            <a href="{{ route('clientes.index') }}" class="btn btn-sm btn-primary">Volver</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('clientes.store') }}" method="POST">
          @csrf
          <h6 class="heading-small text-muted mb-4">Informacion del cliente</h6>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="name">Nombre Completo</label>
                  <input type="text" id="" class="form-control" name="nombre" placeholder="Ingresa el nombre completo" value="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="email">Correo Electronico</label>
                  <input type="email" id="" name="email" class="form-control" placeholder="example@example.com">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="direccion">Direccion</label>
                  <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Av. Anahuac 1020, Jardines del Lago">
                </div>
              </div>
              <div class="col-lg-6">
                    <label class="form-control-label" for="fecha_nacimiento">Fecha de nacimiento</label>
                    <div class="form-inline">
                        <fieldset>
                            <select name="day" id="" class="form-control">
                                <option value="">DIA</option>
                                @foreach($days as $day )
                                    <option value="{{ $day }}">{{ $day }}</option>
                                @endforeach
                            </select>
                        </fieldset>
                        <fieldset>
                            <select name="month" id="" class="form-control">
                                    <option value="">MES</option>
                                    @foreach($months as $month)
                                        <option value="{{ $month }}">{{ $month }}</option>
                                    @endforeach
                            </select>
                        </fieldset>
                        <fieldset>
                            <select name="year" id="" class="form-control">
                                <option value="">AÑO</option>
                                @foreach($years as $year )
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endforeach
                            </select>
                        </fieldset>
                    </div>
                </div>

        </div>
        <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="telefono_1">Telefono principal</label>
                    <input type="text" id="phone-number" name="telefono_1" maxlength="14" class="form-control" placeholder="(686) 233-6598">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="telefono_2">Telefono Secundario</label>
                    <input type="text" id="phone-number2" name="telefono_2" maxlength="14" class="form-control" placeholder="(686) 265-9878">
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="refer_id">Medio de informacion</label>
                        <select class="form-control" name="refer_id">
                            @foreach($refers as $refer)
                                <option value="{{ $refer->id }}">{{ $refer->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="ocupacion">Ocupacion</label>
                      <input type="text" id="" name="ocupacion" class="form-control" placeholder="Empleado Estatal">
                    </div>
                  </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="ultima_visita">Ultima visita al dentista</label>
                      <input type="date" id="" name="ultima_visita" class="form-control" placeholder="10/01/2020">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Masculino">
                            <label class="form-check-label" for="inlineRadio1">Masculino</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Femenino">
                            <label class="form-check-label" for="inlineRadio2">Femenino</label>
                          </div>
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

@endsection

@section('scripts')
    <script src="/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

    <script>
    $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
        });
    </script>
    <script>
        $('#phone-number')

        .keydown(function (e) {
            var key = e.which || e.charCode || e.keyCode || 0;
            $phone = $(this);

        // Don't let them remove the starting '('
        if ($phone.val().length === 1 && (key === 8 || key === 46)) {
                $phone.val('(');
        return false;
            }
        // Reset if they highlight and type over first char.
        else if ($phone.val().charAt(0) !== '(') {
                $phone.val('('+String.fromCharCode(e.keyCode)+'');
            }

            // Auto-format- do not expose the mask as the user begins to type
            if (key !== 8 && key !== 9) {
                if ($phone.val().length === 4) {
                    $phone.val($phone.val() + ')');
                }
                if ($phone.val().length === 5) {
                    $phone.val($phone.val() + ' ');
                }
                if ($phone.val().length === 9) {
                    $phone.val($phone.val() + '-');
                }
            }

            // Allow numeric (and tab, backspace, delete) keys only
            return (key == 8 ||
                    key == 9 ||
                    key == 46 ||
                    (key >= 48 && key <= 57) ||
                    (key >= 96 && key <= 105));
        })

        .bind('focus click', function () {
            $phone = $(this);

            if ($phone.val().length === 0) {
                $phone.val('(');
            }
            else {
                var val = $phone.val();
                $phone.val('').val(val); // Ensure cursor remains at the end
            }
        })

        .blur(function () {
            $phone = $(this);

            if ($phone.val() === '(') {
                $phone.val('');
            }
        });

        $('#phone-number2')

        .keydown(function (e) {
            var key = e.which || e.charCode || e.keyCode || 0;
            $phone = $(this);

        // Don't let them remove the starting '('
        if ($phone.val().length === 1 && (key === 8 || key === 46)) {
                $phone.val('(');
        return false;
            }
        // Reset if they highlight and type over first char.
        else if ($phone.val().charAt(0) !== '(') {
                $phone.val('('+String.fromCharCode(e.keyCode)+'');
            }

            // Auto-format- do not expose the mask as the user begins to type
            if (key !== 8 && key !== 9) {
                if ($phone.val().length === 4) {
                    $phone.val($phone.val() + ')');
                }
                if ($phone.val().length === 5) {
                    $phone.val($phone.val() + ' ');
                }
                if ($phone.val().length === 9) {
                    $phone.val($phone.val() + '-');
                }
            }

            // Allow numeric (and tab, backspace, delete) keys only
            return (key == 8 ||
                    key == 9 ||
                    key == 46 ||
                    (key >= 48 && key <= 57) ||
                    (key >= 96 && key <= 105));
        })

        .bind('focus click', function () {
            $phone = $(this);

            if ($phone.val().length === 0) {
                $phone.val('(');
            }
            else {
                var val = $phone.val();
                $phone.val('').val(val); // Ensure cursor remains at the end
            }
        })

        .blur(function () {
            $phone = $(this);

            if ($phone.val() === '(') {
                $phone.val('');
            }
        });
    </script>

@endsection

