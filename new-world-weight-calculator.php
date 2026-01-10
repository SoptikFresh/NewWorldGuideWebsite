<?php
    require('requires/meta_tags.php');
    ?>
    <?php
    require('requires/header_styling2.php');
    ?>
        footer {
            font-size: 1.04rem;
            opacity: 0.93;
            box-shadow: 0 -2px 16px #0004;
            border-top: 1.5px solid #dab56246;
            padding: 1rem 0;
            width: 100vw;
            margin-top: 38px;
        }
        .main-content-center {
            flex: 1 0 auto;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 200px);
        }
        .armor-calc-box {
            background: var(--bg-section);
            border-radius: 24px;
            box-shadow: 0 6px 40px #dab56224, 0 2px 16px #dab56211;
            border: 1.2px solid #e8d8b2;
            max-width: 500px;
            width: 92vw;
            padding: 46px 30px 36px 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 32px;
            margin-bottom: 32px;
            position: relative;
        }
        .armor-calc-title {
            font-size: 2.08rem;
            font-weight: 900;
            color: var(--accent-gold);
            text-shadow: 0 3px 24px #dab5621a, 0 0 8px #fff2;
            letter-spacing: 1.1px;
            text-align: center;
            margin-bottom: 33px;
            margin-top: 0;
            line-height: 1.14;
        }
        .armor-calc-form {
            width: 100%;
            max-width: 340px;
            display: flex;
            flex-direction: column;
            gap: 17px;
            margin-bottom: 28px;
        }
        .input-group {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 10px;
            width: 100%;
        }
        .input-group label {
            flex: 1 1 auto;
            color: #6d5106;
            font-size: 1.07em;
            font-weight: 500;
        }
        .input-group select, .input-group input[type="number"] {
            flex: 0 0 110px;
            background: #fff9dc;
            color: #382c10;
            border: 1.4px solid #dab56281;
            border-radius: 7px;
            padding: 7px 5px;
            font-size: 1.13em;
            text-align: center;
            outline: none;
            appearance: none;
            transition: border-color .14s;
        }
        .input-group select:focus,
        .input-group input[type="number"]:focus {
            border-color: var(--accent-gold);
        }
        .artifact-checkbox-label {
            margin-left: 0;
            font-size: 1em;
            color: #a3822d;
            font-weight: 600;
            display: block;
            padding-top: 3px;
            text-align: left;
        }
        .artifact-checkbox {
            accent-color: #dab562;
            margin-right: 9px;
            transform: scale(1.16);
        }
        .armor-calc-result {
            margin-top: 22px;
            padding: 18px 12px;
            border-radius: 14px;
            background: #fffcea;
            box-shadow: 0 2px 8px #dab56223;
            font-size: 1.18rem;
            color: #382c10;
            min-width: 180px;
            text-align: center;
            font-weight: 600;
            border: 1.2px solid #dab56260;
        }
        .weight-tier {
            font-size: 1.12em;
            font-weight: bold;
            letter-spacing: 1.7px;
            margin-top: 7px;
            padding: 0.21em 1.05em;
            border-radius: 7px;
            display: inline-block;
        }
        .light { color: #31923A; border: 2px solid #aaff80; background: #f5ffec; }
        .medium { color: #7d6512; border: 2px solid #ffe66b; background: #fffada; }
        .heavy { color: #a75d1f; border: 2px solid #ff9870; background: #fff2e9; }
        .weight-class-guide {
            color:#634d1b;
            font-size:0.98em;
            margin-top:28px;
            text-align:left;
        }
        @media (max-width: 700px) {
            .armor-calc-box { max-width: 99vw; padding: 18px 2vw 15px 2vw;}
            .armor-calc-title { font-size: 1.1rem; }
            .armor-calc-form { max-width: 98vw; font-size: 0.95em; }
            .input-group select, .input-group input { width: 60px; font-size: 0.98em;}
        }
        @media (max-width: 460px) {
            .armor-calc-title { font-size: 0.98rem; word-break: break-all;}
            .input-group label { font-size:0.96em;}
            .armor-calc-result { font-size: 0.95rem; }
        }
        @media (max-width: 1450px) {
            main, .dropdown-bar {
                max-width: 99vw;
            }
        }
        @media (max-width: 1100px) {
            main {
                padding: 1.2rem 0.7rem 1.2rem 0.7rem;
            }
            .dropdown-bar { gap: 0.7rem; }
        }
        @media (max-width: 900px) {
            .dropdown-bar { flex-wrap: wrap; justify-content: flex-start; }
            .logo-img { width: 38px; height: 38px;}
            .site-title { font-size: 1.11rem;}
            .nav-bar { gap: 0.1rem;}
        }
        @media (max-width: 700px) {
            .nav-bar { grid-template-columns: 1fr auto 1fr; padding: 0 0.2em; }
            .nav-col-left, .nav-col-right { display: none; }
            .hamburger { display: flex; }
            .logo-area { grid-column: 2; }
        }
        @media (max-width: 530px) {
            .logo-img { width: 27px; height: 27px;}
            .site-title { font-size: 0.98rem;}
            main { padding: 0.3rem; }
        }
    </style>
</head>
<body>
    <?php
    require('requires/header.php');
    ?>
    <main class="main-content-center">
        <div class="armor-calc-box">
            <div class="armor-calc-title">ARMOR WEIGHT CALCULATOR</div>
            <form class="armor-calc-form" id="armorForm" autocomplete="off">
                <div class="input-group">
                    <label for="helmet">Helmet:</label>
                    <select id="helmet">
                        <option value="1.5">Light (1.5)</option>
                        <option value="2.6">Medium (2.6)</option>
                        <option value="4.7">Heavy (4.7)</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="chest">Chestplate:</label>
                    <select id="chest">
                        <option value="0.0">Featherweight (0.0)</option>
                        <option value="3.5">Light (3.5)</option>
                        <option value="6.2">Medium (6.2)</option>
                        <option value="11.0">Heavy (11.0)</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="gloves">Gloves:</label>
                    <select id="gloves">
                        <option value="1.5">Light (1.5)</option>
                        <option value="2.6">Medium (2.6)</option>
                        <option value="4.7">Heavy (4.7)</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="pants">Pants:</label>
                    <select id="pants">
                        <option value="2.0">Light (2.0)</option>
                        <option value="3.5">Medium (3.5)</option>
                        <option value="6.3">Heavy (6.3)</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="boots">Boots:</label>
                    <select id="boots">
                        <option value="1.5">Light (1.5)</option>
                        <option value="2.6">Medium (2.6)</option>
                        <option value="4.7">Heavy (4.7)</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="shield">Shield:</label>
                    <select id="shield">
                        <option value="0">None (0.0)</option>
                        <option value="2.7">Round (2.7)</option>
                        <option value="5.4">Kite (5.4)</option>
                        <option value="11.0">Tower (11.0)</option>
                    </select>
                </div>
            </form>
            <div class="armor-calc-result" id="armorResult">
                Total Weight: 0.0<br>
                <span class="weight-tier light">Light</span>
            </div>
            <div class="weight-class-guide">
                <b>Weight Classes:</b><br>
                <span class="weight-tier light">Light</span> : total &lt; 13<br>
                <span class="weight-tier medium">Medium</span> : 13 – 23<br>
                <span class="weight-tier heavy">Heavy</span> : &gt; 23
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
    
    // --- ARMOR WEIGHT CALCULATOR LOGIC ---
   const SLOTS = ["helmet", "chest", "gloves", "pants", "boots", "shield"];
    function updateArmorWeight() {
        let total = 0;
        SLOTS.forEach(slot => {
            let sel = document.getElementById(slot);
            if (sel) total += parseFloat(sel.value) || 0;
        });
        let tierClass = "", tierName = "";
        if (total < 13) {       tierClass = "light";  tierName = "Light"; }
        else if (total <= 23) { tierClass = "medium"; tierName = "Medium"; }
        else {                  tierClass = "heavy";  tierName = "Heavy";  }
        document.getElementById("armorResult").innerHTML =
            "Total Weight: " + total.toFixed(1) + "<br>" +
            `<span class="weight-tier ${tierClass}">${tierName}</span>`;
    }
    SLOTS.forEach(slot => {
        let el = document.getElementById(slot);
        if (el) el.addEventListener('change', updateArmorWeight);
    });
    document.addEventListener('DOMContentLoaded', updateArmorWeight);
    </script>
</body>
</html>
