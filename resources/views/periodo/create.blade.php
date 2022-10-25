@extends('layouts.layouts')

@section('titulo', 'Registro Periodo')

@section('content')

<div class="container">
  <div class="row center-block">
    <div class="col-xs-12 col-md-8 mx-auto">
      <div class="card">
          <div class="card-header text-center">
              <h4>Agregar Periodo</h4>
          </div>
          <div class="card-body">
          <form role="form" method="POST" action="{{route('periodo.store')}}">
            {{ csrf_field() }}
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label>fecha inicio</label>
                          <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
                      </div>
                      <div class="form-group col-md-6">
                          <label>Fecha fin</label>
                          <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
                      </div>
                  </div>
          </div>
          <div class="card-footer text-right">
              <button type="submit" class="btn btn-outline-success"><i class="fas fa-save"></i> Guardar</button>
          </div>
        </form>
      </div>
    </div>   
    @if (notify()->ready())
    <script>
        swal({
            title: "{!! notify()->message() !!}",
            text: "{!! notify()->option('text') !!}",
            icon: "{{ notify()->type() }}",
            @if (notify()->option('timer'))
                timer: {{ notify()->option('timer') }},
                showConfirmButton: false
            @endif
        });
    </script>
    @endif
  </div>
</div>

@endsection

@section('menu')
    @include('layouts.menu')
@endsection    