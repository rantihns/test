@extends('layouts.app')

@section('title','Project Detail'. $project->title)

@section('content')
<div class="container flex-grow-1">
    <div class="md-4">
        <a href="{{ route('project.index') }}" class="btn btn-danger">Kembali</a>
    </div>
    <div class="row g-4">
        <div class="col-md-7">
            <img src="{{ asset('images/'.$project->image)}}" alt="" class="img-fluid
             h-100 w-100" style="min-height: 300px; object-fit: cover;">
        </div>
        <div class="col-md-5">
            <div class="card-body">
                <div class="mb-2">
                    <span
                        class="badge {{ $project->status =='Selesai' ? 'bg-success' : 'bg-warning'}}">
                        {{ $project->status}}</span>
                </div>
                <h5 class="card-title mb-4">{{ $project->title }}</h5>
                <div class="mb-2">
                    <small class="text-muted">Tech : {{ $project->teknologi }}</small>
                </div>
                <p>{{$project->deskription}}</p>
            </div>
            <div class="card-footer bg-white border-0 pb-3">
                <div class="mb-2">
                    <small class="text-muted">dibuat : {{ $project->created_at }}</small>
                </div>
            </div>
        </div>
    </div>
    @endsection