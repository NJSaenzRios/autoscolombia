@extends('layouts.app')

@section('content')

<div class="container">
<h1>{{ $modo }} pago </h1>

@if(count($errors)>0)

    <div class="alert-danger" role="alert">       
    
    <ul>

    @foreach($errors->all() as $error)

    <li>{{ $error }}</li>

    @endforeach

    </ul>
    </div>

@endif

<div class="form-group">
<label for="medio_de_pago"> Medio de Pago </label>
<input type="text" class="form-control" name="medio_de_pago"  id="medio_de_pago" 
value="{{ isset($pago->medio_de_pago)?$pago->medio_de_pago:old('') }}">
</div>

<div class="form-group">
<label for="valor_a_pagar"> Valor a Pagar </label>
<input type="integer" class="form-control" name="valor_a_pagar"  id="valor_a_pagar" 
value="{{ isset($pago->valor_a_pagar)?$pago->valor_a_pagar:old('') }}">
</div>


<div class="form-group">
<label for="created_at"> Fecha de Pago </label>
<input type="text" class="form-control" name="created_at"  id="created_at" value="{{ isset($pago->created_at)?$pago->created_at:old('') }}">
</div>

<div class="form-group">
<label for="id_vehiculos"> Vehiculo </label>
<input type="text" class="form-control" name="id_vehiculos"  id="id_vehiculos" value="{{ isset($pago->id_vehiculos)?$pago->id_vehiculos:old('') }}">
</div>

<input class="btn btn-success" type="submit" value=" {{ $modo }} datos">
<a href="{{ url('pago/') }}">Regresar</a>
<br>

</div>
@endsection