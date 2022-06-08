
<div class="container">

<form action="{{ url('/celda') }}" method="post" enctype="multipart/form-data"> 
 @csrf
 @include('celda.form', ['modo'=>'Crear']);

</form>

</div>
