@include('partials/header')

<main>
    <div id="svg-container"></div>

    <section class="gallery-navigator">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p class="txt">
                        Monterra je nezavisan, multifunkcionalan kompleks koji
                        budućim vlasnicima nudi 81 apartman, opremljen
                        najkvalitetnijim i prirodnim materijalima, u
                        neoplaninskom stilu
                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="txt">
                        Svaki apartman ima svoju terasu, a u zavisnosti od
                        pozicije određen broj ima i dvije terase. U sklopu
                        cijene apartmana dobijate kontrolisan prostor - ski boks
                        - za skijašku opremu u skijašnici
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

    <script src="https://cdn.jsdelivr.net/npm/@svgdotjs/svg.js"></script>
    <script>
        const draw = SVG().addTo("#svg-container").size("100%", "100%");

        const baseWidth = 1920;
        const baseHeight = 1080;
        draw.viewbox(0, 0, baseWidth, baseHeight);

        const floors = [
            {
                name: "PRIZEMLJE",
                points: "535,940 1410,930 1610,950 1610,1045 1410,1045 535,1040",
                width: 1075,
                height: 125,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "I SPRAT",
                points: "535,840 1410,800 1645,850 1645,935 1410,915 535,935",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "II SPRAT",
                points: "500,750 1440,700 1645,770 1645,840 1440,795 500,835",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "III SPRAT",
                points: "500,660 1440,590 1645,680 1645,760 1440,685 500,745",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "IV SPRAT",
                points: "500,570 1440,480 1645,600 1645,675 1440,585 500,650",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "V SPRAT",
                points: "500,475 1425,350 1645,515 1645,580 1425,470 500,560",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
            {
                name: "VI SPRAT",
                points: "502,375 1435,260 1595,355 1595,430 1435,350 500,450",
                width: 1075,
                height: 105,
                hoverColor: "#ff6600",
                stroke: "#33333300",
            },
        ];

        const texts = [
            {
                title: "PRIZEMLJE",
                x: 1450,
                y: 1000,
                fill: "#fff",
                opacity: 1,
                "font-size": 24,
                "font-family": "Arial, sans-serif",
                "font-weight": "500",
            },
            {
                title: "I SPRAT",
                x: 1485,
                y: 855,
                fill: "#fff",
                opacity: 1,
                "font-size": 24,
                "font-family": "Arial, sans-serif",
                "font-weight": "500",
            },
            {
                title: "II SPRAT",
                x: 1485,
                y: 750,
                fill: "#fff",
                opacity: 1,
                "font-size": 24,
                "font-family": "Arial, sans-serif",
                "font-weight": "500",
            },
            {
                title: "III SPRAT",
                x: 1485,
                y: 650,
                fill: "#fff",
                opacity: 1,
                "font-size": 24,
                "font-family": "Arial, sans-serif",
                "font-weight": "500",
            },
            {
                title: "IV SPRAT",
                x: 1485,
                y: 545,
                fill: "#fff",
                opacity: 1,
                "font-size": 24,
                "font-family": "Arial, sans-serif",
                "font-weight": "500",
            },
            {
                title: "V SPRAT",
                x: 1485,
                y: 430,
                fill: "#fff",
                opacity: 1,
                "font-size": 24,
                "font-family": "Arial, sans-serif",
                "font-weight": "500",
            },
            {
                title: "VI SPRAT",
                x: 1485,
                y: 335,
                fill: "#fff",
                opacity: 1,
                "font-size": 24,
                "font-family": "Arial, sans-serif",
                "font-weight": "500",
            },
            {
                title: "SPRATNOST I\nPOZICIJE\nAPARTMANA\nU PONUDI",
                x: 225,
                y: 435,
                fill: "#000",
                opacity: 0.8,
                "font-size": 24,
                "font-family": "Arial, sans-serif",
                "font-weight": "500",
            },
        ];

        floors.forEach((floor) => {
            const polygon = draw
                .polygon(floor.points)
                .attr({
                    fill: "none",
                    stroke: floor.stroke,
                    "stroke-width": 10,
                    cursor: "pointer",
                })
                .on("mouseover", () => {
                    polygon.attr({ fill: floor.hoverColor, opacity: 0.7 });
                })
                .on("mouseout", () => {
                    polygon.attr({ fill: "none" });
                })
                .on("click", () => alert(`Kliknuli ste na: ${floor.name}`));
        });

        texts.forEach((text) => {
            draw.text(text.title).attr(text);
        });
    </script>
</main>

@include('partials/footer')
