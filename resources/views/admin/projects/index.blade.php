@extends('layouts.admin')

@section('content')
    <h1>My Projects:</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Last commit</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)           
            <tr>
                <th scope="row">{{ $project->title }}</th>
                <td>{{ $project->content }}</td>
                <td>{{ $project->last_commit }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection