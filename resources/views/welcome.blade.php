@extends('layouts.layouts')
@section('titulo', 'Bienvenido Adminseguridad')
@section('content')
<div class="container">
	<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <ul class="list-unstyled">
                  <blockquote class="quote-secondary">
                  <p>Los datos que se solicitan son estrictamente confidenciales y en ningún caso tienen fines fiscales ni pueden utilizarse como prueba</p>
                </blockquote>
                  <li>Instrucciones para su diligenciamiento:
                    <ul>
                      <li>A continuación se presenta el cuestionario que indaga por los factores identificados como determinantes  de la competitividad de las de las áreas y subáreas en las empresas prestadoras del servicio integral oncológico.</li>
                      <li>Lea detenidamente las preguntas y responda de acuerdo con las características de su empresa, organización o institución; considerando una escala de 1 a 5 donde:</li>
                      <div class="table-responsive">
                      <table class="table table-sm table-bordered">
                      <thead>
                        <tr>
                          <td class="text-center">0 <br>No existe</td>
                          <td class="text-center">1 <br>Existe</td>
                          <td class="text-center">2 <br>En proceso de documentación</td>
                          <td class="text-center">3 <br>Documentado</td>
                          <td class="text-center">4 <br>Documentado y difundido</td>
                          <td class="text-center">5 <br>Documentado, difundido y actualizado</td>
                        </tr>
                      </thead>
                      </table>
                      </div>
                      <li>Cualquier inquietud, no dude en consultar antes de responder.</li>
                    </ul>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
  {{-- row --}}
	</div>
  <a role="button" class="btn btn-outline-success btn-lg btn-block" href='{{route('modulo.create')}}'>Diligenciar</a>
{{-- container --}}
</div>
@endsection

@section('menu')
    @include('layouts.menu')
@endsection    