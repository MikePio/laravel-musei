@extends('layouts.app')
@section('content')

<div class="container">
    <a href="{{route('admin.artists.index')}}"><i class="fa-solid fa-folder-tree">Artisti</i></a>
    <a href="{{route('admin.museum.index')}}"><i class="fa-solid fa-folder-tree">Musei</i></a>

</div>

@endsection
