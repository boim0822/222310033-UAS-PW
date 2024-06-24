@extends('layouts.index')

@section('main-content')

<link rel="stylesheet" href="..\assets\media\css\SpalshScreen.css">

<div class="content container">
    <div class="text-content">
        <h1>Productivity in <span class="highlighted-text">the palm of</span></h1>
        <h1 class="highlighted-text">your hand</h1>
        <p class="paraf">Welcome to our Notes and Tasks app, where productivity meets convenience. With powerful features designed to simplify your daily life, our app ensures all your ideas, tasks and notes are neatly stored and easily accessible anytime, anywhere. Be more organized and achieve more with Lupa.Inc.</p>
    </div>
    <div class="icon-container">
        <div class="icon">
            <img src="assets/media/icon/book.png" alt="Notebook Icon">
        </div>
    </div>
</div>
<div class="text-center mt-4">
    <a href="{{ url('signup') }}" class="btn">Let's Go <i class="fas fa-arrow-right"></i></a>
</div>

@endsection
