<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Sidebar</title>
    <style>
        .sidebar {
            width: 100px;
            height: 100vh;
            background-color: #FAFAFA;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: fixed;
            padding-top: 30px;
            padding-left: 30px;
        }

        .sidenav {
            border-radius: 30px;
            background-color: #90B8F8;
            width: 100px;
            padding: 30px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
            margin-top: 20px;
        }

        .sidenav a {
            color: #000;
            font-size: 14px;
            text-align: center;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
        }

        .sidenav a i {
            font-size: 35px;
            color: #F5F7F8;
        }

        .sidenav a span {
            margin-top: 3px;
        }

        .sidenav a i.active {
            color: #1D242B !important;
            border: none;
            cursor: default;
        }

        h1 {
            font-size: 30px;
        }

        .logout-panel {
            position: fixed;
            left: -300px;
            top: 0;
            width: 300px;
            height: 100%;
            background-color: #FAFAFA;
            transition: 0.3s;
            box-shadow: 2px 0 5px rgba(0,0,0,0.5);
            z-index: 1000;
        }

        .logout-panel.active {
            left: 0;
        }

        .logout-panel .profile-header {
            display: flex;
            align-items: center;
            padding: 20px;
            width: 100%;
            border-radius: 0 30px 30px 0;
            position: relative;
        }

        .logout-panel .profile-pic {
            border-radius: 50%;
            width: 60px;
            height: 60px;
        }

        .logout-panel .profile-info {
            color: #1D242B;
            text-align: center;
            flex-grow: 1;
        }

        .logout-panel .profile-info h2 {
            margin: 0;
        }

        .logout-panel .profile-info p {
            margin: 5px 0 0;
        }

        .logout-panel .menu-items {
            width: 100%;
            margin-bottom: 20px;
        }

        .logout-panel .menu-item {
            display: flex;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #ddd;
            cursor: pointer;
            width: 100%;
        }

        .logout-panel .menu-item i {
            font-size: 24px;
            margin-right: 20px;
            color: #26282B;
        }

        .logout-panel .menu-item span {
            font-size: 18px;
            font-weight: bold;
            color: #26282B;
        }

        .logout-panel .logout-button {
            text-align: center;
            padding: 20px;
            width: 100%;
            background-color: #FAFAFA;
        }

        .logout-panel .logout-button a {
            background-color: #5F85DB !important;
            color: #FAFAFA;
            border: none;
            padding: 10px 50px;
            border-radius: 30px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }

        .logout-panel .logout-button a:hover {
            background-color: #90B8F8 !important;
        }
        .back-button {
            position: absolute;
            right: 20px;
            top: 20px;
            font-size: 24px;
            color: black;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="col-2">
        <div class="sidebar">
            <h1>Lupa.inc</h1>
            <div class="sidenav">
                <a href="{{ url('home') }}">
                    <i class="bi bi-house-door-fill"></i>
                    <span>Home</span>
                </a>
                <a href="{{ url('tasks') }}">
                    <i class="bi bi-list-check"></i>
                    <span>Tasks</span>
                </a>
                <a href="{{ url('tasks/create') }}">
                    <i class="bi bi-plus-circle-fill"></i>
                    <span>Create Task</span>
                </a>
                <a href="{{ url('calendar') }}">
                    <i class="bi bi-calendar3"></i>
                    <span>Calendar</span>
                </a>
                <a href="javascript:void(0)" id="logout">
                    <i class="bi bi-person"></i>
                    <span>Logout</span>
                </a>
            </div>
        </div>
    </div>

    <div class="logout-panel" id="logoutPanel">
        <div class="profile-header">
            <a href="{{ url('home') }}" class="back-button"><i class="bi bi-arrow-left"></i></a>
            <div class="profile-info">
                <img src="{{ asset('assets/media/icon/icons8-user-96.png') }}" alt="Profile Picture" class="profile-pic">
                <h1>{{ Auth::user()->username }}</h1>
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
            <a href="{{ url('signin') }}" class="btn">Log Out</a>
        </div>
    </div>

    <script>
        document.getElementById('logout').addEventListener('click', function() {
            document.getElementById('logoutPanel').classList.toggle('active');
        });

        document.addEventListener("DOMContentLoaded", function() {
            const links = document.querySelectorAll('.sidenav a');
            links.forEach(link => {
                if (window.location.href === link.href) {
                    const icon = link.querySelector('i');
                    icon.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
