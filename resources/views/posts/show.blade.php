@extends('layouts.app')

@section('content') 
<style>
  .list-group-item {
    background-color: transparent;
}
</style>
   
    <div class="list-group-flush">
        <div class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h2 class="mb-1">{{$aPost->quote}}</h2>  
                <img src="{{asset('storage/imageUploads/'.$aPost->image)}}" class="card-img-top" alt="image for Quote">            
            </div>
            <h5 class="mb-3">~{{$aPost->bywho}}</h5>
            <p class="mb-1">{{$aPost->description}}</p>
        </div>
        <div class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <small>by {{$aPost->user->name}}</small>
                <small class="mb-1">{{$aPost->created_at}}</small>
            </div>
        </div>
    </div>

<br><br>


<div class="btn-group" role="group">
    <a href="/posts"><button type="button" class="btn btn-outline-dark mx-2">Back</button></a>
    {{-- this part removes the edit and delete btn if a guest is on --}}
    @if(!Auth::guest()) 
        @if(Auth::user()->id == $aPost->user_id)
            <a href="/posts/editQuote/{{$aPost->id}}"><button type="button" class="btn mx-2 btn-outline-success">Edit</button></a>
            <form method="POST" action="{{ url('posts/delete/'.$aPost->id) }}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn mx-2 btn-outline-danger">Remove Quote</button>
            </form>
        @endif
    @endif
  </div>
    
      

   
</div>    
@endsection
