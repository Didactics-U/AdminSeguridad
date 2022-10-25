<div id="ListadoIndicadores" class="modal fade" role="dialog" style="overflow-y: scroll;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Escoger Indicador</h4>
			</div>
			<div class="modal-body">
				<table id="tabla_indicadores" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Codigo</th>
							<th>Nombre</th>
							<th>codigo modulo</th>
							<th>Seleccionar</th>
						</tr>
					</thead>
					<tbody>
						@foreach($indicadors as $indicador)
						<tr>
							<td>{{$indicador->codigo_indicador }}</td>
							<td>{{$indicador->nombre_indicador }}</td>
							<td>{{$indicador->codigo_modulo }}</td>
							<td class="text-center">
								<a href="#" data-dismiss="modal" class="btn btn-info btn-sm">Escoger</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>			
		</div>
	</div>
</div>