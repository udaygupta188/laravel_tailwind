<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Album;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = News::all();
        
     $data = News::leftJoin('album','news.album_id','album.id')
    ->select('news.id','news.title','album.image_path')->get();

        return view('index', compact('data'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'title' => 'required',
        // Add validation rules for other fields
    ]);

    // Create a new news record in the database
    $news = News::create($validatedData);

    // Redirect to the thumbnail upload form, passing the news ID
    return redirect('/news/' . $news->id . '/album');
}

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $news = News::leftJoin('album','news.album_id','album.id')
    ->select('news.title','album.image_path')->where('news.id',$id)->get();

    return view('news.show', compact('news'));
}

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = News::find($id);
       return view('news.edit',compact('data','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = News::find($id);
        $news->title = $request->title;
        $news->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
