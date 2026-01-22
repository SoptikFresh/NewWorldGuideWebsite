<style>
        :root {
            --accent-gold: #dab562;
            --accent-gold-dark: #a3822d;
            --accent-gold-light: #efde93;
            --shadow: 0 8px 44px #dab56233;
            --header-footer-height: 80px;
            --side-nav-width: 54px;
            --transition-base: 0.19s ease-in-out;
        }
        * {
            box-sizing: border-box;
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
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
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
        /*START OF HEADER STYLING*/
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
        .nav-bar {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            align-items: center;
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            gap: 0.5rem;
            padding: 0 1rem;
            height: 100%;
        }
        .nav-col-left, .nav-col-right {
            display: flex;
            align-items: center;
            gap: 1.1rem;
            flex-wrap: wrap;
        }
        .nav-col-left { justify-content: flex-start; }
        .nav-col-right { justify-content: flex-end; }
        .logo-area {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.3rem;
            grid-column: 2;
            transition: transform var(--transition-base);
        }
        .logo-area:hover {
            transform: scale(1.05);
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
            transition: box-shadow var(--transition-base), filter var(--transition-base);
            object-fit: cover;
        }
        .logo-img:hover {
            box-shadow: 0 0 24px #dab562cc;
            filter: brightness(1.1);
        }
        .site-title {
            font-size: 1.6rem;
            margin: 0.2em 0 0.13em 0;
            letter-spacing: 2px;
            font-weight: 700;
            text-shadow: 0 2px 16px #b49a4a80, 0 0 4px #0006;
            color: var(--accent-gold);
            text-align: center;
            transition: color var(--transition-base);
        }
        .site-title:hover {
            color: var(--accent-gold-light);
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
            transition: background var(--transition-base), color var(--transition-base), box-shadow var(--transition-base), transform 0.15s ease;
            cursor: pointer;
            display: inline-block;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--accent-gold);
            transition: width var(--transition-base), left var(--transition-base);
            transform: translateX(-50%);
        }
        .nav-link:hover {
            background: #272106d9;
            color: #fffbe6;
            box-shadow: 0 0 8px #dab56255;
            transform: translateY(-2px);
        }
        .nav-link:hover::after {
            width: 80%;
            left: 50%;
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
            transition: background var(--transition-base), color var(--transition-base), box-shadow var(--transition-base), transform 0.15s ease;
            cursor: pointer;
        }
        .social-link:hover {
            background: #2d2716;
            color: #fff8d5;
            box-shadow: 0 0 12px #dab56299;
            border-color: #dab56299;
            transform: translateY(-3px);
        }
        .social-link svg {
            transition: filter var(--transition-base);
        }
        .social-link:hover svg {
            filter: brightness(1.2);
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
            padding: 0;
            transition: transform var(--transition-base);
        }
        .hamburger:hover {
            transform: scale(1.1);
        }
        .hamburger:active {
            transform: scale(0.95);
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
        .hamburger.active .hb-1 { 
            transform: translateY(8px) rotate(45deg); 
            background: #fffbe6;
            box-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }
        .hamburger.active .hb-2 { 
            opacity: 0; 
            transform: translateX(20px);
        }
        .hamburger.active .hb-3 { 
            transform: translateY(-8px) rotate(-45deg); 
            background: #fffbe6;
            box-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }
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
            transition: opacity 0.23s ease-in-out;
        }
        .nav-overlay.open { 
            display: flex; 
            opacity: 1; 
            pointer-events: unset;
        }
        .nav-overlay .nav-overlay-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2rem;
            animation: slideInUp 0.4s ease-out;
        }
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .nav-overlay .nav-link,
        .nav-overlay .social-link {
            font-size: 1.25rem;
            background: none;
            box-shadow: none;
            border: none;
            color: var(--accent-gold);
        }
        .nav-overlay .nav-link::after {
            display: none;
        }
        
        .nav-dropdown {
            position: relative;
            display: flex;
            align-items: center;
        }
        
        .nav-dropdown > .nav-link:after {
            content: ' ▼';
            font-size: 0.73em;
            color: var(--accent-gold-dark);
            padding-left: 0.18em;
            transition: color var(--transition-base), transform var(--transition-base);
            display: inline;
        }
        .nav-dropdown.open > .nav-link:after {
            color: #fffbe6;
            transform: rotate(180deg);
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            left: 0; 
            top: 120%;
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
            animation: dropdownSlideDown 0.25s ease-out forwards;
        }
        @keyframes dropdownSlideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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
            transition: background var(--transition-base), color var(--transition-base), transform 0.15s ease;
            text-align: left;
            letter-spacing: 0.03em;
        }
        .dropdown-menu a:hover, .dropdown-menu a:focus {
            background: #272106d9;
            color: #fffbe6;
            transform: translateX(4px);
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
                animation: none;
                margin-top: 0.5rem;
            }
            .nav-dropdown.open .dropdown-menu, .nav-dropdown:hover .dropdown-menu {
                display: block;
            }
            .nav-dropdown > .nav-link:after {
                font-size: 1.11em;
                display: none;
            }
        }
        @media (max-width: 700px) {
            .nav-bar { 
                grid-template-columns: 1fr auto 1fr; 
                padding: 0 0.2em; 
            }
            .nav-col-left, .nav-col-right { 
                display: none; 
            }
            .hamburger { 
                display: flex; 
            }
            .logo-area { 
                grid-column: 2; 
            }
            .dropdown-menu {
                position: static;
                min-width: 0;
                box-shadow: none;
                padding: 0.18em 0 0.13em 0;
                background: none;
                border: none;
                opacity: 1;
                visibility: visible;
                animation: none;
            }
            .nav-dropdown.open .dropdown-menu, .nav-dropdown:hover .dropdown-menu {
                display: block;
            }
        }
        @media (max-width:900px) {
            .logo-img { 
                width: 38px; 
                height: 38px;
            }
            .site-title { 
                font-size: 1.11rem;
            }
            .nav-bar { 
                gap: 0.1rem;
            }
            .nav-link {
                font-size: 0.95rem;
                padding: 0.2em 0.35em;
            }
            .social-link {
                font-size: 0.9rem;
                padding: 0.18em 0.55em;
            }
        }
        @media (max-width: 530px) {
            .logo-img { 
                width: 27px; 
                height: 27px;
            }
            .site-title { 
                font-size: 0.98rem;
                letter-spacing: 0.5px;
            }
            header {
                min-height: 60px;
                padding: 0.05rem 0;
            }
            .nav-link {
                font-size: 0.85rem;
                padding: 0.15em 0.25em;
            }
            .social-link {
                display: none;
            }
        }
        /*END OF HEADER STYLING*/