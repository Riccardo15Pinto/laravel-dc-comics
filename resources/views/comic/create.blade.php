@extends('layouts.main')

@section('title', 'create')


@section('item')
    <div class="flag">
        CURRENT SERIES
    </div>
@endsection

@section('main-content')
    <h1>create</h1>
    <form action="{{ route('comics.store') }}" method="Post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input class="form-control" type="text" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">Path Immagine</label>
            <input class="form-control" type="url" id="url" name="thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input class="form-control" type="text" id="text" name="price">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Uscita</label>
            <input class="form-control form-control-sm" id="date" type="date" name="sale_date">
        </div>
        <div>
            <label for="series" class="form-label">Serie</label>
            <input class="form-control form-control-lg" id="series" type="text" name="series">
        </div>
        <div>
            <label for="type" class="form-label">Tipo</label>
            <input class="form-control form-control-lg" id="type" type="text" name="type">
        </div>
        <div>
            <label for="artists" class="form-label">Artisti</label>
            <input class="form-control form-control-lg" id="artists" type="text" name="artists">
        </div>
        <div>
            <label for="writers" class="form-label">Scrittori</label>
            <input class="form-control form-control-lg" id="writers" type="text" name="writers">
        </div>
        <button type="submit">Invia</button>
    </form>
@endsection
