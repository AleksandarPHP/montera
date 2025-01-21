@include('partials.header', ['isTransparent' => true])

<main>
    <section class="hero" style="min-height: 100dvh">
        <video autoplay loop muted playsinline class="hero-video">
            <source src="{{ asset('assets/videos/hero-video.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="container">
            <img src="{{ asset('assets/images/index-logo.png') }}" alt="Index logo">
        </div>
    </section>
    <section class="concept-termag">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 concept-termag-images">
                    <div class="image-wrapper">
                        <img src="{{ asset('assets/images/concept-termag-1.png') }}" alt="Ski Resort" class="large-image">
                        <img src="{{ asset('assets/images/concept-termag-2.png') }}" alt="Building View" class="small-image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="subtitle">Monterra Concept Termag</h2>
                    <h1 class="title">Vaše parče planinskog raja</h1>
                    <p class="emphasis">
                        Monterra concept Termag je super moderan, energetski nezavisan i efikasan, izvrsno lociran kompleks apartmana u samom središtu olimpijske planine Jahorine.
                    </p>
                    <p>
                        Monterra concept Termag kompleks apartmana se nalazi na olimpijskoj planini Jahorina, udaljen svega 30km od međunarodnog aerodroma Sarajevo ili 40 min ugodne vožnje. 
                    </p>
                    <p>
                        Smještena na glavnoj saobraćajnici koja se proteže kroz ski centar, Monterra je od prve staze, Novak Đoković, udaljena samo 250m, a od hotela Termag i staze Poljice svega 200m. Izvrsno pozicionirana i na nadmorskoj visini od 1550 m/Nv Monterra concept Termag je prava oaza zdravog prostora.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="rent-apartment">
        <div class="container">
            <div class="section-header">
                <h2 class="title">IZNAJMLJIVANJE APARTMANA</h2>
            </div>

            <div class="apartment-section">
                <div class="row">
                    <div class="col-lg-6 apartment-column ac-bord">
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

                    <div class="col-lg-6 apartment-column">
                        <p>
                        tekst o specifičnosti Basic apartmana, sadržaj apartmana, cijene izdavanja, BOOK NOW dugme, trenutno povezati na kontakt formu koja će u vidu maila ići na adresu rezervacije@monterratermag.com
                        </p>
                        <img src="{{asset('assets/images/placeholder.png')}}" alt="Basic Apartment" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="apartment-section">
                <div class="row">
                    <div class="col-lg-6 apartment-column ac-padd ac-bord">
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
                    <div class="col-lg-6 apartment-column ac-padd">
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

    <section class="apartments">
        <h2 class="title">Kupovina Apartmana</h2>
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
    </section>

    <section class="apartments apartments-3">
        <h2 class="title">Restoran Montera</h2>
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
    </section>

    <section class="eco-friendly">
        <div class="eco-bg-container">
            <img src="{{ asset('assets/images/logs.png') }}" alt="Eco Friendly Background" class="eco-bg">
            <div class="eco-overlay">
                <h2 class="eco-title">Eco Friendly</h2>
            </div>
        </div>
    </section>


</main>

@include('partials/footer')