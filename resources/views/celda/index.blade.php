
<div class="container">
  
@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{ Session::get('mensaje')}}<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>

</div>
@endif

<a href="{{ url('celda/create') }}" class="btn btn-success">Asignar una celda</a>
<br>
<br>


<table class="table table-light">
   
    
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Numero</th>
                  
        </tr>
    </thead>


    <tbody>
        
        
        @foreach( $celdas as $celda)
        <tr>
            <td>{{ $celda->id }}</td>                       
            <td>{{ $celda->Numero }}</td>
            
                
                        
            <td>

              <a href="{{ url('/celda/'.$celda->id.'/edit') }}" class="btn btn-warning">                          
                Editar 
    
            </a>
            
            <form action="{{ url('/celda/'.$celda->id ) }}" class="d-inline" method="post">             
            @csrf
            {{ method_field('DELETE') }}  
            <input class="btn btn-danger" type="submit"  onclick="return confirm('¿Quieres borrar?')"
            value="Borrar">                  
            </form>

            </td>
        </tr>
       
        @endforeach

    </tbody>
</table>

{!! $celdas->links() !!}
</div>
