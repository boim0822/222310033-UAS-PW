
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
    body {
        background-color: #f8f4e1;
        color: #543310;
        font-family: 'Arial', sans-serif;
    }
    a {
        color: #543310 !important;
    }
    .navbar {
        background-color: #f8f4e1;
        padding: 10px;
    }
    .navbar-brand{
        color: #543310 !important;
        font-size: 30px;
        font-weight: bold;
        margin: 30px;
    }
    .nav-link {
        font-size: 20px;
        color: #543310;
        font-weight: bold;
        padding: 3px ;
        border-radius: 30px;
        background-color: #AF8F6F;
        margin: 0px 30px;
        text-decoration: none;
    }
    .nav-link:hover {
        background-color: #F8F4E1 !important;
    }
    </style>


    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Lupa.Inc</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('signup') }}">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('signin') }}">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
