<?php
    require('requires/meta_tags.php');
    ?>
    <?php
    require('requires/header_styling2.php');
    ?>

        .main-content-center {
            flex: 1 0 auto;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 200px);
        }
        .runeglass-calc-box {
            background: var(--bg-section);
            border-radius: 24px;
            box-shadow: 0 6px 40px #dab56224, 0 2px 16px #dab56211;
            border: 1.2px solid #e8d8b2;
            max-width: var(--main-max-width);
            width: 98vw;
            padding: 40px 30px 36px 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 26px 0 30px 0;
            position: relative;
        }
        .calc-title {
            font-size: 2rem;
            font-weight: 900;
            color: var(--accent-gold);
            text-shadow: 0 3px 24px #dab5621a, 0 0 8px #fff2;
            letter-spacing: 1.1px;
            text-align: center;
            margin-bottom: 34px;
            margin-top: 0;
            line-height: 1.14;
        }
        .input-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 24px;
        }
        .input-table th {
            color: #6d5106;
            font-size: 1.09em;
            font-weight: 600;
            text-align: center;
            border-bottom: 1.1px solid #dab56299;
            background: #fff7dd;
            letter-spacing: 1px;
            padding: 6px 0;
        }
        .input-table td {
            padding: 4px 7px;
        }
        .input-table input {
            background: #fffbe6;
            color: #382c10;
            border: 1.2px solid #dab56282;
            border-radius: 7px;
            padding: 6px 6px;
            font-size: 1.05em;
            text-align: center;
            outline: none;
            width: 86px;
            box-sizing: border-box;
        }
        .runeglass-result-table {
            width: 100%;
            max-width: 560px;
            margin: 22px auto 0 auto;
            border-collapse: collapse;
            background: #fffbe9;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px #dab56223;
        }
        .runeglass-result-table th, .runeglass-result-table td {
            padding: 9px 6px;
            text-align: center;
            font-size: 1.09em;
            border-bottom: 1px solid #f7ecd6;
        }
        .runeglass-result-table th {
            background: #fcf7d9;
            color: #a3822d;
            font-weight: bold;
        }
        .runeglass-result-table td.rg-case {
            font-weight: 600;
            letter-spacing: .4px;
        }
        .runeglass-result-table td.rg-cost {
            font-weight: 800;
            letter-spacing: 1.2px;
            color: #2d702d;
            font-size: 1.13em;
            background: #eeffe8;
        }
        .runeglass-disclaimer {
            color: #a3822d;
            font-size: 0.97em;
            margin-top: 9px;
            text-align: center;
        }
        @media (max-width: 700px) {
            .runeglass-calc-box { max-width: 99vw; padding: 18px 2vw 16px 2vw;}
            .calc-title { font-size: 1.17rem; }
            .input-table th, .runeglass-result-table th, .runeglass-result-table td { font-size: 0.98em;}
            .runeglass-result-table { max-width: 100vw; }
        }
    </style>
