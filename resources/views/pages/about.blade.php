@extends('layouts.app')

@section('content') 



<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="container">
        <div>
            <h3 class="mb-3" style="text-align: center;">About Quotes</h3>
        </div>
    </header>

    <main class="px-3">
        <div class="card bg-transparent" style="width: 90%;">
            <img src="{{URL::asset('/images/Cover.jpg')}}" class="card-img-top" alt="Profile Image">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="d-flex justify-content-center list-group-item bg-transparent">
                    <button type="button" class="bi bi-envelope-fill btn btn-outline-dark">
                        Kneekelly123@gmail.com
                    </button>
                </li>
                <li class="d-flex justify-content-center list-group-item bg-transparent">
                    <button type="button" class="bi bi-telephone-fill btn btn-outline-dark">
                        Cell Number
                    </button>
                </li>
                <li class="d-flex justify-content-center list-group-item bg-transparent">
                    <button type="button" class="bi bi-github btn btn-outline-secondary">
                        My Projects
                    </button>
                </li>
                <li class="d-flex justify-content-center list-group-item bg-transparent">
                    <button type="button" class="bi bi-whatsapp btn btn-outline-success">
                      Whatsapp Me
                    </button>
                </li>
                <li class="d-flex justify-content-center list-group-item bg-transparent">
                    <button type="button" class="bi bi-messenger btn btn-outline-primary">
                        Messenger on FB
                    </button>
                </li>
            </ul>
            <div class="card-body">
                <p>Quotes is a laravel based-web application for
                 sharing users favourite quotes with each other through blog posts.
                 Get to know who quoted and the meaning.</p>
                <a href="#" class="text-decoration-none card-link">
                    <i class="bi bi-bug-fill" style="font-size: 1.7rem; color: #dc3545;">Report a bug</i>
                </a> 
            </div>
        </div>
        <!-- alt="..." on <img> element -->
        {{-- <i class="bi-alarm"style="font-size: 2rem; color: cornflowerblue;">alarm</i> --}}
    
        
    </main>
</div>
@endsection

