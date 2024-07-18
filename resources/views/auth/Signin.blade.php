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
            <div class="password-container">
                <input type="password" name="password" id="password">
                <span class="eye-icon" onclick="togglePassword('password', this)">
                    <i class="bi bi-eye-slash"></i>
                </span>
            </div>
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

<script>
    function togglePassword(id, element) {
        var input = document.getElementById(id);
        var icon = element.querySelector('i');
        if (input.type === "password") {
            input.type = "text";
            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');
        } else {
            input.type = "password";
            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');
        }
    }
</script>

@endsection
