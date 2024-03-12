<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Ciuf ciuf</title>


    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container py-5 my-5 border rounded">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Train Code</th>
                <th scope="col">Company</th>
                <th scope="col">Departure St.</th>
                <th scope="col">Arrival St.</th>
                <th scope="col">Departure Time</th>
                <th scope="col">Arrival time</th>
                <th scope="col">Wagons Number</th>
                <th scope="col">On time</th>
                <th scope="col">Deleted</th>
              </tr>
            </thead>
            <tbody>
            @forelse ($trains as $train)
              <tr>
                <th scope="row">{{ $train->train_code}}</th>
                <td>{{ $train->company}}</td>
                <td>{{ $train->dep_station}}</td>
                <td>{{ $train->arr_station}}</td>
                <td>{{ $train->dep_time}}</td>
                <td>{{ $train->arr_time}}</td>
                <td>{{ $train->train_wagons}}</td>
                <td>{{ $train->getTimeIcon()}}</td>
                <td>{{ $train->getDeletedIcon()}}</td>
              </tr>
              @empty
                <th>Nessun treno</th>
            @endforelse
            </tbody>
        </table>
    </div>
    


</body>

</html>