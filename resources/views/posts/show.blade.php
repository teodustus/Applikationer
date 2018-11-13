@extends('layouts.app')

@section('content')
<div class="container">
        <p> </p>
    <a href="/posts" class="btn btn-secondary" style="width:75px;">Back</a>
    <h3> {{$post->title}}</h3>
    <div>
        <p>{{$post->body}} </p>
        <p> hola </p>
    </div>
    <small> Written on {{$post->created_at}} </small>
    </div

@endsection