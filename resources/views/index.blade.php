@include('partials.header', ['isTransparent' => true])

<main>
    <section class="hero" style="min-height: 100dvh">
        <video autoplay loop muted playsinline class="hero-video" style="width: 100%; height: 100%; object-fit: cover;">
            <source src="{{ asset('assets/videos/hero-video.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="container" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
            <h1>Welcome to Monterra Concept</h1>
            <p>Discover your new lifestyle</p>
        </div>
    </section>
    <section class="concept-termag">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <img src="{{ asset('assets/images/concept-termag-1.png') }}" alt="Concept Termag Image 1" class="img-fluid">
                        <img src="{{ asset('assets/images/concept-termag-2.png') }}" alt="Concept Termag Image 2" class="img-fluid mt-3">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="title">Monterra Concept Termag</h2>
                    <p class="subtitle">Vaše parče planinskog raja</p>
                    <p>
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
</main>
