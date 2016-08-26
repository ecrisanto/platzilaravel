@extends('layouts.default')

@section('content')

<h1>Estos son nuestros post </h1>

<ul>
@foreach($posts as $post)
    <li>
        <a href="{{route("post_show_path", $post->id)}}">{{$post->body}}</a>
        {{$post ->title}}- {{$post->body}}
    </li>
@endforeach
</ul>

@stop