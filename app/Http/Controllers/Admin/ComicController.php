<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//models

use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comic = new Comic();

            $newComicData = $request->all();

            $comic->title = $newComicData['title'];
            $comic->description = $newComicData['description'];
            $comic->thumb = $newComicData['thumb'];
            $comic->price = $newComicData['price'];
            $comic->series = $newComicData['series'];

            $comic->sale_date = $newComicData['sale_date'];
            $comic->type = $newComicData['type'];
            $comic->artists = str_replace(',','|',$newComicData['artists']);
            $comic->writers = str_replace(',','|', $newComicData['writers']);
            $comic->save();

            return redirect()->ruote('comics.show',['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
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
