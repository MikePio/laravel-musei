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
                @foreach ($museums as $museum)
                    <tr>
                        <td>{{ $museum->id }}</td>
                        <td>{{ $museum->name }}</td>
                        <td>{{ $museum->coordinates }}</td>
                        <td>{{ $museum->state }}</td>
                        <td>{{ $museum->image }}</td>
                        <td>{{ $museum->theme }}</td>
                        <td>{{ $museum->price }}</td>
                        <td>{{ $museum->ratings }}</td>
                        <td>{{ $museum->rooms }}</td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
