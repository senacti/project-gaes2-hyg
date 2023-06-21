
  <!-- Modal update -->

  <!-- Modal -->
  <div class="modal fade" id="edit{{$gasto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar Venta</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        {{-- esto es para ejecutar el metodo update del controlador usando el id --}}
        <form action="{{route('gastos.update', $gasto->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Fecha</label>
                    <input type="date"
                    class="form-control" name="fecha" id="" aria-describedby="helpId" placeholder="" value="{{$gasto->fecha}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Descripcion</label>
                    <input type="text"
                    class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="" value="{{$gasto->descripcion}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Valor</label>
                    <input type="decimal"
                    class="form-control" name="valor" id="" aria-describedby="helpId" placeholder="" value="{{$gasto->valor}}">
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
    <div class="modal fade" id="delete{{$gasto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Registo Venta</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('gastos.destroy', $gasto->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                Estas seguro de eliminar el registro de la compra No<strong>{{$gasto->id}}</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
