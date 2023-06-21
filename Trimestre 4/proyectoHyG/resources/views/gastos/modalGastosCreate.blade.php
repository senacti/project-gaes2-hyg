
  <!-- Modal -->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTRAR NUEVO GASTO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('gastos.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Fecha</label>
                    <input type="date"
                    class="form-control" name="fecha" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Descripcion</label>
                    <input type="text"
                    class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Valor</label>
                    <input type="number"
                    class="form-control" name="valor" id="" aria-describedby="helpId" placeholder="">
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
