@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-4">Yeni Turistik Yer Ekle</h1>
            <form action="{{ route('places.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Yer Adı:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Açıklama:</label>
                    <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="photo">Fotoğraf:</label>
                    <input type="file" name="photo" id="photo" class="form-control-file" required>
                </div>
                <button type="submit" class="btn btn-primary">Ekle</button>
            </form>
        </div>
    </div>
@endsection
