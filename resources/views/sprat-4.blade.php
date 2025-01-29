@include('partials/header')

<main style="margin-top: 13.5rem;">
    <nav class="floors-navigator">
        <div class="container">
            <div class="navigator-slider">
                @php
                    $items = App\Models\Floor::all();
                    $floors = App\Models\Floor::findOrFail(5);
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
        <div id="floor-4"></div>
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
        const draw = SVG().addTo("#floor-4").size("100%", "100%");

        const baseWidth = 1920;
        const baseHeight = 1080;

        draw.viewbox(0, 0, baseWidth, baseHeight);

        const floors = [
            {
                name: "Apartment 1",
                id: "1",
                points: "632,570 591.5,570 591.5,619.5 596.5,619.5 596.5,625.5 580,625.5 580,676.5 591.5,676.5 591.5,672 601.5,672 601.5,676.5 694.5,676.5 694.5,633 748.5,633 748.5,610 815,610 815,535.5 748.5,535.5 748.5,564 735.5,564 735.5,570 725.5,570 725.5,565 632,565.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 2",
                id: "2",
                points: "591.5,676.5 580,676.5 580,788.5 591,788.5 591,783.5 602,783.5 602,789 617.5,789 617.5,792 666.5,792 666.5,789 682,789 682,805 725.5,805 725.5,671.5 811,671.5 811,670 815,670 815,642.5 808,642.5 808,628.5 815,628.5 815,610 748.5,610 748.5,633 694.5,633 694.5,676.5 601.5,676.5 601.5,682 591.5,682",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 3",
                id: "3",
                points: "960,626 880,626 880,674 894,674 894,730.5 851.5,730.5 851.5,783.5 857.5,783.5 857.5,793.723 851.5,793.723 851.5,805 859,805 859,871 967.5,871 967.5,793.723 969,793.723 969,730.5 922,730.5 922,680 960,680",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 4",
                id: "4",
                points: "601.5,296 592,296 592,370.5 596.5,370.5 596.5,380.5 580,380.5 580,448 691.5,448 691.5,460.5 786.5,460.5 786.5,445.5 791,445.5 791,382 725.5,382 725.5,375 713.5,375 713.5,355 725.5,355 725.5,274.5 705,274.5 705,291 691.5,291 691.5,286 630,286 630,291 601.5,291",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 5",
                id: "5",
                points: "691.5,448 580,448 580,503 591.5,503 591.5,487.5 596.5,487.5 596.5,513 591.5,513 591.5,554.5 596.5,554.5 596.5,560 601.5,560 601.5,565 725.5,565 725.5,560 735.5,560 735.5,564 748.5,564 748.5,535.5 815,535.5 815,460.5 691.5,460.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 6",
                id: "6",
                points: "1079,610.5 1012,610.5 1012,672 1101.5,672 1101.5,794 1098,794 1098,805 1152,805 1152,788.5 1166.5,788.5 1166.5,792 1219.5,792 1219.5,783.5 1228,783.5 1228,741.5 1224,741.5 1224,732 1240.5,732 1240.5,679 1229.5,679 1229.5,682 1219.5,682 1219.5,676.5 1133,676.5 1133,633 1079,633",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 7",
                id: "7",
                points: "1101,461 1012,461 1012,536 1079,536 1079,553.5 1094.5,553.5 1094.5,560 1124.5,560 1124.5,552.5 1140,552.5 1140,560 1228,560 1228,517.5 1224,517.5 1224,509.5 1240.5,509.5 1240.5,453.5 1229.5,453.5 1229.5,458.5 1219.5,458.5 1219.5,453.5 1116.5,453.5 1116.5,465.5 1101,465.5",
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
