@extends('layouts.app')

@section('content') 

<h1>Quotes:</h1>
@if(count($posts)>0)
    @foreach ($posts as $post)
        <div>
            <h2>
                <a href="/posts/{{$post->id}}">
                    {{$post->quote}}
                </a>
            </h2>
            <h4>~{{$post->bywho}}</h4>
            
            <small>Qoute posted at {{$post->created_at}}</small>
        </div>
    @endforeach
    {{$posts->links()}}
@else
    <p>No Quotes to show</p>
@endif
@endsection
