@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1>My projects</h1>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary my-3">New Project</a>
        <table class="table table-hover align-middle">
            <thead>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Version</th>
                <th scope="col">Description</th>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr onclick="window.location='{{route('admin.projects.show', $project->id)}}'" style="cursor: pointer"> 
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->major_version }}.{{ $project->minor_version }}.{{ $project->patch_version }}</td>
                        <td>{{ $project->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>  
@endsection