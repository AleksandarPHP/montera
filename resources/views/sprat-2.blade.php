@include('partials/header')

<main class="main-margin">
    <nav class="floors-navigator">
        <div class="container">
            <div class="navigator-slider">
                @php
                    $items = App\Models\Floor::all();
                    $floors = App\Models\Floor::findOrFail(3);
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
        <div id="floor-2"></div>
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
        const draw = SVG().addTo("#floor-2").size("100%", "100%");

        const baseWidth = 1920;
        const baseHeight = 1080;

        draw.viewbox(0, 0, baseWidth, baseHeight);

        const floors = [
            {
                name: "Apartment 1",
                id: "1",
                points: "592,286 591,451.5 689,451.5 689,460.5 789,460.5 789,382.5 727.5,382.5 727.5,286",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 2",
                id: "2",
                points: "847.5,457 940,457 940,386.5 971,386.5 971,298 979.5,298 979.5,286 727.5,286 727.5,382.5 789,382.5 789,418.5 847.5,418.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 3",
                id: "3",
                points: "1099.5,420 977.5,420 977.5,457 940,457 940,386.5 971,386.5 971,298 979.5,298 979.5,285.5 972.5,285.5 972.5,263 1024.5,263 1024.5,284 1099.5,284",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 4",
                id: "4",
                points: "1041.5,420 1041.5,460.5 1101.5,460.5 1101.5,453.5 1224,453.5 1224,418 1252.5,418 1252.5,360.5 1224,360.5 1224,337 1219.5,337 1219.5,326.5 1228.5,326.5 1228.5,286 1158.5,286 1158.5,263 1109,263 1109,284 1099.5,284 1099.5,420",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 5",
                id: "5",
                points: "1219.5,453.5 1101.5,453.5 1101.5,460.5 1012,460.5 1012,535.5 1081.5,535.5 1081.5,560 1228,560 1228,509.5 1224.5,509.5 1224.5,497.5 1252.5,497.5 1252.5,453.5 1229,453.5 1229,458.5 1219.5,458.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 6",
                id: "6",
                points: "591,451.5 591,561.5 748.5,561.5 748.5,535.5 815,535.5 815,460.5 689,460.5 689,451.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 7",
                id: "7",
                points: "1023,535.5 1023,610.5 1079.5,610.5 1079.5,633 1132.5,633 1132.5,676.5 1228,676.5 1228,560 1081.5,560 1081.5,535.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 8",
                id: "8",
                points: "1079.5,610.5 1023,610.5 1023,673.5 1099.5,673.5 1099.5,795 1228.5,795 1228.5,676.5 1132.5,676.5 1132.5,633.5 1079.5,633.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 9",
                id: "9",
                points: "1023,672 961,672 961,680 923,680 923,730.5 969,730.5 969,794 974.5,794 974.5,795 1099.5,795 1099.5,673.5 1023,673.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 10",
                id: "10",
                points: "961,626 881.5,626 881.5,674.5 894,674.5 894,730.5 847.5,730.5 847.5,789 852.5,789 852.5,840.5 847.5,840.5 847.5,866.5 852.5,866.5 852.5,871 974.5,871 974.5,794 969,794 969,730.5 923,730.5 923,680 961,680",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 11",
                id: "11",
                points: "814.5,535.5 814.5,611 748.5,611 748.5,633 694,633 694,676.5 591,676.5 591,561.5 748.5,561.5 748.5,535.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 12",
                id: "12",
                points: "694,676.5 591,676.5 590.5,793.5 725.5,793.5 725.5,671.5 814.5,671.5 814.5,611 748.5,611 748.5,633 694,633",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 13",
                id: "13",
                points: "881.5,671.5 725.5,671.5 725.5,793.5 847.5,793.5 847.5,730.5 894,730.5 894,674.5 881.5,674.5",
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
