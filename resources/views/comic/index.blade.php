@extends('layouts.main')

@section('title', 'Home')


@section('main-content')
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('show', ['comic' => $comic->id]) }}">
                    {{ $comic->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
