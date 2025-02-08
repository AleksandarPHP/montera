@include('partials/header')

<main class="main-margin">
    <nav class="floors-navigator">
        <div class="container">
            <div class="navigator-slider">
                @php
                    $items = App\Models\Floor::all();
                    $floors = App\Models\Floor::findOrFail(6);
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
        <div id="floor-5"></div>
        <div class="compass">
            <svg width="90" height="90" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <g transform="rotate(-45, 50, 50)">
                    <line x1="50" y1="10" x2="50" y2="90" stroke="gray" stroke-width="4"/>
                    <line x1="10" y1="50" x2="90" y2="50" stroke="gray" stroke-width="4"/>
                    <polygon points="50,5 45,20 55,20" fill="orange"/>
                </g>
                <text x="50" y="14" font-size="14" fill="orange" text-anchor="middle">N</text>
                <text x="90" y="53" font-size="14" fill="gray" text-anchor="middle">E</text>
                <text x="10" y="53" font-size="14" fill="gray" text-anchor="middle">W</text>
                <text x="50" y="98" font-size="14" fill="gray" text-anchor="middle">S</text>
            </svg>
        </div>
        <div class="container floor-container">
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
        const draw = SVG().addTo("#floor-5").size("100%", "100%");

        const baseWidth = 1920;
        const baseHeight = 1080;

        draw.viewbox(0, 0, baseWidth, baseHeight);

        const floors = [
            {
                name: "Apartment 1",
                id: "1",
                points: "971,286 725.5,286 725.5,355 713.5,355 713.5,375.5 725.5,375.5 725.5,382.5 791,382.5 791,421.5 847,421.5 847,457 939.5,457 939.5,386 971,386",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 2",
                id: "2",
                points: "1028,280.5 971,280.5 971,386 939.5,386 939.5,457 975.5,457 975.5,422 1101.5,422 1101.5,286 1028,286",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 3",
                id: "3",
                points: "1158.5,280.5 1091.5,280.5 1091.5,286 1101.5,286 1101.5,422 1041.5,422 1041.5,460.5 1101,460.5 1101,465 1116.5,465 1116.5,453.5 1219,453.5 1219,458.5 1228.5,458.5 1228.5,421 1234.5,421 1234.5,330 1229,330 1229,286 1158.5,286",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 4",
                id: "4",
                points: "1011.5,460.5 1011.5,536 1081,536 1081,553.5 1094,553.5 1094,560 1124.5,560 1124.5,552.5 1139.5,552.5 1139.5,560 1227.5,560 1227.5,523.5 1224,523.5 1224,515 1234.5,515 1234.5,453.5 1229,453.5 1229,458.5 1219,458.5 1219,453.5 1116.5,453.5 1116.5,465 1101,465 1101,460.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 5",
                id: "5",
                points: "586,503.5 586,449 691.5,449 691.5,460.5 815,460.5 815,535.5 747.5,535.5 747.5,562.5 591.5,562.5 591.5,503.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 6",
                id: "6",
                points: "747.5,562.5 591.5,562.5 591.5,575 593,575 593,614 596,614 596,619 585.5,619 585.5,676.5 591.5,676.5 591.5,672 601,672 601,676.5 694,676.5 694,633 747.5,633 747.5,610.5 815,610.5 815,535.5 747.5,535.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 7",
                id: "7",
                points: "791,460.5 791,382.5 725.5,382.5 725.5,375.5 713.5,375.5 713.5,355 725.5,355 725.5,280.5 699,280.5 699,291 691,291 691,286 630,286 630,291 601,291 601,296 592.5,296 592.5,369 596.5,369 596.5,375 586,375 586,448.5 691.5,448.5 691.5,460.5 791,460.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 8",
                id: "8",
                points: "1011.5,610 1011.5,536 1081,536 1081,553.5 1094,553.5 1094,560 1124.5,560 1124.5,552.5 1139.5,552.5 1139.5,560 1229,560 1229,682 1219,682 1219,676.5 1132.5,676.5 1133,633 1078.5,633 1078.5,610",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 9",
                id: "9",
                points: "1078.5,610 1011.5,610 1011.5,671.5 1101.5,671.5 1101.5,794 1098,794 1098,799 1163,799 1163,789 1172.5,789 1172.5,792 1219,792 1219,783.5 1227.5,783.5 1227.5,747.5 1224,747.5 1224,738 1234.5,738 1234.5,672.5 1229,672.5 1229,682 1219,682 1219,676.5 1132.5,676.5 1132.5,633 1078.5,633",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 10",
                id: "10",
                points: "960,626 879.5,626 879.5,674 893.5,674 893.5,730.5 849,730.5 849,783.5 857.5,783.5 857.5,793.5 849,793.5 849,799.5 864.5,799.5 864.5,871 961.5,871 961.5,793.5 969,793.5 969,730.5 922.5,730.5 922.5,679.5 960,679.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 11",
                id: "11",
                points: "960,671.5 1101.5,671.5 1101.5,794 1052,794 1052,788.5 1043,788.5 1043,799 973.5,799 973.5,793.5 969,793.5 969,730.5 922.5,730.5 922.5,679.5 960,679.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 12",
                id: "12",
                points: "815.5,673.5 815.5,610.5 747.5,610.5 747.5,633 694,633 694,676.5 601,676.5 601,672 591.5,672 591.5,676.5 585.5,676.5 585.5,794.5 666.5,794.5 666.5,789 675.5,789 675.5,799.5 727.5,799.5 727.5,673.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 13",
                id: "13",
                points: "743.5,799.5 727.5,799.5 727.5,673.5 815.5,673.5 815.5,672 879.5,672 879.5,674 893.5,674 893.5,730.5 849,730.5 849,783.5 847,783.5 847,794 848.5,794 848.5,799.5 791,799.5 791,794 743.5,794",
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
