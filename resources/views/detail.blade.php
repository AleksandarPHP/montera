@include('partials/header')

<main>
    <nav class="floors-navigator">
        <div class="container">
            <div class="navigator-slider">
                @php
                    $items = App\Models\Floor::all();
                @endphp
                @foreach ($items as $floor)
                    <div>
                        <a href="#">{{$floor->title}}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </nav>

    <section class="floor-main">
        <div class="bg" style="background-image: url('{{asset("storage/".$apartmant->image)}}')"></div>
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-3">
                    <h3> TEHNIČKI PRIKAZ OSNOVE <br />
                        <span>{{$apartmant->title}}</span></h3>
                </div> --}}
                <div class="col-md-7"></div>
                
            </div>
        </div>
    </section>

    <section class="gallery-navigator brdr">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p class="txt">
                        Prodati apartmani nisu aktivni. 

                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="txt">
                        Sve prikazane kvadrature su približne(cca). Tačne kvadrature iskazane su 
                        u pojedinačnim komercijalnim skicama i dostupne su na zahtev
                    </p>
                </div>
            </div>
            <div class="button-wrapper">
                <a href="{{ Helper::url('galerija') }}" class="button button_secondary" style="margin-right: 1rem">
                    {{__('galerija')}}
                </a>
                <a href="" class="button button_primary" data-bs-toggle="modal" data-bs-target="#contactModal">
                    Kontakt
                </a>
                <a href="{{ Helper::url('galerija') }}" class="button button_secondary" style="margin-left: 1rem">
                    {{__('galerija')}}
                </a>
            </div>
        </div>
    </section>
</main>

@include('partials/footer')
