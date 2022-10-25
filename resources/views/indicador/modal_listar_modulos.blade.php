<div id="ListadoModulos" class="modal fade" role="dialog" style="overflow-y: scroll;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Escoger modulo</h4>
			</div>
			<div class="modal-body">
				<table id="tabla_modulos" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Codigo</th>
							<th>Nombre</th>
							<th>Seleccionar</th>
						</tr>
					</thead>
					<tbody>
						@foreach($modulos as $modulo)
						<tr>
							<td>{{$modulo->codigo}}</td>
							<td>{{$modulo->nombre }}</td>
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