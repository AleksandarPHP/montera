@include('partials.header', ['isTransparent' => true])

<main>
    <section class="hero" style="min-height: 100dvh">
        <img src="{{ asset('assets/images/location-background.png') }}" alt="Ski Resort">
    </section>

    <div class="location-frame-container">
        <div>Monterra concept Termag</div>
        <div class="image-frame location-frame" style="background-image: url('{{ asset('assets/images/okvir-2.png') }}'); ">
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
        <h1 class="title">Vaše parče planinskog raja</h1>
        <h2 class="subtitle">na najpopularnijem skijalištu jugositočne Evrope</div>
        <div class="simple-column-container">
            <div class="col-lg-6">Monterra concept Termag kompleks apartmana se nalazi na oimpijskoj planini
                Jahorina, udaljen svega 30km od međunarodnog aerodroma Sarajevo ili 40 min
                ugodne vožnje.</div>
            <div class="col-lg-6">
                Smještena na glavnoj saobraćajnici koja se proteže kroz ski centar, Monterra je od
                prve staze, Novak Đoković, udaljena samo 250m, a od hotela Termag i staze Poljice
                svega 200m. Izvrsno pozicionirana i na nadmorskoj visini od 1550 m/Nv Monterra
                concept Termag je prava oaza zdravog prostora.</div>
        </div>
    </div>

    <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2882.8082803301954!2d18.56541387600685!3d43.73530947109838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4758bfcbd0b76b95%3A0xaeca4a33633713f8!2z0KLQtdGA0LzQsNCzINCl0L7RgtC10Ls!5e0!3m2!1ssr!2sus!4v1737678366655!5m2!1ssr!2sus" 
            width="600" height="450" style="border:0;" 
            allowfullscreen="" loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</main>

@include('partials/footer')