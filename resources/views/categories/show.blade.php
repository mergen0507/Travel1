@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $place->name }}</h1>
            <p>{{ $place->description }}</p>
            <p>Likes: {{ $place->likes }}</p>
            <p>Country: {{ $place->country->name }}</p>
            <img src="{{ $place->photos->first()->path ?? 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgj4qmAON5oawuOktANXAF5nqOxZ-jhGTfSw&s' }}" class="img-fluid" alt="{{ $place->name }}">
            <form action="{{ url('/places', $place->id) }}/like" method="POST" class="mt-3">
                @csrf
                <button type="submit" class="btn btn-primary">Like</button>
            </form>
        </div>
        <div class="col-md-4">
            <h2>Hotels</h2>
            <ul class="list-group">
                @foreach($place->hotels as $hotel)
                    <li class="list-group-item">
                        <strong>{{ $hotel->name }}</strong><br>
                        {{ $hotel->address }}
                    </li>
                @endforeach
            </ul>

            <h2 class="mt-4">Reviews</h2>
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
