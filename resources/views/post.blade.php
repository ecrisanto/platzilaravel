@extends('layouts.default')

@section('content')

<h1>Estos son nuestros post </h1>
{{$post ->title}}- {{$post->author_id}}


@stop