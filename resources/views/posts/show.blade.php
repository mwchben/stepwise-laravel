@extends('layouts.app')

@section('content') 
<style>
  .list-group-item {
    background-color: transparent;
}

  .txtOnImage {
    background: url({{asset('storage/imageUploads/'.$aPost->image)}});
    background-attachment: fixed;
    height: 200px;
    width: 200px;
    position: relative;
    overflow: hidden;
    margin-top: 20px;
    margin-bottom: 20px;
}
.txtOnImage > div {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 20px 10px;
  background: inherit;
  background-attachment: fixed;
  overflow: hidden;
}
.txtOnImage > div::before {
  content: "";
  position: absolute;
  top: -20px;
  left: 0;
  width: 200%;
  height: 200%;
  background: inherit;
  background-attachment: fixed;
  -webkit-filter: blur(4px);
  filter: blur(4px);
}
.txtOnImage > div::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.25)
}
.txtOnImage > div > h5 {
  margin: 0;
  color: white;
  position: relative;
  z-index: 1;
}

* {
  box-sizing: border-box;
}
</style>
   
    <div class="list-group-flush">
        <div class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h2 class="mb-1">{{$aPost->quote}}</h2>                           
            </div>
            <div class="txtOnImage img-thumbnail rounded">
                {{-- <img src="{{asset('storage/imageUploads/'.$aPost->image)}}" class="img-thumbnail rounded" alt="image for Quote"> --}}
                <div><h5>{{$aPost->bywho}}</h5></div>
            </div>
            {{-- <h5 class="mb-3">~{{$aPost->bywho}}</h5> --}}
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
