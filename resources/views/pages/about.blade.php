@extends('layouts.app')

@section('content') 



<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="container">
        <div>
            <h3 class="mb-3" style="text-align: center;">About Quotes</h3>
        </div>
    </header>

    <main class="px-3">
        <div class="card bg-transparent d-flex justify-content-center">
            <img src="{{URL::asset('/images/Cover.jpg')}}" class="card-img-top" alt="Profile Image">
            <div class="card-body">
                <h5 class="card-title">The Web App</h5>
                <p class="card-text">The application comes inspired with the desire of sharing knowledge
                through wise saying from different sources. It can be shared in any language. Other features yet to include are:
                <ul class="list-unstyled">
                    <li><i>Sharing them on social media</i><li>
                    <li><i>Ability to <i class="bi bi-bookmark-fill" style="color: #0B0B65"></i> a quote</i><li>
                    <li><i>Ability to <i class="bi bi-hand-thumbs-up-fill" style="color: #198754;"></i> or <i class="bi bi-hand-thumbs-down-fill" style="color: #dc3545;"></i> a vote</i></li>
                    <li><i>Downloadable PDF of the quotes</i></li>
                </ul>
                </p>
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
                <p>We intend to have a large community of users to publish thousands
                of personalized collections. By creating an account, post a quote and share the ideas in
                all dialect or tongue. 
                </p>
                <a href="https://github.com/mwchben/stepwise-laravel/labels/bug" class="text-decoration-none card-link">
                    <i class="bi bi-bug-fill" style="font-size: 1.7rem; color: #dc3545;">Report a bug</i>
                </a> 
            </div>
        </div>
        <!-- alt="..." on <img> element -->
        {{-- <i class="bi-alarm"style="font-size: 2rem; color: cornflowerblue;">alarm</i> --}}
    
        
    </main>
</div>
@endsection

