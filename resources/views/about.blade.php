@extends('layouts.app')

@section('content')
    <div class="navbar-background">
    </div>
    <div class="container">
        <div class="row py-3">
            <div class="col-md-4 col-sm-12 text-center">
                <img class="w-100" src="{{ asset('images/ola.webp') }}"/>
            </div>
            <div class="col-md-8 col-sm-12">

                <h2 class="mt-sm-3">O mnie</h2>
                <p>Jestem psycholożką i certyfikowaną psychoterapeutką poznawczo-behawioralna (PTTPB nr 1318),
                    członkinią Polskiego Towarzystwa Terapii Poznawczej i Behawioralnej.</p>

                <p>Pracuję z dziećmi, młodzieżą oraz osobami dorosłymi. Pomagam poradzić sobie z zaburzeniami
                    lękowymi, zaburzeniami nastroju, posttaumatycznymi, obsesyjno-kompulsyjnymi, a także trudnościami w
                    zakresie regulacji emocji czy relacji społecznych. Wspieram także osoby
                    w minimalizowaniu trudności, które wiążą się z neuroróżnorodnością (ASD, ADHD).</p>

                <p>Prowadzę diagnozę zaburzeń neurorozwojowych u dzieci, młodzieży i dorosłych, a także konsultacje i
                    psychoterapię indywidualną. </p>

                <p>Ukończyłam studia magisterskie na Uniwersytecie Jagiellońskim na kierunku psychologia, 4-letnie
                    szkolenie z zakresu psychoterapii poznawczo-behawioralnej, a także liczne szkolenia i kursy
                    specjalistyczne. Uczestniczyłam w stażach i wolontariatach, m.in. w Szpitalu Uniwersyteckim w
                    Krakowie.</p>

                <p>Od 2015 roku pracuję z dziećmi i młodzieżą, prowadząc terapię indywidualną, diagnozy psychologiczne,
                    konsultacje i warsztaty dla rodziców i specjalistów pracujących z młodymi ludźmi. Przez wiele lat
                    zdobywałam doświadczenie pracując w poradni psychologiczno-pedagogicznej, pracując z dziećmi
                    różnymi potrzebami edukacyjnymi, wspomagając rodziców w odnajdywaniu się w systemie oświatowym
                    i orzecznictwie.</p>

                <p>Od 2019 roku pracuje także z osobami dorosłymi mierzącymi się z własnymi wyzwaniami.
                    Pracuję w oparciu o metody potwierdzone naukowo, przede wszystkim korzystając z technik
                    psychoterapii poznawczo-behawioralnej i terapii schematów. Diagnozę na początku współpracy traktuję
                    jako początek drogi, etap który ma na celu lepsze zrozumienie drugiego człowieka, jego potrzeb i
                    mocnych stron. Wszystko po to, by pomóc w znalezieniu sposobu na lepsze poznanie siebie i uzyskanie
                    wsparcia dostosowanego do potrzeb drugiej osoby.</p>

                <p>Prywatnie uwielbiam wędrówki po górach i inne formy odpoczynku w ruchu. Czytam reportaże.
                    Karmię kota. Bardzo chciałabym zobaczyć pingwiny w naturze, na ich części Ziemi.</p>
            </div>

            {{--            <div class="col-12 mt-5">--}}
            {{--                <h2>Ważniejsze kursy i szkolenia</h2>--}}
            {{--                <ul class="bullet-list">--}}
            {{--                    <li>Praktyk Biofeedback HRV – licencja Biofeedback Labs USA</li>--}}
            {{--                    <li>Praca z rodzicami– NSPPP „Rozwijanka”</li>--}}
            {{--                    <li>Dziewczyny w spektrum – Artonomia</li>--}}
            {{--                    <li>Uprawnienia diagnostyczne Skali inteligencji Stanford-Binet 5 – PTPiP w Gdański</li>--}}
            {{--                    <li>Zastosowanie metod standardowych w rozwiązywaniu problemów diagnostycznych – PTP Oddział--}}
            {{--                        Krakowski--}}
            {{--                    </li>--}}
            {{--                    <li>Autyzm bez lęku – Fundacja SYNAPSIS</li>--}}
            {{--                    <li>Szkolenie Psychoterapii Dzieci i Młodzieży w ujęciu poznawczo - behawioralnym - NOND Mensana,--}}
            {{--                    </li>--}}
            {{--                    <li>Problemy wieku rozwojowego w ujęciu poznawczo-behawioralnym – NOND Mensana,</li>--}}
            {{--                    <li>Podstawowe zagadnienia terapii i edukacji dzieci z autyzmem - Fundacja SYNAPSIS,</li>--}}
            {{--                    <li>Karty Oceny Rozwoju Psychoruchowego – narzędzie diagnozy rozwoju dziecka w wieku 1 m.ż. - 9 r.ż.--}}
            {{--                        - KOMLOGO,--}}
            {{--                    </li>--}}
            {{--                    <li>Diagnoza małych dzieci w kierunku zaburzeń ze spektrum autyzmu - Fundacja SYNAPSIS, Program--}}
            {{--                        Wczesnego Wykrywania Autyzmu BadaBada,--}}
            {{--                    </li>--}}
            {{--                    <li>Stosowana Analiza Zachowania - UJ,</li>--}}
            {{--                    <li>Drogi i Mosty – najlepsze strategie uczenia umiejętności społecznych osób z  ASD – Fundacja--}}
            {{--                        SYNAPSIS,--}}
            {{--                    </li>--}}
            {{--                    <li>Terapia ręki. Poziom I. - Acentrum Szkolenia,</li>--}}
            {{--                    <li>Przemoc seksualna wobec dzieci – podstawy diagnozowania psychologicznego - Centrum Psychologii--}}
            {{--                        Sądowej,--}}
            {{--                    </li>--}}
            {{--                    <li>VB-MAPP: ocena umiejętności i planowanie terapii - SCOLARIS,</li>--}}
            {{--                    <li>Dam radę - szkolenie z zakresu metody KIDS' SKILLS - Esperi,</li>--}}
            {{--                    <li>Rozwijanie Kluczowych Umiejętności Komunikacyjnych - Pyramid Educational Consultants of--}}
            {{--                        Poland,--}}
            {{--                    </li>--}}
            {{--                    <li>Picture Exchange Communication System – poziom 1 –  Pyramid Educational Consultants of Poland.--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--                <p>--}}
            {{--                    Poza pracą uwielbiam wędrówki po górach o każdej porze roku, spanie w hamaku, jazdę na--}}
            {{--                    rowerze, wspinaczkę, jogę i czytanie reportaży. Powoli odkrywam, że kwiaty doniczkowe mogą żyć--}}
            {{--                    dłużej--}}
            {{--                    niż dwa tygodnie, lubię koty i bardzo chciałabym spotkać pingwiny na ich części globu.--}}
            {{--                </p>--}}
            {{--            </div>--}}
        </div>
    </div>
@endsection
