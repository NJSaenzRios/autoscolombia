@extends('dashboard.master')
@section('contenido')



<div class="form-group">
    <label for="title">Titulo</label>
    <input readonly class="form-control" type="text" name="title" id = "title" value="{{ $post->title }}">

</div>


<div class="form-group">
    <label for="url clean">Url limpia</label>
    <input readonly class="form-control" type="text" name="url_clean" id= "url_clean" value="{{ $post->url_clean }}">   

</div>

<div class="form-group">
    <label for="content">Url limpia</label>
    <textarea readonly class="form-control" type="text" name="content" id= "url_clean" value="{{ $post->content }}"></textarea>   

</div>

@endsection