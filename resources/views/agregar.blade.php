@extends('layout')

    @section('content')  
    <div class="container">
            
        <h2>CREAR REGISTROS</h2>

              <form action="{{ url('crear') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="" class="form-label">Código</label>
                  <input required id="codigo" name="codigo" type="text" class="form-control" tabindex="1">    
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Descripción</label>
                  <input required id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Cantidad</label>
                  <input required id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Precio</label>
                  <input required id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="3">
                </div>
                <a href="/registros" class="btn btn-secondary" tabindex="5">Cancelar</a>
                <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
              </form>
    </div>
    @endsection