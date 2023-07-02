<!-- resources/views/albums/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Album Details</h1>
        <h2>News Title: {{ $album->news->title }}</h2>
        <!-- Add other album details as needed -->
    </div>
@endsection
