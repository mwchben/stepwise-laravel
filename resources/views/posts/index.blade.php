@extends('layouts.app')

@section('content') 

<style>
.list-group-item {
    padding: 0.7rem 1rem;
    background-color: transparent;
}
</style>
<h3>Current Posted Quotes:</h3>
<hr>

@if(count($allPosts)>0)
    <ol class="list-group list-group-numbered list-group-flush">
        @foreach ($allPosts as $post)
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <a class="fw-bold text-secondary text-decoration-none" href="/posts/{{$post->id}}">
                       <h4>"{{$post->quote}}"</h4>
                    </a>
                    <h4>~{{$post->bywho}}</h4>                
                <small>Qoute posted at {{$post->created_at}}</small>
                </div>
                <span class="badge bg-secondary rounded-pill">{{$post->user->name}}</span>
            </li>
        @endforeach
        {{-- {{$posts->links()}} --}}
    </ol>
@else
    <p>No Quotes to show</p>
@endif


@endsection
