        <!--UPDATE MODAL-->
        <div class="modal fade" id="ModalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
  
                  <h5 class="modal-title" id="exampleModalLabel">Actualizar Inidicador</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

              <form method="POST" action="{{ route('indicador.update','indicadores')}}">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="codigo_indicador" id="codigo_indicador" >
                    <div class="form-group">
                        <label>nombre indicador</label>
                        <input type="text" class="form-control" id="nombre_indicador" name="nombre_indicador" required>
                    </div>
                    <div class="form-group">
                        <label>codigo modulo</label>
                        <input type="text" class="form-control" id="codigo_modulo" name="codigo_modulo" disabled required>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-warning">Actualizar</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
              </form>
              </div>
            </div>
          </div>
          <!--FIN MODAL-->