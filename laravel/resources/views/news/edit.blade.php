
@extends('layouts.app',["title"=>"Edit News"])

@section('content')
    <div class="py-8 px-8">
        <h1>Update Article</h1>
        <form method="POST" action="{{route('news.update',['id'=>$id])}}">
            @csrf
            <div class="py-8 px-8 max-w-sm mx-auto bg-red-600 text-white shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="rounded text-black border-current" value="{{$data->title}}">
            </div>
            <!-- Add other form fields as needed -->
            <button type="submit" class="py-2 px-4 max-w-sm mx-auto shadow-lg mt-3 sm:flex sm:items-center sm:space-y-0 sm:space-x-6 rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Update</button>
            <a class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2" href="{{route('home')}}">back</a>
        </form>
    </div>
@endsection
