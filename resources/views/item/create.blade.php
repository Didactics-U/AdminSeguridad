@extends('layouts.layouts')

@section('titulo', 'Registro Item')

@section('content')

<div class="container">
  <div class="row center-block">
    <div class="col-xs-12 col-md-8 mx-auto">
      <div class="card">
          <div class="card-header text-center">
              <h4>Agregar Item</h4>
          </div>
          <div class="card-body">
          <form role="form" method="POST" action="{{route('item.store')}}">
            {{ csrf_field() }}
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label>Descripcion</label>
                          <textarea type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" required></textarea>
                      </div>
                      <div class="form-group col-md-6" data-toggle="modal" data-target="#ListadoIndicadores">
                          <label for="cod_indicador">Indicador</label>
                          <input type="number" class="form-control" id="cod_indicador" name="cod_indicador" autocomplete="off" readonly="readonly" required>
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
    
    @include('item.modal_listar_indicadores')
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
      $("#tabla_indicadores").DataTable();

      $('#tabla_indicadores').on('click', 'tr', function(event){
        cod_indicador = $(this).find('td:first').html();
        $('#cod_indicador').val(cod_indicador);
      });
  });
</script>
@endsection