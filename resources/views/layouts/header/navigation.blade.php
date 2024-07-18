<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #FAFAFA;
            color: #1D242B;
            font-family: 'Arial', sans-serif;
        }
        a {
            color: #f4f7f8 !important;
        }
        .navbar {
            background-color: #FAFAFA;
            padding: 10px;
        }
        .navbar-brand {
            color: #1D242B !important;
            font-size: 30px;
            font-weight: bold;
            margin: 30px;
        }
        .nav-link {
            font-size: 20px;
            color: #F5F7F8;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 30px;
            background-color: #5F85DB;
            margin: 0px 10px;
            text-decoration: none;
            width: 150px;
            height: 44px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .nav-link:hover {
            background-color: #FAFAFA !important;
            color: #1D242B !important;
        }
        .nav-link.active {
            background-color: transparent !important;
            color: #1D242B !important;
            border: none;
            cursor: default;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const links = document.querySelectorAll('.nav-link');
            links.forEach(link => {
                if (window.location.href === link.href) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Lupa.Inc</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto" id="navbar-buttons">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Dashboard</a>
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
</body>
</html>
