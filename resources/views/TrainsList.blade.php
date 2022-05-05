<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trenitalia</title>
</head>
<body>
    <ul>
        @foreach ($trains as $train)
            <li>
                <ul>
                    <li>{{ $train->train_code }}</li>
                    <li>{{ $train->company }}</li>
                    <li>{{ $train->departure_station }}</li>
                    <li>{{ $train->arrival_station }}</li>
                    <li>{{ date('m/d/Y H:i:s', $train->departure_timestamp) }}</li>
                    <li>{{ date('m/d/Y H:i:s', $train->arrival_timestamp) }}</li>
                    <li>{{ $train->wagons }}</li>
                    <li>{{ $train->in_time }}</li>
                    <li>{{ $train->deleted }}</li>
                </ul>
            </li>
    </ul>
</body>
</html>
