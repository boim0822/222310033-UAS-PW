@extends('layouts.index')

@section('main-content')

<link rel="stylesheet" href="..\assets\media\css\SpalshScreen.css">

<div class="content container">
    <div class="text-content">
        <h1>Productivity <span class="highlighted-text">in the palm of</span></h1>
        <h1 class="highlighted-text">your hand</h1>
        <p class="paraf">Welcome to our Task Management app, where productivity meets convenience. With powerful features designed to simplify your daily life, our app ensures all your tasks are organized and easily accessible anytime, anywhere. Get more organized and achieve more with Lupa.Inc.</p>
    </div>
    <div class="icon-container">
        <div class="icon">
            <img src="assets/media/icon/book.png" alt="Notebook Icon">
        </div>
    </div>
</div>
<div class="text-center mt-4">
    <a href="{{ url('signup') }}" class="btn">Let's Go <i class="bi bi-arrow-right"></i></a>
</div>

@endsection
