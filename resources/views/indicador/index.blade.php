@extends('layouts.layouts')

@section('titulo', 'Listado de indicadores')

@section('content')

<div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre indicador</th>
            <th scope="col">Nombre modulo</th>
            <th scope="col"></th>
            <th scope="col"></th>            
          </tr>
        </thead>
        <tbody>
            @if ($indicadors->count())
                @foreach($indicadors AS $indicador)
          <tr>
            <td>{{ $indicador->codigo_indicador }}</td>
            <td>{{ $indicador->nombre_indicador }}</td>
            <td>{{ $indicador->modulo->nombre }}</td>
            <td><button class="btn btn-outline-warning" data-nombre_indicador="{{ $indicador->nombre_indicador }}" data-codigo_modulo="{{ $indicador->codigo_modulo }}" data-idpro="{{ $indicador->codigo_indicador }}" data-toggle="modal" data-target="#ModalEditar"><i class="fas fa-edit"></i> Editar</button></td>
            <td><button class="btn btn-outline-danger" data-nombre_indicador="{{ $indicador->nombre_indicador }}" data-idpro="{{ $indicador->codigo_indicador }}" data-toggle="modal" data-target="#ModalEliminar"><i class="fas fa-trash"></i> Eliminar</button></td>
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

@include('indicador.modal_update')
@include('indicador.modal_delete')

@endsection

@section('menu') 
    @include('layouts.menu')
@endsection  

@section('script')
    <script type="text/javascript">

        $('#ModalEditar').on('show.bs.modal' , function(event){
          var button = $(event.relatedTarget)
          var nombre_indicador = button.data('nombre_indicador')
          var codigo_modulo  = button.data('codigo_modulo')
          var idpro = button.data('idpro')
          var modal = $(this)
          modal.find('.modal-body #nombre_indicador').val(nombre_indicador);
          modal.find('.modal-body #codigo_modulo').val(codigo_modulo);
          modal.find('.modal-body #codigo_indicador').val(idpro);
        })

        $('#ModalEliminar').on('show.bs.modal' , function(event){
          var button = $(event.relatedTarget)
          var idpro = button.data('idpro')
          var modal = $(this)
          modal.find('.modal-body #codigo_indicador').val(idpro);
        })
    </script>
@endsection
