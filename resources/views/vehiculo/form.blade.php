

<h1>{{ $modo }} vehiculo </h1>

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
 value="{{ isset($vehiculo->Placa)?$vehiculo->Placa:old('') }}">
</div>


<div class="form-group">
<label for="Color"> Color </label>
<input type="text"  class="form-control" name="Color"  id="Color" value="{{ isset($vehiculo->Color)?$vehiculo->Color:old('') }}" >
</div>


<div class="form-group">
<label for="Marca"> Marca </label>
<input type="text" class="form-control" name="Marca"  id="Marca" value="{{ isset($vehiculo->Marca)?$vehiculo->Marca:old('') }}">
</div>

<div class="form-group">
<label for="Propietario"> Propietario </label>
<input type="text" class="form-control" name="Propietario"  id="Propietario" value="{{ isset($vehiculo->Propietario)?$vehiculo->Propietario:old('') }}">
</div>

<div class="form-group">
<label for="Celular"> Celular </label>
<input type="text" class="form-control" name="Celular"  id="Celular" value="{{ isset($vehiculo->Celular)?$vehiculo->Celular:old('') }}">
</div>

<div class="form-group">
<label for="Descripcion"> Descripcion </label>
<input type="text" class="form-control" name="Descripcion"  id="Descripcion" value="{{ isset($vehiculo->Descripcion)?$vehiculo->Descripcion:old('') }}">
</div>

<div class="form-group">
<label for="id_celdas"> Celda </label>
<input type="integer" class="form-control" name="id_celdas"  id="id_celdas" value="{{ isset($vehiculo->id_celdas)?$vehiculo->id_celdas:old('') }}">
</div>

<div class="form-group">
<label for="updated_at"> Fecha de Salida </label>
<input type="text" class="form-control" name="updated_at"  id="updated_at" value="{{ isset($vehiculo->updated_at)?$vehiculo->updated_at:old('') }}">
</div>

<div class="form-group">
<label for="Foto"></label>
@if(isset($vehiculo->Foto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$vehiculo->Foto }}" width="100" alt="">
@endif

<input class="btn btn-success" type="file" class="form-control" name="Foto" value="" id="Foto">
</div>

<input class="btn btn-success" type="submit" value=" {{ $modo }} datos">

<a href="{{ url('vehiculo/') }}">Regresar</a>
<br>

