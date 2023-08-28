@extends('layouts.main')

@section('title', 'show')


@section('item')
    <div class="flag-detail">
        <figure class="m-0">
            <img src="{{ $comic->thumb }}" alt="">
        </figure>
    </div>
@endsection

@section('main-content')

    <section class="details">

        <div class="detail-container row justify-content-center mx-auto">

            <div class="col-7">

                <div class="info-detail">

                    <h1 class="mb-3">{{ $comic->title }}</h1>

                    <div id="info-avaible" class="row my-3">

                        <div class="col-8">
                            <h4>U.S. Price:
                                <span class="text-white">
                                    {{ $comic->price }}
                                </span>
                            </h4>
                            <h4>Avaible</h4>
                        </div>
                        <div class="col-4">
                            <h4 class="text-white">Check Avaiblety</h4>
                        </div>
                    </div>

                    <p>{{ $comic->description }}</p>
                </div>
            </div>
            <div class="col-4">
                <h1>Advertisment</h1>

                <figure>
                    <img src="{{ @Vite::asset('resources/img/adv.jpg') }}" alt="">
                </figure>
            </div>
        </div>

        <div class="detail-product">
            <div class="container">

                <div class="row row-cols-2">

                    <div>
                        <h2 class="border-bottom border-secondary-emphasis">Talent</h2>
                        <ul class="p-0">
                            <li class="d-flex justify-content-between border-bottom border-secondary-emphasi">
                                <h3 class="me-3">Art by:</h3>
                                <h3 class="w-75">
                                    {{ $comic->artists }}
                                </h3>
                            </li>

                            <li class="d-flex justify-content-between border-bottom border-secondary-emphasi">
                                <h3 class="me-3">Written by:</h3>
                                <h3 class="w-75">
                                    {{ $comic->writers }}
                                </h3>
                            </li>

                        </ul>
                    </div>

                    <div>
                        <h2 class="border-bottom border-secondary-emphasi">Specs</h2>
                        <ul class="p-0">
                            <li class="d-flex justify-content-between border-bottom border-secondary-emphasi">
                                <h3 class="me-3">Series:</h3>
                                <h3>{{ $comic->series }}</h3>
                            </li>

                            <li class="d-flex justify-content-between border-bottom border-secondary-emphasi">
                                <h3 class="me-3">U.S.Price:</h3>
                                <h3>{{ $comic->price }}</h3>
                            </li>

                            <li class="d-flex justify-content-between border-bottom border-secondary-emphasi">
                                <h3 class="me-3">On Sale Date:</h3>
                                <h3>{{ $comic->sale_date }}</h3>
                            </li>

                        </ul>
                    </div>
                </div>

                <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning">Modifica</a>
            </div>
        </div>

    </section>
@endsection
