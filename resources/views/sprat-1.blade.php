@include('partials/header')

<main style="margin-top: 13.5rem;">
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

    <section class="floor-main">
        <div id="floor-1"></div>
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
        const draw = SVG().addTo("#floor-1").size("100%", "100%");

        const baseWidth = 1920;
        const baseHeight = 1080;

        draw.viewbox(0, 0, baseWidth, baseHeight);

        const floors = [
            {
                name: "Apartment 1",
                id: "1",
                points: "727.5,285.5 591,285.5 591,448.5 690.5,448.5 690.5,460.5 790.5,460.5 790.5,382.5 727.5,382.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 2",
                id: "2",
                points: "972,285.5 727.5,285.5 727.5,383 790.5,383 790.5,419 847,419 847,456 940,456 940,386.5 972,386.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 3",
                id: "3",
                points: "1099,285.5 972,285.5 972,386.5 940,386.5 940,456 977.5,456 977.5,419 1099,419",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 4",
                id: "4",
                points: "1099,419.5 1099,286 1229,286 1229,326.5 1233,326.5 1233,361.5 1231,361.5 1231,402 1224.5,402 1224.5,449 1103,449 1103,460.5 1043.5,460.5 1043.5,419.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 5",
                id: "5",
                points: "1012,536 1012,461.5 1102.5,461.5 1102.5,449 1229,449 1229,559.5 1079.5,559.5 1079.5,536",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 6",
                id: "6",
                points: "1012,610.5 1012,536 1080,536 1080,559.5 1229.5,559.5 1229.5,676.5 1132,676.5 1132,633 1078.5,633 1078.5,610.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 7",
                id: "7",
                points: "1229.5,795 1229.5,676.5 1132,676.5 1132,633 1078.5,633 1078.5,610.5 1011.5,610.5 1011.5,674 1099.5,674 1099.5,795",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 8",
                id: "8",
                points: "962.5,626.5 882.5,626.5 882.5,674.5 894,674.5 894,730.5 852,730.5 852,785.5 857.5,785.5 857.5,794 852,794 852,869 974.5,869 974.5,794 968.5,794 968.5,730.5 922.5,730.5 922.5,680 962.5,680",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 9",
                id: "9",
                points: "962.5,674 1099.5,674 1099.5,794 968.5,794 968.5,730.5 922.5,730.5 922.5,680 962.5,680",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 10",
                id: "10",
                points: "882.5,671.5 815,671.5 815,673.5 727.5,673.5 727.5,794 857.5,794 857.5,785.5 852,785.5 852,730.5 894,730.5 894,674.5 882.5,674.5",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 11",
                id: "11",
                points: "591.5,677 591.5,563.5 748,563.5 748,536 803.5,536 803.5,568 815,568 815,610.5 748,610.5 748,633.5 693.5,633.5 693.5,677",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 12",
                id: "12",
                points: "594,677 594,791 727.5,791 727.5,673.5 815,673.5 815,644.5 805.5,644.5 805.5,610.5 748,610.5 748,633.5 693.5,633.5 693.5,677",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "Apartment 13",
                id: "13",
                points: "591.5,563.5 591.5,448.5 690.5,448.5 690.5,460.5 814.5,460.5 814.5,499.5 803.5,499.5 803.5,536 748,536 748,563.5",
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
