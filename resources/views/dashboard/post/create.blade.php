@extends('dashboard.master')
@section('contenido')
@include('dashboard.partials.validation-error')

<form action="{{ route('post.store') }}" method="post">
@csfr
{{-- form:post --}}
{{-- Fila 1 --}}
<div class="row">
{{-- .row para crear una fila --}}

<div class="form-group">
    <label for="name">Articulo</label><input class="form-control" type="text" name="name" id="name">

</div>

{{-- Fila 2--}}

<div class="row form-group">
    <label for="description">Conenido</label>
    <textarea class="form-control" name="description" id="description" rows="10"></textarea>

</div>
{{-- Fila 3--}}

<div class="row center">
{{-- Las Columnas en bootstrap tienen un acho de 12 añadir 2 input en una fila: 12/cantidadInput--}}
    <div class="col s6">
        <button class="btn btn-success btn-sm" type="submit">Publicar</button>
        <button class="btn btn-danger btn-sm">Cancelar</button>

   </div>

</div>

</form>