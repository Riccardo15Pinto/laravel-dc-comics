<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'string',
            'description' => 'string',
            'thumb' => 'string|url:http,https',
            'price' => 'string',
            'series' => 'string',
            'sale_date ' => 'date',
            'type ' => 'string',
            'artists' => 'string',
            'writers' => 'string',
        ], [
            'string' => 'Il campo non può essere vuoto',
            'thumb.url' => 'Il campo può contenere solo file: (http , https)'
        ]);

        $data = $request->all();
        $new_comic = new Comic();
        $new_comic->fill($data);
        $new_comic->save();

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        //

        return view('comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {

        return view('comic.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

        $request->validate([
            'title' => 'string',
            'description' => 'string',
            'thumb' => 'string|url:http,https',
            'price' => 'string',
            'series' => 'string',
            'sale_date ' => 'date',
            'type ' => 'string',
            'artists' => 'string',
            'writers' => 'string',
        ], [
            'string' => 'Il campo non può essere vuoto',
            'thumb.url' => 'Il campo può contenere solo file: (http , https)'
        ]);

        $data = $request->all();
        $comic->update($data);
        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
