@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        @if(count($posts) > 0)
        @foreach ($posts as $item)
            <div class="card card-body bg-light">
                <h3> {{$item->body}} </h3>
                <small> Written at {{$item->created_at}}</small>
            </div>
        @endforeach
        @else
            <p> There are no posts
        @endif
    </div>
@endsection