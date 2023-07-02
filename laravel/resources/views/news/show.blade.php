<!-- resources/views/news/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $news->title }}</h1>
        <p>Created on: {{ $news->created_on }}</p>
        <!-- Add other news details as needed -->
    </div>
@endsection
