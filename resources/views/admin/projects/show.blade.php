@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                Delete
            </button>
        </form>
        <div class="d-flex align-items-center">
            <h1 class="me-3">{{ $project->name }} </h1> 
            <small class="text-body-secondary">Version: {{ $project->major_version }}.{{ $project->minor_version }}.{{ $project->patch_version }}</small>
        </div>  
        <h3>{{ $project->description }}</h3>
    </div>  
@endsection
