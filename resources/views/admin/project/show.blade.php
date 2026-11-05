@extends('admin.template')

@section('title', 'Detail Project')

@section('content')
<div class="mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold">Detail Project</h4>
        <a href="{{ route('admin.project.index') }}" class="btn btn-secondary">Kembali</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            @if($project->image)
                <img src="{{ asset('images/'.$project->image) }}" class="mb-3" style="max-width: 300px; height: auto;">
            @endif
            <table class="table table-borderless">
                <tr>
                    <th style="width: 200px;">Judul</th>
                    <td>{{ $project->title }}</td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td>{{ $project->deskription }}</td>
                </tr>
                <tr>
                    <th>Teknologi</th>
                    <td>{{ $project->teknologi }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $project->status }}</td>
                </tr>
            </table>
            <div class="d-flex gap-2">
                <a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus project ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
