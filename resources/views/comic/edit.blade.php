@extends('layouts.main')

@section('title', 'Modifica')

@section('main-content')
    <div class="container">

        <h1 class="my-3 text-center text-primary">Edit comic</h1>
        <form action="{{ route('comics.update', $comic) }}" method="Post" class="form my-3">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input class="form-control" type="text" id="title" name="title"
                    value="{{ old('title', $comic->title) }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description', $comic->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Path Immagine</label>
                <input class="form-control" type="url" id="url" name="thumb"
                    value="{{ old('thumb', $comic->thumb) }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input class="form-control" type="text" id="text" name="price"
                    value="{{ old('price', $comic->price) }}">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Uscita</label>
                <input class="form-control form-control-sm" id="date" type="date" name="sale_date"
                    value="{{ old('sale_date', $comic->sale_date) }}">
            </div>
            <div>
                <label for="series" class="form-label">Serie</label>
                <input class="form-control form-control-lg" id="series" type="text" name="series"
                    value="{{ old('series', $comic->series) }}">
            </div>
            <div>
                <label for="type" class="form-label">Tipo</label>
                <input class="form-control form-control-lg" id="type" type="text" name="type"
                    value="{{ old('type', $comic->type) }}">
            </div>
            <div>
                <label for="artists" class="form-label">Artisti</label>
                <input class="form-control form-control-lg" id="artists" type="text" name="artists"
                    value="{{ old('artists', $comic->artists) }}">
            </div>
            <div>
                <label for="writers" class="form-label">Scrittori</label>
                <input class="form-control form-control-lg" id="writers" type="text" name="writers"
                    value="{{ old('writers', $comic->writers) }}">
            </div>
            <button type="submit" class="btn btn-primary my-3">Invia</button>
        </form>
    </div>
@endsection
