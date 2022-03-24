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
                <h3 class="mb-1">{{$aPost->quote}}</h3>              
            </div>
            <h6 class="mb-3">~{{$aPost->bywho}}</h6>
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


    <a href="/posts"><button type="button" class="btn btn-outline-dark">Back</button></a>
    <a href="/posts/editQuote/{{$aPost->id}}"><button type="button" class="btn btn-outline-dark">Edit</button></a>  

    <form method="POST" action="{{ url('posts/delete/'.$aPost->id) }}">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-outline-dark">Remove Quote</button>
    </form>
</div>    
@endsection
