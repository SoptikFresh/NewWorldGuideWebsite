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
        .calc-container {
            background: var(--bg-section);
            border-radius: 24px;
            box-shadow: 0 6px 40px #dab56224, 0 2px 16px #dab56211;
            border: 1.2px solid #e8d8b2;
            max-width: 900px;
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
        @media (max-width: 600px) {
            .calc-container { padding: 7vw 1.5vw 9vw 1.5vw;}
            .armor-calc-title { font-size: 1.12rem;}
            .armor-calc-form { max-width: 98vw; }
        }

  form label {
    display: flex;
    justify-content: space-between;
    margin-bottom: 12px;
    font-weight: bold;
    font-size: 1em;
  }
  

  form input[type="number"] {
    padding: 5px 8px;
    border-radius: 6px;
    border: 1.2px solid #dab56282;
    background: #fffbe6;
    margin-top: 2px;
    width: 80px;
    font-size: 1em;
  }

  button {
    width: 100%;
    font-weight: bold;
    font-size: 1.1em;
    padding: 10px;
    background-color: #444;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 15px;
  }

  button:hover {
    background-color: #222;
  }

  #results {
    margin-top: 25px;
    border-top: 2px solid #444;
    padding-top: 20px;
  }

  .matrix-result {
    border: 1px solid #999;
    border-radius: 5px;
    background-color: #eef0f3;
    padding: 12px 15px;
    margin-bottom: 20px;
  }

  .matrix-result h3 {
    margin-top: 0;
    color: #222;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 12px;
  }
  th, td {
    border: 1px solid #999;
    padding: 6px 8px;
    text-align: left;
    font-size: 0.9em;
  }
  th {
    background-color: #ddd;
  }

  .note {
    font-size: 0.9em;
    font-style: italic;
    color: #555;
    margin-top: 10px;
  }
  .calc-disclaimer {
            color: #a3822d;
            font-size: 0.97em;
            margin-top: 16px;
            text-align: center;
        }
</style>
</head>
<body>
    <?php
    require('requires/header.php');
    ?>
<main class="main-content-center">
    <div class="armor-calc-box">
        <div class="calc-container">
          <div class="armor-calc-title">MATRIX CALCULATOR</div>
          <form class="armor-calc-form" id="matrixCalc">
            <label>Prismatic Ingots: <input type="number" step="1" min="0" name="prismatic_ingot" required /></label>
            <label>Prismatic Blocks: <input type="number" step="1" min="0" name="prismatic_block" required /></label>
            <label>Prismatic Planks: <input type="number" step="1" min="0" name="prismatic_plank" required /></label>
            <label>Prismatic Cloths: <input type="number" step="1" min="0" name="prismatic_cloth" required /></label>
            <label>Prismatic Leathers: <input type="number" step="1" min="0" name="prismatic_leather" required /></label>
            <label>Infused Alkahest: <input type="number" step="1" min="0" name="infused_alkahest" required /></label>
            <label>Powerful Gemstone Dusts: <input type="number" step="1" min="0" name="gemstone_dust" required /></label>
            <button type="submit">Calculate</button>
          </form>
            <div class="calc-disclaimer">
                You must enter prices for all listed materials.<br>
                Costs reflect crafting <b>one</b> Matrix.
            </div>
          <div id="results"></div>
        </div>
    </div>
</main>
<footer>
        &copy; 2025 Soptik. All rights reserved. 
        
    </footer>
<script>
    
    /*
        function updateLiveUsers() {
            fetch('/count_online.php')
                .then(res => res.text())
                .then(num => {
                    document.getElementById('live-users').innerText =
                      num + ' users online';
                });
        }
        setInterval(updateLiveUsers, 10000); // Every 10 seconds
        updateLiveUsers();
    */
