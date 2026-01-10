<?php
    require('requires/meta_tags.php');
    ?>

  <!-- Structured Data -->
    <meta property="og:type" content="article" />
    <meta property="og:title" content=" Hive of Gorgons Raid Guide – New World: Aeternum" />
    <meta property="og:description" content="Master Hive of Gorgon in New World: Aeternum" />


  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "Hive of Gorgons Raid Guide – New World: Aeternum",
    "description": "Master Hive of Gorgon in New World: Aeternum",
    "author": {
      "@type": "Person",
      "name": "NW Builds"
    },
    "dateModified": "2025-08-17",
    "datePublished": "2025-08-17",
    "mainEntityOfPage": {
      "@type": "WebPage",
      "@id": "https://www.nw-builds.com/new-world-hive-of-gorgons-raid-guide"
    },
    "publisher": {
      "@type": "Organization",
      "name": "NW Builds",
      "logo": {
        "@type": "ImageObject",
        "url": "https://www.nw-builds.com/logo.png"
      }
    }
  }
  </script>

  <style>
    :root{
      --bg:#0b0d12;
      --fg:#e7e9ee;
      --muted:#aab1bf;
      --accent:#5de1a7;
      --accent-2:#6cb6ff;
      --card:#10141c;
      --border:#1c2230;
      --warning:#ffd166;
            --accent-gold: #dab562;
            --accent-gold-dark: #a3822d;
            --bg-section: #f8f3e3;
            --shadow: 0 8px 44px #dab56233;
            --main-max-width: 700px;      
    }
    html,body{
        margin:0;
        padding:0;
        background: #080909 url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1600&q=80') center center/cover no-repeat fixed;        color:var(--fg);
        font:16px/1.6 system-ui,-apple-system,Segoe UI,Roboto,Inter,Helvetica,Arial,sans-serif
    }
    a{
        color:var(--accent-2);
        text-decoration:none
    }
    a:hover{
        text-decoration:underline
    }
    .container{
        background: linear-gradient(90deg, #13120a 0%, #31372a 100%);
        max-width:80%;
        margin:auto;
        padding:32px 20px
    }
    header h1{
        font-size:clamp(28px,4vw,42px);
        line-height:1.2;
        margin:0 0 8px 0
    }
    header p{
        color:var(--muted);
        margin:0 0 24px 0}
    .meta{
        display:flex;
        gap:16px;
        flex-wrap:wrap;
        color:var(--muted);
        font-size:14px;
        margin-bottom:24px
    }
    .card{
        background:var(--card)
        ;border:1px solid var(--border);
        border-radius:16px;
        padding:20px
    }
    .toc{
        position:relative
    }
    .toc h2{margin-top:0}
    .toc ol{
        margin:0;
    padding-left:20px;
    display:grid;
    gap:6px
    }
    .callout{
        border-left:4px solid var(--accent);
        background:linear-gradient(90deg,rgba(93,225,167,0.1),transparent);
        padding:12px 14px;
        border-radius:10px;
        margin:16px 0
    }
    .callout.warn{
        border-left-color:var(--warning);
        background:linear-gradient(90deg,rgba(255,209,102,0.12),transparent)
    }
    h2{
        font-size:clamp(22px,3vw,30px);
        margin:28px 0 12px
    }
    h3{
        font-size:20px;
        margin:22px 0 8px
    }
    ul{padding-left:22px}
    .grid{
        display:grid;
        gap:16px
    }
    @media(min-width:900px){
        .grid.two{grid-template-columns:2fr 1fr} 
    }
    table{
        width:100%;
        border-collapse:separate;
        border-spacing:0;
        background:var(--card);
        border:1px solid var(--border);
        border-radius:14px;
        overflow:hidden;
        margin:12px 0
    }
    th,td{
        padding:12px 14px;
        border-bottom:1px solid var(--border);
        vertical-align:top
    }
    th{
        background:#0e141f;
    text-align:left;
    font-weight:600
    }
    tr:last-child td{border-bottom:none}
    code,kbd{
        background:#0d1117;
        border:1px solid #1f2836;
        border-radius:6px;
        padding:1px 6px;
        font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
        font-size:0.95em
    }
    .sticky-sidebar{
        position:sticky;
        top:16px;
        height:max-content
    }
    .label{
        display:inline-block;
        font-size:12px;
        color:#0b0d12;
        background:var(--accent);
        padding:2px 8px;
        border-radius:999px;
        margin-right:8px
    }
    .footer-cta{
        display:flex;
        flex-wrap:wrap;
        gap:12px;
        margin-top:28px
    }
    .btn{
        display:inline-block;
        padding:10px 14px;
        border-radius:10px;
        border:1px solid var(--border);
        background:#0f1622;
        color:var(--fg);
        text-decoration:none
    }
    .btn.primary{
        background:linear-gradient(180deg,var(--accent),#49c48e);
        color:#0b0d12;
        border:none;
        font-weight:600
    }
    .muted{color:var(--muted)}
    .hr{
        height:1px;
        background:var(--border);
        margin:24px 0
    }
    .titul{font-size:clamp(28px,4vw,42px);line-height:1.2;margin:0 0 8px 0}
    /***************************************/
     header {
            background: linear-gradient(90deg, #13120a 0%, #31372a 100%);
            padding: 0.1rem 0 0.75rem 0;
            box-shadow: 0 2px 18px #060605c9;
            border-radius: 0 0 var(--round) var(--round);
            color: var(--accent-gold);
            width: 100vw;
            text-align: center;
            letter-spacing: 1.2px;
            font-family: inherit;
            position: relative;
            z-index: 80;
        }
        .nav-bar {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            align-items: center;
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            gap: 0.5rem;
        }
        .nav-col-left, .nav-col-right {
            display: flex;
            align-items: center;
            gap: 1.1rem;
        }
        .nav-col-left {
            justify-content: flex-start;
        }
        .nav-col-right {
            justify-content: flex-end;
        }
        .logo-area {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.3rem;
            grid-column: 2;
        }
        .logo-img {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            border: 2.3px solid var(--accent-gold);
            box-shadow: 0 0 16px #b49a4a99;
            background: #0002;
            display: block;
            margin: 0 auto;
        }
        .site-title {
            font-size: 1.6rem;
            margin: 0.2em 0 0.13em 0;
            letter-spacing: 2px;
            font-weight: 700;
            text-shadow: 0 2px 16px #b49a4a80, 0 0 4px #0006;
            color: var(--accent-gold);
            text-align: center;
        }
        .nav-link {
            color: var(--accent-gold);
            text-decoration: none;
            font-weight: 500;
            font-size: 1.02rem;
            letter-spacing: 0.05em;
            position: relative;
            padding: 0.24em 0.44em;
            border-radius: 8px;
            font-family: inherit;
            transition: background 0.19s, color 0.19s, box-shadow 0.19s;
        }
        .nav-link:hover {
            background: #272106d9;
            color: #fffbe6;
            box-shadow: 0 0 8px #dab56255;
        }
        .social-link {
            display: flex;
            align-items: center;
            color: var(--accent-gold);
            background: #13120c;
            border-radius: 8px;
            padding: 0.22em 0.7em;
            gap: 0.28em;
            font-size: 1rem;
            text-decoration: none;
            box-shadow: 0 1px 8px #dab56234;
            border: 1.4px solid #493d1550;
            transition: background 0.19s, color 0.19s, box-shadow 0.18s;
        }
        .social-link:hover {
            background: #2d2716;
            color: #fff8d5;
            box-shadow: 0 0 8px #dab56299;
            border-color: #dab56299;
        }
        .hamburger {
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 48px;
            height: 48px;
            border: none;
            background: transparent;
            cursor: pointer;
            grid-column: 3 / span 1;
            z-index: 110;
        }
        .hamburger-bar {
            width: 32px;
            height: 4px;
            background: var(--accent-gold);
            margin: 4px 0;
            border-radius: 4px;
            box-shadow: 0 1px 2px #fbebc6;
            transition: all 0.31s cubic-bezier(.55,0,.23,1.2);
        }
        .hamburger.active .hb-1 { transform: translateY(8px) rotate(45deg); background: #fff; }
        .hamburger.active .hb-2 { opacity: 0; }
        .hamburger.active .hb-3 { transform: translateY(-8px) rotate(-45deg); background: #fff; }
        .nav-overlay {
            display: none;
            position: fixed;
            z-index: 100;
            inset: 0;
            width: 100vw;
            height: 100vh;
            background: #19120ad8;
            backdrop-filter: blur(4px) brightness(0.8);
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 2.2rem;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.23s;
        }
        .nav-overlay.open { display: flex; opacity: 1; pointer-events: unset;}
        .nav-overlay .nav-overlay-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2rem;
        }
        .nav-overlay .nav-link,
        .nav-overlay .social-link {
            font-size: 1.25rem;
            background: none;
            box-shadow: none;
            border: none;
            color: var(--accent-gold);
        }
        @media (max-width: 1450px) {
             .dropdown-bar {
                max-width: 99vw;
            }
        }
        @media (max-width: 1100px) {
            
            .dropdown-bar { gap: 0.7rem; }
        }
        @media (max-width: 900px) {
            .dropdown-bar { flex-wrap: wrap; justify-content: flex-start; }
            .logo-img { width: 38px; height: 38px;}
            .site-title { font-size: 1.11rem;}
            .nav-bar { gap: 0.1rem;}
        }
        @media (max-width: 850px) {
            .nav-bar { grid-template-columns: 1fr auto 1fr; padding: 0 0.2em; }
            .nav-col-left, .nav-col-right { display: none; }
            .hamburger { display: flex; }
            .logo-area { grid-column: 2; }
            .container {max-width:100%;}
             html,body{
            font:12px/1.6 system-ui,-apple-system,Segoe UI,Roboto,Inter,Helvetica,Arial,sans-serif
            }
        }
        @media (max-width: 700px) {
            .nav-bar { grid-template-columns: 1fr auto 1fr; padding: 0 0.2em; }
            .nav-col-left, .nav-col-right { display: none; }
            .hamburger { display: flex; }
            .logo-area { grid-column: 2; }
            .container {max-width:100%;}
             html,body{
            font:12px/1.6 system-ui,-apple-system,Segoe UI,Roboto,Inter,Helvetica,Arial,sans-serif
    }
        }
        @media (max-width: 530px) {
            .logo-img { width: 27px; height: 27px;}
            .site-title { font-size: 0.98rem;}
            
        }
        .nav-dropdown {
            position: relative;
            display: flex;          /* so .nav-link fills the div */
            align-items: center;
        }
        
        .nav-dropdown > .nav-link:after {
            content: ' ▼';
            font-size: 0.73em;
            color: var(--accent-gold-dark);
            padding-left: 0.18em;
            transition: color 0.18s;
        }
        .nav-dropdown.open > .nav-link:after {
            color: #fffbe6;
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            left: 0; top: 120%;
            min-width: 180px;
            background: #181309;
            box-shadow: 0 6px 22px #dab56233, 0 2px 8px #dab56228;
            border: 1.3px solid #dab56255;
            border-radius: 12px;
            z-index: 1001;
            padding: 0.28em 0;
            transition: opacity .18s, visibility .18s;
            opacity: 0;
            visibility: hidden;
        }
        .nav-dropdown.open .dropdown-menu {
            display: block;
            opacity: 1;
            visibility: visible;
        }
        .dropdown-menu a {
            display: block;
            color: var(--accent-gold);
            background: none;
            padding: 0.58em 1.2em;
            font-size: 1.01rem;
            border-radius: 7px;
            text-decoration: none;
            transition: background 0.14s, color 0.17s;
            text-align: left;
            letter-spacing: 0.03em;
        }
        .dropdown-menu a:hover, .dropdown-menu a:focus {
            background: #272106d9;
            color: #fffbe6;
        }
        @media (max-width: 850px) {
          .dropdown-menu {
            position: static;
            min-width: 0;
            box-shadow: none;
            padding: 0.18em 0 0.13em 0;
            background: none;
            border: none;
            opacity: 1;
            visibility: visible;
            display: block;
          }
          .nav-dropdown.open .dropdown-menu, .nav-dropdown:hover .dropdown-menu {
            display: block;
          }
          .nav-dropdown > .nav-link:after {
              /* bigger for touch */
              font-size: 1.11em;
          }
        }
        @media (max-width: 700px) {
          .dropdown-menu {
            position: static;
            min-width: 0;
            box-shadow: none;
            padding: 0.18em 0 0.13em 0;
            background: none;
            border: none;
            opacity: 1;
            visibility: visible;
            display: block;
          }
          .nav-dropdown.open .dropdown-menu, .nav-dropdown:hover .dropdown-menu {
            display: block;
          }
          .nav-dropdown > .nav-link:after {
              /* bigger for touch */
              font-size: 1.11em;
          }
          iframe {
              width: 280px;
              height: 155px;
          }
        }
  </style>
</head>
<body>
    <?php
    require('requires/header.php');
    ?>
  <div class="container">
    <div>
      <span class="label">Guide</span>
      <h1 class="titul">Hive of Gorgons Raid Guide – New World: Aeternum</h1>
      <p class="muted"> The Hive of Gorgons is New World’s first true 10-player raid, hidden deep within the corrupted heart of Cutlass Keys. Inside, you’ll encounter puzzles, waves of Angry Earth enemies, and three powerful bosses: Echidna, Typhon, and the Broodmother Medusa.
      </p>
      <p class="muted"> This guide covers preparation, team compositions, consumables, and full boss breakdowns to help your group clear smoothly.</p>
      <div class="meta">
        <div>Last updated: <time datetime="2025-08-17">August 17, 2025</time></div>
        <div>Reading time: ~7 min</div>
      </div>
    </div>

    <div class="grid two">
      <article>
        

        <section id="group-setup">
          <h2>Recommended Group Setup</h2>
          <p><strong>Tank (1)</strong> - Sword & Shield + War Hammer (taunts, stuns, and stagger breaks)</p>
          <p><strong>Healers (2)</strong> - 1x Life Staff/Void Gauntlet & 1x Life Staff/Flail</p>
          <p><strong>DPS (7)</strong> - Recommended spread:</p>
          <ul>
            <li>Bleed Rapier</li>
            <li>Evade Rapier</li>
            <li>Evade Rapier</li>
            <li>Spear / Fire Staff</li>
            <li>Spear / Sword & Shield</li>
            <li>Hatchet / Greatsword</li>
            <li>Blunderbuss / Fire Staff</li>
          </ul>
          <div class="callout">Full build details are available in the Gorgon section of <a href="https://www.nw-builds.com/new-world-builds" style="text-decoration:none">nw-builds.com</a></div>
        </section>

        <section id="consumables-buffs">
          <h2>Consumables & Buffs</h2>
          <p><strong>Angry Earth Ward Potions</strong> – Reduces incoming damage</p>
          <p><strong>Infused Angry Earth Coating</strong> – Mandatory for DPS</p>
          <p><strong>Powerful Honing Stone</strong> – Extra damage boost</p>
          <p><strong>Attribute Food</strong> – Constitution for tanks, Focus for healers, STR/DEX/INT for DPS</p>
          <p><strong>Major Angry Earth Combat Trophies</strong> – Up to +15% bonus damage</p>
          <p><strong>Infused Health Potions + Regeneration Serums</strong> – Sustain through heavy AoE damage</p>
          <p><strong>Grit Potion</strong> – Prevents interruption during Typhon’s fight</p>
          
        </section>

        <section id="boss-fights">
          <h2>Boss Fights & Strategy</h2>
          <h3 style="color: #c95422;"><strong>Echidna (First Boss)</strong></h3>
          <ul>
            <li><strong>Obsidian Crystals</strong> → Spawn around the arena; destroy them immediately or they explode with AoE vines</li>
            <li><strong>Phase 2 Slam</strong> → Targets random players with a jump slam; move away when marked.</li>
            <li><strong>Positioning</strong> → Tank should keep Echidna away from walls. When the stamina bar breaks, DPS attack the neck of the boss from the side its tail lays down for significantly higher damage</li>
          </ul>
          <h3 style="color: #c95422;"><strong>The Maze (Intermission)</strong></h3>
          <ul>
            <li>Activate platforms while managing two snakes</li>
            <li>Assign two players to handle the snakes while the rest clear spiders and stand on platforms</li>
            <li>Move <strong>counter-clockwise</strong>, lighting all platforms to proceed</li>
          </ul>
          <h3 style="color: #c95422;"><strong>Typhon (Second Boss)</strong></h3>
          <ul>
            <li><strong>Static Thorn Waves</strong> → Avoid sections that close off randomly</li>
            <li><strong>Moving Thorn Waves</strong> → Red thorn circles under you? Keep moving</li>
            <li><strong>Adds:</strong></li>
            <ul>
                <li><strong>Corvids</strong> (priority kill – they buff Typhon’s damage by 30%)</li>
                <li><strong>Wolves</strong>  (apply raid-wide bleed)</li>
                <li>Kill priority = <strong>Corvids → Wolves → Other adds</strong></li>
            </ul>
            <li><strong>Charge Attack</strong> → Marked player hides behind a pillar or dies. Use the stun window after for burst DPS</li>
            <li><strong>Phases:</strong></li>
            <ul>
                <li>70% HP → second room</li>
                <li>30% HP → third room</li>
                <li>Keep pushing damage if you’re close to a threshold</li>
            </ul>
            <li><strong>General</strong> → Fight becomes harder as arena sections rotate; stay mobiles</li>
          </ul>
          <h3 style="color: #c95422;"><strong>Cleanse Room (Intermission)</strong></h3>
          <ul>
            <li><strong>Fountains spawn cleansing orbs</strong> to clear poison zones</li>
            <li>Assign 1–2 players to cleansing duty</li>
            <li>Use each open cleanse to <strong>unlock the next closed cleanse</strong>, repeat until the room is fully clear (including the center)</li>
            <li>Rest of the raid handles adds and supports cleansers</li>
          </ul>
          <h3 style="color: #c95422;"><strong>Broodmother Medusa (Final Boss)</strong></h3>
          <ul>
            <li><strong>Recommended Setup</strong> → Full ranged DPS if group is inexperienced</li>
            <li><strong>Eggs</strong> → Assign 1–2 slash-damage users to clear them quickly</li>
            <li><strong>Cleansing</strong> →  Healers cleanse poison zones, but avoid hitting Medusa with cleanse (causes random charges)</li>
            <li><strong>Ceiling Flowers</strong> → Drop AoE sleep clouds; ranged DPS should kill these ASAP</li>
            <li><strong>Mechanics Priority:</strong> Flowers → Eggs → Adds → Boss</li>
            <li><strong>Final 40%</strong> → Vines block fountains, assign DPS to clear them immediately. Boss will also start charging randomly even without cleanse triggers</li>
          </ul>
        </section>

        <section id="loot-rewards">
          <h2>Loot & Rewards</h2>
          <p>Clearing the Hive of Gorgons rewards:</p>
          <ul>
            <li><strong>725 GS Weapons & Armor</strong> → Hoplite Set, Gorgon’s Set</li>
            <li><strong>Unique Artifacts</strong> → e.g. Trsna (Warhammer), Elemental Band (ring)</li>
            <li><strong>Exclusive Perks</strong> → Hasted Vigor (armor), Unimpeded (amulet), Distained Infliction (weapons)</li>
            <li><strong>Gorgonite Schematic</strong> → Used for crafting tradable 725 GS items where you can lock one perk</li>
            <li><strong>Raid Materials</strong> → Chromatic Seals, Hive Tokens, Gorgon’s Eye for crafting</li>
          </ul>
        </section>

        

        <div class="hr"></div>

        
      </article>

      <aside class="sticky-sidebar">
        <nav class="card toc" aria-label="On this page">
          <h2>Table of Contents</h2>
          <ol>
            <li><a href="#group-setup">Recommended Group Setup</a></li>
            <li><a href="#consumables-buffs">Consumables & Buffs</a></li>
            <li><a href="#boss-fights">Boss Fights & Strategy</a></li>
            <li><a href="#loot-rewards">Loot & Rewards</a></li>
          </ol>
        </nav>

        <div class="card" style="margin-top:16px">
          <h3>Quick Tips Recap</h3>
          <ul>
            <li>Gear for <strong>Enchanted Ward + Refreshing</strong> perks, socket <strong>Onyx gems</strong>.</li>
            <li>Swap amulets: <strong>Strike</strong> (Echidna), <strong>Slash</strong> (Typhon), <strong>Nature</strong> (Medusa).</li>
            <li>Assign dedicated <strong>cleansers</strong> for puzzles & Medusa.</li>
            <li>Always kill <strong>Corvids/Wolves</strong> before DPSing Typhon unless phasing.</li>
            <li>Use <strong>pillars</strong> to survive one-shot mechanics.</li>
            <li>Save <strong>cooldowns</strong> for burst windows after stuns or phase transitions.</li>
          </ul>
        </div>

        
      </aside>
    </div>
  </div>
  <script>
      <?php
    require('requires/header_script.php');
    ?>
  </script>
</body>
</html>
