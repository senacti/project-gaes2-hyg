
  <!-- Modal -->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTRAR NUEVA COMPRA</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('compras.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Fecha</label>
                    <input type="date"
                    class="form-control" name="fecha" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">proveedor</label>
                    <input type="text"
                    class="form-control" name="proveedor" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">producto</label>
                    <input type="text"
                    class="form-control" name="producto" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">cantidad</label>
                    <input type="number"
                    class="form-control" name="cantidad" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">precio</label>
                    <input type="number"
                    class="form-control" name="precio" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>

        </form>
      </div>
    </div>
  </div>
