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

<a href="{{ url('pago/create') }}" class="btn btn-success">Registrar nuevo Pago</a>
<br>
<br>
<a href="{{ url('ingreso/') }}" class="btn btn-success">Regresar</a>
<br>

<table class="table table-light">
   
    
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Medio de Pago</th>
            <th>Valor a Pagar</th>
            <th>Fecha de Pagos</th>
            <th>Vehiculo</th>
            

        </tr>
    </thead>


    <tbody>
                
        @foreach( $pagos as $pago)
        <tr>
            <td>{{ $pago->id }}</td>                                  
            <td>{{ $pago->medio_de_pago }}</td>
            <td>{{ $pago->valor_a_pagar }}</td>
            <td>{{ $pago->created_at }}</td>
            <td>{{ $pago->id_vehiculos }}</td>
          
                        
            <td>

              <a href="{{ url('/pago/'.$pago->id.'/edit') }}" class="btn btn-warning">                          
                Editar 
    
            </a>
            
            <form action="{{ url('/pago/'.$pago->id ) }}" class="d-inline" method="post">             
            @csrf

            {{ method_field('DELETE') }}  

            <input class="btn btn-danger" type="submit"  onclick="return confirm('¿Quieres borrar?')"
            value="Borrar">

            <a href="{{ url('/salida/') }}" class="btn btn-warning">                          
                Generar Recibo
            

            </td>
        </tr>
       
        @endforeach

    </tbody>
</table>


{!! $pagos->links() !!}
</div>

@endsection
