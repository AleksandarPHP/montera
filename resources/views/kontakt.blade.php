@section('title','Kontakt formular')
@include('partials.header', ['isTransparent' => false])
@php
    $text = Helper::text(15);
@endphp
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.nocaptcha.sitekey') }}"></script>
<main>
    <div class="location-frame-container">
        <h1 class="title" data-aos-duration="1500" data-aos="fade-left">Kontakt formular</h1>
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
            <form method="post" action="{{ 'kontakt' }}" name="contact-form">
                @csrf
                <label for="name">{{__('Name')}}</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="{{__('Name')}}" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
                
                <label for="message">{{__('Message')}}</label>
                <textarea id="message" name="message" rows="4" placeholder="{{__('Message text goes here')}}" required>{{ old('message') }}</textarea>
                <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

                <script>
                    grecaptcha.ready(function() {
                        grecaptcha.execute('{{ config('services.nocaptcha.sitekey') }}', {action: 'submit'}).then(function(token) {
                            document.getElementById('g-recaptcha-response').value = token;
                        });
                    });
                </script>
                <button type="submit">{{__('Send')}}</button>
            </form>
        </div>
    </div>
</main>
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
      @if($errors->any())
      $.toast({
        heading: 'Error.',
        text: [
          @foreach($errors->all() as $error)
          {!! json_encode($error) !!},
          @endforeach
        ],
        hideAfter: 7000,
        position: 'top-right',
        icon: 'error',
        loader: true,
        loaderBg: '#2492D1'
      });
      @endif
    })
</script>
@include('partials/footer')