@extends('layouts.app')
@section('content')
<main>
    <section class="content-page-banner">
        <div class="bg" style="background-image: url('{{asset("assets/images/placeholder.png")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <p>Monterra Kompleks ima 12 tipova apartmana + prateće sadržaje:  <br />
                    recepciju, parking, skijašnicu, restoran i vešeraj</p>
            </div>
        </div>
    </section>
 
    <section class="apartments">
        <h2 class="title">Apartmani</h2>
        <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="slider">
                        <div>
                            <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-wrapper">
                        <h5>Po strukturi apartmani su dvosobni i trosobni, sa 
                        kvadraturom od 41 m2 do 121 m2.</h5>
                            <p>
                            Monterra je nezavisan, multifunkcionalan kompleks koji budućim vlasnicima nudi 81 
                            apartman, opremljen najkvalitetnijim i prirodnim materijalima, u neoplaninskom stilu.
                            </p>
                            <p>
                            Monterra je nezavisan, multifunkcionalan kompleks koji budućim vlasnicima nudi 81 
                            apartman, opremljen najkvalitetnijim i prirodnim materijalima, u neoplaninskom stilu.
                            </p>
                            <p>
                            Monterra je nezavisan, multifunkcionalan kompleks koji budućim vlasnicima nudi 81 
                            apartman, opremljen najkvalitetnijim i prirodnim materijalima, u neoplaninskom stilu.
                            </p>
                    </div>
                </div>
            </div>
            <div class="slider-control">
                <button class="prev-arrow" aria-label="Previous" type="button">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button class="next-arrow"  aria-label="Next" type="button">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="button-wrapper">
        <a href="{{ Helper::url('sprat/1') }}" class="button button_secondary">Kompletna ponuda</a>
    </div>
    </section>

    <section class="apartments apartments-2">
        <h2 class="title">Recepcija</h2>
        <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-wrapper">
                        <p>
                            Vlasnicima i posjetiocima kompleksa Monterra concept Termag na raspolaganju su 
                        usluge recepcije,  a osoblje recepcije je obučeno po standardima hotela Termag.
                        </p>
                        <h5>
                            Vlasnicima apartmana pruža usluge 
                            check in i check out, vođenje  knjige gostiju, 
                            izdavanje ključeva. 
                        </h5>
                        <p>
                            osoblje recepcije se stara o organizaciji čišćenja i održavanja apartmana, te vrši 
                            svakodnevni obilazak i monitoring, što garantuje sigurnost i bezbjednost, kako 
                            vlasnicima, tako i gostima kompleksa Monterra concept Termag. 
                        </p>
                        <p>
                            Zahvaljujući službi recepcije Vaša nekretnina je u potpunosti sigurna, 
                            a komoditet zagarantovan
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="slider-2">
                        <div>
                            <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-control">
            <button class="prev-arrow prev-arrow-2" aria-label="Previous" type="button">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button class="next-arrow next-arrow-2"  aria-label="Next" type="button">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
    </div>
    </section>

    <section class="apartments apartments-3">
        <h2 class="title">SKIJAŠNICA</h2>
        <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="slider-3">
                        <div>
                            <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-wrapper">
                            <p>
                                Skijašnica Monterra kompleksa predstavlja zajednički prostor u kojem svaki 
                                apartman ima svoj boks za odlaganje ski opreme, adekvatno veličini 
                                apartmana.
                            </p>
                            <h5>
                                Posebna pogodnost za sve vlasnike apartmana je ta 
                                što boks za odlaganje opreme ulazi u osnovnu 
                                cijenu apartmana, ne plaća se dodatno.  
                            </h5>
                            <p>
                                Skijašnica je opremljena sa najmodernijim boksovima kompanije 
                                Wintersteiger, a pored toga što imaju sistem kartičnog otključavanja, nude 
                                mogućnost sušenja i zagrijavanja ski opreme. Moderno i funkcionalno 
                                rješenje za uživanje u skijaškim danima.
                            </p>
                    </div>
                </div>
            </div>
            <div class="slider-control">
                <button class="prev-arrow prev-arrow-3" aria-label="Previous" type="button">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button class="next-arrow next-arrow-3"  aria-label="Next" type="button">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
    </section>

    <section class="apartments apartments-2">
        <h2 class="title">VEŠERAJ</h2>
        <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-wrapper">
                        <p>
                            Monterra concept Termag u svom sastavu ima i najmoderniji vešeraj čije 
                            usluge mogu koristiti i vlasnici i gosti apartmana. Savremena oprema uz 
                            korištenje sertifikovanih sredstava za pranje garantuje uvijek svježu i mirisnu 
                            posteljinu, za lak i ugodan san. Pored usluge pranja vešeraj ima i posebnu 
                            službu održavanja koja se brine za higijenu zajedničkih prostorija ali i 
                            apartmana. 
                        </p>
                        <h5>
                            Komplet vešeraj funkcioniše po koceptu Termag 
                            hotela te osigurava ispunjavanje najstrožijih 
                            kriterijuma i standarda kada je higijena prostora u 
                            pitanju.
                        </h5>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="slider-4">
                        <div>
                            <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-control">
            <button class="prev-arrow prev-arrow-4" aria-label="Previous" type="button">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button class="next-arrow next-arrow-4"  aria-label="Next" type="button">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
    </div>
    </section>
</main>

@endsection