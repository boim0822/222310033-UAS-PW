@extends('layouts.index')

@section('main-content')

<link rel="stylesheet" href="{{ asset('assets/media/css/Signup.css') }}">

<div class="container">
    <div class="left">
        <h1>Productivity <span class="highlighted-text">in the palm of your hand</span></h1>
        <div class="icon-container">
            <div class="icon">
                <img src="{{ asset('assets/media/icon/book.png') }}" alt="Notebook Icon">
            </div>
        </div>
    </div>
    <div class="right">
        <form method="POST" action="{{ route('signup.store') }}">
            @csrf
            <label>Username</label>
            <input type="text" name="username" id="username" value="{{ old('username') }}">
            @error('username')
                <div>{{ $message }}</div>
            @enderror
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
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
            @error('password_confirmation')
                <div>{{ $message }}</div>
            @enderror
            <label>
                <input type="checkbox" name="terms" required> I agree to the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>.
            </label>
            <button type="submit">Sign Up</button>
        </form>
        <p class="p1">or sign up with</p>
        <div class="social">
            <a href="#"><img src="{{ asset('assets/media/icon/facebook.png') }}" alt="Facebook"></a>
            <a href="#"><img src="{{ asset('assets/media/icon/google.png') }}" alt="Google"></a>
            <a href="#"><img src="{{ asset('assets/media/icon/apple.png') }}" alt="Apple"></a>
        </div>
        <p class="p2">Already an account? <a href="{{ route('signin.create') }}">Sign In</a></p>
    </div>
</div>

@endsection

