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
            'title' => 'required|string',
            'description' => 'required|string',
            'thumb' => 'required|string|url:http,https',
            'price' => 'required|string',
            'series' => 'requiredstring',
            'sale_date ' => 'required|date',
            'type ' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ], [
            'thumb.url' => 'Il campo può contenere solo file: (http , https)',
            'title.required' => 'Il campo deve contenere il titolo',
            'description.required' => 'Il campo deve contenere la descrizione',
            'thumb.required' => 'Il campo deve contenere un file per la copertina del fumetto',
            'price.required' => 'Il campo deve contenere il prezzo',
            'series.required' => 'Il campo deve contenere il prezzo',
            'sale_date.required' => 'Il campo deve contenere la data di pubblicazione',
            'type.required' => 'Il campo deve contenere il la tipologia del fumetto',
            'artists.required' => 'Il campo deve contenere gli artisti',
            'writers.required' => 'Il campo deve contenere gli scrittori'
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
            'title' => 'required|string',
            'description' => 'required|string',
            'thumb' => 'required|string|url:http,https',
            'price' => 'required|string',
            'series' => 'requiredstring',
            'sale_date ' => 'required|date',
            'type ' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ], [
            'thumb.url' => 'Il campo può contenere solo file: (http , https)',
            'title.required' => 'Il campo deve contenere il titolo',
            'description.required' => 'Il campo deve contenere la descrizione',
            'thumb.required' => 'Il campo deve contenere un file per la copertina del fumetto',
            'price.required' => 'Il campo deve contenere il prezzo',
            'series.required' => 'Il campo deve contenere il prezzo',
            'sale_date.required' => 'Il campo deve contenere la data di pubblicazione',
            'type.required' => 'Il campo deve contenere il la tipologia del fumetto',
            'artists.required' => 'Il campo deve contenere gli artisti',
            'writers.required' => 'Il campo deve contenere gli scrittori'
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
