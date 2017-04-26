@extends('main')

@section('title', trans('app.clients'))

@section('content')
    <div>Total records: {{ $totalCount }}</div>
    <div>All Clients with projects:</div>
    <ul>
    @foreach($clients as $client)
        <li>{{ $client['name'] }}</li>
            <ul>
                @foreach($client['projects'] as $project)
                    <li>{{ $project['name'] }}</li>
                    @endforeach
            </ul>

        @endforeach
    </ul>
@endsection


