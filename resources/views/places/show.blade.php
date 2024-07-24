@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $place->name }}</h1>
            <p>{{ $place->description }}</p>
            <p>Beğeniler: {{ $place->likes }}</p>
            <img src="{{ $place->photos->first()->path ?? 'https://via.placeholder.com/150' }}" class="img-fluid" alt="{{ $place->name }}">
            <form action="{{ url('/places', $place->id) }}/like" method="POST" class="mt-3">
                @csrf
                <button type="submit" class="btn btn-primary">Beğen</button>
            </form>
        </div>
    </div>
@endsection
