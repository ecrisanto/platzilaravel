@extends('layouts.default')

@section('content')

<h1>Estos son nuestros post </h1>

<ul class="list-unstyled">
@foreach($posts as $post)
    <li>
        <a href="{{route("post_show_path", $post->id)}}">
            {{$post ->title}}
        </a>
        <br>
        Post: {{$post->body}}
        <br>
        creado: {{$post->created_at}}
    </li>
@endforeach
</ul>

@stop