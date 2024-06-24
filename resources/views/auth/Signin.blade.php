@extends('layouts.index')

@section('main-content')

<link rel="stylesheet" href="{{ asset('assets/media/css/Signin.css') }}">

<div class="container">
    <div class="left">
        <h1>Productivity <span class="highlighted-text">in the palm of your hand</span></h1>
            <div class="icon">
                <img src="{{ asset('assets/media/icon/image.png') }}" alt="Notebook Icon">
            </div>
    </div>
    <div class="right">
        <form method="POST" action="{{ route('signin.store') }}">
            @csrf
            <p class="p0">Welcome Back!</p>
            <label>Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <div>{{ $message }}</div>
            @enderror
            <label>Password</label>
            <input type="password" name="password" id="password">
            @error('password')
                <div>{{ $message }}</div>
            @enderror
            <label>
                <input type="checkbox" name="remember"> Remember my account.
            </label>
            <button type="submit">Sign In</button>
        </form>
        <p class="p1">or sign in with</p>
        <div class="social">
            <a href="#"><img src="{{ asset('assets/media/icon/facebook.png') }}" alt="Facebook"></a>
            <a href="#"><img src="{{ asset('assets/media/icon/google.png') }}" alt="Google"></a>
            <a href="#"><img src="{{ asset('assets/media/icon/apple.png') }}" alt="Apple"></a>
        </div>
        <p class="p2">Don't have an account? <a href="{{ route('signup.create') }}">Sign Up</a></p>
    </div>
</div>

@endsection
