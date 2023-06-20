@extends('layouts.app')

@section('name')
  {{-- {{ $artist->name }} --}}
  test
@endsection


@section('content')



<div class="container p-5 d-flex flex-column align-items-center" style="min-height: calc(100vh - 90px - 150px);">

  {{-- @dump($artist); --}}

  <h1 class="py-4 text-black">test</h1>
  <h6 class="py-2">Id: test</h6>
  <h6 class="py-2"><strong>Data di nascita:</strong> test</h6>
  <h6 class="py-2"><strong>Data di morte:</strong> test</h6>
  <p class="py-2"><strong>Opera:</strong> test</p>
  <h6 class="py-2"><strong>Nazionalità:</strong> test</h6>
  <h6 class="py-2"><strong>Genere:</strong> test</h6>
  <h6 class="py-2"><strong>Foto:</strong> test</h6>

  {{-- <h1 class="py-4 text-black">{{ $artist->name }}</h1>
  <h6 class="py-2">Id: {{ $artist->id }}</h6>
  <h6 class="py-2">Data di nascita {{ $artist->birth_date }}</h6>
  <h6 class="py-2">Data di morte {{ $artist->death_date }}</h6>
  <p class="py-2"><strong>Opera</strong> {{ $artist->works }}</p>
  <h6 class="py-2"><strong>Nazionalità</strong> {{ $artist->nationality }}</h6>
  <h6 class="py-2"><strong>Genere</strong> {{ $artist->genre }}</h6>
  <h6 class="py-2"><strong>Foto</strong> {{ $artist->photo }}</h6> --}}


</div>

@endsection
