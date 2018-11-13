@extends('layouts.app')

@section('content')
    <h1> about </h1>
        @if(count($about)>0)
            <ul class="list-group">
            @foreach ($about as $item)
            <li class="list-group-item"> {{$item}} </li> 
            @endforeach
            </ul>
        @endif
        
@endsection
