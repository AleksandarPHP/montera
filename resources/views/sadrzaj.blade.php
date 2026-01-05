@section('title', Helper::title(17))
@extends('layouts.app')
@section('content')
@php
    $text = Helper::text(18) 
@endphp
<main>
    <section class="content-page-banner">
        <div class="bg" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <p>{{$text->title}}  <br />
                    {{$text->subtitle}}</p>
            </div>
        </div>
    </section>
    <div class="button-wrapper my-5">
        <a href="{{ Helper::url('sprat/1') }}" class="button button_primary">
            {{__('Complete offer')}}
        </a>
        <a href="{{ Helper::url('kontakt') }}" class="button button_primary mt-3 mx-4">{{__('request for quotation')}}</a>
    </div>
    @php
        $slider = Helper::slider(1);
    @endphp
    <section class="apartments">
        <h2 class="title" data-aos="zoom-in" data-aos-duration="1500">{{$slider->title}}</h2>
        <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="slider">
                        @for ($i = 1; $i <= 4; $i++)
                        @php
                            $img = 'image'.$i;   
                        @endphp
                            <div>
                                @if (!is_null($slider->$img))
                                    <img src="{{Helper::image($slider->$img, 1200, 800, false)}}" alt="" class="img-fluid">
                                @else
                                <div>
                                    <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                                </div>
                                @endif
                            </div>
                        @endfor
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="content-wrapper" data-aos="fade-down" data-aos-duration="1500">
                        <h5>{{$slider->subtitle}}</h5>
                            <p>
                            {{$slider->text}}
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
    </div>
    <div class="button-wrapper">
        <a href="{{ Helper::url('sprat/1') }}" class="button button_secondary">{{__('Complete offer')}}</a>
    </div>
    </section>
    @php
        $slider = Helper::slider(2);
    @endphp
    <section class="apartments apartments-2">
        <h2 class="title" data-aos="zoom-in" data-aos-duration="1500">{{$slider->title}}</h2>
        <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-wrapper" data-aos="fade-down" data-aos-duration="1500">
                        <h5>{{$slider->subtitle}}</h5>
                        <p>
                            {{$slider->text}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="slider-2">
                        @for ($i = 1; $i <= 4; $i++)
                        @php
                            $img = 'image'.$i;   
                        @endphp
                            <div>
                                @if (!is_null($slider->$img))
                                    <img src="{{Helper::image($slider->$img, 1200, 800, false)}}" alt="" class="img-fluid">
                                @else
                                <div>
                                    <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                                </div>
                                @endif
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-control">
            <button class="prev-arrow prev-arrow-2" aria-label="Previous" type="button">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button class="next-arrow next-arrow-2"  aria-label="Next" type="button">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
    </div>
    </section>

    @php
        $slider = Helper::slider(3);
    @endphp
    <section class="apartments apartments-3">
        <h2 class="title" data-aos="zoom-in" data-aos-duration="1500">{{$slider->title}}</h2>
        <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="slider-3">
                        @for ($i = 1; $i <= 4; $i++)
                        @php
                            $img = 'image'.$i;   
                        @endphp
                            <div>
                                @if (!is_null($slider->$img))
                                    <img src="{{Helper::image($slider->$img, 1200, 800, false)}}" alt="" class="img-fluid">
                                @else
                                <div>
                                    <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                                </div>
                                @endif
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-wrapper" data-aos="fade-down" data-aos-duration="1500">
                        <h5>{{$slider->subtitle}}</h5>
                        <p>
                            {{$slider->text}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="slider-control">
                <button class="prev-arrow prev-arrow-3" aria-label="Previous" type="button">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button class="next-arrow next-arrow-3"  aria-label="Next" type="button">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
    </section>

    @php
        $slider = Helper::slider(5);
    @endphp
    <section class="apartments apartments-2">
        <h2 class="title" data-aos="zoom-in" data-aos-duration="1500">{{$slider->title}}</h2>
        <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-wrapper" data-aos="fade-down" data-aos-duration="1500">
                        <h5>{{$slider->subtitle}}</h5>
                        <p>
                            {{$slider->text}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="slider-4">
                        @for ($i = 1; $i <= 4; $i++)
                        @php
                            $img = 'image'.$i;   
                        @endphp
                            <div>
                                @if (!is_null($slider->$img))
                                    <img src="{{Helper::image($slider->$img, 1200, 800, false)}}" alt="" class="img-fluid">
                                @else
                                <div>
                                    <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                                </div>
                                @endif
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-control">
            <button class="prev-arrow prev-arrow-4" aria-label="Previous" type="button">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button class="next-arrow next-arrow-4"  aria-label="Next" type="button">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
    </div>
    </section>
    @php
    $slider = Helper::slider(6);
@endphp
<section class="apartments apartments-3">
    <h2 class="title" data-aos="zoom-in" data-aos-duration="1500">{{$slider->title}}</h2>
    <div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="slider-5">
                    @for ($i = 1; $i <= 4; $i++)
                    @php
                        $img = 'image'.$i;   
                    @endphp
                        <div>
                            @if (!is_null($slider->$img))
                                <img src="{{Helper::image($slider->$img, 1200, 800, false)}}" alt="" class="img-fluid">
                            @else
                            <div>
                                <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                            </div>
                            @endif
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-wrapper" data-aos="fade-down" data-aos-duration="1500">
                    <h5>{{$slider->subtitle}}</h5>
                    <p>
                        {{$slider->text}}
                    </p>
                </div>
            </div>
        </div>
        <div class="slider-control">
            <button class="prev-arrow prev-arrow-5" aria-label="Previous" type="button">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button class="next-arrow next-arrow-5"  aria-label="Next" type="button">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
    </div>
</div>
</section>
@php
$slider = Helper::slider(7);
@endphp
<section class="apartments apartments-2">
<h2 class="title" data-aos="zoom-in" data-aos-duration="1500">{{$slider->title}}</h2>
<div class="wrapper">
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="content-wrapper" data-aos="fade-down" data-aos-duration="1500">
                <h5>{{$slider->subtitle}}</h5>
                <p>
                    {{$slider->text}}
                </p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="slider-6">
                @for ($i = 1; $i <= 4; $i++)
                @php
                    $img = 'image'.$i;   
                @endphp
                    <div>
                        @if (!is_null($slider->$img))
                            <img src="{{Helper::image($slider->$img, 1200, 800, false)}}" alt="" class="img-fluid">
                        @else
                        <div>
                            <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                        </div>
                        @endif
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>
<div class="slider-control">
    <button class="prev-arrow prev-arrow-6" aria-label="Previous" type="button">
        <i class="fa-solid fa-arrow-left"></i>
    </button>
    <button class="next-arrow next-arrow-6"  aria-label="Next" type="button">
        <i class="fa-solid fa-arrow-right"></i>
    </button>
</div>
</div>
</section>
@php
$slider = Helper::slider(8);
@endphp
<section class="apartments apartments-3">
<h2 class="title" data-aos="zoom-in" data-aos-duration="1500">{{$slider->title}}</h2>
<div class="wrapper">
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="slider-7">
                @for ($i = 1; $i <= 4; $i++)
                @php
                    $img = 'image'.$i;   
                @endphp
                    <div>
                        @if (!is_null($slider->$img))
                            <img src="{{Helper::image($slider->$img, 1200, 800, false)}}" alt="" class="img-fluid">
                        @else
                        <div>
                            <img src="{{asset('assets/images/placeholder.png')}}" alt="" class="img-fluid">
                        </div>
                        @endif
                    </div>
                @endfor
            </div>
        </div>
        <div class="col-lg-6">
            <div class="content-wrapper" data-aos="fade-down" data-aos-duration="1500">
                <h5>{{$slider->subtitle}}</h5>
                <p>
                    {{$slider->text}}
                </p>
            </div>
        </div>
    </div>
    <div class="slider-control">
        <button class="prev-arrow prev-arrow-7" aria-label="Previous" type="button">
            <i class="fa-solid fa-arrow-left"></i>
        </button>
        <button class="next-arrow next-arrow-7"  aria-label="Next" type="button">
            <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>
</div>
</div>
</section>
</main>

@endsection