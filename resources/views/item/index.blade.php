@extends('layouts.layouts')

@section('titulo', 'Listado de items')

@section('content')

<div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Descripcion Item</th>
            <th scope="col">Indicador</th>
            <th scope="col"></th>
            <th scope="col"></th>            
          </tr>
        </thead>
        <tbody>
            @if ($items->count())
                @foreach($items AS $item)
          <tr>
            <td>{{ $item->codigo_item }}</td>
            <td>{{ $item->descripcion }}</td>
            <td>{{ $item->indicadores->nombre_indicador }}</td>
            <td><button class="btn btn-outline-warning" data-descripcion="{{ $item->descripcion }}" data-cod_indicador="{{ $item->cod_indicador }}" data-idpro="{{ $item->codigo_item }}" data-toggle="modal" data-target="#ModalEditar"><i class="fas fa-edit"></i> Editar</button></td>
            <td><button class="btn btn-outline-danger" data-descripcion="{{ $item->descripcion }}" data-idpro="{{ $item->codigo_item }}" data-toggle="modal" data-target="#ModalEliminar"><i class="fas fa-trash"></i> Eliminar</button></td>
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

@include('item.modal_update')
@include('item.modal_delete')

@endsection

@section('menu') 
    @include('layouts.menu')
@endsection  

@section('script')
    <script type="text/javascript">

        $('#ModalEditar').on('show.bs.modal' , function(event){
          var button = $(event.relatedTarget)
          var descripcion = button.data('descripcion')
          var cod_indicador  = button.data('cod_indicador')
          var idpro = button.data('idpro')
          var modal = $(this)
          modal.find('.modal-body #descripcion').val(descripcion);
          modal.find('.modal-body #cod_indicador').val(cod_indicador);
          modal.find('.modal-body #codigo_item').val(idpro);
        })

        $('#ModalEliminar').on('show.bs.modal' , function(event){
          var button = $(event.relatedTarget)
          var idpro = button.data('idpro')
          var modal = $(this)
          modal.find('.modal-body #codigo_item').val(idpro);
        })
    </script>
@endsection
