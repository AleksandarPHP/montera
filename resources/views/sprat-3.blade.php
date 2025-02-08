@include('partials/header')

<main class="main-margin">
    <nav class="floors-navigator">
        <div class="container">
            <div class="navigator-slider">
                @php
                    $items = App\Models\Floor::all();
                    $floors = App\Models\Floor::findOrFail(4);
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
        <div id="floor-3"></div>
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
        const draw = SVG().addTo("#floor-3").size("100%", "100%");

        const baseWidth = 1920;
        const baseHeight = 1080;

        draw.viewbox(0, 0, baseWidth, baseHeight);

        const floors = [
            {
                name: "Apartment 1",
                id: "1",
                points: "726,288.5 726,291.5 726,382.5 789.5,382.5 789.5,421 848.5,421 848.5,456.5 941.5,456.5 941.5,387 972,387 972,288.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 2",
                id: "2",
                points: "1028.5,265.5 972,265.5 972,387 941.5,387 941.5,456 980.5,456 980.5,421.5 1100.5,421.5 1100.5,286.5 1028.5,286.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 3",
                id: "3",
                points: "1163,265.5 1100.5,265.5 1101,421.5 1042.5,421.5 1042.5,461 1102,461 1102,465.5 1117.5,465.5 1117.5,453.5 1251,453.5 1251,338.5 1230.5,338.5 1230.5,286 1163,286",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 4",
                id: "4",
                points: "1102,460.5 1013,460.5 1013,536 1081,536 1081,553.5 1096,553.5 1096,560 1230,560 1230,503.5 1247.5,503.5 1247.5,453.5 1117.5,453.5 1117.5,465.5 1102,465.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 5",
                id: "5",
                points: "1013,610.5 1013,536 1081,536 1081,553.5 1096,553.5 1096,560 1229.5,560 1229.5,672 1220.5,672 1220.5,676.5 1133.5,676.5 1133.5,633 1080,633 1080,610.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 6",
                id: "6",
                points: "574.5,629.5 574.5,676.5 693.5,676.5 693.5,633 747.5,633 747.5,610.5 815,610.5 815,536 749,536 749,562 592.5,562 592.5,629.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 7",
                id: "7",
                points: "690.5,450.5 575,450.5 575,503.5 592.5,503.5 592.5,562 749,562 749,536 815,536 814.5,460.5 690.5,460.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 8",
                id: "8",
                points: "602.5,296 592.5,296 592.5,386 575,386 575,450.5 690.5,450.5 690.5,460.5 789.5,460.5 789.5,382 726,382 726,291 692.5,291 692.5,287.5 630.5,287.5 630.5,291 602.5,291",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 9",
                id: "9",
                points: "963,626 883,626 883,674 895,674 895,731 850,731 850,783.5 858.5,783.5 858.5,794 854.5,794 854.5,871 975,871 975,789.5 972,789.5 972,731 923,731 923,680 963,680",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 10",
                id: "10",
                points: "1012.5,672 963,672 963,680 923,680 923,731 972,731 972,789.5 975,789.5 975,810.5 1032.5,810.5 1032.5,795 1102,795 1102,783.5 1100.5,783.5 1100.5,674 1012.5,674",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 11",
                id: "11",
                points: "1080,610.5 1012.5,610.5 1012.5,674 1100.5,674 1100.5,783.5 1102,783.5 1102,794 1099,794 1099,811 1153,811 1153,792 1220.5,792 1220.5,783.5 1228.5,783.5 1229,736 1225,736 1225,726.5 1247,726.5 1247,684.5 1230.5,684.5 1230.5,682 1220.5,682 1220.5,676.5 1133.5,676.5 1133.5,633 1080,633",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 12",
                id: "12",
                points: "693.5,676.5 574.5,676.5 574.5,788.5 591.5,788.5 591.5,783.5 601.5,783.5 601.5,788.5 617.5,788.5 617.5,792 667,792 667,788.5 688,788.5 688,810.5 727.5,810.5 727.5,673.5 815,673.5 815,610.5 747.5,610.5 747.5,633 693.5,633",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 13",
                id: "13",
                points: "895,673.5 727.5,673.5 727.5,810.5 854.5,810.5 854.5,794 858.5,794 858.5,783.5 850,783.5 850,731 895,731",
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
