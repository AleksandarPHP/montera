@section('title', Helper::title(22))
@include('partials.header', ['isTransparent' => true])
@php
    $text = Helper::text(23);
@endphp
<main>
    <section class="hero" style="min-height: 100dvh">
        <img src="{{ asset('storage/'.$text->image) }}" alt="Ski Resort">
        <div class="booking-container">
            <form method="GET" target="_blank" class="">
                <div>
                    <div>
                        <i class="fa-solid fa-calendar"></i>
                        <h4>Check in</h4>
                    </div>
                    <input type="date" id="checkIn" name="checkin_date"/>
                </div>
                <div>
                    <div>
                        <i class="fa-solid fa-calendar"></i>
                        <h4>Check out</h4>
                    </div>
                    <input type="date" id="checkOut" name="checkout_date"/>
                </div>
                <div>
                    <div>
                        <i class="fa-solid fa-user"></i>
                        <h4>Guests</h4>
                    </div>
                    <div class="gests-wrapper">
                        <div>
                            <button type="button" class="btn-decrease" onclick="updateGuestCount(-1)">-</button>
                            <input
                                name="adults" type="text" id="guest-count" value="2" min="1" max="4" readonly
                            />
                            <button type="button" class="btn-increase" onclick="updateGuestCount(1)">+</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div>
                            <i class="fa-solid fa-user"></i>
                            <h4>Children</h4>
                        </div>
                    </div>
                    <div>
                        <div class="children-wrapper"> 
                            <button type="button" class="btn-decrease" onclick="updateChildCount(-1)">-</button>
                            <input name="children" type="text" id="child-count" value="0" min="0" max="3" readonly
                            />
                            <button type="button" class="btn-increase" onclick="updateChildCount(1)">+</button>
                        </div>
                    </div>
                </div>
                <input type="hidden" value="1" name="nights" id="ReserveNights">
                <div>
                    <button type="submit" class="btnn btn_secondary">
                        Book now
                    </button>
                </div>
            </form>
        </div>
    </section>

    <div class="location-frame-container">
        <div data-aos-duration="1500" data-aos="fade-left">{{$text->title}}</div>
        <div data-aos="zoom-in" data-aos-duration="1500" class="image-frame location-frame" style="background-image: url('{{ asset('assets/images/okvir-2.png') }}'); ">
            <div class="image-text">
                <p class="image-text-small">
                    {{$text->subtitle}}</p>
            </div>
        </div>
    </div>
    @php
        $text = Helper::text(24);
    @endphp
    <div class="simple-column-section">
        <h1 class="title" data-aos="fade-left" data-aos-duration="1500">{{$text->title}}</h1>
        <h2 class="subtitle" data-aos="fade-left" data-aos-duration="2000">{{$text->subtitle}}</div>
        <div class="simple-column-container">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1300">{!!$text->description!!}</div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1300">{!!$text->description2!!}</div>
        </div>
    </div>

    <section class="apartments">
        <h2 class="title" data-aos="zoom-in" data-aos-duration="1500">basic->title</h2>
        <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="slider">
                            <div>
                                <div>
                                    <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="content-wrapper" data-aos="fade-down" data-aos-duration="1500">
                        <h5>basic->subtitle</h5>
                            <p>
                            basic->text
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="apartments apartments-2">
        <h2 class="title" data-aos="zoom-in" data-aos-duration="1500">studio->title</h2>
        <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-wrapper" data-aos="fade-down" data-aos-duration="1500">
                        <h5>studio->subtitle</h5>
                            <p>
                            studio->text
                            </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="slider">
                            <div>
                                <div>
                                    <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="apartments apartments-3">
        <h2 class="title" data-aos="zoom-in" data-aos-duration="1500">grand->title</h2>
        <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="slider">
                            <div>
                                <div>
                                    <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="content-wrapper" data-aos="fade-down" data-aos-duration="1500">
                        <h5>grand->subtitle</h5>
                            <p>
                            grand->text
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="apartments apartments-4">
        <h2 class="title" data-aos="zoom-in" data-aos-duration="1500">grand+->title</h2>
        <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="slider">
                            <div>
                                <div>
                                    <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="content-wrapper" data-aos="fade-down" data-aos-duration="1500">
                        <h5>grand+->subtitle</h5>
                            <p>
                            grand+->text
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <div class="contact-container">
        <div class="contact-info">
            <h2 class="title" data-aos="fade-left" data-aos-duration="1500">Get in touch</h2>
            <p data-aos="fade-left" data-aos-duration="2000">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        
            <div class="contact-info-data" data-aos="fade-left" data-aos-duration="2000">
                <h3>Kontakt informacije</h3>
                <ul>
                    <li><i class="fas fa-phone-alt"></i> +387000000</li>
                    <li><i class="fas fa-envelope"></i> mail@mail.com</li>
                    <li><i class="fas fa-map-marker-alt"></i> Adresa</li>
                </ul>
            </div>
        </div>

        <div class="contact-form" data-aos="fade-right" data-aos-duration="2000">
            <form method="post" name="contact-form">
                <input type="hidden" name="post_id" value="101">
                <input type="hidden" name="form_id" value="ccca9af">
                
                <label for="name">Ime</label>
                <input type="text" id="name" name="name" placeholder="Name" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
                
                <label for="message">Poruka</label>
                <textarea id="message" name="message" rows="4" placeholder="Message" required></textarea>
                
                <button type="submit">Pošalji</button>
            </form>
        </div>
    </div>
    <script>
    function formatDate(date) {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0'); // Dodaje 0 ispred jednocifrenih meseci
        const day = String(date.getDate()).padStart(2, '0');       // Dodaje 0 ispred jednocifrenih dana
        return `${year}-${month}-${day}`;
    }

    function addDays(date, days) {
        const result = new Date(date);
        result.setDate(result.getDate() + days);
        return result;
    }

    const checkInInput = document.getElementById('checkIn');
    const checkOutInput = document.getElementById('checkOut');

    const today = new Date();
    checkInInput.value = formatDate(today);
    checkOutInput.value = formatDate(addDays(today, 1));

    function syncCheckOut() {
        const checkInDate = new Date(checkInInput.value);
        if (!isNaN(checkInDate.getTime())) { 
            console.log('ispravno');
            
            checkOutInput.value = formatDate(addDays(checkInDate, 1));
        }
    }

    checkInInput.addEventListener('input', syncCheckOut);

    function updateGuestCount(change) {
        const input = document.getElementById("guest-count");
        let currentValue = parseInt(input.value);

        const newValue = currentValue + change;
        if (newValue >= 1 && newValue <= 4) {
            input.value = newValue;
        }
    }

    function updateChildCount(change) {
        const inputCh = document.getElementById("child-count");
        let currentChValue = parseInt(inputCh.value);

        const newChValue = currentChValue + change;
        if (newChValue >= 0 && newChValue <= 3) {
            inputCh.value = newChValue;
        }
    }
    </script>
</main>

@include('partials/footer')