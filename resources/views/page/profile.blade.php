@extends('layouts.app')

@section('title','Profile')

@section('content')
<div class="container flex-grow-1">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card-header bg-warning text-center py-4">
                <img src="{{ asset('tes.jpeg')}}" alt="" class="rounded-circle"
                    img-thumbnail shadow-sm" style="width: 150px; height: 150px;" object-fit="cover">
                <h5 class="card-title mb-4">Profile Mahasiswa</h5>
                <span class="badge bg-success">{{ $mahasiswa['status'] }}</span>
            </div>
            <div class="card-body">
                <p><strong>Nama :</strong>{{ $mahasiswa['nama'] }}</p>
                <p><strong>NIM :</strong>{{ $mahasiswa['nim'] }}</p>
                <p><strong>Program Studi :</strong>{{ $mahasiswa['prodi'] }}</p>
                <p><strong>Kampus :</strong>{{ $mahasiswa['kampus'] }}</p>
                <p><strong>Email :</strong>{{ $mahasiswa['email'] }}</p>
                <p><strong>Status :</strong>{{ $mahasiswa['status'] }}</p>
            </div>
        </div>
    </div>
</div>
@endsection