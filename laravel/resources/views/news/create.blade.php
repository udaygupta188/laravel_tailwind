
@extends('layouts.app',["title"=>"Create News"])

@section('content')
    <div class="container">
        <h1>Create News Article</h1>
        <form method="POST" action="{{route('store')}}">
            @csrf
            <div class="form-group mb-3">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <!-- Add other form fields as needed -->
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
