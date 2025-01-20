@include('partials.header')

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
    <section class="hero" style="min-height: 100dvh">
        
    </section>
</main>
