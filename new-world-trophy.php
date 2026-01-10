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
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 160px);
            width: 100vw;
        }
        .trophy-calc-box {
            background: var(--bg-section);
            border-radius: 24px;
            box-shadow: 0 6px 40px #dab56224, 0 2px 16px #dab56211;
            border: 1.2px solid #e8d8b2;
            max-width: var(--main-max-width);
            width: 95vw;
            padding: 44px 30px 36px 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 24px 0 32px 0;
            position: relative;
        }
        .calc-title {
            font-size: 2rem;
            font-weight: 900;
            color: var(--accent-gold);
            text-shadow: 0 2px 12px #dab5623a, 0 0 6px #fff2;
            letter-spacing: 1.1px;
            text-align: center;
            margin-bottom: 34px;
            margin-top: 0;
            line-height: 1.14;
        }
        .trophy-calc-form {
            width: 100%;
            max-width: 430px;
            margin-bottom: 16px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .input-row {
            display: flex;
            gap: 9px;
            align-items: center;
            margin-bottom: 4px;
        }
        .input-row label {
            flex: 0 0 120px;
            color: #825c04;
            font-size: 1.09em;
            font-weight: 600;
            text-align: right;
        }
        .input-row select, .input-row input {
            flex: 1 1 0;
            padding: 8px 8px;
            font-size: 1.04em;
            background: #fffbe6;
            color: #382c10;
            border: 1.2px solid #dab56282;
            border-radius: 7px;
            margin-left: 10px;
        }
        .input-row select:focus, .input-row input:focus {
            border-color: var(--accent-gold);
        }
        .input-row input[type='number'] { max-width: 80px; }
        .section-subtitle {
            font-size: 1.1em;
            color: #a3822d;
            margin: 25px 0 9px 0;
            font-weight: 700;
            text-align: left;
        }
        .mat-input-list {
            display: flex;
            flex-wrap: wrap;
            gap: 13px 22px;
            margin: 10px 0 15px 0;
        }
        .mat-input-item {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            font-size: 1em;
        }
        .mat-input-item label { font-weight: 600; color: #272106;}
        .mat-input-item input {
            padding: 5px 8px;
            border-radius: 6px;
            border: 1.2px solid #dab56282;
            background: #fffbe6;
            margin-top: 2px;
            width: 80px;
            font-size: 1em;
        }
        .calc-actions {
            display: flex;
            gap: 19px;
            margin: 18px 0 10px 0;
            justify-content: center;
        }
        .calc-actions button {
            background: var(--accent-gold);
            color: #272106;
            border: none;
            border-radius: 8px;
            padding: 8px 18px;
            font-weight: 700;
            cursor: pointer;
            font-size: 1.08em;
            box-shadow: 0 1px 8px #dab56212;
            letter-spacing: 1.08px;
            transition: background 0.13s;
        }
        .calc-actions button:hover {
            background: #fffbe9;
            color: #a3822d;
        }
        .result-table {
            width: 100%;
            max-width: 380px;
            margin: 18px auto;
            border-collapse: collapse;
            background: #fffbe9;
            border-radius: 12px;
            box-shadow: 0 2px 8px #dab56216;
            overflow: hidden;
        }
        .result-table th, .result-table td {
            padding: 10px 7px;
            text-align: center;
            font-size: 1.13em;
            border-bottom: 1px solid #f7ecd6;
        }
        .result-table th {
            background: #fcf7d9;
            color: #a3822d;
            font-weight: bold;
        }
        .result-table td.result-profit {
            font-weight: 800;
            letter-spacing: 1.2px;
            color: #2d702d;
            font-size: 1.14em;
            background: #eeffe8;
        }
        .calc-disclaimer {
            color: #a3822d;
            font-size: 0.97em;
            margin-top: 16px;
            text-align: center;
        }
        @media (max-width: 600px) {
            .trophy-calc-box { padding: 7vw 1.5vw 9vw 1.5vw;}
            .calc-title { font-size: 1.12rem;}
            .result-table, .mat-input-list, .trophy-calc-form { max-width: 98vw; }
            .input-row label { flex: 0 0 80px; }
        }
        
        
    </style>
</head>
<body>
    <?php
    require('requires/header.php');
    ?>
    <main class="main-content-center">
        <div class="trophy-calc-box">
            <div class="calc-title">TROPHY COST CALCULATOR</div>
            <form id="trophyForm" class="trophy-calc-form" autocomplete="off">
              <div class="input-row">
                  <label for="trophyGroup">Group:</label>
                  <select id="trophyGroup" onchange="onGroupChange()">
                      <option value="combat">Combat</option>
                      <option value="crafting">Crafting</option>
                      <option value="gathering">Gathering</option>
                  </select>
              </div>
              <div class="input-row">
                  <label for="trophyType">Trophy:</label>
                  <select id="trophyType" onchange="updateMatsList()"></select>
              </div>
              <div class="input-row">
                  <label for="trophyTier">Tier:</label>
                  <select id="trophyTier" onchange="updateMatsList()">
                      <option value="minor">Minor</option>
                      <option value="basic">Basic</option>
                      <option value="major">Major</option>
                  </select>
              </div>
              <div class="section-subtitle">Material Prices</div>
              <div class="mat-input-list" id="matInputs"></div>
              <div class="calc-actions">
                  <button type="button" onclick="calculateTrophyCost()">Calculate</button>
                  <button type="button" onclick="resetForm()">Reset</button>
              </div>
            </form>
            <table class="result-table" id="resultTable" style="display:none;">
                <tr>
                    <th>Trophy</th>
                    <th>Tier</th>
                    <th>Cost</th>
                </tr>
                <tr>
                    <td id="resTrophy"></td>
                    <td id="resTier"></td>
                    <td id="resCost" class="result-profit"></td>
                </tr>
            </table>
            <div class="calc-disclaimer">
                You must enter prices for all listed materials.<br>
                Costs reflect crafting <b>one</b> trophy at the selected tier.
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
    
    
    // ----- TROPHY DATA (based on your doc)
    // Group definitions: name, list of trophies (name, minor-mote)
    const GROUPS = {
      combat: [
        { name: "Ancient Combat Trophy",     mote: "Death Mote" },
        { name: "Angry Earth Combat Trophy", mote: "Life Mote"  },
        { name: "Corrupted Combat Trophy",   mote: "Fire Mote"  },
        { name: "Lost Combat Trophy",        mote: "Soul Mote"  },
        { name: "Beast Combat Trophy",       mote: "Air Mote"   },
        { name: "Human Combat Trophy",       mote: "Death Mote" }
      ],
      crafting: [
        { name: "Weaponsmithing Trophy",     mote: "Fire Mote"  },
        { name: "Armoring Trophy",           mote: "Earth Mote" },
        { name: "Engineering Trophy",        mote: "Air Mote"   },
        { name: "Arcana Trophy",             mote: "Death Mote" },
        { name: "Jewelcrafting Trophy",      mote: "Life Mote"  }
      ],
      gathering: [
        { name: "Mining Trophy",     mote: "Earth Mote"  },
        { name: "Fishing Trophy",    mote: "Water Mote"  },
        { name: "Logging Trophy",    mote: "Air Mote"    },
        { name: "Harvesting Trophy", mote: "Life Mote"   },
        { name: "Skinning Trophy",   mote: "Death Mote"  }
      ]
    };
    // For mapping between all basic/major mats and trophy; exceptions are coded explicitly
    const BASIC_MAT = {
      "Ancient Combat Trophy": "Ancient Femur", "Angry Earth Combat Trophy": "Barkflesh",
      "Corrupted Combat Trophy": "Corrupted Crest", "Lost Combat Trophy": "Ectoplasmic Essence",
      "Beast Combat Trophy": "Pristine Wolf Claw", "Human Combat Trophy": "Human Digit",
      "Weaponsmithing Trophy": "Quartermaster's Notes", "Armoring Trophy":"Armorer's Journal",
      "Engineering Trophy": "Engineer's Technique", "Arcana Trophy":"Ancient Texts",
      "Jewelcrafting Trophy": "Life Mote", // there isn't in your doc, but keep as default
      "Mining Trophy": "Surveyor's Tools", "Logging Trophy": "Lumberjack's Token",
      "Harvesting Trophy":"Journal of Aeternum Flora","Skinning Trophy":"Notes on Aeternum Fauna",
      "Fishing Trophy":"Taxidermied Blue"
    };
    // Exception for Basic Human Combat Trophy:
    const BASIC_EXTRAS = {
      "Human Combat Trophy": [
        { mat: "Flame Core", qty: 5 }
      ]
    };
    // Major mats
    const MAJOR_MAT = {
      "Ancient Combat Trophy": "Ancient Mandible", "Angry Earth Combat Trophy": "Glowing Sap",
      "Corrupted Combat Trophy": "Corrupted Totem", "Lost Combat Trophy": "Ephemeral Seal",
      "Beast Combat Trophy": "Pristine Bear Claw", "Human Combat Trophy": "Human Idol",
      "Weaponsmithing Trophy": "Forgemaster's Notes", "Armoring Trophy":"Precision Armoring",
      "Engineering Trophy": "Precision Engineering","Arcana Trophy":"Philosopher's Stone",
      "Jewelcrafting Trophy": "Philosopher's Stone", // Adjust or clarify if needed
      "Mining Trophy": "Adamantine Dust", "Logging Trophy": "Pure Resin",
      "Harvesting Trophy":"Mercurial Token","Skinning Trophy":"Tracker's Seal",
      "Fishing Trophy":"Taxidermied Daemonaja"
    };
        
        const MAJOR_EXTRAS = {
      "Human Combat Trophy": [
        { mat: "Flame Core", qty: 50 }
      ]
    };
    // Universal mats per tier
    const MATS = {
      minor: [
        { mat: "Mote",          qty: 25 },
        { mat: "Maple Stain",   qty: 1  },
        { mat: "Lumber",        qty: 25  },
        { mat: "Steel Ingot",   qty: 20  },
        { mat: "Tier 2 Mat",    qty: 0  } // Used for form logic, but not rendered
      ],
      basic: [
        { mat: "Minor Trophy",      qty: 1  },
        { mat: "Wyrdwood Plank",    qty: 25 },
        { mat: "Starmetal Ingot",   qty: 20 },
        { mat: "Oak Stain",         qty: 1  },
        { mat: "Basic Trophy Mat",  qty: 1  }
      ],
      major: [
        { mat: "Basic Trophy",      qty: 1 },
        { mat: "Ironwood Plank",    qty: 25 },
        { mat: "Orichalcum Ingot",  qty: 20 },
        { mat: "Mahogany Stain",    qty: 1  },
        { mat: "Major Trophy Mat",  qty: 1  }
      ]
    };
    // Major exceptions for luck/crafting etc can be coded similar to basic if you wish

    // All unique mats (for user to fill price once, not per trophy)
    const ALL_MATS = [
      "Death Mote", "Life Mote", "Fire Mote", "Soul Mote", "Air Mote",
      "Earth Mote", "Water Mote",
      "Maple Stain", "Wyrdwood Plank", "Starmetal Ingot", "Oak Stain",
      "Ironwood Plank", "Orichalcum Ingot", "Mahogany Stain",
      // All Basic Trophy Mats
      "Ancient Femur", "Barkflesh", "Corrupted Crest", "Ectoplasmic Essence",
      "Pristine Wolf Claw", "Human Digit", "Quartermaster's Notes", "Armorer's Journal",
      "Engineer's Technique", "Ancient Texts", "Journal of Aeternum Flora",
      "Notes on Aeternum Fauna", "Surveyor's Tools", "Lumberjack's Token",
      "Taxidermied Blue", "Life Mote", // for Jewelcrafting
      // Exception
      "Flame Core",
      // All Major Trophy Mats
      "Glowing Sap", "Pristine Bear Claw", "Corrupted Totem", "Ephemeral Seal",
      "Human Idol", "Ancient Mandible", "Forgemaster's Notes", "Precision Armoring",
      "Precision Engineering", "Philosopher's Stone", "Mercurial Token", "Tracker's Seal",
      "Adamantine Dust", "Pure Resin", "Taxidermied Daemonaja"
    ].filter((v,i,a)=>a.indexOf(v)===i); // Remove dups

    // Generate trophy select for current group
    function onGroupChange() {
      let group = document.getElementById("trophyGroup").value;
      let typeSel = document.getElementById("trophyType");
      typeSel.innerHTML = "";
      GROUPS[group].forEach(trophy => {
        let opt = document.createElement("option");
        opt.value = trophy.name;
        opt.textContent = trophy.name;
        typeSel.appendChild(opt);
      });
      updateMatsList();
    }
    function updateMatsList() {
      let group = document.getElementById("trophyGroup").value;
      let trophyName = document.getElementById("trophyType").value;
      let tier = document.getElementById("trophyTier").value;
      let matsArea = document.getElementById("matInputs");
      matsArea.innerHTML = "";
      // Determine mats
      let mats = [];
      if (tier === "minor") {
        // for minor, we need the proper mote
        let trophy = GROUPS[group].find(t=>t.name===trophyName);
        mats.push({mat: trophy.mote, qty: 25});
        mats.push({mat: "Maple Stain", qty: 1});
        mats.push({mat: "Lumber", qty: 25});
        mats.push({mat: "Steel Ingot", qty: 20});
      } else if (tier === "basic") {
        mats.push({mat: "Minor Trophy", qty: 1});
        mats.push({mat: "Wyrdwood Plank", qty: 25});
        mats.push({mat: "Starmetal Ingot", qty: 20});
        mats.push({mat: "Oak Stain", qty: 1});
        // Add trophy-specific
        mats.push({mat: BASIC_MAT[trophyName] || "", qty: 1});
        if (BASIC_EXTRAS[trophyName]) {
          BASIC_EXTRAS[trophyName].forEach(x=>mats.push(x));
        }
      } else if (tier === "major") {
        mats.push({mat: "Basic Trophy", qty: 1});
        mats.push({mat: "Ironwood Plank", qty: 25});
        mats.push({mat: "Orichalcum Ingot", qty: 20});
        mats.push({mat: "Mahogany Stain", qty: 1});
        // Add trophy-specific
        mats.push({mat: MAJOR_MAT[trophyName] || "", qty: 1});
        if (MAJOR_EXTRAS[trophyName]) {
          MAJOR_EXTRAS[trophyName].forEach(x=>mats.push(x));
        }
      }
      // Render fields
      mats.forEach(entry => {
        if (!entry.mat) return;
        let id = "price_"+slug(entry.mat);
        matsArea.innerHTML += `
        <div class="mat-input-item">
          <label for="${id}">
            ${entry.mat} <span style="color:#997631;">×${entry.qty}</span>
          </label>
          <input id="${id}" type="number" step="1" min="0" value="" placeholder="Per unit">
        </div>`;
      });
    }
    function slug(str) { return str.replace(/[^a-z0-9]/gi,"_"); }

    // User input price for a mat (by slug!)
    function getMatPrice(mat) {
      let id = "price_"+slug(mat);
      let el = document.getElementById(id);
      return el && el.value !== "" ? parseFloat(el.value) || 0 : 0;
    }
    function calculateTrophyCost() {
      let trophyName = document.getElementById("trophyType").value;
      let tier = document.getElementById("trophyTier").value;
      // Collect mats & quantities
      let mats = [];
      let group = document.getElementById("trophyGroup").value;
      if (tier === "minor") {
        let trophy = GROUPS[group].find(t=>t.name===trophyName);
        mats.push({mat: trophy.mote, qty: 25});
        mats.push({mat: "Maple Stain", qty: 1});
        mats.push({mat: "Lumber", qty: 25});
        mats.push({mat: "Steel Ingot", qty: 20});
      } else if (tier === "basic") {
        mats.push({mat: "Minor Trophy", qty: 1});
        mats.push({mat: "Wyrdwood Plank", qty: 25});
        mats.push({mat: "Starmetal Ingot", qty: 20});
        mats.push({mat: "Oak Stain", qty: 1});
        mats.push({mat: BASIC_MAT[trophyName] || "", qty: 1});
        if (BASIC_EXTRAS[trophyName]) {
          BASIC_EXTRAS[trophyName].forEach(x=>mats.push(x));
        }
      } else if (tier === "major") {
        mats.push({mat: "Basic Trophy", qty: 1});
        mats.push({mat: "Ironwood Plank", qty: 25});
        mats.push({mat: "Orichalcum Ingot", qty: 20});
        mats.push({mat: "Mahogany Stain", qty: 1});
        mats.push({mat: MAJOR_MAT[trophyName] || "", qty: 1});
        if (MAJOR_EXTRAS[trophyName]) {
          MAJOR_EXTRAS[trophyName].forEach(x=>mats.push(x));
        }
      }
      let total = 0, empty = false;
      mats.forEach(entry => {
        if (!entry.mat) return;
        let p = getMatPrice(entry.mat);
        if (!p) empty = true;
        total += p * entry.qty;
      });
      // Format and show result
      document.getElementById("resTrophy").innerText = trophyName;
      document.getElementById("resTier").innerText = tier.charAt(0).toUpperCase()+tier.slice(1);
      document.getElementById("resCost").innerText = empty ? "Please enter all prices" : total.toFixed(2);
      document.getElementById("resultTable").style.display = "table";
    }
    function resetForm() {
      document.getElementById("resTrophy").innerText = "";
      document.getElementById("resTier").innerText = "";
      document.getElementById("resCost").innerText = "";
      document.getElementById("resultTable").style.display = "none";
      Array.from(document.querySelectorAll('.mat-input-item input')).forEach(i=>i.value="");
    }
    // ------ INIT
    onGroupChange();
    document.getElementById('trophyType').addEventListener('change', updateMatsList);
    document.getElementById('trophyTier').addEventListener('change', updateMatsList);
    </script>
</body>
</html>
