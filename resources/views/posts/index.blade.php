@extends('layouts.app')

@section('content') 

<style>
.list-group-item {
    padding: 0.7rem 1rem;
    background-color: transparent;
}
.img-thumbnail {
    height: 120px;
    width: 120px;
}
</style>
<h3>Current Posted Quotes: make posts for image modifiable in edit and delete n' resize the damn images</h3>
<h3>Order the posts to have most recent 1st</h3>
<hr>
<h3>https://getbootstrap.com/docs/5.0/content/typography/  on blockquote</h3>
<hr>

@if(count($allPosts)>0)
    <ol class="list-group list-group-flush">
        @foreach ($allPosts as $post)
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="container">
                <div class="row">   
                
                    <div class="col-2">
                        <a href="/posts/{{$post->id}}">
                            <img src="{{asset('storage/imageUploads/'.$post->image)}}" class="img-thumbnail rounded" alt="image for Quote">
                        </a>
                    </div>
                    <div class="col-10 d-flex justify-content-between align-items-start">
                        <div class="ms-4 ">
                        
                            <a class="fw-bold text-secondary text-decoration-none" href="/posts/{{$post->id}}">
                            <h4>"{{$post->quote}}"</h4>
                            </a>
                            <h4>~{{$post->bywho}}</h4>                
                        <small>Qoute posted at {{$post->created_at}}</small>
                        </div>
                        <span class="badge bg-secondary float-end rounded-pill">{{$post->user->name}}</span>
                    </div>
                </div>
                </div>
            </li>
        @endforeach
        {{-- {{$posts->links()}} --}}
    </ol>
@else
    <p>No Quotes to show</p>
@endif


@endsection
