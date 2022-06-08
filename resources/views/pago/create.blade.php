
<div class="container">

<form action="{{ url('/pago') }}" method="post" enctype="multipart/form-data"> 
 @csrf
 @include('pago.form', ['modo'=>'Crear']);

</form>

</div>
