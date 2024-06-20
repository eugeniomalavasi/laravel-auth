@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.projects.update', ['project'=> $project->slug]) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" rows="3" name="content">{{ $project->content }}</textarea>
        </div>

        <button class="btn btn-success" type="submit">Salva</button>
    </form>
@endsection

