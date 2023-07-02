
@extends('layouts.app',["title"=>"News"])

@section('content')
        <h1 class="py-8 px-8 max-w-sm mx-auto bg-red-600 text-white shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">News Article</h1>
        
        <div class="flex">

            @foreach($data as $row)
              <div class="py-8 px-8 max-w-sm mx-auto bg-white rounded-xl shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
                      <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                          <p class="text-lg text-black font-semibold">
                            {{$row->title}}
                          </p>
                        </div>
                        <a href="news/edit/{{$row->id}}" class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">
                            <span>Edit News</span>
                            </a>
                        <a href="news/{{$row->id}}/album" class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">
                        <span>View Album</span>
                        </a>
                      </div>
                </div>

            @endforeach
        </div>
@endsection
