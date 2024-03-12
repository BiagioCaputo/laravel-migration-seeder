<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                <th scope="col">Ariival St.</th>
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
                <td>{{ $train->train_code}}</td>
                <td>{{ $train->company}}</td>
                <td>{{ $train->dep_station}}</td>
                <td>{{ $train->arr_station}}</td>
                <td>{{ $train->dep_time}}</td>
                <td>{{ $train->arr_time}}</td>
                <td>{{ $train->train_wagons}}</td>
                <td>{{ $train->on_time}}</td>
                <td>{{ $train->deleted}}</td>
              </tr>
              @empty
                <th>Nessun treno</th>
            @endforelse
            </tbody>
        </table>
    </div>
    


</body>

</html>