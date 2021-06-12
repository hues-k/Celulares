@extends('plantilla')
  
@section('content')
<div class="container">
  <h2 class="text-center mt-5 font-weight-bold text-light mb-5">COMPARALO</h2>
  
</div>
<div class="container my-3">
  <div class="row">
    <div class="col-4">
      <div> 
       <select id="Marca" class="browser-default custom-select">
        <option selected>Selecciona una Marca</option>
        @foreach ( $telefonos as $item)
       
       <option value='{{$item->id}}' >{{$item->Marca}}</option>   
       @endforeach 
      
      
       
     </select>
   </div>
 
   <div class="mt-2">
     <select id="Modelo" class="browser-default custom-select">
     
     </select>
   </div>


    <div class="card mt-5 z-depth-1-half">
      <img class="card-img-top" src="img/redmi.png">
      
    </div>

    <div class="card mt-2 z-depth-2">
      <div class="card-body">
        <h2 class="text-center">Redmi 9T</h2>
        <i class="fas fa-camera"> Camara de 48 mpx</i>

        
      </div>
      
    </div>
  </div>

  <div class="col-4">
    <div> 
      <select class="browser-default custom-select">

     <option selected>Selecciona la Marca</option>
     @foreach ( $telefonos as $item)
       
     <option value='{{$item->id}}'' >{{$item->Marca}}</option>   
     @endforeach 
    
     
   </select>
 </div>

 <div class="mt-2">
   <select class="browser-default custom-select">
    <option selected>Selecciona la Modelo</option>
    {{-- @foreach ($celulares as $item)
    <option value="1">{{$item->Modelo}}</option> 
    @endforeach --}}
   </select>
 </div>

    <div class="card mt-5 z-depth-1-half">
      <img class="card-img-top" src="img/redmi.png">
      
    </div>

    <div class="card mt-2 z-depth-2">
      <div class="card-body">
     
          <h2 class="text-center"></h2>    
        
       
        <i class="fas fa-camera"> Camara de 48 mpx</i>   
      </div>
      
    </div>
  </div>

  <div class="col-4">
    <div> 
      <select class="browser-default custom-select">
     <option selected>Selecciona la Marca</option>
     @foreach ( $telefonos as $item)
       
     <option value='{{$item->id}}' >{{$item->Marca}}</option>   
     @endforeach 
    
     
   </select>
 </div>

 <div class="mt-2">
   <select class="browser-default custom-select">
    <option selected>Selecciona la Modelo</option>
    {{-- @foreach ($celulares as $item)
    <option value="1">{{$item->Modelo}}</option> 
    @endforeach --}}
   </select>
 </div>
    <div class="card mt-5 z-depth-1-half">
      <img class="card-img-top" src="img/redmi.png">
      
    </div>

    <div class="card mt-2 z-depth-2">
      <div class="card-body">
        <h2 class="text-center">Redmi 9T</h2>
        <i class="fas fa-camera"> Camara de 48 mpx</i>

        
      </div>
      
    </div>
  </div>

    
  </div>


    
</div>

<div class="text-center">

  <a href="{{route('Marcas.index')}}" class="btn btn-default btn-rounded mb-4" >Agregar</a>
</div>')

@endsection