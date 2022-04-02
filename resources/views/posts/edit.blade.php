@extends('layouts.app')

@section('content') 

<style>
    .form-control {
        background-color: transparent;
    }
</style>

    <form class=" row g-5 container" action="{{url('posts/update/'.$aPost->id) }}" method="POST" enctype="multipart/form-data">

       @csrf
       @method('PUT')
        <h3>Edit The Quote</h3>
        <input class="form-control" type="hidden" name="id" id="id" value="{{ $aPost->id}}">
        <div class="col-md-12">
            <label class="form-label h5">What's the Quote</label>
            <input type="text" class="form-control" placeholder="'The Quote'" name="quote" value="{{$aPost->quote}}">
        </div>

        <div class="col-md-12">
            <label class="form-label h5">From who?</label>
            <input type="text" class="form-control" placeholder="by?" name="bywho" value="{{$aPost->bywho}}">
        </div>

        
        <div class="col-md-12">
            <label class="form-label h5">Describe the quote😀</label>
            <textarea class="form-control" placeholder="What about it" name="description"}>{{$aPost->description}}</textarea>
        </div>
        
        <div class="mb-3">
            <input type="file" class="form-control" name="image">
            <div class="invalid-feedback">Example invalid form file feedback</div>
        </div>
        
        <div class="col-12">
            <button class="btn btn-outline-success" type="submit">Update</button>
        </div>
    </form>
@endsection
