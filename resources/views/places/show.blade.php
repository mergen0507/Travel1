@extends('layouts.app')

@section('content')
    <h1>{{ $place->name }}</h1>
    <p>{{ $place->description }}</p>
    <p>Beğeniler: {{ $place->likes }}</p>
    <form action="{{ url('/places', $place->id) }}/like" method="POST">
        @csrf
        <button type="submit">Beğen</button>
    </form>
@endsection
