<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trenitalia</title>

    <link rel="stylesheet" href="{{ asset('CSS/app.css') }}">
</head>
<body>
    <ul>
        @foreach ($trains as $train)
            <li>
                <ul>
                    <li><strong>Train code: </strong>{{ $train->train_code }}</li>
                    <li><strong>Company: </strong>{{ $train->company }}</li>
                    <li><strong>Departure station: </strong>{{ $train->departure_station }}</li>
                    <li><strong>Arrival station: </strong>{{ $train->arrival_station }}</li>
                    <li><strong>Departure time: </strong>{{ $train->departure_timestamp }}</li>
                    <li><strong>Arrival time: </strong>{{ $train->arrival_timestamp }}</li>
                    <li><strong>Wagons number: </strong>{{ $train->wagons }}</li>
                    <li><strong>Delay: </strong>{{ $train->in_time ? 'no' : 'yes' }}</li>
                    <li><strong>Deleted: </strong>{{ $train->deleted ? 'yes' : 'no' }}</li>
                </ul>
            </li>
        @endforeach
        {{ $trains->onEachSide(3)->links('pagination::bootstrap-4') }}
    </ul>
</body>
</html>
