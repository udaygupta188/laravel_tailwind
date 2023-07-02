<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\News;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $data = Album::where('news_id',$id)->get();
        return view('album.create', ['newsId' => $id,'data'=>$data]);
    }

    public function store(Request $request,$id){
        if($request->hasFile('album_cover')){
            $file = $request->file('album_cover');

            $album = new Album();
            
            $album->image_path=$this->storeEachFile($file);
            $album->news_id=$id;
            $result = $album->save();
            if($result){
                return redirect('/')->with('success', 'Album cover uploaded successfully.');
            }
            
        }

    }
    
    private function storeEachFile($file,$location='public')
    {
        if ($file) {
            return $file->store($location);
        }
        return '';
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $album = Album::with('news')->findOrFail($id);
        return view('albums.show', compact('id','album'));
    }
    


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
