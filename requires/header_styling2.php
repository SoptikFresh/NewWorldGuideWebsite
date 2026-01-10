<style>

  :root {
            --accent-gold: #dab562;
            --accent-gold-dark: #a3822d;
            --bg-section: #f8f3e3;
            --shadow: 0 8px 44px #dab56233;
            --main-max-width: 700px;
        }
        html, body {
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', 'Trajan Pro', Arial, sans-serif;
            background: #080909 url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1600&q=80') center center/cover no-repeat fixed;
            color: #272106;
        }
        body:after {
            content: "";
            position: fixed;
            z-index: 0;
            inset: 0;
            pointer-events: none;
            background: linear-gradient(120deg, #0f131e36 30%, #19120a55 100%),
                        radial-gradient(ellipse at 70% 20%, #25240b21 34%, #27171024 76%, #0000 100%);
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
            letter-spacing: 1.2px;
            font-family: inherit;
            box-shadow: 0 2px 18px #060605c9;
        }
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
         @media (max-width: 850px) {
            .nav-bar { grid-template-columns: 1fr auto 1fr; padding: 0 0.2em; }
            .nav-col-left, .nav-col-right { display: none; }
            .hamburger { display: flex; }
            .logo-area { grid-column: 2; }
             html,body{
            font:12px/1.6 system-ui,-apple-system,Segoe UI,Roboto,Inter,Helvetica,Arial,sans-serif
            }
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
        }