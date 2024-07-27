@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $place->name }}</h1>
            <img src="{{ $place->photos->first()->path ?? 'https://via.placeholder.com/800x400' }}" class="img-fluid mb-3" alt="{{ $place->name }}">
            <p>{{ $place->description }}</p>
            <p><strong>Country:</strong> {{ $place->country->name }}</p>
            <p><strong>Likes:</strong> {{ $place->likes }}</p>
            <p><strong>Average Rating:</strong> {{ number_format($place->averageRating(), 1) }} Stars</p>
            <form action="{{ url('/places', $place->id) }}/like" method="POST" class="mt-3">
                @csrf
                <button type="submit" class="btn btn-primary">Like</button>
            </form>
        </div>
        <div class="col-md-4">
            <h2>Hotels</h2>
            <ul class="list-group mb-4">
                @foreach($place->hotels as $hotel)
                    <li class="list-group-item">
                        <strong>{{ $hotel->name }}</strong><br>
                        {{ $hotel->address }}
                    </li>
                @endforeach
            </ul>

            <h2>Reviews</h2>
            <ul class="list-group">
                @foreach($place->reviews as $review)
                    <li class="list-group-item">
                        <strong>{{ $review->user->name }}</strong>
                        <span class="badge badge-primary">{{ $review->rating }} Stars</span><br>
                        {{ $review->comment }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
