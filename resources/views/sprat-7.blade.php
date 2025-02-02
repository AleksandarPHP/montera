@include('partials/header')

<main style="margin-top: 13.5rem;">
    <nav class="floors-navigator">
        <div class="container">
            <div class="navigator-slider">
                @php
                    $items = App\Models\Floor::all();
                    $floors = App\Models\Floor::findOrFail(8);
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
        <div id="floor-7"></div>
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
        const draw = SVG().addTo("#floor-7").size("100%", "100%");

        const baseWidth = 1920;
        const baseHeight = 1080;

        draw.viewbox(0, 0, baseWidth, baseHeight);

        const floors = [
            {
                name: "Apartment 1",
                id: "1",
                points: "975.5,501 1102,501 1102,451 1222.5,451 1222.5,292.5 1092.5,292.5 1092.5,369.5 923.5,369.5 923.5,455.5 975.5,455.5 975.5,501",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 2",
                id: "2",
                points: "923.5,455.5 923.5,369.5 730.5,369.5 730.5,293 597.5,293 597.5,507 596.5,507 596.5,513 593.5,513 593.5,554.5 596.5,554.5 596.5,563 748,563 748,535.5 814.5,535.5 814.5,517.5 807.5,517.5 807.5,502.5 854,502.5 854,455.5 923.5,455.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 3",
                id: "3",
                points: "1058,536 1011.5,536 1011.5,518 1019,518 1019,501 1102,501 1102,451 1222,451 1222,562 1058,562",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 4",
                id: "4",
                points: "1011.5,585.5 1011.5,610.5 1078.5,610.5 1078.5,633 1133,633 1133,676.5 1222,676.5 1222,562 1058,562 1058,536 1011.5,536 1011.5,553 1019.5,553 1019.5,585.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 5",
                id: "5",
                points: "1011.5,610.5 1011.5,672.5 1100,672.5 1100,786.5 1178.5,786.5 1178.5,788 1181,788 1181,790 1207.5,790 1207.5,788 1224,788 1224,779 1226.5,779 1226.5,755 1224,755 1224,753 1222,753 1222,676.5 1133,676.5 1133,633 1078.5,633 1078.5,610.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 6",
                id: "6",
                points: "971.5,672.5 971.5,670 922,670 922,716.5 971.5,716.5 971.5,786.5 1100,786.5 1100,672.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 7",
                id: "7",
                points: "971.5,787 729,787 729,675 849,675 849,626.5 963.5,626.5 963.5,658 971.5,658 971.5,670 922.5,670 922.5,716 971.5,716 971.5,787",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 8",
                id: "8",
                points: "693.5,676.5 597.5,676.5 597.5,792.5 658.5,792.5 658.5,787 729,787 729,675 815,675 815,610 748,610 748,633 693.5,633",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 9",
                id: "9",
                points: "693.5,676.5 598,676.5 598,604.5 596.5,604.5 596.5,602.5 592,602.5 592,575 596.5,575 596.5,563 748,563 748,535.5 815,535.5 815,610 748,610 748,633 693.5,633",
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
