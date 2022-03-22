@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        {{ __('You are logged in!') }}
                        
                        
                            <h4>My Posts:</h4>
                                <table class="table table-hover">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Quote</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    @foreach ($posts as $aPost)
                                    <tr>
                                        <th scope="row">{{$aPost->id}}</th>
                                        <th>{{$aPost->quote}}</th>
                                        <th><a class="btn btn-success" href="/posts/editQuote/{{$aPost->id}}">Edit this Quote</a></th>
                                    </tr>
                                    @endforeach
                                </table>
                            <h4>Create New Post:</h4>
                                <a class="btn btn-success" href="/make">Write Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
