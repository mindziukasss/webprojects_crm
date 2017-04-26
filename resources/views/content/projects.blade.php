@extends('main')

@section('title', trans('app.projects'))

@section('content')
   <div class ="container">
       <div>Total Projects: {{ $totalPersons }}</div>
    <table class="table">
        <thead>
            <tr>
                <th>Projects name</th>
                <th>Clients</th>
                <th>Staff</th>
                <th>Name Perosns</th>
            </tr>
        </thead>
        <tbody>
    @foreach($projects as $project)
        <tr>

            <td>{{ $project['name'] }}</td>
            <td>{{ $project['clients_data']['name']}}</td>
            <td>{{ sizeof($project['total_persons']) }}</td>
            @foreach( $project['total_persons'] as $person )
                @foreach($person['persons_data'] as $per)
                <td>{{ $per['name'] }}</td>
                    @endforeach
            @endforeach
        </tr>
    @endforeach
        </tbody>
    </table>
   </div>
@endsection


