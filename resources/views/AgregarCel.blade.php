@extends('plantilla')

@section('content')

<div class="container blue lighten-2">
    <div class="container text-center p-3 mt-5">
        <h2>Agrega un Nuevo Celular</h2>
    </div>

    
    <div class="container blue lighten-5 mt-5">
        <form method="POST" action="{{route('celular.store')}}" enctype="multipart/form-data">
            @csrf
        <div class="modal-body mx-3"> 
            <select id="marca_id" class="browser-default custom-select" name="marca_id">
                <option selected>Selecciona la Marca</option>
                @foreach ($marcas as $MarcaItem)
                <option value='{{$MarcaItem->id}}'>{{$MarcaItem->Marca}}</option> 
                @endforeach 
            </select>
    
            <div class="md-form mb-5">
                <i class="fas fa-mobile-alt prefix grey-text"></i>
                <input type="text" id="orangeForm-email" value="1" class="form-control validate" name="Modelo">
                <label data-error="wrong" data-success="right" for="orangeForm-email">Modelo</label>
            </div>
    
            <div class="md-form mb-5">
                <i class="fas fa-money-bill-alt prefix grey-text"></i>
                <input type="number" id="orangeForm-email" value="1" class="form-control validate" name="Precio">
                <label data-error="wrong" data-success="right" for="orangeForm-email">Precio</label>
            </div>
    
            <div class="md-form mb-5">
                <i class="fas fa-sd-card  prefix grey-text"></i>
                <input type="number" id="orangeForm-email" value="1" class="form-control validate" name="Almacenamiento">
                <label data-error="wrong" data-success="right" for="orangeForm-email">Almacenamiento</label>
            </div>
    
            <div class="md-form mb-5">
                <i class="fas fa-memory prefix grey-text"></i>
                <input type="number" id="orangeForm-email" value="1" class="form-control validate" name="Ram">
                <label data-error="wrong" data-success="right" for="orangeForm-email">Ram</label>
            </div>
    
            <div class="md-form mb-5">
                <i class="fas fa-sd-card  prefix grey-text"></i>
                <input type="number" id="orangeForm-email" value="1" class="form-control validate" name="Expandible">
                <label data-error="wrong" data-success="right" for="orangeForm-email">Memoria Expandible</label>
            </div>
            
            <div class="md-form mb-5">
                <i class="fas fa-tablet prefix grey-text"></i>
                <input type="number" id="orangeForm-email" value="1" class="form-control validate" name="Pantalla">
                <label data-error="wrong" data-success="right" for="orangeForm-email">Pantalla</label>
            </div>
    
            <div class="md-form mb-5">
                <i class="fas fa-tablet-alt prefix grey-text"></i>
                <input type="number" id="orangeForm-email" value="1" class="form-control validate" name="Resolucion">
                <label data-error="wrong" data-success="right" for="orangeForm-email">Resolucion</label>
            </div>
    
            <div class="md-form mb-5">
                <i class="fas fa-battery-three-quarters prefix grey-text"></i>
                <input type="text" id="orangeForm-email" value="1" class="form-control validate" name="Bateria">
                <label data-error="wrong" data-success="right" for="orangeForm-email">Bateria</label>
            </div>
    
            <div class="md-form mb-5">
                <i class="fas fa-microchip prefix grey-text"></i>
                <input type="text" id="orangeForm-email" value="1" class="form-control validate" name="Procesador">
                <label data-error="wrong" data-success="right" for="orangeForm-email">Procesador</label>
            </div>
    
            <div class="md-form mb-5">
                <i class="fas fa-microchip prefix grey-text"></i>
                <input type="number" id="orangeForm-email" value="1" class="form-control validate" name="Nucleos">
                <label data-error="wrong" data-success="right" for="orangeForm-email">Nucleos</label>
            </div>
    
            <div class="md-form mb-5">
                <i class="fas fa-camera prefix grey-text"></i>
                <input type="number" id="orangeForm-email" value="1" class="form-control validate" name="Camaras">
                <label data-error="wrong" data-success="right" for="orangeForm-email">Camaras</label>
            </div>
    
            <div class="md-form mb-5">
                <i class="fab fa-android prefix grey-text"></i>
                <input type="number" id="orangeForm-email" value="1" class="form-control validate" name="SO">
                <label data-error="wrong" data-success="right" for="orangeForm-email">S.O.</label>
            </div>
    
            <div class="md-form mb-5">
                <i class="fas fa-palette prefix grey-text"></i>
                <input type="text" id="orangeForm-email" class="form-control validate" name="Colores">
                <label data-error="wrong" data-success="right" for="orangeForm-email">Colores</label>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                <input type="file" class="custom-file-input" name="Foto"  id="inputGroupFile01"
                    aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
    
    
        </div>
        <div class="modal-footer d-flex justify-content-center">
            <button type="submit" class="btn btn-deep-orange">Agregar</button>
        </div>
        </form> 
    
    </div>
        
</div>

@endsection