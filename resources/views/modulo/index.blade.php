@extends('layouts.layouts')

@section('titulo', 'Listado de modulos')

@section('content')

<div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre Modulo</th>
            <th scope="col"></th>
            <th scope="col"></th>            
          </tr>
        </thead>
        <tbody>
            @if ($modulos->count())
                @foreach($modulos AS $modulo)
          <tr>
            <td>{{ $modulo->codigo  }}</td>
            <td>{{ $modulo->nombre }}</td>
            <td><button class="btn btn-outline-warning" data-nombre="{{ $modulo->nombre }}" data-idpro="{{ $modulo->codigo }}" data-toggle="modal" data-target="#ModalEditar"><i class="fas fa-edit"></i> Editar</button></td>
            <td><button class="btn btn-outline-danger" data-nombre="{{ $modulo->nombre }}" data-idpro="{{ $modulo->codigo }}" data-toggle="modal" data-target="#ModalEliminar"><i class="fas fa-trash"></i> Eliminar</button></td>
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

@include('modulo.modal_update')
@include('modulo.modal_delete')

@endsection

@section('menu') 
    @include('layouts.menu')
@endsection  

@section('script')
    <script type="text/javascript">

        $('#ModalEditar').on('show.bs.modal' , function(event){
          var button = $(event.relatedTarget)
          var nombre = button.data('nombre')
          var idpro = button.data('idpro')
          var modal = $(this)
          modal.find('.modal-body #nombre').val(nombre);
          modal.find('.modal-body #codigo').val(idpro);
        })

        $('#ModalEliminar').on('show.bs.modal' , function(event){
          var button = $(event.relatedTarget)
          var idpro = button.data('idpro')
          var modal = $(this)
          modal.find('.modal-body #codigo').val(idpro);
        })
    </script>
@endsection
