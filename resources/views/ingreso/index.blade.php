@extends('layouts.app')

@section('content')

<!doctype html>

<div class="container">
<html lang="en">
  <head>
    

  </head>
  
  <body>
    
      <div class="container">

    
      </div>
      

      <div class="container">
      

             <form class="container-fluid center-content-start">                     

             <div class="row w-100">
               <div class="col">
              <a href="{{ url('vehiculo/') }}" class="btn btn-outline-success me-2 center-block">Registrar nuevo vehiculo</a>
              <a href="{{ url('pago/') }}" class="btn btn-outline-success me-2 center-block">Registrar pago</a>   
                 
          <img src="storage/img/Parking.png" class="img-responsive img-thumbnail mx-auto d-block"     width="350" class="my-4">        
      
            


      </div>
          
         

          
          
             </div>

             </form>

      </div>

  </body>
 
</html>

</div>
@endsection