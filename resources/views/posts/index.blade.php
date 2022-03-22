@extends('layouts.app')

@section('content') 

<h1>Quotes:</h1>
@if(count($allPosts)>0)
    @foreach ($allPosts as $post)
        <div>
            <h3>
                <a href="/posts/{{$post->id}}">
                    {{$post->quote}}
                </a>
            </h3>
            <h4>~{{$post->bywho}}</h4>
            
            <small>Qoute posted at {{$post->created_at}} by {{$post->user->name}}</small>
        </div>
    @endforeach
    {{-- {{$posts->links()}} --}}
@else
    <p>No Quotes to show</p>
@endif
@endsection
