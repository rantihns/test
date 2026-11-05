@extends('admin.template')

@section('title', 'Kelola Project')

@section('content')
<div class="mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold">Data Project</h4>
        <a href="{{ route('admin.project.create') }}" class="btn btn-primary">Tambah Project</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Teknologi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <td>{{ $loop->iteration + ($projects->currentPage()-1)*$projects->perPage() }}</td>
                        <td>
                            @if($project->image)
                                <img src="{{ asset('images/'.$project->image) }}" width="80" style="object-fit:cover;height:60px;">
                            @else
                                -
                            @endif
                        </td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->teknologi }}</td>
                        <td>{{ $project->status }}</td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('admin.project.show', $project->id) }}" class="btn btn-info btn-sm text-white">Detail</a>
                            <a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus project ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $projects->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@endsection
