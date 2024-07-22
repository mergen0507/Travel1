@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>
    <p>Hoşgeldiniz, {{ auth()->user()->name }}</p>
    <form action="{{ url('/logout') }}" method="POST">
        @csrf
        <button type="submit">Çıkış Yap</button>
    </form>
@endsection
