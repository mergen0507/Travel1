@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Turistik Yerler</h1>

    <div class="row mb-4">
        <div class="col-md-12">
            <h2>Kategoriler</h2>
            <div class="list-group">
                @foreach($categories as $category)
                    <a href="#" class="list-group-item list-group-item-action">{{ $category->name }}</a>
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
                        <p class="card-text"><small class="text-muted">Beğeniler: {{ $place->likes }}</small></p>
                        <a href="{{ url('/places', $place->id) }}" class="btn btn-primary">Detayları Gör</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

