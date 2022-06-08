@extends('layouts.app')

@section('content')

<h1>{{ $modo }} ingreso </h1>

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
<label for="Placa"> Placa </label>
<input type="integer" class="form-control" name="Placa"  id="Placa" 
value="{{ isset($ingreso->Placa)?$ingreso->Placa:old('') }}">
</div>


<div class="form-group">
<label for="Color"> Color </label>
<input type="text"  class="form-control" name="Color"  id="Color" value="{{ isset($ingreso->Color)?$ingreso->Color:old('') }}" >
</div>


<div class="form-group">
<label for="Marca"> Marca </label>
<input type="text" class="form-control" name="Marca"  id="Marca" value="{{ isset($ingreso->Marca)?$ingreso->Marca:old('') }}">
</div>

<div class="form-group">
<label for="Propietario"> Propietario </label>
<input type="text" class="form-control" name="Propietario"  id="Propietario" value="{{ isset($ingreso->Propietario)?$ingreso->Propietario:old('') }}">
</div>

<div class="form-group">
<label for="Celular"> Celular </label>
<input type="text" class="form-control" name="Celular"  id="Celular" value="{{ isset($ingreso->Celular)?$ingreso->Celular:old('') }}">
</div>

<div class="form-group">
<label for="Descripcion"> Celular </label>
<input type="text" class="form-control" name="Descripcion"  id="Descripcion" value="{{ isset($ingreso->Descripcion)?$ingreso->Descripcion:old('') }}">
</div>


<div class="form-group">
<label for="Foto"></label>
@if(isset($vehiculo->Foto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$ingreso->Foto }}" width="100" alt="">
@endif

<input class="btn btn-success" type="file" class="form-control" name="Foto" value="" id="Foto">
</div>

<input class="btn btn-success" type="submit" value=" {{ $modo }} datos">
<a href="{{ url('ingreso/') }}">Regresar</a>
<br>

@endsection