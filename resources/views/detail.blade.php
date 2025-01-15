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
        <div class="bg" style="background-image: url('{{asset("storage/".$floors->image)}}')"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3> TEHNIČKI PRIKAZ OSNOVE <br />
                        <span>{{$floors->title}}</span></h3>
                </div>
                <div class="col-md-7"></div>
                <div class="col-md-2">
                    <table class="apartment-table">
                        <thead>
                            <tr>
                                <th>APARTMANI</th>
                                <th>SOBE</th>
                                <th>m2</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @dd($floors->apartment) --}}
                            {{-- <tr>
                                <td>A0-1</td>
                                <td>2</td>
                                <td>55</td>
                            </tr>
                            <tr>
                                <td>A0-2</td>
                                <td>2</td>
                                <td>68</td>
                            </tr>
                            <tr>
                                <td>A0-3</td>
                                <td>2</td>
                                <td>72</td>
                            </tr>
                            <tr class="studio-header">
                                <td colspan="2">STUDIO</td>
                                <td>m2</td>
                            </tr>
                            <tr>
                                <td>ST1</td>
                                <td>-</td>
                                <td>26</td>
                            </tr>
                            <tr>
                                <td>ST2</td>
                                <td>-</td>
                                <td>28</td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
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
                <a href="{{ url('galerija') }}" class="button button_primary">
                    Galerija
                </a>
            </div>
        </div>
    </section>
</main>

@include('partials/footer')
