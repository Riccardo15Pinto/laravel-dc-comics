<?php $voices = config('voices'); ?>

<header>

    <div>
        <a href="{{ route('home') }}">
            <figure>
                <img src="{{ @Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </figure>
        </a>
        <ul>
            @foreach ($voices as $voice)
                <li>

                    <a href="{{ route($voice['route']) }}"
                        @if (Route::is($voice['route'])) class="active" @endif>{{ $voice['text'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>

</header>