<?php
    require('requires/header_script.php');
    ?>

  // Data definitions for sub-recipes (materials)
  const subRecipes = {
    'Enchanted Handle': {
      Prismatic_Ingot: 2,
      Prismatic_Plank: 2,
      Prismatic_Leather: 2,
      Azoth: 250,
      Gypsum_Orb: 5,
    },
    'Tempered Cast': {
      Prismatic_Ingot: 2,
      Prismatic_Cloth: 2,
      Prismatic_Leather: 2,
      Azoth: 250,
      Gypsum_Orb: 5,
    },
    'Honing Acid': {
      Prismatic_Block: 2,
      Prismatic_Leather: 2,
      Infused_Alkahest: 25,
      Azoth: 250,
      Gypsum_Orb: 5,
    },
    'Blessed Rivets': {
      Prismatic_Block: 2,
      Prismatic_Ingot: 2,
      Powerful_Gemstone_Dust: 15,
      Azoth: 250,
      Gypsum_Orb: 5,
    },
    'Reinforced Bracing': {
      Prismatic_Block: 2,
      Prismatic_Plank: 2,
      Prismatic_Cloth: 2,
      Azoth: 250,
      Gypsum_Orb: 5,
    }
  };
  
  const subRecipeMap = [
    {
      name: 'Enchanted Handle',
      method: 'Armoring',
      station: 'Outfitting',
      ingredients: { Prismatic_Ingot: 2, Prismatic_Plank: 2, Prismatic_Leather: 2, Azoth: 250, Gypsum_Orb: 5},
    },
    {
      name: 'Tempered Cast',
      method: 'Weaponsmithing',
      station: 'Forge',
      ingredients: { Prismatic_Ingot: 2, Prismatic_Cloth: 2, Prismatic_Leather: 2, Azoth: 250, Gypsum_Orb: 5},
    },
    {
      name: 'Honing Acid',
      method: 'Arcana',
      station: 'Arcane Repository',
      ingredients: { Prismatic_Block: 2, Prismatic_Leather: 2, Infused_Alkahest: 25, Azoth: 250, Gypsum_Orb: 5},
    },
    {
      name: 'Blessed Rivets',
      method: 'Jewelcrafting',
      station: 'Outfitting',
      ingredients: { Prismatic_Block: 2, Prismatic_Ingot: 2, Powerful_Gemstone_Dust: 15, Azoth: 250, Gypsum_Orb: 5},
    },
    {
      name: 'Reinforced Bracing',
      method: 'Engineering',
      station: 'Workshop',
      ingredients: { Prismatic_Block: 2, Prismatic_Plank: 2, Prismatic_Cloth: 2, Azoth: 250, Gypsum_Orb: 5},
    },
  ];

  // Data for each matrix, their recipes, traits and stations
  const matrices = [
    {
      name: 'Weapon Matrix',
      method: 'Weaponsmithing',
      station: 'Forge',
      components: ['Enchanted Handle', 'Tempered Cast'],
      refiningTrait: 'Weaponsmithing',
      stationUsed: 'Forge',
    },
    {
      name: 'Weapon Matrix',
      method: 'Engineering',
      station: 'Workshop',
      components: ['Enchanted Handle', 'Honing Acid'],
      refiningTrait: 'Engineering',
      stationUsed: 'Workshop',
    },
    {
      name: 'Armor Matrix',
      method: 'Armoring',
      station: 'Outfitting',
      components: ['Blessed Rivets', 'Reinforced Bracing'],
      refiningTrait: 'Armoring',
      stationUsed: 'Outfitting',
    },
    {
      name: 'Armor Matrix',
      method: 'Arcana',
      station: 'Arcane Repository',
      components: ['Tempered Cast', 'Honing Acid'],
      refiningTrait: 'Arcana',
      stationUsed: 'Arcane Repository',
    },
    {
      name: 'Jewelry Matrix',
      method: 'Jewelcrafting',
      station: 'Outfitting',
      components: ['Blessed Rivets', 'Honing Acid'],
      refiningTrait: 'Jewelcrafting',
      stationUsed: 'Outfitting',
    },
  ];

  // Normalize input names to keys used in subRecipes
  const priceKeysMap = {
    prismatic_ingot: 'Prismatic_Ingot',
    prismatic_block: 'Prismatic_Block',
    prismatic_plank: 'Prismatic_Plank',
    prismatic_cloth: 'Prismatic_Cloth',
    prismatic_leather: 'Prismatic_Leather',
    infused_alkahest: 'Infused_Alkahest',
    gemstone_dust: 'Powerful_Gemstone_Dust',
  };

  // On form submit, perform calculation
  document.getElementById('matrixCalc').addEventListener('submit', function(e){
    e.preventDefault();

    // Gather prices input by user
    const formData = new FormData(this);
    let prices = {};
    for (let [key, val] of formData.entries()) {
      prices[priceKeysMap[key]] = parseFloat(val);
    }

    // Calculate costs
    // 1. Calculate cost for each sub-recipe material
    let subRecipeCosts = {};
    for(let material in subRecipes) {
      const ingredients = subRecipes[material];
      let cost = 0;
      for(let ing in ingredients) {
        const qty = ingredients[ing];
        const unitPrice = prices[ing] || 0;
        cost += qty * unitPrice;
      }
      subRecipeCosts[material] = cost;
    }

    // 2. Calculate total costs and total raw materials per matrix
    let outputHTML = '';

    // Utility: Sum up raw mats of components in a matrix
    function sumMaterials(components) {
      let totalMats = {};
      components.forEach(mat => {
        let ing = subRecipes[mat];
        for(let k in ing) {
          totalMats[k] = (totalMats[k] || 0) + ing[k];
        }
      });
      return totalMats;
    }

    // Format numbers nicely
    function fmtNum(n) {
      return n.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2});
    }

    matrices.forEach((matrix, i) => {
      const compCosts = matrix.components.map(c => subRecipeCosts[c]);
      const matrixCost = compCosts.reduce((a,b) => a+b, 0);

      const totalMaterials = sumMaterials(matrix.components);

      outputHTML += `<div class="matrix-result">
        <h3>${matrix.name} (${matrix.method}, ${matrix.station})</h3>
        <p><strong>Refining Trait:</strong> ${matrix.refiningTrait} <br/>
        <strong>Station:</strong> ${matrix.stationUsed}</p>
        <p><strong>Total Cost:</strong> ${fmtNum(matrixCost)}</p>
        <p><strong>Components and Costs:</strong></p>
        <ul>`;
      matrix.components.forEach((comp, idx) => {
        outputHTML += `<li>${comp}: ${fmtNum(compCosts[idx])}</li>`;
      });
      outputHTML += `</ul>`;

      outputHTML += `<p><strong>Materials Required:</strong></p><table><thead><tr><th>Material</th><th>Quantity</th><th>Unit Price</th><th>Cost</th></tr></thead><tbody>`;

      let totalCalcCost = 0;
      for(let mat in totalMaterials) {
        let qty = totalMaterials[mat];
        let unitPrice = prices[mat] || 0;
        let cost = qty * unitPrice;
        totalCalcCost += cost;
        outputHTML += `<tr>
          <td>${mat.replace(/_/g, ' ')}</td><td>${qty}</td><td>${fmtNum(unitPrice)}</td><td>${fmtNum(cost)}</td>
        </tr>`;
      }

      outputHTML += `</tbody><tfoot><tr><th colspan="3" style="text-align:right">Sum:</th><th>${fmtNum(totalCalcCost)}</th></tr></tfoot></table>`;

      outputHTML += `<p class="note">*This matrix requires the refining trait <strong>${matrix.refiningTrait}</strong> at the <strong>${matrix.stationUsed}</strong> station.</p>`;
      outputHTML += `</div>`;
    });

    // Also add the matrix method mapping summary table as requested
    outputHTML += `<h3>Matrix Method Mapping</h3><table><thead><tr><th>Matrix</th><th>Recipe Path</th><th>Ingredients Needed</th><th>Trait</th><th>Station</th></tr></thead><tbody>`;
    matrices.forEach(matrix => {
      // Combine ingredient totals nicely for method mapping as well
      const totalMaterials = sumMaterials(matrix.components);

      const ingredientsList = Object.entries(totalMaterials)
        .map(([mat, qty]) => `${qty} ${mat.replace(/_/g, ' ')}`)
        .join(', ');

      outputHTML += `<tr>
        <td>${matrix.name} (${matrix.method})</td>
        <td>${matrix.components.join(' + ')}</td>
        <td>${ingredientsList}</td>
        <td>${matrix.refiningTrait}</td>
        <td>${matrix.stationUsed}</td>
      </tr>`;
    });
    outputHTML += `</tbody></table>`;

 outputHTML += `<h3>Subrecipe Method Mapping</h3><table><thead><tr><th>Subrecipe</th><th>Ingredients Needed</th><th>Trait</th><th>Station</th></tr></thead><tbody>`;
      // Combine ingredient totals nicely for method mapping as well

    subRecipeMap.forEach(sub => {
    const ingredientsList2 = Object.entries(sub.ingredients)
      .map(([ing, qty]) => `${qty} ${ing.replace(/_/g, ' ')}`)
      .join(', ');

      outputHTML += `<tr>
        <td>${sub.name} (${sub.method})</td>
        <td>${ingredientsList2}</td>
        <td>${sub.method}</td>
        <td>${sub.station}</td>
      </tr>`;
    });
    outputHTML += `</tbody></table>`;

    document.getElementById('results').innerHTML = outputHTML;
  });
</script>

</body>
</html>
