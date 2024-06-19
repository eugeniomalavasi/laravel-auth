@extends('layouts.admin')

@section('content')
    <h1>sono l'index dopo l'accesso</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Content</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)           
            <tr>
                <th scope="row">{{ $project->title }}</th>
                <td>{{ $project->content }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection