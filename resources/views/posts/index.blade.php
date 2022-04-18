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
<h5 class="text-center">
We value authenticity and accuracy hence our readers are 
encouraged to make contributions and suggest edits. They can proofreading and 
verifying sources in an effort to catch discrepancies.</h5>
<hr>

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
                                <figure class="text-center">
                                        <blockquote class="blockquote">
                                            <a class="fw-bold text-secondary text-decoration-none" href="/posts/{{$post->id}}">
                                                <h4 style="color: #0B0B65">"{{$post->quote}}"</h4>
                                            </a>
                                        </blockquote>
                                        <figcaption class="blockquote-footer" style="color: #0B0B65">
                                            {{$post->bywho}} <cite title="Source Title">(Quote)</cite>
                                        </figcaption>
                                </figure>               
                            <small>Date Posted: <h6>{{$post->created_at}}</h6></small>
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
