@include('partials/header')

<main>
    <nav class="floors-navigator">
        <div class="container">
            <div class="navigator-slider">
                <div>
                    <a href="#" class="active">PRIZEMLJE</a>
                </div>
                <div>
                    <a href="#">1 SPRAT</a>
                </div>
                <div>
                    <a href="#">2 SPRAT</a>
                </div>
                <div>
                    <a href="#">3 SPRAT</a>
                </div>
                <div>
                    <a href="#">4 SPRAT</a>
                </div>
                <div>
                    <a href="#">5 SPRAT</a>
                </div>
                <div>
                    <a href="#">6 SPRAT</a>
                </div>
                <div>
                    <a href="#">7 SPRAT</a>
                </div>
                <div>
                    <a href="#">8 SPRAT</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="floor-main">
        <div class="bg" style="background-image: url('{{asset("assets/images/prizemlje.jpg")}}')"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3> TEHNIČKI PRIKAZ OSNOVE <br />
                        <span>prizemlje</span></h3>
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
                            <tr>
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
                            </tr>
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
