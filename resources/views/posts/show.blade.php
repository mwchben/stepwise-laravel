@extends('layouts.app')

@section('content') 

<h1>{{$post->quote}}</h1>
<h4>~{{$post->bywho}}</h4>

<div>{{$post->description}}</div>
<small>Qoute posted at {{$post->created_at}}</small>

<a href="/posts">Back</a>
@endsection
