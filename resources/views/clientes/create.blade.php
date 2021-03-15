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
          <div class="pl-lg-4">
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
                <div class="form-group">
                  <label class="form-control-label" for="fecha_nacimiento">Fecha de nacimiento</label>
                  <input type="date" id="" name="fecha_nacimiento" class="form-control" placeholder="27/04/1980">
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="telefono_1">Telefono principal</label>
                    <input type="text" id="telefono_1" name="telefono_1" class="form-control" placeholder="6862336598">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="telefono_2">Telefono Secundario</label>
                    <input type="text" id="" name="telefono_2" class="form-control" placeholder="6862659878">
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
</div>
@endsection

@section('scripts')
    <script src="/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

    <script>
    $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
        });
    </script>

@endsection

