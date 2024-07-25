@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Tourist Places</h1>

    <form method="GET" action="{{ route('places.index') }}" class="mb-4">
        <div class="input-group mb-3">
            <input type="text" name="search" class="form-control" placeholder="Search for places..." value="{{ request('search') }}">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>

        <div class="form-group">
            <label for="category">Filter by Category:</label>
            <select name="category" id="category" class="form-control">
                <option value="">All Categories</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Filter</button>
    </form>

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
