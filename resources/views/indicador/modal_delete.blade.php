        <!--UPDATE MODAL-->
        <div class="modal fade" id="ModalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
  
                  <h5 class="modal-title" id="exampleModalLabel">¿Estas seguro?</h5>
                  <button type="button" class="close" id="myButton" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

              <form method="POST" action="{{ route('indicador.destroy','indicador')}}">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="codigo_indicador" id="codigo_indicador" >
                </div>
                <div class="modal-footer">
                  <button type="submit" onclick="focusMethod()" class="btn btn-danger">Eliminar</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
              </form>
              </div>
            </div>
          </div>
          <!--FIN MODAL-->