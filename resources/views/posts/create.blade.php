@extends('layouts.app')

@section('content') 

<style>
    .form-control {
        background-color: transparent;
    }
</style>

    <form class=" row g-5 container" action="/posts" method="POST" enctype="multipart/form-data">

       @csrf
       <h3>Share The Quote</h3>
        <div class="col-md-12">
            <label class="form-label h5">What's the Quote</label>
            <input type="text" class="form-control" placeholder="'The Quote'" name="quote">
        </div>

        <div class="col-md-12">
            <label class="form-label h5">From who?</label>
            <input type="text" class="form-control" placeholder="by?" name="bywho">
        </div>

        
        <div class="col-md-12">
            <label class="form-label h5">Tell Us More About It</label>
            <textarea class="form-control" placeholder="What about it" name="description"></textarea>
            <div>
            Describe the quote😀.
            </div>
        </div>
        
        
        <div class="mb-3">
            <input type="file" class="form-control" name="image">
            <div class="invalid-feedback">Example invalid form file feedback</div>
        </div>
       
        
        <div class="col-12">
            <button class="btn btn-outline-success" type="submit">Share this Quote</button>
        </div>
    </form>
@endsection
