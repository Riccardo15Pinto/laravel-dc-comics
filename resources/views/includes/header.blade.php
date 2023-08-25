<header class="bg-primary-subtle">

    <div class="row align-items-center">
        <div class="col-3">
            <a href="{{ route('comics.index') }}">
                <figure class="figure-image">
                    <img src="{{ @Vite::asset('resources/img/dc-logo.png') }}" alt="" class="m-4">
                </figure>
            </a>
        </div>
        <div class="col-5">

            <ul class="d-flex align-items-center justify-content-start">
                <li class="me-3">
                    <a href="{{ route('comics.create') }}">Character</a>
                </li>
                <li>
                    <a href="{{ route('comics.index') }}">Comics</a>
                </li>
            </ul>
        </div>
    </div>

</header>
