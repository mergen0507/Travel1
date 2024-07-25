@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Places in the {{ $category->name }} Category</h1>

    <div class="row">
        @foreach($places as $place)
            <div class="col-md-4 mb-4">
                <div class="card ">
                    <img src="{{ $place->photos->first()->path ?? 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYwEUa9G1zV9t2UHWBpKMoMpUefVQDk6rl5BeLqNBpN6jMuIQ81ep4JaiBZm5-4swkDls&usqp=CAU' }}" class="card-img-top" alt="{{ $place->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $place->name }}</h5>
                        <p class="card-text">{{ Str::limit($place->description, 100) }}</p>
                        <p class="card-text"><small class="text-muted ">Likes: {{ $place->likes }}</small></p>
                        <a href="{{ url('/places', $place->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
