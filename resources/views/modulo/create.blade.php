@extends('layouts.layouts')

@section('titulo', 'Registro Modulo')

@section('content')

<div class="container">
  <div class="row center-block">
    <div class="col-xs-12 col-md-8 mx-auto">
      <div class="card">
          <div class="card-header text-center">
              <h4>Agregar Modulo</h4>
          </div>
          <div class="card-body">
          <form role="form" method="POST" action="{{route('modulo.store')}}">
            {{ csrf_field() }}
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label>Nombre del modulo</label>
                          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre modulo" required>
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