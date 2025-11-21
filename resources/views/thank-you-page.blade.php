@section('title','Thank you')
@include('partials.header', ['isTransparent' => false])
@php
    $text = Helper::text(15);
@endphp
<main>
    <div class="thank-you-frame-container">
        <h1 class="title" data-aos-duration="1500" data-aos="fade-left">{{ __('Thank You') }}!</h1>
        <p class="my-4" data-aos-duration="1500" data-aos="fade-left">
            Vaša poruka je uspješno poslana. Javićemo vam se u najkraćem mogućem roku.
        </p>
        <a href="{{ Helper::url('/') }}" class="button button_secondary my-4" data-aos-duration="1500" data-aos="flip-left">{{__('Back to home')}}</a>
    </div>
        </div>
</main>
@include('partials/footer')