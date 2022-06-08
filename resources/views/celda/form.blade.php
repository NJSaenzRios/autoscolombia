

<h1>{{ $modo }} celda </h1>

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
<label for="Numero"> Numero </label>
<input type="integer" class="form-control" name="Numero"  id="Numero" 
value="{{ isset($celda->Numero)?$celda->Numero:old('') }}">
</div>

<input class="btn btn-success" type="submit"  value=" {{ $modo }} celda">


<a href="{{ url('celda/create') }}">Regresar</a>
<br>