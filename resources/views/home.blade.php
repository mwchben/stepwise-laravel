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
                        
                        <div class="row">
                            <div class="col-12"><h4>My Posts:</h4></div>
                            <div class="col-12 btn btn-small"><a class="nav-link" href="/make">Write Quote</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
