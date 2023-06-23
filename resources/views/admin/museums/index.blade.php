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
                        <td>

                            <a href="{{ route('admin.museum.show', $project) }}" class="btn btn-info"><i
                                    class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.museum.edit', $project) }}" class="btn btn-primary"><i
                                    class="fa-solid fa-pencil"></i></a>

                        </td>

                        <td>

                            <form class="d-line" action="{{ route('admin.museum.destroy', $project) }}" method="POST"
                             onsubmit="return confirm('Confermi di volerlo eliminare')">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger"
                                    title="Elimina">elimina</button>
                            </form>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
