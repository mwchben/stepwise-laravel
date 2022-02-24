@extends('layouts.app')

@section('content') 

<h1>{{$aPost->quote}}</h1>
<h4>~{{$aPost->bywho}}</h4>

<div>{{$aPost->description}}</div>
<small>Qoute posted at {{$aPost->created_at}}</small>


<a href="/posts">Back</a>
@endsection
