@extends('layouts.main')

@section('title', 'Modifica')

@section('main-content')
    <div class="container">

        <h1 class="my-3 text-center text-primary">Create new comic</h1>
        <form action="{{ route('comics.store') }}" method="Post" class="form my-3">
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
            <button type="submit" class="btn btn-primaryet form page my-3">Invia</button>
        </form>
    </div>
@endsection
