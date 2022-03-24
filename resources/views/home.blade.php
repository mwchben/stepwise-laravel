@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome To Your Dashboard Control') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        {{ __('You are logged in!') }}
                        
                    <style>
                            .card {
                            background-color: transparent;
                            border: none;
                            }
                            th,td {
                                padding: 16px;
                            }
                    </style>
                            @if(count($posts)>0)
                            <h4>My Posts:</h4>
                                <table class="table-transparent table-hover">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Quote</th>
                                        <th scope="col">Action 1</th>
                                        <th scope="col">Action 2</th>
                                    </tr>
                                    @foreach ($posts as $aPost)
                                    <tr>
                                        <th scope="row">{{$aPost->id}}</th>
                                        <td >{{$aPost->quote}}</td>
                                        <td><a class="btn btn-outline-success" href="/posts/editQuote/{{$aPost->id}}">Edit this Quote</a></td>
                                        <td>
                                            <form method="POST" action="{{ url('posts/delete/'.$aPost->id) }}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-outline-danger">Remove Quote</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            @else
                                <p>No Quotes to show</p>
                            @endif
                            <h4>Create New Post:</h4>
                                <a class="btn btn-outline-dark" href="/make">Write Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
