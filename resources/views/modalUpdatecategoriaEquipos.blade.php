<div id="ModalActualizar" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Categoría De Equipos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form id="formUpdate" enctype="multipart/form-data" action="{{route('actualizarDatosJs')}}">
        
          <div class="modal-body">
          <input type="hidden" name="id" id="id">     

              <label for="">Nombre Categoría</label>
              <input class="form-control" type="text" name="nombreCategoriau" id="nombreCategoriau" required>   
              
          </div>

          <div class="modal-footer">
              <i id="loadingIconModalUpdate" class="fa fa-circle-o-notch fa-spin fa-fw" style="display:none;"></i>
              <button type="submit" class="btn btn-primary">Actualizar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          </div>

        </form>
    </div>
  </div>
</div>

