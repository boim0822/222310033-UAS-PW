<link rel="stylesheet" href="{{ asset('assets/media/css/Logout.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="logout-container">
    <div class="profile-header">
        <img src="{{ asset('assets/media/icon/icons8-user-96.png') }}" alt="Profile Picture" class="profile-pic">
        <div class="profile-info">
            <h2>{{ Auth::user()->username }}</h2>
            <p>{{ Auth::user()->email }}</p>
        </div>
    </div>
    <div class="menu-items">
        <div class="menu-item">
            <i class="bi bi-star"></i>
            <span>Important</span>
        </div>
        <div class="menu-item">
            <i class="bi bi-trash"></i>
            <span>Trash</span>
        </div>
        <div class="menu-item">
            <i class="bi bi-gear"></i>
            <span>Setting</span>
        </div>
        <div class="menu-item">
            <i class="bi bi-info-circle"></i>
            <span>About App</span>
        </div>
    </div>
    <div class="logout-button">
        <form action="{{ url('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Log Out</button>
        </form>
    </div>
</div>
