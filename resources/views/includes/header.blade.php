<?php $voices = config('voices'); ?>

<header>

    <div>
        <a href="{{ route('comics.index') }}">
            <figure>
                <img src="{{ @Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </figure>
        </a>
        <ul>
            <li>
                <a href="{{ route('comics.create') }}">Character</a>
            </li>
            <li>
                <a href="{{ route('comics.index') }}">Comics</a>
            </li>
        </ul>
    </div>

</header>
