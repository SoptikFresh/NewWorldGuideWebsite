<?php
    require('requires/meta_tags.php');
    ?>
    <style>
        :root {
            --accent-gold: #dab562;
            --accent-gold-dark: #a3822d;
            --shadow: 0 8px 44px #dab56233;
            --header-footer-height: 80px;
            --side-nav-width: 54px;
        }
        html, body {
            height: 100%;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', 'Trajan Pro', Arial, sans-serif;
            background: #080909 url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1600&q=80') center center/cover no-repeat fixed;
            color: #fff5df;
            scroll-behavior: smooth;
        }
        body:after {
            content: "";
            position: fixed;
            z-index: 0;
            inset: 0;
            pointer-events: none;
            background: linear-gradient(120deg, #0f131e66 30%, #19120aee 100%),
                        radial-gradient(ellipse at 70% 20%, #25240b33 34%, #27171066 76%, #000 100%);
            mix-blend-mode: multiply;
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            width: 100vw;
        }
        header, footer {
            background: linear-gradient(90deg, #13120a 0%, #31372a 100%);
            color: var(--accent-gold);
            width: 100vw;
            text-align: center;
            font-family: inherit;
            letter-spacing: 1.2px;
            z-index: 10;
        }
        header {
            font-size: 2rem;
            font-weight: 700;
            box-shadow: 0 2px 18px #060605c9;
            border-radius: 0 0 22px 22px;
            min-height: 70px;
            position: fixed;
            padding: 0.1rem 0;
            left: 0;
            right: 0;
            top: 0;
        }
        footer {
            font-size: 1.04rem;
            opacity: 0.93;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            box-shadow: 0 -2px 16px #0004;
            border-top: 1.5px solid #dab56246;
            padding: 1.2rem 0;
        }
        .main-page-wrapper {
            display: flex;
            flex: 1 1 auto;
            min-height: 0;
            min-width: 0;
            width: 100vw;
            position: relative;
            z-index: 2;
        }
        .side-nav {
            position: fixed;
            left: 0;
            top: 70px;
            width: var(--side-nav-width);
            height: calc(100vh - 140px);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 30;
            background: rgba(23,24,11,0.84);
            border-radius: 0 18px 18px 0;
            box-shadow: 2px 0 18px #dab56223;
            padding: 12px 0;
            gap: 14px;
            border-right: 1.4px solid #dab56255;
        }
        .side-nav-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            margin: 2px 0;
            border-radius: 50%;
            color: var(--accent-gold);
            text-decoration: none;
            font-size: 1.3em;
            background: transparent;
            border: none;
            transition: background .19s, color .19s, box-shadow .19s;
            font-weight: 600;
            outline: none;
            cursor: pointer;
        }
        .side-nav-link.active,
        .side-nav-link:hover {
            background: var(--accent-gold);
            color: #272106 !important;
            box-shadow: 0 0 0 2px var(--accent-gold-dark), 0 0 10px #dab56257;
        }
        .side-nav-link:focus {
            outline: 2px solid var(--accent-gold-dark);
        }
        .main-content-sections {
            flex: 1 1 0;
            margin-left: var(--side-nav-width);
            display: flex;
            flex-direction: column;
            align-items: stretch;
            min-height: 0;
            min-width: 0;
            padding-bottom: 34px;
        }
        section.article-section {
            min-height: 100vh;
            min-width: 0;
            width: 100%;
            background: rgba(24,17,10,0.93);
            margin-bottom: 3rem;
            box-shadow: 0 6px 40px #dab56215, 0 2px 12px #dab56217;
            border-radius: 24px;
            border: 1.2px solid #dab56236;
            position: relative;
            box-sizing: border-box;
            /* key padding fix */
            padding: 72px 3vw 60px 3vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            scroll-snap-align: start;
            text-align: center;
            overflow: hidden;
        }
        section.article-section:not(:first-child) {
            margin-top: 7vh;
        }
        .section-title {
            font-size: 2.1rem;
            color: var(--accent-gold);
            font-weight: 900;
            letter-spacing: 1.3px;
            text-shadow: 0 3px 24px #dab56240, 0 0 8px #fff1;
            margin-bottom: 32px;
        }
        .section-heading {
            color: #efdcab;
            font-size: 1.42em;
            font-weight: 700;
            letter-spacing: 0.7px;
            margin-top: 1.5em;
            margin-bottom: 0.68em;
            text-shadow: 0 2px 8px #dab56226, 0 0 3px #a3822d11;
        }
        .article-section p,
        .article-section ul,
        .article-section li {
            color: #f9ecd2;
            font-size: 1.15em;
            line-height: 1.7;
            margin: 0.7em auto;
            max-width: 100%;
            box-sizing: border-box;
            word-break: break-word;
            overflow-wrap: break-word;
        }
        .article-section ul {
            list-style-type: none;
            margin: 1.2em auto 0.6em auto;
            padding-left: 1.5em;
            text-align: center;
            display: inline-block;
            max-width: 100%;
        }
        .article-section ul li {
            text-align: center;
            padding-left: 0.2em;
            margin: 0.4em 0 0.4em 0;
            max-width: 100%;
        }
        .article-section .checkmark {
            color: #65fd8e;
            font-size: 1.23em;
            margin-right: 0.3em;
        }
        .article-section .important {
            color: #dab562;
            font-weight: 600;
        }
        /* Reduce max width for readability on large screens only */
        .article-section > * {
            max-width: 940px;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            box-sizing: border-box;
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
        .nav-col-left { justify-content: flex-start; }
        .nav-col-right { justify-content: flex-end; }
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
        }

        /* ------------ RESPONSIVE ------------ */

        @media (max-width:1200px) {
            .article-section > * { max-width: 97vw; }
        }
        @media (max-width:900px) {
            .main-content-sections { margin-left: 0; }
            .side-nav { display: none; }
            section.article-section {
                border-radius: 10px;
                min-height: 100vh;
                padding: 54px 4vw 38px 4vw;
            }
            .section-title { font-size: 1.35rem; }
            .logo-img { width: 38px; height: 38px;}
            .site-title { font-size: 1.11rem;}
            .nav-bar { gap: 0.1rem;}
            .article-section > *,
            .article-section p,
            .article-section ul,
            .article-section li {
                max-width: 100vw;
                font-size: 1em;
            }
        }
        @media (max-width: 700px) {
            section.article-section {
                padding: 32px 6vw 20px 6vw;
            }
            .section-title { font-size: 1.1rem; }
            .section-heading { font-size: 1.03em; }
            .article-section > *,
            .article-section p,
            .article-section ul,
            .article-section li {
                max-width: 100vw;
                font-size: 0.99em;
            }
        }
        @media (max-width: 530px) {
            .logo-img { width: 27px; height: 27px;}
            .site-title { font-size: 0.98rem;}
            main { padding: 0.3rem; }
            section.article-section { padding: 18px 5vw 14px 5vw; }
            .section-title { font-size: 0.92rem; }
            .section-heading, .article-section p, .article-section ul, .article-section li {
                font-size: 0.90em;
            }
        }
        @media (max-width: 420px) {
            section.article-section {
                padding: 10px 2vw 10px 2vw;
                border-radius: 4px;
            }
            .section-title { font-size: 0.75rem; }
            .section-heading,
            .article-section p,
            .article-section ul,
            .article-section li {
                font-size: 0.82em;
            }
        }
        @media (max-width: 700px) {
            .nav-bar { grid-template-columns: 1fr auto 1fr; padding: 0 0.2em; }
            .nav-col-left, .nav-col-right { display: none; }
            .hamburger { display: flex; }
            .logo-area { grid-column: 2; }
        }
        /* Always prevent text overflow */
        .article-section, .article-section > *, .article-section p, .article-section ul, .article-section li {
            box-sizing: border-box !important;
            word-break: break-word;
            overflow-wrap: break-word;
        }
        
    </style>
</head>
<body>
    <?php
    require('requires/header.php');
    ?>
    <div class="main-page-wrapper">
        <nav class="side-nav" id="sideNav">
            <a href="#section1" class="side-nav-link active" title="Endgame Guide" aria-label="Endgame Guide">1</a>
            <a href="#sectionVid" class="side-nav-link" title="Endgame Guide Video" aria-label="Endgame Guide Video">2</a>
            <a href="#section3" class="side-nav-link" title="To-Do List" aria-label="To-Do List">3</a>
            <a href="#section4" class="side-nav-link" title="Item Tips" aria-label="Item Tips">4</a>
            <a href="#section5" class="side-nav-link" title="Gathering/Crafting" aria-label="Gathering/Crafting">5</a>
            <a href="#section6" class="side-nav-link" title="Houses" aria-label="Houses">6</a>
        </nav>
        <main class="main-content-sections">
            <section class="article-section" id="section1">
                <div class="section-title">Endgame Progression Guide After Level 65 &amp; MSQ – New World 2025</div>
                <p><span class="checkmark">✅</span>Reached Level 65</p>
                <p><span class="checkmark">✅</span>Completed the Main Story Quest (MSQ)</p>
                <p>And now you’re wondering… <span class="important">What do I do next!?</span></p>
                <p>
                    New World’s PvE content isn’t very difficult, but there’s still a lot to do. Your main PvE goal is to become strong enough to complete the <span class="important">Hive of the Gorgon raid</span>. This raid is the primary source of <span class="important">725 Gear Score (GS) items</span> in the game. <br>
                    However, you can’t just jump into the raid the moment you hit 65—you need to improve your character and become Gorgon-ready!
                </p>
            </section>
            <section class="article-section" id="sectionVid">
            <div class="section-title">The REAL Endgame Starts Here</div>
            <div class="section-heading">New World Aeternum Ultimate New Player Guide (2025)</div>
            <iframe width="760" height="420" src="https://www.youtube.com/embed/MofT5Q_ck9U?si=NxaofmKgSc6NHyEo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </section>
            <section class="article-section" id="section3">
                <div class="section-title">Here's a list of things to do:</div>
                <div class="section-heading">1. Expeditions</div>
                <p>These are entry-level instanced PvE activities. While they won’t drop raid-ready gear, they’re essential to progress toward mutated expeditions, which can drop up to 700 GS items. You can queue for expeditions using the Activity Finder (press <span class="important">K</span>, then select Activity Finder from the top menu).</p>
                <p>If you select the Random Expedition option, you’ll earn <span class="important">750 Gold</span> for the first three completions of the day. If you queue as a <span class="important">Tank</span> or <span class="important">Healer</span>, you’ll receive an additional <span class="important">250 Gold</span> bonus!</p>
                <div class="section-heading">2. Chest Runs</div>
                <p>
                    You should start doing chest runs alongside expeditions. These take place in elite open-world zones, where you’ll find hundreds of elite chests that can drop somewhat usable gear. While you won’t get endgame items from chest runs, they’ll absolutely help you progress—just like expeditions.<br>
                    To join a chest run, monitor the Recruitment Chat. Occasionally, players will call for runs (e.g., type "+myrk" in EU or "x myrk" in NA to join a Myrkgard run). Once invited to a raid group, check the map to find the location, teleport to the nearest shrine, and run with your group to kill mobs and loot chests.
                </p>
                <p>
                    <span class="important">Pro Tip:</span> Use a different weapon every time you join a chest run to easily level all your weapons to 20.
                </p>
                <div class="section-heading">3. Mutated Expeditions</div>
                <p>
                    You unlock mutated expeditions after completing their normal versions. Mutations drop higher GS gear and also have a chance to drop unique artifacts—these only drop from mutated versions and change weekly. Try to collect all artifacts during a given mutation week. There is bad luck protection, you will get the artifact at the 5th try in the worst case scenario.
                </p>
                <p>
                    You also get a <span class="important">1,000 Gold</span> bonus for completing two random mutation runs per day, plus an extra <span class="important">500 Gold</span> if you queue as a Tank or Healer.
                </p>
            </section>
            <section class="article-section" id="section4">
                <div class="section-title">What to Look for in Items</div>
                <p>
                    You’ll find Gorgon builds and other guides on this website. Pick any beginner Gorgon build and start hunting for gear that fits it. One universal perk to prioritize is <span class="important">Enchanted Ward</span>, which reduces incoming PvE damage from all mobs. This is the most important perk in PvE.
                </p>
                <p>
                    There’s no hard GS requirement for the Gorgon raid, but the higher, the better—higher GS increases both attributes and perk strength. However, <span class="important">perks &gt; GS</span> in most cases.
                </p>
                <p>
                    Many builds also require specific artifacts. You can find drop locations and sources for all artifacts on <a class="important" href="https://nwdb.info/" target="_blank" style="text-decoration: underline">nwdb.info</a>.
                </p>
            </section>
            <section class="article-section" id="section5">
                <div class="section-heading">Gathering</div>
                <p>
                    You’ll need gold to support your progression. Gathering is one of the easiest and most consistent ways for new players to earn gold—especially in combination with daily expedition bonuses. Focus on gathering materials like wood, leather, fibers, and ore to either refine or sell at the Trading Post.
                </p>
                <div class="section-heading">Crafting / Refining</div>
                <p>
                    New World features one of the best crafting systems in any MMORPG. As a new player, focus on refining rather than crafting gear, which has steeper requirements. While profit margins can be slim, refining can still be lucrative if you spot good opportunities.<br>
                    I’ve built a tool to help with this—check out the explanation video below:<br>
                    <span class="important"><a class="important" href="https://www.youtube.com/watch?v=gQwuAcDLc7M" target="_blank" style="text-decoration: underline">New World - Refining Tool Explanation</a></span>
                </p>
                <div class="section-heading">Trading Post</div>
                <p>
                    As you farm gold, complete expeditions, and hunt for artifacts, always keep an eye on the Trading Post. Filter items by the perks needed for your chosen Gorgon build and look for good deals.<br>
                    Don’t overpay. If you want me to check an item’s price before buying, come ask me live on <span class="important"><a class="important" href="https://www.twitch.tv/llangi" target="_blank" style="text-decoration: underline">twitch.tv/LLangi</a></span>—I’ll gladly let you know if it's worth it!
                </p>
            </section>
            <section class="article-section" id="section6">
                <div class="section-title">Houses</div>
                <p>
                    Houses in New World are more than just cosmetic—they offer:
                </p>
                <ul>
                    <li>Fast travel points</li>
                    <li>Trophy slots (which give powerful buffs)</li>
                    <li>Additional storage space</li>
                </ul>
                <p>
                    You can own up to three houses, and your first house comes with a <span class="important">9,000 Gold discount</span>. There are four house tiers:
                </p>
                <ul>
                    <li>Tier 1: 5,000 Gold</li>
                    <li>Tier 2: 10,000 Gold</li>
                    <li>Tier 3: 15,000 Gold</li>
                    <li>Tier 4: 20,000 Gold</li>
                </ul>
                <p>
                    To maximize the discount, don’t buy a Tier 1 house first—you’d miss out on 4,000 Gold in savings. I recommend buying the Tier 4 house (20k base / 11k discounted) as your first. You’ll want one top-tier house in a town with important storage or crafting stations.
                </p>
                <p>
                    For Gorgon prep, you’ll also want Basic Angry Earth trophies, which usually cost less than 500 Gold each. Don’t forget to pay weekly property taxes to keep your house benefits active!
                </p>
                <p>
                    To maximize storage, buy Golden Steel Storage Chests—you can slot 4 of them in a Tier 4 house. These typically cost around 2.5k–4k Gold, depending on your server.
                </p>
                <p>
                    This should wrap up your early endgame progression after completing the MSQ. If you have any questions, feel free to drop by my Twitch chat at <span class="important"><a class="important" href="https://www.twitch.tv/llangi" target="_blank" style="text-decoration: underline">twitch.tv/LLangi</a></span>!
                </p>
            </section>
        </main>
        
    </div>
    <script>
        <?php
    require('requires/header_script.php');
    ?>
    
    
        // Scroll spy for nav panel
        const sectionIds = ["section1","sectionVid", "section3", "section4", "section5", "section6"];
        function updateActiveSection() {
            let fromTop = window.scrollY + 110;
            let current = sectionIds[0];
            for (const id of sectionIds) {
                const section = document.getElementById(id);
                if (section && section.offsetTop < fromTop) {
                    current = id;
                }
            }
            document.querySelectorAll('.side-nav-link').forEach((link, idx) => {
                if (sectionIds[idx] === current) link.classList.add('active');
                else link.classList.remove('active');
            });
        }
        document.addEventListener("scroll", updateActiveSection);
        document.addEventListener("DOMContentLoaded", updateActiveSection);
        // Keyboard accessible side nav
        document.querySelectorAll('.side-nav-link').forEach(link => {
            link.addEventListener('keydown', e => {
                if (e.key === "ArrowDown" || e.key === "ArrowUp") {
                    e.preventDefault();
                    let navs = Array.from(document.querySelectorAll('.side-nav-link'));
                    let idx = navs.indexOf(link);
                    let next;
                    if (e.key === "ArrowDown") {
                        next = navs[idx + 1] || navs[0];
                    } else {
                        next = navs[idx - 1] || navs[navs.length - 1];
                    }
                    next.focus();
                }
            })
        });
    </script>
</body>
</html>
