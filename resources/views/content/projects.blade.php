@extends('main')

@section('title', trans('app.projects'))

@section('content')

    @foreach($projects as $project)
        <li>{{ $project['name'] }}</li>
        <li>{{ $project['clients_data']['name']}}</li>
        <li>{{ sizeof($project['projects_persons_types_connections_data'])}}</li>
    @endforeach
@endsection

