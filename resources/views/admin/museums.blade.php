@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista musei</h2>
        <table class="table">
            <thead>
                <tr>

                    <th scope="col">#id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cordinate</th>
                    <th scope="col">Stato</th>
                    <th scope="col">Immagine</th>
                    <th scope="col">Tema</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Stanze</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($artists as $artist)
                    <tr>
                        <td>{{ $artist->id }}</td>
                        <td>{{ $artist->name }}</td>
                        <td>{{ $artist->coordinates }}</td>
                        <td>{{ $artist->state }}</td>
                        <td>{{ $artist->image }}</td>
                        <td>{{ $artist->theme }}</td>
                        <td>{{ $artist->price }}</td>
                        <td>{{ $artist->ratings }}</td>
                        <td>{{ $artist->rooms }}</td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
