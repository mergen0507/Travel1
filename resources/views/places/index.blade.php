@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Tourist Places</h1>

    <form method="GET" action="{{ route('places.index') }}">
        <div class="input-group mb-4">
            <input type="text" name="search" class="form-control" placeholder="Search for places..." value="{{ request('search') }}">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>
    </form>

    <div class="row mb-4">
        <div class="col-md-12">
<<<<<<< HEAD
            <h2>Categories</h2>
=======
            <h2>Catego</h2>
>>>>>>> fc8b6bc0d7d49c2517e4ad3624a6e5fbf8a54536
            <div class="list-group">
                @foreach($categories as $category)
                    <a href="{{ route('categories.show', $category->id) }}" class="list-group-item list-group-item-action">{{ $category->name }}</a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($places as $place)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $place->photos->first()->path ?? 'https://via.placeholder.com/150' }}" class="card-img-top" alt="{{ $place->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $place->name }}</h5>
                        <p class="card-text">{{ Str::limit($place->description, 100) }}</p>
                        <p class="card-text"><small class="text-muted">Likes: {{ $place->likes }}</small></p>
                        <a href="{{ url('/places', $place->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
