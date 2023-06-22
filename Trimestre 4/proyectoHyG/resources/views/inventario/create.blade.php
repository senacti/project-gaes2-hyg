
  <!-- Modal -->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">EDITAR PRODUCTO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('RInventario.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                <label for="" class="form-label">Nombre del producto</label>
                <input type="text"
                    class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Cantidad</label>
                    <input type="number"
                    class="form-control" name="cantidad" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Valor unitario</label>
                <input type="number"
                    class="form-control" name="Valor" id="" aria-describedby="helpId" placeholder="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
