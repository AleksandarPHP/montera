{{-- @include('partials/header')
<style>
    .pdf-container {
        max-width: 1920px;  /* Maksimalna širina za desktop */
        width: 100%;  /* Fleksibilna širina */
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        maring
    }

    canvas {
        width: 100%;  /* Popunjava širinu roditeljskog diva */
        height: auto;  /* Održava proporcije */
        border: 1px solid #ccc;  /* Opcioni border */
    }
</style>
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
    <div class="container-fluid d-flex justify-content-center">
        <div class="pdf-container">
            <canvas id="pdfCanvas"></canvas>
        </div>
    </div>
    <section class="floor-mains">

        {{-- @dd($apartmant->image) --}
        <div class="bg" style="background-image: url('{{asset("storages/".$apartmant->image)}}')"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3> TEHNIČKI PRIKAZ OSNOVE <br />
                        <span>{{$apartmant->title}}</span></h3>
                </div>
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
                    {{__('Gallery')}}
                </a>
                <a href="" class="button button_primary" data-bs-toggle="modal" data-bs-target="#contactModal">
                    Kontakt
                </a>
                @if ($apartmant->pdf)
                    <a href="{{ Helper::url('galerija') }}" class="button button_secondary" style="margin-left: 1rem">
                        {{__('DOWNLOAD')}}
                    </a>
                @endif
            </div>
        </div>
    </section>
</main>
<script>
    var url = "{{ asset('assets/pdf/podloga_za_sajt_AP4-7_compressed.pdf') }}";

    const pdfjsLib = window['pdfjs-dist/build/pdf'];

// Podesi Web Worker
pdfjsLib.GlobalWorkerOptions.workerSrc = "https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js";

async function renderPDF() {
    const pdf = await pdfjsLib.getDocument(url).promise;
    const page = await pdf.getPage(1);

    const scale = 1.5;
    const viewport = page.getViewport({ scale });

    const canvas = document.getElementById('pdfCanvas');
    const context = canvas.getContext('2d');
    canvas.width = viewport.width;
    canvas.height = viewport.height;

    const renderContext = {
        canvasContext: context,
        viewport: viewport
    };

    await page.render(renderContext);
}

renderPDF();
</script>
@include('partials/footer') --}}

@include('partials/header')
<style>
    .pdf-container {
        max-width: 1920px;  /* Maksimalna širina za desktop */
        width: 100%;  /* Fleksibilna širina */
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        maring
    }

    canvas {
        width: 100%;  /* Popunjava širinu roditeljskog diva */
        height: auto;  /* Održava proporcije */
        border: 1px solid #ccc;  /* Opcioni border */
    }
</style>
<main class="main-margin">
    <nav class="floors-navigator">
        <div class="container">
            <div class="navigator-slider">
                @php
                    $items = App\Models\Floor::all();
                    $floors = App\Models\Floor::findOrFail(2);
                @endphp
                @foreach ($items as $floor)
                    <div>
                        <a href="{{url('sprat/'.$floor->id)}}" @if ($floor->id == $floors->id)
                            class="active"
                        @endif>{{$floor->title}}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </nav>
    <div class="container-fluid d-flex justify-content-center">
        <div class="pdf-container">
            <canvas id="pdfCanvas"></canvas>
        </div>
    </div>

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
                <a href="{{ Helper::url('galerija') }}" class="button button_primary">
                    {{__('Gallery')}}
                </a>
            </div>
        </div>
    </section>
</main>
<script>
    var url = "{{ asset('assets/pdf/podloga_za_sajt_AP4-7_compressed.pdf') }}";

    const pdfjsLib = window['pdfjs-dist/build/pdf'];

// Podesi Web Worker
pdfjsLib.GlobalWorkerOptions.workerSrc = "https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js";

async function renderPDF() {
    const pdf = await pdfjsLib.getDocument(url).promise;
    const page = await pdf.getPage(1);

    const scale = 1.5;
    const viewport = page.getViewport({ scale });

    const canvas = document.getElementById('pdfCanvas');
    const context = canvas.getContext('2d');
    canvas.width = viewport.width;
    canvas.height = viewport.height;

    const renderContext = {
        canvasContext: context,
        viewport: viewport
    };

    await page.render(renderContext);
}

renderPDF();
</script>
@include('partials/footer')
