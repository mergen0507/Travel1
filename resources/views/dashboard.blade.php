@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="mb-4">Dashboard</h1>
            <p>Hoşgeldiniz, {{ auth()->user()->name }}</p>
            <form action="{{ url('/logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Çıkış Yap</button>
            </form>
        </div>
    </div>
@endsection
