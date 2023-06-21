
  <!-- Modal update -->

  <!-- Modal -->
  <div class="modal fade" id="edit{{$venta->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar Venta</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('ventas.update', $venta->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Fecha</label>
                    <input type="date"
                    class="form-control" name="fecha" id="" aria-describedby="helpId" placeholder="" value="{{$venta->fecha}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">producto</label>
                    <input type="text"
                    class="form-control" name="producto" id="" aria-describedby="helpId" placeholder="" value="{{$venta->producto}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">cantidad</label>
                    <input type="number"
                    class="form-control" name="cantidad" id="" aria-describedby="helpId" placeholder="" value="{{$venta->cantidad}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">precio</label>
                    <input type="number"
                    class="form-control" name="precio" id="" aria-describedby="helpId" placeholder="" value="{{$venta->precio}}">
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
    <div class="modal fade" id="delete{{$venta->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Registo Venta</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('ventas.destroy', $venta->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                Estas seguro de eliminar el registro de venta No<strong>{{$venta->id}}</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
