<?php
require('requires/meta_tags.php');
?>
<?php
require('requires/header_styling.php');
?>
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
        .main-page-wrapper {
            display: flex;
            flex: 1 1 auto;
            min-height: 0;
            min-width: 0;
            width: 100vw;
            position: relative;
            z-index: 2;
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
            <a href="#section1" class="side-nav-link active" title="Introduction" aria-label="Introduction">1</a>
            <a href="#section2" class="side-nav-link" title="Guides" aria-label="Guides">2</a>
        </nav>
        <main class="main-content-sections">
            <section class="article-section" id="section1">
                <div class="section-title">Welcome to NW Builds – Your Ultimate New World Companion!</div>
                <div class="section-heading">Level up your journey through Aeternum with the most powerful builds, expert guides, and hidden tricks – all in one place.</div>
                <p>
                    At <a class="important" href="/new-world-builds" target="_self" style="text-decoration: underline">NW Builds</a>, we’re dedicated to helping New World players get the most out of their adventure. Whether you’re a fresh level 65, a PvE enthusiast grinding towards Hive of the Gorgon, or a PvP warrior looking for different builds to play with, you’ll find everything you need right here.
                </p>
                <div class="section-title">What You’ll Find on NW Builds:</div>
                <div class="section-heading">Meta & Off-Meta Builds</div>
                    <p>
                         From raid-ready PvE setups to top-tier PvP loadouts, our builds are tested, optimized, and regularly updated for New World: Aeternum.
                    </p>
                <div class="section-heading">Tips & Tricks</div>
                    <p>
                         Uncover little-known mechanics, money-making secrets, and quality-of-life tweaks to stay ahead of the curve.
                    </p>
            </section>
            <section class="article-section" id="section2">
                <div class="section-title">New to Level 65? Start Here:</div>
                    <p>
                        <a class="important" href="/pveguide" target="_self" style="text-decoration: underline">
                            What to Do After Level 65 and MSQ in New World Aeternum (2025 Guide)
                        </a>
                    </p>
                    <div class="section-heading">Built by a Dedicated Streamer & Player</div>
                        <p>
                            NW Builds is created by a passionate New World content creator who streams daily, tests builds live, and connects with the community to ensure every guide is practical, accurate, and up-to-date.
                        </p>
                    <div class="section-heading">Join Our Community</div>
                        <p>
                            Follow us on Twitch, YouTube, and Discord to stay updated with the latest builds, patch changes, and exclusive content.
                        </p>
                    <div class="section-heading">Dive in, gear up, and conquer Aeternum.</div>
                        <p>
                           Let NW Builds be your edge in the ever-changing world of New World. 
                        </p>
            </section>
        </main>
        
    </div>
   
    <script>
        <?php
    require('requires/header_script.php');
    ?>
    
    
        // Scroll spy for nav panel
        const sectionIds = ["section1", "section2", "section3", "section4", "section5"];
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
