@extends('layouts.app')

@section('content')
    <h1>Giriş Yap</h1>
    <form action="{{ url('/login') }}" method="POST">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Şifre:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">Giriş Yap</button>
    </form>
@endsection
