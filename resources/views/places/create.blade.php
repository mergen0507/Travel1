@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-4">Add New Tourist Place</h1>
            <form action="{{ route('places.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Place Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="country">Country:</label>
                    <input type="text" name="country" id="country" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="hotels">Recommended Hotels:</label>
                    <textarea name="hotels" id="hotels" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="photo">Photo:</label>
                    <input type="file" name="photo" id="photo" class="form-control-file" required>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
