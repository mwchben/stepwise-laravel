@extends('layouts.app')

@section('content') 



<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0">About Quotes</h3>
        </div>
    </header>

    <main class="px-3">
        <h1>Cover your page.</h1>
        <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
        <p class="lead"> 
        <!-- alt="..." on <img> element -->
        {{-- <i class="bi-alarm"style="font-size: 2rem; color: cornflowerblue;">alarm</i> --}}
       
        <button type="button" class="bi bi-envelope-fill btn btn-outline-dark">
                Kneekelly123@gmail.com
        </button>
        <button type="button" class="bi bi-telephone-fill btn btn-outline-info">
                Cell Number
        </button>
        <button type="button" class="bi bi-github btn btn-outline-secondary">
                My Projects
        </button>
        <button type="button" class="bi bi-whatsapp btn btn-outline-success">
                Whatsapp Me
        </button>
        <button type="button" class="bi bi-messenger btn btn-outline-primary">
                Messenger on FB
        </button>
  
        </p>
    </main>

    <footer class="mt-auto">
        <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
    </footer>
</div>
@endsection

