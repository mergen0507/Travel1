@extends('layouts.app')

@section('content')
    <h1>Turistik Yerler</h1>
    <ul>
        @foreach($places as $place)
            <li>
                <a href="{{ url('/places', $place->id) }}">{{ $place->name }}</a>
                - Beğeniler: {{ $place->likes }}
            </li>
        @endforeach
    </ul>
@endsection
