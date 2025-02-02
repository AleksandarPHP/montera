@include('partials.header', ['isTransparent' => true])

<main>
    <section class="hero" style="min-height: 100dvh">
        <img src="{{ asset('assets/images/location-background.png') }}" alt="Ski Resort">
    </section>

    <div class="location-frame-container">
        <div data-aos-duration="1500" data-aos="fade-left">Monterra concept Termag</div>
        <div data-aos="zoom-in" data-aos-duration="1500" class="image-frame location-frame" style="background-image: url('{{ asset('assets/images/okvir-2.png') }}'); ">
            <div class="image-text">
                <p class="image-text-small">
                    Super moderan,
                    energetski nezavisan i
                    efikasan, izvrsno
                    lociran kompleks
                    apartmana u centru
                    olimpijskog ski
                    resorta</p>
            </div>
        </div>
    </div>
    
    <div class="simple-column-section">
        <h1 class="title" data-aos="fade-left" data-aos-duration="1500">Vaše parče planinskog raja</h1>
        <h2 class="subtitle" data-aos="fade-left" data-aos-duration="2000">na najpopularnijem skijalištu jugositočne Evrope</div>
        <div class="simple-column-container">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1300">Monterra concept Termag kompleks apartmana se nalazi na oimpijskoj planini
                Jahorina, udaljen svega 30km od međunarodnog aerodroma Sarajevo ili 40 min
                ugodne vožnje.</div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1300">
                Smještena na glavnoj saobraćajnici koja se proteže kroz ski centar, Monterra je od
                prve staze, Novak Đoković, udaljena samo 250m, a od hotela Termag i staze Poljice
                svega 200m. Izvrsno pozicionirana i na nadmorskoj visini od 1550 m/Nv Monterra
                concept Termag je prava oaza zdravog prostora.</div>
        </div>
    </div>
</main>

@include('partials/footer')