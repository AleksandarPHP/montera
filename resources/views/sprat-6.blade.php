@include('partials/header')

<main style="margin-top: 13.5rem;">
    <nav class="floors-navigator">
        <div class="container">
            <div class="navigator-slider">
                @php
                    $items = App\Models\Floor::all();
                    $floors = App\Models\Floor::findOrFail(7);
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

    <section class="floor-main">
        <div id="floor-6"></div>
        <div class="container" style="position: absolute;">
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
                            @isset($floors->apartment)
                                @foreach ($floors->apartment as $apartment)
                                <a href="d">
                                    <tr>
                                        <td>{{$apartment->title}}</td>
                                        <td>{{$apartment->apt_number}}</td>
                                        <td>{{$apartment->surface}}</td>
                                    </tr>
                                </a>
                                @endforeach 
                            @endisset
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
                <a href="{{ Helper::url('galerija') }}" class="button button_primary">
                    {{__('Gallery')}}
                </a>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@svgdotjs/svg.js"></script>
    <script>
        const draw = SVG().addTo("#floor-6").size("100%", "100%");

        const baseWidth = 1920;
        const baseHeight = 1080;

        draw.viewbox(0, 0, baseWidth, baseHeight);

        const floors = [
            {
                name: "Apartment 1",
                id: "1",
                points: "847,642.5 847,672 735.5,672 735.5,682 727.5,682 727.5,783.5 735.5,783.5 735.5,788.5 743.5,788.5 743.5,793.5 776,793.5 776,788.5 785,788.5 785,793.5 847,793.5 847,783.5 857.5,783.5 857.5,793.5 879.5,793.5 879.5,815 881,815 881,820 950.5,820 950.5,815 956,815 956,793.5 968.5,793.5 968.5,715.5 922,715.5 922,669.5 960,669.5 960,626 856.5,626 856.5,642.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 2",
                id: "2",
                points: "1012,459 1012,500.5 1023.5,500.5 1023.5,534 1081,534 1081,560 1125,560 1125,552.5 1139,552.5 1139,560 1229,560 1229,529 1224,529 1224,521 1229,521 1229,459 1219,459 1219,453.5 1116.5,453.5 1116.5,465 1101.5,465 1101.5,459",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 3",
                id: "3",
                points: "601,672 601,675 694,675 694,633 747.5,633 747.5,610 814.5,610 814.5,570.5 803,570.5 803,536 747.5,536 747.5,564 735.5,564 735.5,570.5 725.5,570.5 725.5,565.5 667.5,565.5 667.5,570.5 596,570.5 596,575 591.5,575 591.5,608 596,608 596,613.5 591.5,613.5 591.5,672",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 4",
                id: "4",
                points: "1079,612.5 1024,612.5 1024,645.5 1012,645.5 1012,672 1101.5,672 1101.5,793.5 1169.5,793.5 1169.5,788.5 1178.5,788.5 1178.5,794 1219,794 1219,783.5 1227.5,783.5 1227.5,753 1224,753 1224,743.5 1228.5,743.5 1228.5,682 1219,682 1219,676.5 1132.5,676.5 1132.5,633 1079,633",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
        ];

        floors.forEach((floor) => {
            const polygon = draw
                .polygon(floor.points)
                .attr({
                    fill: floor.hoverColor,
                    stroke: floor.stroke,
                    "stroke-width": 10,
                    cursor: "pointer",
                    opacity: 0.4
                })
                .on("mouseover", () => {
                    polygon.attr({ fill: "#ff6600", opacity: 0.8 });
                })
                .on("mouseout", () => {
                    polygon.attr({ fill: floor.hoverColor, opacity: 0.4 });
                })
                .on("click", () => {
                window.location.href = `sprat/${floor.id}`;
            });    });
    </script>
</main>

@include('partials/footer')
