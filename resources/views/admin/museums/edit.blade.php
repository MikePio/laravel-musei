
@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.museum.update', $project) }}" enctype='multipart/form-data' method="POST" >
        @csrf
        @method('PUT')


        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $museum->name) }}"></input>
        </div>

        <div class="mb-3">
            <label for="coordinates" class="form-label">Cordinate</label>
            <textarea type="text" class="form-control" id="coordinates" name="coordinates" rows="5">{{ old('coordinates', $museum->coordinates) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="state" class="form-label">Data</label>
            <input type="text" class="form-control" id="state" name="state" value="{{ old('state', $museum->state) }}"></input>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Data</label>
            <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $museum->image) }}"></input>
        </div>

        <div class="mb-3">
            <label for="theme" class="form-label">Data</label>
            <input type="text" class="form-control" id="theme" name="theme" value="{{ old('theme', $museum->theme) }}"></input>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Data</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $museum->price) }}"></input>
        </div>

        <div class="mb-3">
            <label for="ratings" class="form-label">Data</label>
            <input type="text" class="form-control" id="ratings" name="ratings" value="{{ old('ratings', $museum->ratings) }}"></input>
        </div>

        <div class="mb-3">
            <label for="rooms" class="form-label">Data</label>
            <input type="text" class="form-control" id="rooms" name="rooms" value="{{ old('rooms', $museum->rooms) }}"></input>
        </div>

        <button type="submit" class=" btn btn-primary">Modifica</button>


    </form>
@endsection

@endsection
