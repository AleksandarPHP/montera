<section class="invest">
    <div class="container">
        <div class="content-wrapper">
            <h4>INVESTIRAJTE U KUPOVINU</h4>
            <h3>
                Monterra Concept Termag APARTMANA u NAJMODERNIJem SKIJALIŠTu U
                REGIONU
            </h3>
            <a href="#" class="button button_secondary"> upit za ponudu </a>
        </div>
    </div>
</section>
<section class="termag">
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-6 offset-lg-1">
                    <a href="#">
                        <img
                            src="../../../public/assets/images/placeholder.png"
                            alt="logo"
                            class="img-fluid"
                        />
                    </a>
                    <h2>TERMAG</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <ul class="social">
                    <li>
                        <a href="">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                </ul>
                <h5>Pratite nas</h5>
                <p class="txt">
                    Ukoliko želite samo Vaše parče planinskog raja na
                    najpopularnijem skijalištu jugositočne Evrope, Monterra
                    concept Termag je jedini logičan izbor!
                </p>
            </div>
            <div class="col-lg-1 offset-lg-1">
                <ul>
                    <li>
                        <a href="#">O nama</a>
                    </li>
                    <li>
                        <a href="#"> SADRŽAJ </a>
                    </li>
                    <li>
                        <a href="#"> Apartmani </a>
                    </li>
                    <li>
                        <a href="#"> Kupovina </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <i class="fa-solid fa-location-dot"></i>
                <h3>lokacija</h3>
                <p>
                    Hotel Termag Jahorina, Olimpijska 4 , Bosna i Hercegovina
                    <br />
                    Telefoni: +387 57 270 422, +387 57 272 100 <br />
                    Faks: +387 57 270 423, +387 57 272 072
                </p>
                <a href="mailto:info@termaghotel.com">info@termaghotel.com</a>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <i class="fa-solid fa-envelope"></i>
                <h3>Kontakt</h3>
                <a href="mailto:info@monterratermag.com">
                    info@monterratermag.com</a
                >
                <form action="#">
                    <input type="text" placeholder="Email Adresa" />
                    <button type="submit" class="button button_secondary">
                        Pošaljite
                    </button>
                </form>
            </div>
        </div>

        <div class="lastline">
            <p>Allright Reserved - Termag Concept</p>
            <ul>
                <li>
                    <a href="#">DIsclaimer</a>
                </li>
                <li><a href="#">Privacy Policy</a>\\\</li>
                <li>
                    <a href="#">Term Of Use</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<style>
    .modal-content {
        border-radius: 0; /* Isključuje zaobljene ivice */
    }

    .my-form-control {
    display: block;
    width: 100%;
    padding: 1.375rem .75rem;
    font-size: 1.5rem;
    font-weight: 400;
    line-height: 1.5;
    color: var(--bs-body-color);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: var(--bs-body-bg);
    background-clip: padding-box;
    border: var(--bs-border-width) solid var(--bs-border-color);
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }
</style>
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl"> <!-- Prošireni modal -->
        <div class="modal-content">
            <div class="modal-header">
                {{-- <h5 class="modal-title fs-4" id="contactModalLabel">Za sva pitanja i nedoumice</h5> --}}
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/kontakt') }}" method="POST">
                    @csrf
                    <h2 class=" text-center">{{__('kontakt')}}</h2>
                    <br>
                    <br>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label fs-5">Ime <span class="text-danger">*</span></label>
                            <input type="text" class="my-form-control" name="firstName" id="firstName" placeholder="Unesite ime" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label fs-5">Prezime <span class="text-danger">*</span></label>
                            <input type="text" class="my-form-control" name="lastName" id="lastName" placeholder="Unesite prezime" required>
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label for="phone" class="form-label fs-5">Broj telefona <span class="text-danger">*</span></label>
                            <input type="tel" class="my-form-control" name="phone" id="phone" placeholder="Unesite broj telefona" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label fs-5">Mail <span class="text-danger">*</span></label>
                            <input type="email" class="my-form-control" name="email" id="email" placeholder="Unesite email" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="question" class="form-label fs-5">Postavite pitanje <span class="text-danger">*</span></label>
                        <textarea class="my-form-control" id="question" name="question" rows="4" placeholder="Unesite pitanje" required></textarea>
                    </div>
                    <br>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="button button_primary">Pošaljite</button> <!-- Veće dugme -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>
<script
    type="text/javascript"
    src="//code.jquery.com/jquery-migrate-1.2.1.min.js"
></script>
<script
    type="text/javascript"
    src="{{ asset('assets/slick-1.8.1/slick/slick.min.js') }}"
></script>
<script
    type="text/javascript"
    src="{{ asset('assets/slick-1.8.1/slick/slick.min.js') }}"
></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
></script>
<script>
    $(document).ready(function(e) {
      @if(session('status'))
      $.toast({
        heading: 'Uspijeh.',
        text: {!! json_encode(session('status')) !!},
        hideAfter: 6000,
        position: 'top-right',
        icon: 'success',
        loader: true,
        loaderBg: '#2492D1'
      });
      @endif
    })
</script>
<script src="{{ asset('assets/script/script.js') }}"></script>
</body>
</html>