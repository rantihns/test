@extends('layouts.app')

@section('title','About')

@section('content')
<div class="container flex-grow-1">
    <div class="row justify-content-center">
        <div class="card-title md-12">
            <h2 class="fw-bold text-dark mb-3">Tentang Aplikasi</h2>
            <p class="fs-4 text-muted">Aplikasi ini dikembangkan sebagai materi praktikum rekayasa web prodi SI Unpam
            </p>
            <a class="btn btn-success" href="{{url('/profile')}}"> Lihat Profile Mahasiswa</a>
        </div>
    </div>
</div>
@endsection