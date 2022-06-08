

<h1>{{ $modo }} salida </h1>

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
value="{{ isset($salida->Placa)?$salida->Placa:old('') }}">
</div>