</head>
<body>
    <?php
    require('requires/header.php');
    ?>
    <main class="main-content-center">
        <div class="runeglass-calc-box">
            <div class="calc-title">RUNEGLASS CASE COST CALCULATOR</div>
            <form id="runeglassForm" autocomplete="off">
                <table class="input-table">
                    <tr>
                        <th colspan="2">Enter Market Prices</th>
                    </tr>
                    <tr><td>Charged Sand</td>      <td><input id="price_sand"   type="number" step="1" min="0" value="6.5"></td></tr>
                    <tr><td>Sulfur</td>            <td><input id="price_sulfur" type="number" step="1" min="0" value="15"></td></tr>
                    <tr><td>Ancient Glob of Ectoplasm</td>
                                                <td><input id="price_ecto"   type="number" step="1" min="0" value="60"></td></tr>
                    <tr><th colspan="2" style="text-align:center;padding:11px 0;">Glyph Prices</th></tr>
                    <tr><td>Above</td>     <td><input id="price_glyph_Above"   type="number" step="0.1" min="0" value="25"></td></tr>
                    <tr><td>Chaos</td>     <td><input id="price_glyph_Chaos"   type="number" step="0.1" min="0" value="35"></td></tr>
                    <tr><td>Destruction</td><td><input id="price_glyph_Destruction" type="number" step="0.1" min="0" value="62"></td></tr>
                    <tr><td>Food</td>      <td><input id="price_glyph_Food"    type="number" step="0.1" min="0" value="13"></td></tr>
                    <tr><td>Gift</td>      <td><input id="price_glyph_Gift"    type="number" step="0.1" min="0" value="8"></td></tr>
                    <tr><td>Mountain</td>  <td><input id="price_glyph_Mountain" type="number" step="0.1" min="0" value="21"></td></tr>
                    <tr><td>Night</td>     <td><input id="price_glyph_Night"   type="number" step="0.1" min="0" value="26"></td></tr>
                    <tr><td>River</td>     <td><input id="price_glyph_River"   type="number" step="0.1" min="0" value="39"></td></tr>
                    <tr><td>Sealed</td>    <td><input id="price_glyph_Sealed"  type="number" step="0.1" min="0" value="24"></td></tr>
                    <tr><td>Shadow</td>    <td><input id="price_glyph_Shadow"  type="number" step="0.1" min="0" value="44"></td></tr>
                    <tr><td>Strength</td>  <td><input id="price_glyph_Strength" type="number" step="0.1" min="0" value="20"></td></tr>
                    <tr><td>Sun</td>       <td><input id="price_glyph_Sun"     type="number" step="0.1" min="0" value="37"></td></tr>
                    <tr><td>Water</td>     <td><input id="price_glyph_Water"   type="number" step="0.1" min="0" value="29"></td></tr>
                </table>
                <div style="display:flex;justify-content:center;">
                    <button type="button" style="background:var(--accent-gold);color:#272106;border:none;border-radius:8px;padding:7px 18px;font-size:1.12em;font-weight:700;cursor:pointer;box-shadow:0 1px 8px #dab56212;transition:background 0.13s;letter-spacing:1.04px;" onclick="calculateRuneglassCosts()">Calculate</button>
                </div>
            </form>
            <table class="runeglass-result-table" id="resultsTable" style="display:none">
                <tr>
                    <th>Runeglass Case</th>
                    <th>Glyph 1</th>
                    <th>Glyph 2</th>
                    <th>Cost</th>
                </tr>
                <!-- JS will fill the case results here -->
            </table>
            <div class="runeglass-disclaimer">
                Uses the glyph and material cost for a single Runeglass Case. All values are editable per your market. <br>
                Cost shown is for <b>one</b> craft, as per recipe.
            </div>
        </div>
    </main>
    <footer>
        &copy; 2025 Soptik. All rights reserved.
        

    </footer>
    <script>
    <?php
    require('requires/header_script.php');
    ?>
    
    
    // --- RUNEGALSS CALC LOGIC ---
    // Recipe structure
    const GLYPHS = [
        "Above","Chaos","Destruction","Food","Gift","Mountain","Night","River",
        "Sealed","Shadow","Strength","Sun","Water"
    ];
    const CASES = [
        { name: "Abyssal",    glyph1:"Shadow",  glyph2:"Chaos" },
        { name: "Arboreal",   glyph1:"Mountain",glyph2:"River" },
        { name: "Electrified",glyph1:"Above",   glyph2:"Chaos" },
        { name: "Empowered",  glyph1:"Night",   glyph2:"Sealed"},
        { name: "Energizing", glyph1:"Water",   glyph2:"Gift"  },
        { name: "Frozen",     glyph1:"Water",   glyph2:"Shadow"},
        { name: "Ignited",    glyph1:"Sun",     glyph2:"Above" },
        { name: "Leeching",   glyph1:"Food",    glyph2:"Gift"  },
        { name: "Punishing",  glyph1:"Strength",glyph2:"Destruction"},
        { name: "Sighted",    glyph1:"Above",   glyph2:"Destruction"},
        { name: "Siphoning",  glyph1:"Chaos",   glyph2:"Gift"  }
    ];
    // Static recipe
    const SAND = { id: "sand", label:"Charged Sand", qty: 10 };
    const SULFUR = { id: "sulfur", label:"Sulfur", qty: 4 };
    const ECTO = { id: "ecto", label:"Ancient Glob of Ectoplasm", qty: 3 };

    function getValue(id) {
        const v = parseFloat(document.getElementById("price_"+id).value);
        return isNaN(v) ? 0 : v;
    }
    function calculateRuneglassCosts() {
        // Gather material prices
        const p = {};
        GLYPHS.forEach(g => p[g] = getValue("glyph_"+g));
        const sand   = getValue("sand");
        const sulfur = getValue("sulfur");
        const ecto   = getValue("ecto");
        // Compute for each case:
        let html = "";
        for(const rg of CASES) {
            const g1 = p[rg.glyph1];
            const g2 = p[rg.glyph2];
            const cost = (g1 * 5) + (g2 * 5) + (sand * 10) + (sulfur * 4) + (ecto * 3);
            html += `<tr>
                <td class="rg-case">${rg.name}</td>
                <td>${rg.glyph1} (x5)</td>
                <td>${rg.glyph2} (x5)</td>
                <td class="rg-cost">${cost.toFixed(2)}</td>
            </tr>`;
        }
        document.getElementById('resultsTable').innerHTML =
            `<tr>
                <th>Runeglass Case</th>
                <th>Glyph 1</th>
                <th>Glyph 2</th>
                <th>Cost</th>
            </tr>` + html;
        document.getElementById('resultsTable').style.display = "table";
    }
    </script>
</body>
</html>
