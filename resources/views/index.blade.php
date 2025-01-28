@include('partials.header', ['isTransparent' => true])

<main>
    <section class="hero" style="min-height: 100dvh">
        <video autoplay loop muted playsinline class="hero-video" poster="{{ asset('assets/images/hero-image.webp') }}">
            <source src="{{ asset('assets/videos/hero-video.mp4') }}" type="video/mp4">
        </video>
        <div class="container">
            <div class="image-frame" style="background-image: url('{{ asset('assets/images/okvir-2.png') }}');">
                <div class="image-text">
                    <p class="image-text-soft" data-aos="flip-right" data-aos-duration="1500">parče raja</p>
                    <p data-aos="flip-right"data-aos-duration="900">na Jahorini</p>
                </div>
            </div>
        </div>
    </section>
    <section class="concept-termag">
        <div class="container">
            <div class="row">
                @php $text =  Helper::text(2) @endphp
                <div class="col-lg-6 concept-termag-images">
                    <div class="image-wrapper">
                        @isset($text->image)<img src="{{ asset('storage/'.$text->image) }}" alt="Ski Resort" class="large-image" data-aos="fade-right" data-aos-duration="2000">@endisset
                        @isset($text->image2)<img src="{{ asset('storage/'.$text->image2) }}" alt="Building View" class="small-image" >@endisset
                    </div>
                </div>
                <div class="col-lg-6" >
                    @isset($text->subtitle)<h2 class="subtitle" data-aos="fade-left" data-aos-duration="1500">{{$text->subtitle}}</h2>@endisset
                    @isset($text->title)<h1 class="title" data-aos="fade-left" data-aos-duration="2000">{{$text->title}}</h1>@endisset
                    @isset($text->description){!!$text->description!!}@endisset
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <section class="rent-apartment">
        <div class="container">
            <div class="section-header">
                <h2 class="title" data-aos="zoom-in" data-aos-duration="1500">IZNAJMLJIVANJE APARTMANA</h2>
            </div>

            <div class="apartment-section">
                <div class="row">
                    <div class="col-lg-6 apartment-column ac-bord" data-aos="fade-down-right" data-aos-duration="1300">
                        <h3>Basic Apartman</h3>
                        <p>
                            vodni text Uvodni textUvodni textUvodni textUvodni textUvodni textUvodni textUvodni text
                        </p>
                        <div class="slider">
                            <div>
                                <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-control" style="text-align: center;">
                            <button class="prev-arrow" aria-label="Previous" type="button">
                                <i class="fa-solid fa-arrow-left"></i>
                            </button>
                            <button class="next-arrow"  aria-label="Next" type="button">
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <div class="col-lg-6 apartment-column" data-aos="fade-down" data-aos-duration="1300">
                        <p>
                        tekst o specifičnosti Basic apartmana, sadržaj apartmana, cijene izdavanja, BOOK NOW dugme, trenutno povezati na kontakt formu koja će u vidu maila ići na adresu rezervacije@monterratermag.com
                        </p>
                        <img src="{{asset('assets/images/placeholder.png')}}" alt="Basic Apartment" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="apartment-section">
                <div class="row">
                    <div class="col-lg-6 apartment-column ac-padd ac-bord" data-aos="fade-down-right" data-aos-duration="1100">
                        <p>
                            Uvodni Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text
                        </p>
                        <div class="slider">
                            <div>
                                <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-control" style="text-align: center;">
                            <button class="prev-arrow" aria-label="Previous" type="button">
                                <i class="fa-solid fa-arrow-left"></i>
                            </button>
                            <button class="next-arrow"  aria-label="Next" type="button">
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6 apartment-column ac-padd" data-aos="fade-down" data-aos-duration="1100">
                        <h3>Grand Apartman</h3>
                        <p>
                            tekst o specifičnosti Basic apartmana, sadržaj apartmana, cijene izdavanja, BOOK NOW dugme, trenutno povezati na kontakt formu koja će u vidu maila ići na adresu rezervacije@monterratermag.com
                        </p>
                        <div class="slider">
                            <div>
                                <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-control" style="text-align: center;">
                            <button class="prev-arrow" aria-label="Previous" type="button">
                                <i class="fa-solid fa-arrow-left"></i>
                            </button>
                            <button class="next-arrow"  aria-label="Next" type="button">
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="apartment-section" style="text-align: center;">
                <div class="row">
                    <div class="col-lg-6 apartment-column ac-padd ac-bord">
                </div>
            </div>
            <button class="down-arrow"  aria-label="Next" type="button">
                <i class="fa-solid fa-arrow-down"></i>
            </button>
        </div>
    </section>

    <section class="apartments apartments-2">
        <h2 class="title" data-aos="zoom-in" data-aos-duration="1500">Recepcija</h2>
        <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-wrapper" data-aos="fade-down" data-aos-duration="1500">
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
        <h2 class="title" data-aos="zoom-in" data-aos-duration="1500">Restoran Montera</h2>
        <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="slider">
                        <div>
                            <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-wrapper" data-aos="fade-down" data-aos-duration="1500">
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
    </section>

    <section class="eco-friendly-section" style="background-image: url('{{ asset('assets/images/logs.png') }}'); ">
        <div class="image-frame" style="background-image: url('{{ asset('assets/images/okvir-2.png') }}'); ">
            <div class="image-text" >
                <p data-aos="flip-left" data-aos-duration="1500">eco friendly</p>
            </div>
        </div>
        <div class="ec-container">
            <div class="content">
                <div class="col-lg-6 column-left">
                    <p class="column-left-text" data-aos="fade-down" data-aos-duration="1500">
                    Sve poslovne jedinice kompanije Termag za zagrijavanje koriste bio masu, kao
                    energent koji emituje najmanje štetnih gasova. Korištenje pametnih i održivih
                    izolacijskih materijala, prirodnih materijala te led rasvjete u mnogome doprinosimo
                    uštedi električne energije. Prilikom gradnje kompleksa Monterra koristimo proizvode
                    od kompanjia kao što je Rehau, kompanija koja je član "50 Sustainbility & climate
                    leaders" koja do 2025. planira da procenat recikliranih materijala u proizvodnji
                    poveća za 15%, čime će emisiju CO2 smanjiti za 30%.
                    </p>
                </div>
                <div class="col-lg-6 column-contrast">
                    <p class="text-right" data-aos="fade-up" data-aos-duration="1500">
                    OČUVANJE ŽIVOTNE SREDINE JE GLAVNI ZADATAK ČOVJEČANSTVA I JEDAN OD STRATEŠKIH CILJEVA KOMPANIJE TERMAG. NE SAMO KROZ PODIZANJE SVIJESTI VEĆ I KONKRETNIH KORAKA IZ DANA U DAN KRIČIMO SVOJ PUT ZA POSTIZANJE OVOG CILJA.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

@include('partials/footer')