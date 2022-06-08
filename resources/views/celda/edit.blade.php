
<div class="container">

<form action="{{ url('/celda/'.$celda->id ) }}" method="post" enctype="multipart/form-data">
@csrf 

{{ method_field('PATCH') }}
@include('celda.form', ['modo'=>'Editar']);

</form>
</div>
