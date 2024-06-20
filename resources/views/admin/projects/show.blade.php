@extends('layouts.admin')

@section('content')
    <h1>sono la pagina show</h1>
    <p>Title: {{ $project->title }}</p>
    <p>Content: {{ $project->content }}</p>
    <p>Last commit: {{ $project->last_commit }}</p>
    <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">Back</a>
    @endsection