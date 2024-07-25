@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $place->name }}</h1>
            <p>{{ $place->description }}</p>
            <p>Likes: {{ $place->likes }}</p>
            <img src="{{ $place->photos->first()->path ?? 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgj4qmAON5oawuOktANXAF5nqOxZ-jhGTfSw&s' }}" class="img-fluid" alt="{{ $place->name }}">
            <form action="{{ url('/places', $place->id) }}/like" method="POST" class="mt-3">
                @csrf
                <button type="submit" class="btn btn-primary">Like</button>
            </form>
        </div>
    </div>
@endsection
