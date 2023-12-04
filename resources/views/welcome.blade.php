@extends('layout.principal')
@section('tituloPagina', 'CRUD')



@section('contenido')
<div class="row">
    <div class="col">
        <h4>Lab 3</h4>
   <h5>Listado de personas</h5>
   <p>
    <a href="{{route('persona.create')}}" class="btn btn-primary">Agregar Nueva Persona</a>
   </p>
 
       
  
   <div class="table-responsive">
    <table class="table table-sm">
        <thead>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Fecha Nacimiento</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
<tbody>
    @foreach ($datos as $item)
    <tr>
        <td>{{$item->nombre. " ". $item->apellido}}</td>
        <td>{{$item->telefono}}</td>
        <td>{{$item->fecha_nac}}</td>
    </tr>
    @endforeach
</tbody>
    </table>
   </div>
  
    </div>
   
</div>
@endsection