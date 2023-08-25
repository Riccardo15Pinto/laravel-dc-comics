@extends('layouts.main')

@section('title', 'Home')

@section('item')
    <div class="flag">
        CURRENT SERIES
    </div>
@endsection
@section('main-content')
    <section class="home-main">

        <div class="container">
            <h1 class="text-center py-3 text-white">COMICS</h1>
            <div class="row row-cols-4">
                @foreach ($comics as $comic)
                    <div class="p-3 text-center">
                        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                            <figure class="d-block mx-auto">
                                <img src="{{ $comic->thumb }}" alt="">
                            </figure>
                            <h2> {{ $comic->title }}</h2>
                            <h3>{{ $comic->series }}</h3>
                        </a>
                    </div>
                @endforeach

            </div>
            <div class="text-center py-3">
                <a href="#" class="btn btn-primary">LOAD MORE</a>
                <a href="{{ route('comics.create') }}" class="btn btn-success">Aggiungi fumetto</a>
            </div>
        </div>
    </section>

@endsection
