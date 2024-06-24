<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<style>
    .sidebar {
        width: 80px;
        height: 100vh;
        background-color: #F8F4E1;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 70px;
        position: fixed;
    }
    .sidebar img {
        border-radius: 50%;
        width: 40px;
        height: 40px;
    }
    .sidebar img.icon {
        border-radius: 0;
    }
</style>

<div class="col-2">
    <div class="sidebar">
        <a href=""><img src="{{asset('assets/media/icon/icons8-user-96.png')}}" alt="Profile"></a>
        <a href="{{ url('home') }}"><img src="{{asset('assets/media/icon/icons8-home-96.png')}}" alt="Home" class="icon"></a>
        <a href="{{ url('list') }}"><img src="{{asset('assets/media/icon/icons8-todo-list-96.png')}}" alt="List" class="icon"></a>
        <a href="{{ url('tasks/create') }}"><img src="{{asset('assets/media/icon/icons8-plus-96.png')}}" alt="Plus" class="icon"></a>
        <a href="{{ url('calendar') }}"><img src="{{asset('assets/media/icon/rescheduling.png')}}" alt="Calendar" class="icon"></a>
        <a href="{{ url('logout') }}"><img src="{{asset('assets/media/icon/user.png')}}" alt="User" class="icon"></a>
    </div>
</div>
