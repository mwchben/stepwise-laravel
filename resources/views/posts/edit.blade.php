@extends('layouts.app')

@section('content') 

    <form class=" row g-5 container" action="{{url('posts/{id}/update')}}" method="POST" enctype="multipart/form-data">

       @csrf
       @method('PUT')
        <h3>Edit The Quote</h3>
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
        
        
        {{-- <div class="mb-3">
            <input type="file" class="form-control" aria-label="file example" required>
            <div class="invalid-feedback">Example invalid form file feedback</div>
        </div> --}}
        {{-- <div class="col-md-12">
            <label for="validationDefault04" class="form-label">State</label>
            <select class="form-select" id="validationDefault04" required>
            <option selected disabled value="">Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            <option value="4">Four</option>
            </select>
        </div> --}}
        
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
@endsection
