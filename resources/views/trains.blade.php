@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1>TRENI</h1>
    
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Azienda</th>
            <th scope="col">Stazione di partenza</th>
            <th scope="col">Stazione di arrivo</th>
            <th scope="col">Data e orario partenza</th>
            <th scope="col">Data e orario arrivo</th>
            <th scope="col">Codice treno</th>
            <th scope="col">In orario</th>
            <th scope="col">Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trains as $train)
            <tr>
            <th scope="row">{{ $train->company_name }}</th>
            <td>{{ $train->departure_station }}</td>
            <td>{{ $train->arrival_station }}</td>
            <td>{{ $train->departure_date }} {{ $train->departure_time }}</td>
            <td>{{ $train->arrival_date }} {{ $train->arrival_time }}</td>
            <td>{{ $train->code }}</td>
            <td>{{ $train->is_on_time === 0 ? 'No' : 'Si' }}</td>
            <td>{{ $train->is_canceled === 0 ? 'No' : 'Si' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection