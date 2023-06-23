@extends('layouts.app')

@section('content')
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">{{ $museum->name }}</h5>
            <p class="card-text">{{ $museum->theme }}</p>
            <a href="{{ route('admin.museum.index') }}" class="btn btn-primary">Torna a Progetti</a>
        </div>
    </div>
@endsection
