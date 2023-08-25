@extends('layouts.main')

@section('title', 'Home')


@section('main-content')
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                    {{ $comic->title }}
                </a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('comics.create') }}">Aggiungi fumetto</a>
@endsection
