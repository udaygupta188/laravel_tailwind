
@extends('layouts.app',["title"=>"Create News"])

@section('content')
    <div class="px-8 py-8">
        <h1>Upoad Album </h1>
     <form method="POST" action="{{ route('album.store', ['id' => request()->route('id')]) }}" enctype="multipart/form-data">
    @csrf
    <input type="file" class="px-4 py-1 text-sm text-purple-600 font-semibold border border-purple-200  focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2" name="album_cover">
    <button type="submit" class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Upload</button>
    <a class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2" href="{{route('home')}}">back</a>
</form>

<div class="flex">
    @foreach($data as $rows)

          <div class="py-8 px-8 max-w-sm mx-auto bg-white rounded-xl shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6 mt-3">
              <div class="text-center space-y-2 sm:text-left">
                <div class="space-y-0.5">
                    <img src="{{ str_replace('/public','',url('/') )}}/storage/app/{{$rows->image_path}}" alt="img" width="400" height="400">
                 
                </div>
              </div>
        </div>
    @endforeach
</div>
        
    </div>
@endsection