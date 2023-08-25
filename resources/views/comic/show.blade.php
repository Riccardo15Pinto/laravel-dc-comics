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

        <div class="detail-container">

            <div class="col">

                <div class="info-detail">

                    <h1>{{ $comic->title }}</h1>

                    <div id="info-avaible">

                        <div>
                            <h4>U.S. Price:
                                <span>
                                    {{ $comic->price }}
                                </span>
                            </h4>
                            <h4>Avaible</h4>
                        </div>
                        <div>
                            <h4>Check Avaiblety</h4>
                        </div>
                    </div>

                    <p>{{ $comic->description }}</p>
                </div>
            </div>
            <div class="col">
                <h1>Advertisment</h1>

                <figure>
                    <img src="{{ @Vite::asset('resources/img/adv.jpg') }}" alt="">
                </figure>
            </div>
        </div>

        <div class="detail-product">
            <div class="detail-product-container">

                <div>
                    <h2>Talent</h2>
                    <ul>
                        <li>
                            <h3>Art by:</h3>
                            <h3>
                                {{ $comic->artists }}
                            </h3>
                        </li>

                        <li>
                            <h3>Written by:</h3>
                            <h3>
                                {{ $comic->writers }}
                            </h3>
                        </li>

                    </ul>
                </div>

                <div>
                    <h2>Specs</h2>
                    <ul>
                        <li>
                            <h3>Series:</h3>
                            <h3>{{ $comic->series }}</h3>
                        </li>

                        <li>
                            <h3>U.S.Price:</h3>
                            <h3>{{ $comic->price }}</h3>
                        </li>

                        <li>
                            <h3>On Sale Date:</h3>
                            <h3>{{ $comic->sale_date }}</h3>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </section>
@endsection
