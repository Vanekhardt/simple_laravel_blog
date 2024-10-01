@extends('layouts.app')


@section( 'blog')

<h1>{{$post->title}}:</h1>
<hr>
<h3>Content:</h3>
<p>
    {{$post->description}}
</p>
<div>
<strong>By : {{$post->user ? $post->user->name:'NULL'}}</strong>
</div>

<a href="{{Route("home")}}" class="btn btn-info mt-5">Back</a>

@endsection