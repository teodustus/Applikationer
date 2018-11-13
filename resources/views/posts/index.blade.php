@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        @if(count($posts) > 0)
        @foreach ($posts as $item)
            <div class="card card-body bg-light">
            <h3><a href="{{route('posts.show', $item->id)}}"> {{$item->body}} </h3>
               <!-- <h3><a href="/posts/{{$item->id}}"> {{$item->body}} </h3> -->
                <a href="{{route('posts.show', $item->id)}}"></a>
                <small> Written at {{$item->created_at}}</small>
            </div>
        @endforeach 
        {{$posts->links()}}
        @else
            <p> There are no posts
        @endif
    </div>
@endsection