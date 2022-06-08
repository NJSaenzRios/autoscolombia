@extends('dashboard.master')
@section('contenido')
@include('dashboard.partials.validation-error')

<form action="" method="post">
@csfr

<div class="form-group">
    <label for="title">Titulo</label>
    <input readonly class="form-control" type="text" name="title" id = "title" value="{{ old('title', $post->title) }}">

</div>


<div class="form-group">
    <label for="url clean">Url limpia</label>
    <input readonly class="form-control" type="text" name="url_clean" id= "url_clean" value="{{ old('url_clean', $post->url_clean) }}">   

</div>

<div class="form-group">
    <label for="content">Url limpia</label>
    <textarea readonly class="form-control" type="text" name="content" id= "url_clean" value="{{ old('content', $post->content)}}"></textarea>   

</div>

<input type="submit" value="Enviar" class="btn btn-primary">

</form>