@extends('layouts.layouts')

@section('titulo', 'Evaluar')

@section('content')
<div class="container">
  <div class="card card-olive"> 
        <div class="card-header">
          <h3 class="card-title">MODULO I: Planeación estratégica</h3>
        </div>
              <!-- /.card-header -->
          <div class="card-body">
          <form role="form" method="POST" action="{{route('evaluacion.store')}}">
            {{ csrf_field() }}
                  <div class="form-row">
                      <div class="form-group col-md-12" data-toggle="modal" data-target="#ListadoPeriodos">
                          <label for="codigo_periodo">Periodos</label>
                          <input type="text" class="form-control" id="codigo_periodo" name="codigo_periodo" autocomplete="off"  required>
                      </div>
                  </div>
                  <div class="table-responsive">
                 <table class="table table-sm table-bordered">
                  <thead>
                    <tr>
                      <th rowspan="2" class="align-middle text-center">Item</th>
                      <th>Indicadores</th>
                      <th rowspan="2" class="align-middle text-center">Escoger</th>
                      <th rowspan="2" class="align-middle text-center">observacion</th>
                    </tr>
                    <tr>
                      <th class="table-info">Proceso</th>
                    </tr>
                  </thead>
                  <tbody>
                  @if ($items->count())

                        @foreach($items AS $item)
                  <tr>
                  <td >
                 
                  <input type="text" id='cod_item-{{ $loop->iteration }}' name="cod_item[]" value='{{ $item->codigo_item }}'>
                  </td>
                    <td>{{ $item->descripcion }}</td>
                    <td><select class="form-control" id='valor-{{ $loop->iteration }}' name="valor[]" required>
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select></td>
                    <td><textarea id='observacion-{{ $loop->iteration }}' name="observacion[]" required></textarea></td>
                  </tr>
                  @endforeach
                  @else
                  <tr>
                    <td colspan="8">No hay registros</td>
                  </tr>
                  @endif
                  </tbody>
                </table>
                </div>
            </div>
          <div class="card-footer text-right">
              <button type="submit" class="btn btn-outline-success"><i class="fas fa-save"></i> Guardar</button>
          </div>
        </div>
        </form>
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
    
    @include('evaluacion.modal_listar_periodos')

@endsection

@section('menu')
    @include('layouts.menu')
@endsection    

@section('script')
<script>
  $(document).ready(function()
    {
      $("#tabla_periodos").DataTable();

      $('#tabla_periodos').on('click', 'tr', function(event){
        codigo_periodo = $(this).find('td:first').html();
        $('#codigo_periodo').val(codigo_periodo);
      });
  });
</script>
@endsection