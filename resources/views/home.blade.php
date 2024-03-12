<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Treni</title>


    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <ul>
        @forelse ($trains as $train)
            <li>{{$train->company}}</li>
        @empty
            <h1>Nessun treno</h1>
        @endforelse
    </ul>


</body>

</html>