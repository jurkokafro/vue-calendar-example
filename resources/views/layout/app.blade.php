<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel='stylesheet' type='text/css' href='fullcalendar.css' />
    <script type='text/javascript' src='jquery.js'></script>
    <script type='text/javascript' src='fullcalendar.js'></script>

    <title>Laravel Vue JS Display Events with FullCalendar Example</title>

    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>
<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>

    </div>
</body>
</html>
