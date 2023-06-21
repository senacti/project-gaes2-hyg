
  <!-- Modal update -->

  <!-- Modal -->
  <div class="modal fade" id="edit{{$compra->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar Venta</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        {{-- esto es para ejecutar el metodo update del controlador usando el id --}}
        <form action="{{route('compras.update', $compra->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Fecha</label>
                    <input type="date"
                    class="form-control" name="fecha" id="" aria-describedby="helpId" placeholder="" value="{{$compra->fecha}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">proveedor</label>
                    <input type="text"
                    class="form-control" name="producto" id="" aria-describedby="helpId" placeholder="" value="{{$compra->producto}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">producto</label>
                    <input type="text"
                    class="form-control" name="producto" id="" aria-describedby="helpId" placeholder="" value="{{$compra->producto}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">cantidad</label>
                    <input type="number"
                    class="form-control" name="cantidad" id="" aria-describedby="helpId" placeholder="" value="{{$compra->cantidad}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">precio</label>
                    <input type="number"
                    class="form-control" name="precio" id="" aria-describedby="helpId" placeholder="" value="{{$compra->precio}}">
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

  <!-- Modal delete-->
    <div class="modal fade" id="delete{{$compra->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Registo Venta</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('compras.destroy', $compra->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                Estas seguro de eliminar el registro de la compra No<strong>{{$compra->id}}</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
