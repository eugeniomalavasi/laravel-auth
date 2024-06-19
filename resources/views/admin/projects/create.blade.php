@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Project Name</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Project content</label>
                <textarea class="form-control" id="content" rows="3" name="content"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Salva</button>
        </form>
    </div>
@endsection
