@extends('main')

@section('title', trans('app.projects'))

@section('content')
   <div class ="container">
    <table class="table">
        <thead>
            <tr>
                <th>Projects name</th>
                <th>Clients</th>
                <th>Staff</th>
            </tr>
        </thead>
        <tbody>
    @foreach($projects as $project)
        <tr>

            <td>{{ $project['name'] }}</td>
            <td>{{ $project['clients_data']['name']}}</td>
            <td>{{ sizeof($project['projects_persons_types_connections_data'])}}</td>
        </tr>
    @endforeach
        </tbody>
    </table>
   </div>
@endsection


