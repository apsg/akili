@extends('layouts.app')

@section('content')

    <particles>
        <div class="d-flex justify-content-center align-items-center h-100">
            <div>
                <h1 class="text-white text-center main-title text-light text-uppercase">{{ config('app.name') }}</h1>
                <h3 class="text-white text-center sub-title">{{ config('app.subname') }}</h3>
            </div>
        </div>
    </particles>

    <div class="my-5 container">
        <div class="row">
            <div class="col-1 text-right">
                <span style="font-size: 50px">"</span>
            </div>
            <div class="col-9">
                <p class="text-large">Osoba rozpoczynająca terapię to ktoś, kto wspina się na swoją górę tam, a
                    terapeutka wspina się na
                    swoją
                    górę tutaj. Z miejsca, w którym znajduję się na swojej górze widzę różne rzeczy na Twojej górze,
                    których
                    Ty
                    nie dostrzegasz, np. że istnieje jakaś alternatywna droga, którą możesz pójść albo że istnieje
                    ryzyko
                    zejścia lawiny.
                </p>
                <p class="text-right">
                    Harris, R. Zrozumieć ACT
                </p>
            </div>
        </div>
    </div>

    <panel image="{{ asset('images/gora2.svg') }}">
        <div>
            <h2>Psychoterapia</h2>
            <p class="text-justify">Prowadzę psychoterapię indywidualną osób dorosłych, dzieci oraz młodzieży.
                Pracuję w nurcie poznawczo-behawioralnym z wykorzystaniem technik trzeciej fali.
                W procesie terapeutycznym kluczowa jest dla mnie relacja terapeutyczna oraz dostosowanie technik do
                celów i potrzeb osoby korzystającej z terapii, przy uwzględnieniu wyników badań dotyczących skuteczności
                proponowanych metod. </p>
            <scroll-button
                class="text-center"
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
            <p class="text-justify">Diagnoza to forma krótkotrwałego kontaktu. Ma na celu ustalenie przyczyn lub
                mechanizmów powstawania i utrzymywania się trudności w rozwoju małego człowieka. Diagnoza zakłada
                łącznie 4-5 spotkań: z osobami dorosłymi opiekującymi się dzieckiem celem zebrania wywiadu rozwojowego
                oraz by podsumować proces diagnostyczny, 2 spotkania z dzieckiem oraz analizę dostarczonej dokumentacji,
                filmów. Czasem dodatkowo przeprowadzana jest obserwacja dziecka w środowisku rówieśniczym, np. w szkole.
                Na prośbę rodziców przygotowywane są także opinia i zalecenia na piśmie. </p>
            <scroll-button
                class="text-center"
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
            <p class="text-justify">
                Diagnoza możliwości poznawczych z reguły wykonywana jest do celów orzeczniczych, jednak nie jest to
                konieczny warunek. Badanie, w zależności od wybranej metody oraz formy psychofizycznej osoby badanej,
                odbywa się podczas jednego lub kilku spotkań. Możliwe jest przygotowanie opinii pisemnej dotyczącej
                wyników badania oraz opis zaleceń, gdy to konieczne.
            </p>
            <scroll-button
                class="text-center"
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
            <p>
                Szkolenia przygotowywane są z uwagą na oczekiwania i potrzeby osób biorących w nich udział. Mają one
                charakter warsztatowy lub wykładowy. Forma ustalana jest na początku współpracy. Dotychczas
                przygotowywane szkolenia dotyczyła zaburzeń rozwojowych i neurorozwojowych, strategii pracy z dziećmi,
                których rozwój przebiega w sposób atypowy, profilaktyki zdrowia psychicznego, komunikacji.
            </p>
            <scroll-button
                class="text-center"
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
            <p>
                To forma krótkotrwałego kontaktu. Ma na celu ustalenie źródła doświadczanych trudności, wypracowanie
                strategii, które będą mogły pomóc w osiągnięciu oczekiwanego celu.
            </p>
            <scroll-button
                class="text-center"
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
