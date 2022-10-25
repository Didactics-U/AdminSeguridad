        <!--UPDATE MODAL-->
        <div class="modal fade" id="ModalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
  
                  <h5 class="modal-title" id="exampleModalLabel">Actualizar Item</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

              <form method="POST" action="{{ route('item.update','item')}}">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="codigo_item" id="codigo_item" >
                    <div class="form-group">
                        <label>Descripcion</label>
                        <textarea type="text" class="form-control" id="descripcion" name="descripcion" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Codigo indicador</label>
                        <input type="number" class="form-control" id="cod_indicador" name="cod_indicador" disabled required>
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