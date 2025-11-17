@section('title',Helper::title(14))
@include('partials.header', ['isTransparent' => false])
@php
    $text = Helper::text(15);
@endphp
<main>
    <section class="hero" style="min-height: 100dvh">
        <img src="{{ asset('storage/'.$text->image) }}" alt="Ski Resort">
    </section>

    <div class="location-frame-container">
        <div data-aos-duration="1500" data-aos="fade-left">{{$text->title}}</div>
    </div>
    
    <div class="contact-container mt-5">
        <div class="contact-info">
            <h2 class="title" data-aos="fade-left" data-aos-duration="1500">{{ __('Contact form') }}</h2>
            <p data-aos="fade-left" data-aos-duration="2000">{{__('If you have any additional questions, please contact us by email or by calling the phone number:')}}</p>
        
            <div class="contact-info-data" data-aos="fade-left" data-aos-duration="2000">
                <h3>{{ __('Contact info') }}</h3>
                <ul>
                    @if ($settings->phone)<li><i class="fas fa-phone-alt"></i>  {{$settings->phone}}</li>@endif
                    @if ($settings->phone)<li><i class="fas fa-envelope"></i>  {{$settings->email}}</li>@endif
                    @if ($settings->phone)<li><i class="fas fa-map-marker-alt"></i> {{$settings->address}}</li>@endif
                </ul>
            </div>
        </div>

        <div class="contact-form" data-aos="fade-right" data-aos-duration="2000">
            <form method="post" name="contact-form">

                <label for="name">{{__('Name')}}</label>
                <input type="text" id="name" name="Name goes here" placeholder="Name" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="Email goes here" placeholder="Email" required>
                
                <label for="message">{{__('Message')}}</label>
                <textarea id="message" name="message" rows="4" placeholder="Message text goes here" required></textarea>
                
                <button type="submit">{{__('Send')}}</button>
            </form>
        </div>
    </div>
</main>

@include('partials/footer')