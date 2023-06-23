@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.project.store') }}" enctype='multipart/form-data' method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"></input>
        </div>

        <div class="mb-3">
            <label for="coordinates" class="form-label">Cordinate</label>
            <textarea type="text" class="form-control" id="coordinates" name="coordinates" rows="5">{{ old('coordinates') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="state" class="form-label">Data</label>
            <input type="text" class="form-control" id="state" name="state" value="{{ old('state') }}"></input>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Data</label>
            <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}"></input>
        </div>

        <div class="mb-3">
            <label for="theme" class="form-label">Data</label>
            <input type="text" class="form-control" id="theme" name="theme" value="{{ old('theme') }}"></input>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Data</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}"></input>
        </div>

        <div class="mb-3">
            <label for="ratings" class="form-label">Data</label>
            <input type="text" class="form-control" id="ratings" name="ratings" value="{{ old('ratings') }}"></input>
        </div>

        <div class="mb-3">
            <label for="rooms" class="form-label">Data</label>
            <input type="text" class="form-control" id="rooms" name="rooms" value="{{ old('rooms') }}"></input>
        </div>




        <button type="submit" class="btn btn-primary">invia</button>


    </form>
@endsection
