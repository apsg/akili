@extends('layouts.app')

@section('content')

    <particles>
        <div class="d-flex justify-content-center align-items-center h-100">
            <div>
                <h1 class="text-white text-center main-title">Akili</h1>
                <h3 class="text-white text-center">Psychoterapia Aleksandra Magda</h3>
            </div>
        </div>
    </particles>

    <panel image="{{ asset('images/gora2.svg') }}">
        <div>
            <h2>Psychoterapia</h2>
            <p>Opis psychoterapia</p>
        </div>
    </panel>


    <panel image="{{ asset('images/gora2.svg') }}" type="right">
        <div>
            <h2>Psychoterapia</h2>
            <p>Opis psychoterapia</p>
        </div>
    </panel>

@endsection
