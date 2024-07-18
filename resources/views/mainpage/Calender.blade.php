@extends('layouts.indexnav')

@section('main-content-nav')

<link rel="stylesheet" href="../assets/media/css/Calender.css">
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js'></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listDay'
            },
            buttonText: {
                today: 'Today',
                month: 'month',
                week: 'week',
                day: 'day',
                list: 'list'
            },
            selectable: true,
            dateClick: function(info) {
                window.location.href = '/lists/create?date=' + info.dateStr;
            },
            events: '/events',
        });
        calendar.render();
    });
</script>

<div class="container">
    <div id='calendar'></div>
</div>

@endsection
