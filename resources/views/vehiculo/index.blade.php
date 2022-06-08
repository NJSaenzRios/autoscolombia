@extends('layouts.app')

@section('content')
<div class="container">

  
@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{ Session::get('mensaje')}}<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>

</div>
@endif

<a href="{{ url('vehiculo/create') }}" class="btn btn-success">Registrar nuevo vehiculo</a>
<br>
<br>
<a href="{{ url('ingreso/') }}" class="btn btn-success">Regresar</a>
<br>
<br>

<table class="table table-light">
   
    
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Foto</th>
            <th>Placa</th>
            <th>Color</th>
            <th>Marca</th>
            <th>Propieatario</th>            
            <th>Celular</th>
            <th>Descripcion</th>
            <th>Celda</th>
            <th>Fecha de ingreso</th>
            <th>Fecha de salida</th>
            
        </tr>
    </thead>


    <tbody>
        
        
        @foreach( $vehiculos as $vehiculo)
        <tr>
            <td>{{ $vehiculo->id }}</td>
            
            <td>
            <img class="img-thumnail img-fluid" src="{{ asset('storage').'/'.$vehiculo->Foto }}" alt="">
            </td>
            
            <td>{{ $vehiculo->Placa }}</td>
            <td>{{ $vehiculo->Color }}</td>
            <td>{{ $vehiculo->Marca }}</td>
            <td>{{ $vehiculo->Propietario }}</td>
            <td>{{ $vehiculo->Celular }}</td>
            <td>{{ $vehiculo->Descripcion }}</td>
            <td>{{ $vehiculo->id_celdas }}</td>
            <td>{{ $vehiculo->created_at }}</td>
            <td>{{ $vehiculo->updated_at }}</td>
            <td>

              <a href="{{ url('/vehiculo/'.$vehiculo->id.'/edit') }}" class="btn btn-warning">                          
              Editar    
              </a>
            <br>
            <br>

            <form action="{{ url('/vehiculo/'.$vehiculo->id ) }}" class="d-inline" method="post">             
            @csrf
            {{ method_field('DELETE') }}  
            <input class="btn btn-danger" type="submit"  onclick="return confirm('¿Quieres borrar?')"
            value="Borrar">

            </td>
        </tr>
       
        @endforeach

    </tbody>
</table>

{!! $vehiculos->links() !!}
</div>
@endsection
