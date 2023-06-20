@extends('layouts.app')

@section('content')

<div class="container p-5 d-flex flex-column align-items-center" style="min-height: calc(100vh - 90px - 150px);">

  <h1 class="py-4">Artisti</h1>

  <table class="table">
    <thead class="thead-dark">
      <tr class="">

        <th scope="col">test conflict</th>

        <th scope="col">#id</th>
        <th scope="col">Nome</th>
        <th scope="col">Data di nascita</th>
        <th scope="col">Data di morte</th>
        <th scope="col">Opera</th>
        <th scope="col">Nazionalità</th>
        <th scope="col">Genere</th>
        <th scope="col">Foto</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
      {{-- @foreach ( as ) --}}

        <tr>
          {{-- <td>{{ -> }}</td> --}}
          <td>#id</td>
          <td>name</td>
          <td>birth_date</td>
          <td>death_date</td>
          <td>opera</td>
          <td>nazionalità</td>
          <td>genere</td>
          <td>foto</td>
          <td>
            <a href="#" class="btn btn-success">VAI</a>
            {{-- OPPURE --}}
            {{-- <a href="{{ route('artisti.show', $comic->id) }}" class="btn btn-success">VAI</a> --}}
          </td>
        </tr>

      {{-- @endforeach --}}


    </tbody>
  </table>

</div>

@endsection
