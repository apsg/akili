@extends('layouts.app')

@section('content')

    <particles>
        <div class="d-flex justify-content-center align-items-center h-100">
            <div>
                <h1 class="text-white text-center main-title text-light text-uppercase">{{ config('app.name') }}</h1>
                <h3 class="text-white text-center">{{ config('app.subname') }}</h3>
            </div>
        </div>
    </particles>

    <panel image="{{ asset('images/gora2.svg') }}">
        <div>
            <h2>Psychoterapia</h2>
            <p>Opis psychoterapia</p>
            <scroll-button
                v-on:clicked-button="changeType"
                scrollto="#kontakt"
                interest="Psychoterapia">
                Kontakt
            </scroll-button>
        </div>
    </panel>


    <panel image="{{ asset('images/gora2.svg') }}"
           align="right">
        <div>
            <h2>Diagnoza i terapia zaburzeń rozwojowych dzieci i młodzieży</h2>
            <p>Opis psychoterapia</p>
            <scroll-button
                v-on:clicked-button="changeType"
                scrollto="#kontakt"
                interest="Diagnoza zaburzeń">
                Kontakt
            </scroll-button>
        </div>
    </panel>

    <panel v-on:clicked-button="changeType"
           image="{{ asset('images/gora2.svg') }}">
        <div>
            <h2>Diagnoza możliwości poznawczych</h2>
            <p>Opis psychoterapia</p>
            <scroll-button
                v-on:clicked-button="changeType"
                scrollto="#kontakt"
                interest="Możliwości poznawcze">
                Kontakt
            </scroll-button>
        </div>
    </panel>

    <panel image="{{ asset('images/gora2.svg') }}" align="right">
        <div>
            <h2>Szkolenia dla rodziców, specjalistów i specjalistek</h2>
            <p>Opis psychoterapia</p>
            <scroll-button
                v-on:clicked-button="changeType"
                scrollto="#kontakt"
                interest="Szkolenia">
                Kontakt
            </scroll-button>
        </div>
    </panel>

    <panel image="{{ asset('images/gora2.svg') }}">
        <div>
            <h2>Wsparcie rodziców, specjalistek i specjalistów</h2>
            <p>Opis psychoterapia</p>
            <scroll-button
                v-on:clicked-button="changeType"
                scrollto="#kontakt"
                interest="Wsparcie">
                Kontakt
            </scroll-button>
        </div>
    </panel>

    <div id="kontakt"></div>
    <contact :type="type"></contact>

@endsection
