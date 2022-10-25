@extends('layouts.layouts')

@section('titulo', 'Registro Indicadores')

@section('content')

<div class="container">
  <div class="row center-block">
    <div class="col-xs-12 col-md-8 mx-auto">
      <div class="card">
          <div class="card-header text-center">
              <h4>Agregar Indicadores</h4>
          </div>
          <div class="card-body">
          <form role="form" method="POST" action="{{route('indicador.store')}}">
            {{ csrf_field() }}
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label>Nombre indicador</label>
                          <input type="text" class="form-control" id="nombre_indicador" name="nombre_indicador" placeholder="nombre indicador" required>
                      </div>
                      <div class="form-group col-md-6" data-toggle="modal" data-target="#ListadoModulos">
                          <label for="codigo_modulo">Codigo modulos</label>
                          <input type="number" class="form-control" id="codigo_modulo" name="codigo_modulo" autocomplete="off" readonly="readonly" required>
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
    
    @include('indicador.modal_listar_modulos')
  </div>
</div>

@endsection

@section('menu')
    @include('layouts.menu')
@endsection    

@section('script')
<script>
  $(document).ready(function()
    {
      $("#tabla_modulos").DataTable();

      $('#tabla_modulos').on('click', 'tr', function(event){
        codigo_modulo = $(this).find('td:first').html();
        $('#codigo_modulo').val(codigo_modulo);
      });
  });
</script>
@endsection