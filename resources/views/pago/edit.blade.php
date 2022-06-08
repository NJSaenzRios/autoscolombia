@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/pago/'.$pago->id ) }}" method="get" enctype="multipart/form-data">
@csrf 


@include('pago.index');

</form>
</div>
@endsection