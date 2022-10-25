<div id="ListadoPeriodos" class="modal fade" role="dialog" style="overflow-y: scroll;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Escoger Periodo</h4>
			</div>
			<div class="modal-body">
				<table id="tabla_periodos" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Codigo</th>
							<th>Fecha inicio</th>
							<th>Fecha fin</th>
							<th>Seleccionar</th>
						</tr>
					</thead>
					<tbody>
						@foreach($periodos as $periodo)
						<tr>
							<td>{{$periodo->codigo_periodo }}</td>
							<td>{{$periodo->fecha_inicio }}</td>
							<td>{{$periodo->fecha_fin }}</td>
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