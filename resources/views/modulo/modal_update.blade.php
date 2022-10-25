        <!--UPDATE MODAL-->
        <div class="modal fade" id="ModalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
  
                  <h5 class="modal-title" id="exampleModalLabel">Actualizar Modulo</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

              <form method="POST" action="{{ route('modulo.update','modulo')}}">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="codigo" id="codigo" >
                    <div class="form-group">
                        <label>nombre del modulo</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
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