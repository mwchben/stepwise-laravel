@extends('layouts.app')

@section('content') 

<h1>{{$aPost->quote}}</h1>
<h4>~{{$aPost->bywho}}</h4>

<div><p>{{$aPost->description}}</p></div>
<h6>by {{$aPost->user->name}}</h6>
<small>on{{$aPost->created_at}}</small>
<br><br>

<div class="col-12" style="color: #DFA">
    <a class="btn btn-dark" href="/posts">Back</a>
    <a class="btn btn-dark" href="/posts/editQuote/{{$aPost->id}}">Edit</a>    

    <form method="POST" action="{{ url('posts/delete/'.$aPost->id) }}">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Remove Quote</button>
    </form>
</div>    
@endsection
