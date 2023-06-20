@extends('layouts.app')

@section('content')


<div class="mx-4 pb-5 d-flex flex-column align-items-start" style="min-height: calc(100vh - 90px - 150px);">

  {{-- <h1 class="pt-5 pb-3">Modifica {{ ->name }}</h1> --}}
  <h1 class="pt-5 pb-3">Modifica Artista</h1>

  {{-- @if ($errors->any())

  <div class="alert alert-danger" role="alert">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>

@endif --}}

<form action="" method="POST"></form>
  {{-- <form action="{{ route("???????.update") }}" method="POST"> --}}

    {{-- token di verifica validità del form  --}}
    @csrf
    {{-- da aggiungere perché non è possibile mettere PUT/PATCH in method in HTML  --}}
    @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="name" value="{{ old('name')}}">
          {{-- @error('name')
            <p class="mt-2 text-danger">{{ $message }}</p>
          @enderror --}}
          </div>
        <div class="mb-3">
            <label for="birth_date" class="form-label">Data di nascita</label>
            <input type="text" class="form-control" id="birth_date" name="birth_date" placeholder="birth_date">
        </div>
        <div class="mb-3">
            <label for="death_date" class="form-label">Data di morte</label>
            <input type="text" class="form-control" id="death_date" name="death_date" placeholder="death_date">
        </div>
        <div class="mb-3">
            <label for="works" class="form-label">Opera</label>
            <input type="text" class="form-control" id="works" name="works" placeholder="works">
        </div>
        <div class="mb-3">
            <label for="nationality" class="form-label">Nazionalità</label>
            <input type="text" class="form-control" id="nationality" name="nationality" placeholder="nationality">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genere</label>
            <input type="text" class="form-control" id="genre" name="genre" placeholder="genre">
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Foto</label>
            <input type="text" class="form-control" id="photo" name="photo" placeholder="photo">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>

  </form>

</div>

@endsection
