@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/ingreso') }}" method="post" enctype="multipart/form-data"> 
 @csrf
 @include('ingreso.form', ['modo'=>'Crear']);

</form>

</div>
@endsection
