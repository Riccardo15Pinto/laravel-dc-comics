@extends('layouts.main')

@section('title', 'Modifica')

@section('main-content')

    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger mt-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1 class="my-3 text-center text-primary">Edit comic</h1>
        <form action="{{ route('comics.update', $comic) }}" method="Post" class="form my-3">
            @method('put')
            @csrf
            <div class="row">

                <div class="col-6">
                    <label for="title" class="form-label @error('title') is-invalid @enderror">Titolo</label>
                    <input class="form-control" type="text" id="title" name="title"
                        value="{{ old('title', $comic->title) }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="series" class="form-label">Serie</label>
                    <input class="form-control form-control-lg @error('series') is-invalid @enderror" id="series"
                        type="text" name="series" value="{{ old('series', $comic->series) }}">
                    @error('series')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                        cols="30" rows="10">{{ old('description', $comic->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-8">
                    <label for="url" class="form-label">Path Immagine</label>
                    <input class="form-control @error('thumb') is-invalid @enderror" type="url" id="url"
                        name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                    @error('thumb')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-4">
                    <img src="{{ old('thumb', $comic->thumb ?? 'https://previews.123rf.com/images/kaymosk/kaymosk1804/kaymosk180400006/100130939-error-404-page-not-found-error-with-glitch-effect-on-screen-vector-illustration-for-your-design.jpg') }}"
                        alt="" id="image-preview">
                </div>
                <div class="col-4">
                    <label for="type" class="form-label">Tipo</label>
                    <input class="form-control form-control-lg @error('type') is-invalid @enderror" id="type"
                        type="text" name="type" value="{{ old('type', $comic->type) }}">
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-4">
                    <label for="price" class="form-label">Prezzo</label>
                    <input class="form-control @error('price') is-invalid @enderror" type="text" id="text"
                        name="price" value="{{ old('price', $comic->price) }}">
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-4">
                    <label for="date" class="form-label">Uscita</label>
                    <input class="form-control form-control-sm @error('sale_date') is-invalid @enderror" id="date"
                        type="date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                    @error('sale_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="artists" class="form-label">Artisti</label>
                    <input class="form-control form-control-lg @error('artists') is-invalid @enderror" id="artists"
                        type="text" name="artists" value="{{ old('artists', $comic->artists) }}">
                    @error('artists')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="writers" class="form-label">Scrittori</label>
                    <input class="form-control form-control-lg @error('writers') is-invalid @enderror" id="writers"
                        type="text" name="writers" value="{{ old('writers', $comic->writers) }}">
                    @error('writers')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary my-3">Invia</button>
        </form>
    </div>
@endsection

@section('scripts')

    @vite('resources/js/scripts/image-preview.js')

@endsection
