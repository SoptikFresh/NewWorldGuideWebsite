<?php
    require('requires/meta_tags.php');
    ?>
<?php
    require('requires/header_styling2.php');
    ?>
        
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', 'Trajan Pro', Arial, sans-serif;
            background: #080909 url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1600&q=80') center center/cover no-repeat fixed;
            color: #fff5df;
            min-height: 100vh;
            width: 100vw;
            overflow-x: hidden;
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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
            width: 100vw;
        }
        :root {
                    --accent-blue: #253144;
                    --accent-blue2: #191a23;
                    --shadow: 0 6px 32px rgba(54,41,138,0.22);
                    --round: 20px;
                }
        main {
            flex: 1 1 0;
            display: flex;
            flex-direction: column;
            align-items: stretch;
            justify-content: center;
            min-height: 0;
            min-width: 0;
            height: 100%;
            width: 100vw;
            margin: 0;
            padding: 0.5rem 2vw 1.1rem 2vw;
            background: rgba(24,17,10,0.84);
            border-radius: var(--round);
            box-shadow: 0 16px 60px 0 #0e0c07c0, 0 2px 4px #dab56245;
            position: relative;
            max-width: 1700px;
            margin-left: auto;
            margin-right: auto;
            z-index: 2;
        }
        main:after {
            content:'';
            pointer-events: none;
            z-index: 3;
            position: absolute;
            inset:0;
            mix-blend-mode: lighten;
            background:
                radial-gradient(ellipse 75% 40% at 55% 98%, #d3a13b0b 0%, #dab56215 80%, transparent 100%),
                radial-gradient(ellipse 120% 50% at 35% 110%, #f7ee9a10 23%, transparent 100%),
                url('https://www.transparenttextures.com/patterns/soft-wallpaper.png');
            opacity: 0.44;
        }
        .dropdown-bar {
            flex: 0 0 auto;
            width: 100%;
            background: rgba(23,24,11,0.93);
            border-radius: 15px;
            box-shadow: 0 1px 12px #5036001c;
            border: 1.5px solid #70562255;
            padding: 0.2rem 0.6rem;
            display: flex;
            gap: 1.1rem;
            justify-content: center;
            align-items: center;
            margin-bottom: 0.5rem;
            min-height: 61px;
            flex-wrap: wrap;
            transition: all 0.3s ease;
        }
        .dropdown-bar:hover {
            background: rgba(23,24,11,0.98);
            box-shadow: 0 2px 18px #5036001f;
            border-color: #70562266;
        }
        /* Restored Original Dropdown Button Style */
        .dropdown {
            position: relative;
        }
        .dropbtn {
            background: linear-gradient(90deg, #dab562 0%, #a3822d 100%);
            color: #242113;
            padding: 0.48rem 1.15rem;
            border: none;
            border-radius: 11px;
            cursor: pointer;
            font-size: 1.02rem;
            font-weight: 600;
            letter-spacing: 1px;
            transition: box-shadow 0.18s, background 0.18s, color 0.14s, transform 0.13s;
            box-shadow: 0 2px 18px #ad8a2d12;
            outline: none;
        }
        .dropbtn:focus, .dropbtn:hover {
            background: linear-gradient(90deg, #a3822d 0%, #dab562 100%);
            box-shadow: 0 4px 24px #dab56299;
            transform: scale(1.045);
            color: #463c12;
        }
        .dropbtn:active {
            transform: scale(0.98);
        }
        .dropdown-content {
            display: none;
            position: absolute;
            left: 0;
            top: 108%;
            background: #181612ee;
            min-width: 192px;
            box-shadow: 0 12px 44px #dab56241;
            border-radius: 12px;
            z-index: 20;
            padding: 0.38em 0.22em;
            flex-direction: column;
            animation: dropdownFadeIn 0.32s;
            margin-top: 7px;
            border: 1.5px solid #dab56244;
        }
        @keyframes dropdownFadeIn {
            from { opacity: 0; transform: translateY(-22px);}
            to { opacity: 1; transform: translateY(0);}
        }
        .dropdown.show > .dropdown-content { display: flex; }
        .dropdown-content-column {
            display: flex;
            flex-direction: column;
            gap: 0.12rem;
            margin: 0 0.22em;
        }
        .dropdown-content a {
            color: #dab562 !important;
            padding: 9px 15px;
            text-decoration: none;
            display: block;
            border-radius: 8px;
            background: none;
            border: none;
            text-align: center;
            font-size: 1.03em;
            cursor: pointer;
            transition: background 0.16s, color 0.13s, transform 0.12s;
            white-space: nowrap;
        }
        .dropdown-content a:hover {
            background: #dab562ad;
            color: #3c3313 !important;
            transform: translateX(3px) scale(1.045);
        }
        .dropdown-content-row {
            display: flex;
            flex-direction: row;
            gap: 0.2rem;
        }
        .splitter-title {
            background: #313112e0;
            color: #dab562;
            border-radius: 8px;
            padding: 5px 14px;
            font-size: 1.03rem;
            text-align: center;
            font-weight: 600;
            letter-spacing: 0.7px;
            margin-bottom: 0.18em;
            margin-top: 0.07em;
            min-width: 90px;
            box-shadow: 0 1.8px 11px #dab56217;
            border: 1.2px solid #dab56233;
            transition: all 0.19s ease;
            user-select: none;
        }
        .splitter-title:hover {
            background: #3d3e17f0;
            border-color: #dab56244;
            box-shadow: 0 2.5px 15px #dab56222;
        }
        .dropdown-nested {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 110px;
        }
        .dropdown-nested .dropdown-content {
            position: static;
            background: transparent;
            box-shadow: none;
            border-radius: 0;
            border: 0;
            padding: 0;
            animation: none;
            display: flex;
            flex-direction: column;
        }
        .dropdown-nested > .dropdown-content > .dropdown-content-column {
            font-size: 0.99em;
            min-width: 100px;
        }
        .main-flex-fill {
            display: flex;
            flex: 1 1 auto;
            align-items: stretch;
            justify-content: center;
            width: 100%;
        }
        .loader-wrapper {
            flex: 1 1 auto;
            display: flex;
            align-items: stretch;
            justify-content: center;
            background: linear-gradient(120deg, #271c08ee 45%, #272124e6 100%);
            border-radius: 20px;
            box-shadow: 0 8px 54px #0e0c0771, 0 2px 5px #dab56213;
            border: 1.3px solid #dab56255;
            min-height: 350px;
            min-width: 0;
            width: 100%;
            height: 100%;
            position: relative;
            overflow: auto;
            z-index: 2;
            transition: all 0.3s ease;
        }
        .loader-wrapper:hover {
            box-shadow: 0 12px 64px #0e0c0780, 0 4px 15px #dab56220;
            border-color: #dab56266;
        }
        #gearset-iframe {
            opacity: 0;
            transition: opacity 0.65s cubic-bezier(.4,0,.2,1);
            width: 100%;
            height: 100%;
            border: none;
            position: absolute;
            left: 0; top: 0;
            background: transparent;
            z-index: 2;
            border-radius: 18px;
            min-height: 350px;
            min-width: 0;
        }
        #gearset-iframe.visible { 
            opacity: 1; 
            z-index: 3; 
        }
        .spinner {
            border: 6px solid #dab56230;
            border-top: 6px solid var(--accent-gold);
            border-radius: 50%;
            width: 52px;
            height: 52px;
            animation: spin 1.3s linear infinite;
            margin: auto;
            position: relative;
            z-index: 4;
            background: none;
            box-shadow: 0 0 24px #dab56244;
        }
        @keyframes spin { 
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        footer {
            background: linear-gradient(92deg, #191813ff 0%, #373012f9 100%);
            border-radius: var(--round) var(--round) 0 0;
            margin-top: 2.5rem;
            text-align: center;
            padding: 1.03rem 0;
            font-size: 1.02rem;
            opacity: 0.93;
            color: #dab562;
            letter-spacing: 0.8px;
            box-shadow: 0 -2px 16px #0004;
            border-top: 1.5px solid #dab56246;
            transition: all 0.3s ease;
        }
        footer:hover {
            opacity: 1;
            box-shadow: 0 -4px 24px #0008;
        }
        footer a {
            color: #fff5df;
            transition: color 0.19s ease;
            text-decoration: none;
        }
        footer a:hover {
            color: var(--accent-gold);
            text-decoration: underline;
        }
        @media (min-width: 1700px) {
            main, .loader-wrapper, .dropdown-bar {
                max-width: 1700px;
            }
        }
        @media (max-width: 1450px) {
            main, .loader-wrapper, .dropdown-bar {
                max-width: 99vw;
            }
        }
        @media (max-width: 1100px) {
            main {
                padding: 1.2rem 0.7rem 1.2rem 0.7rem;
            }
            .loader-wrapper {
                min-height: 290px;
            }
            .dropdown-bar { 
                gap: 0.7rem;
            }
            .dropbtn {
                font-size: 0.95rem;
                padding: 0.42rem 1rem;
            }
        }
        @media (max-width: 700px) {
            .dropdown-bar { 
                flex-wrap: wrap; 
                justify-content: flex-start;
                gap: 0.6rem;
                padding: 0.15rem 0.4rem;
                min-height: auto;
            }
             .dropdown-content:not(.dropdown-content-row .dropdown-content)  {
                position: fixed;
                top: 55%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 90vw;
                max-width: 350px;
                max-height: 80vh;
                overflow-y: auto;
                z-index: 10000;
            }
            
            
        }
        
        
        /* ----------- SCROLLABLE ADMIN PATCH ----------- */
        body.admin-panel-mode, html.admin-panel-mode {
            height: auto !important;
            min-height: 100vh !important;
            max-height: none !important;
            overflow-y: auto !important;
            display: block !important;
        }
        body.admin-panel-mode main,
        body.admin-panel-mode #admin-menu {
            max-height: none !important;
            overflow: visible !important;
        }
        body.admin-panel-mode header, body.admin-panel-mode main {
            width: 100% !important;
        }
        body.admin-panel-mode main {
            /* Make admin area wide and centered up to 1200px */
            max-width: 1900px !important;
            width: 95vw !important;
            min-width: 300px;
            margin: 0.2rem auto 2rem auto !important;
            padding: 0.8rem 2.3rem !important;
            box-sizing: border-box;
        }
        body.admin-panel-mode #admin-menu > div {
            /* Each dropdown panel fills almost the full width */
            max-width: 1850px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }
        @media (max-width: 1300px) {
            body.admin-panel-mode main {
                max-width: 99vw !important;
                padding-left: 0.4rem !important;
                padding-right: 0.4rem !important;
            }
            body.admin-panel-mode #admin-menu > div {
                max-width: 99vw;
            }
        }

        /* ---------------------------------------------- */
   .section-title {
            font-size: 1.45rem;
            color: #f9ecd2;
            font-weight: 600;
            letter-spacing: 1.3px;
            text-shadow: 0 3px 24px #dab56240, 0 0 8px #fff1;
        }
        p {
            color: #f9ecd2;
            font-size: 1.45em;
            line-height: 1.7;
            margin: 1.2em;
            max-width: 100%;
            box-sizing: border-box;
            word-break: break-word;
            overflow-wrap: break-word;
            text-align: center;
            overflow-y:auto;
        }
        .section-heading {
            color: #efdcab;
            font-size: 1.42em;
            font-weight: 500;
            letter-spacing: 0.7px;
            margin-top: 1.5em;
            margin-bottom: 0.68em;
            text-shadow: 0 2px 8px #dab56226, 0 0 3px #a3822d11;
        }
        
         @media (max-width:900px) {
            
            
            .section-title { font-size: 1.75rem; }
           
            
           p {
                max-width: 100vw;
                font-size: 1.6em;
            }
        }
        @media (max-width: 700px) {
            
            .section-title { font-size: 1.03rem; }
            .section-heading { font-size: 1.6em; }
            p {
                max-width: 100vw;
                font-size: 0.99em;
            }
        }
        @media (max-width: 530px) {
            
            
            
            .section-title { font-size: 0.90rem; }
            .section-heading, p {
                font-size: 1.16em;
            }
        }
        @media (max-width: 420px) {
           
            .section-title { font-size: 0.75rem; }
            .section-heading,
            p {
                font-size: 1.02em;
            }
        }
        
    
    </style>
<script src="https://www.nw-buddy.de/embed.js"></script>
</head>
<body>
    <?php
    require('requires/header.php');
    ?>
    <main>
        <section class="dropdown-bar" id="dropdowns"></section>
        <div class="main-flex-fill">
            <div class="loader-wrapper">
                <p>
                    <span class="section-heading">Choose a category above, select your build, and start dominating Aeternum today.</span>
                    <br>
                    <br>
                    <span class="section-title">Looking for the best New World: Aeternum builds to crush endgame content? We’ve got you covered with guides that work for both PvP and PvE.<br>
                    Whether you want the best healer build for Outpost Rush, a top DPS build for Wars, or a reliable endgame tank build for raids, every setup here is tested in real fights and updated for the latest patches.<br>
                    You’ll find weapon pairings, attribute splits, skill trees, and BiS gear laid out clearly so you can jump straight into action.</span>
                    <br>
                    <br>
                    <span class="section-title">For PvP, explore optimized OPR builds, War setups, and CTF loadouts designed to give you a competitive edge.<br>
                    For PvE, check out our mutation guides, Gorgon builds, and Sandwurm setups, crafted for both new players and veterans.</span>
                    
                    
                </p>
                    
                
                <div class="spinner" id="loader-spinner" style="display:none"></div>
                <iframe id="gearset-iframe" src="" tabindex="0" aria-label="Gearset Loader" ></iframe>
            </div>
        </div>
    </main>
    <footer>
        &copy; 2025 LLangi. All rights reserved. Appreciations to <a href="https://www.nw-buddy.de/" style="text-decoration: underline">nw-buddy</a>.
        
    </footer>
    <script>
 <?php
    require('requires/header_script.php');
    ?>

    let dropdownConfig = [];
    let isAdmin = false;
    function renderLinks(links, isNested = false) {
        if (!links) return '';
        const nestedDropdowns = links.filter(link => link.children !== undefined);
        const simpleLinks = links.filter(link => link.children === undefined);
        let html = '';
        if (simpleLinks.length) {
            html += simpleLinks.map(link =>
                `<a href="#" class="gearset-link" data-gearset-url="${link.url || ''}">${link.text}</a>`
            ).join('');
        }
        if (nestedDropdowns.length) {
            html += `<div class="dropdown-content-row">`;
            html += nestedDropdowns.map(link => `
                <div class="dropdown-nested">
                    <div class="splitter-title">${link.text}</div>
                    <div class="dropdown-content">
                        <div class="dropdown-content-column">
                            ${renderLinks(link.children, true)}
                        </div>
                    </div>
                </div>
            `).join('');
            html += `</div>`;
        }
        return html;
    }
    function renderDropdowns(config) {
        const container = document.getElementById('dropdowns');
        container.innerHTML = '';
        config.forEach((dropdown, idx) => {
            let column = document.createElement('div');
            column.className = 'dropdown';
            column.innerHTML = `
                <button class="dropbtn" tabindex="0">${dropdown.title}</button>
                <div class="dropdown-content">
                    <div class="dropdown-content-column">
                        ${renderLinks(dropdown.links)}
                    </div>
                </div>
            `;
            container.appendChild(column);
        });
        attachDropdownAndLoaderLogic();
    }
    function attachDropdownAndLoaderLogic() {
        document.querySelectorAll('.dropbtn').forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelectorAll('.dropdown').forEach(function(drop) {
                    if (drop !== btn.parentElement) drop.classList.remove('show');
                });
                btn.parentElement.classList.toggle('show');
            });
        });
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.dropdown')) {
                document.querySelectorAll('.dropdown').forEach(function(drop) { drop.classList.remove('show'); });
            }
        });
        const links = document.querySelectorAll('.gearset-link');
        const iframe = document.getElementById('gearset-iframe');
        const spinner = document.getElementById('loader-spinner');
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const url = this.getAttribute('data-gearset-url');
                if (url && iframe) {
                    spinner.style.display = "block";
                    iframe.classList.remove('visible');
                    iframe.src = "";
                    setTimeout(() => { iframe.src = url; }, 60);
                    iframe.onload = function() {
                        iframe.classList.add('visible');
                        spinner.style.display = "none";
                        iframe.scrollIntoView({behavior: "smooth"});
                    };
                    setTimeout(() => { spinner.style.display = "none"; }, 8000); // Fallback
                }
                document.querySelectorAll('.dropdown').forEach(function(drop) { drop.classList.remove('show'); });
            });
        });
    }
    function loadConfig() {
        fetch('dropdown_config.php')
            .then(r => r.json())
            .then(cfg => {
                dropdownConfig = cfg.isAdmin ? cfg.config : cfg;
                if (isAdmin) renderAdminMenu();
                else renderDropdowns(cfg.config || cfg);
            });
    }
    function renderAdminLinks(links, parentIdx, path=[]) {
        if (!links) return '';
        let html = '';
        links.forEach((link, lidx) => {
            const currentPath = [...path, lidx];
            if (link.children !== undefined) {
                html += `
                    <li style="margin-top:8px;">
                        <span class="splitter-title">${link.text}</span>
                        <button onclick="editDropdown(${parentIdx},[${currentPath}])">Edit</button>
                        <button onclick="moveLink(${parentIdx},[${currentPath}],'up')">Up</button>
                        <button onclick="moveLink(${parentIdx},[${currentPath}],'down')">Down</button>
                        <button onclick="removeLinkAtPath(${parentIdx},[${currentPath}])">Remove</button>
                        <button onclick="addNestedLink(${parentIdx},[${currentPath}])">Add Nested Link</button>
                        <ul>
                            ${renderAdminLinks(link.children, parentIdx, currentPath)}
                        </ul>
                    </li>
                `;
            } else {
                html += `
                    <li>
                        ${link.text} ${link.url ? `- ${link.url}` : ''}
                        <button onclick="editLink(${parentIdx},[${currentPath}])">Edit</button>
                        <button onclick="moveLink(${parentIdx},[${currentPath}],'up')">Up</button>
                        <button onclick="moveLink(${parentIdx},[${currentPath}],'down')">Down</button>
                        <button onclick="removeLinkAtPath(${parentIdx},[${currentPath}])">Remove</button>
                        <button onclick="addNestedDropdown(${parentIdx},[${currentPath}])">Add Splitter Title</button>
                    </li>
                `;
            }
        });
        return html;
    }
    function renderAdminMenu() {
        let html = dropdownConfig.map((dropdown, idx) => `
            <div style="margin-bottom:1rem;padding:1rem;background:#23272a;border-radius:8px;">
                <b>Dropdown ${idx+1}: ${dropdown.title}</b>
                <button onclick="editDropdownTitle(${idx})">Edit</button>
                <button onclick="moveDropdown(${idx},'up')">Up</button>
                <button onclick="moveDropdown(${idx},'down')">Down</button>
                <button onclick="removeDropdown(${idx})">Remove</button>
                <ul>
                    ${renderAdminLinks(dropdown.links, idx)}
                </ul>
                <input id="linkText${idx}" placeholder="Link text">
                <input id="linkUrl${idx}" placeholder="Link URL">
                <button onclick="addLink(${idx})">Add Link</button>
            </div>
        `).join("");
        document.getElementById("admin-menu").innerHTML = html;
    }
    function getLinkByPath(links, path) {
        let node = links;
        for(let i = 0; i < path.length; i++) {
            node = node[path[i]];
            if (i < path.length - 1) node = node.children;
        }
        return node;
    }
    function removeLinkAtPath(dropdownIdx, path) {
        let links = dropdownConfig[dropdownIdx].links;
        let last = path.pop();
        let parent = path.length ? getLinkByPath(links, path).children : links;
        parent.splice(last, 1);
        saveConfig();
    }
    function addNestedDropdown(dropdownIdx, path) {
        let links = dropdownConfig[dropdownIdx].links;
        let link = getLinkByPath(links, path);
        if (!link.children) link.children = [];
        link.url = undefined;
        link.text = prompt("Splitter title:", link.text || "");
        saveConfig();
    }
    function addNestedLink(dropdownIdx, path) {
        let text = prompt("Nested Link text?");
        let url = prompt("Nested Link URL?");
        if (!text || !url) return;
        let links = dropdownConfig[dropdownIdx].links;
        let link = getLinkByPath(links, path);
        if (!link.children) link.children = [];
        link.children.push({text, url});
        saveConfig();
    }
    function addLink(idx) {
        let text = document.getElementById("linkText"+idx).value;
        let url = document.getElementById("linkUrl"+idx).value;
        if (!text || !url) return;
        dropdownConfig[idx].links.push({text, url});
        saveConfig();
    }
    function removeDropdown(idx) {
        dropdownConfig.splice(idx,1);
        saveConfig();
    }
    function editLink(dropdownIdx, path) {
        let links = dropdownConfig[dropdownIdx].links;
        let link = getLinkByPath(links, path);
        let newText = prompt("Edit link text:", link.text);
        let newUrl = link.url !== undefined ? prompt("Edit link URL:", link.url) : undefined;
        if (newText) link.text = newText;
        if (newUrl !== undefined) link.url = newUrl;
        saveConfig();
    }
    function editDropdown(dropdownIdx, path) {
        let links = dropdownConfig[dropdownIdx].links;
        let link = getLinkByPath(links, path);
        let newText = prompt("Edit splitter title:", link.text);
        if (newText) link.text = newText;
        saveConfig();
    }
    function editDropdownTitle(idx) {
        let newTitle = prompt("Edit dropdown title:", dropdownConfig[idx].title);
        if (newTitle) dropdownConfig[idx].title = newTitle;
        saveConfig();
    }
    function moveLink(dropdownIdx, path, direction) {
        let links = dropdownConfig[dropdownIdx].links;
        // Traverse to the parent array containing the intended item
        let parent = links;
        if (path.length > 1) {
            for (let i=0; i<path.length-1; ++i) {
                parent = parent[path[i]].children;
            }
        }
        let idx = path[path.length - 1];
        if ((direction === 'up' && idx === 0) || (direction === 'down' && idx === parent.length - 1)) return;
        let swapWith = direction === 'up' ? idx - 1 : idx + 1;
        [parent[idx], parent[swapWith]] = [parent[swapWith], parent[idx]];
        saveConfig();
    }
    function moveDropdown(idx, direction) {
        if ((direction === 'up' && idx === 0) || (direction === 'down' && idx === dropdownConfig.length - 1)) return;
        let swapWith = direction === 'up' ? idx - 1 : idx + 1;
        [dropdownConfig[idx], dropdownConfig[swapWith]] = [dropdownConfig[swapWith], dropdownConfig[idx]];
        saveConfig();
    }
    function saveConfig() {
        fetch('dropdown_config.php', {
            method: 'POST',
            body: JSON.stringify(dropdownConfig)
        })
        .then(r => r.json())
        .then(res => {
            if (res.success) loadConfig();
            else alert('Failed to save: ' + (res.error || 'Unknown error'));
        });
    }
    function showLogin() {
        document.body.classList.remove('admin-panel-mode');
        document.body.innerHTML = `
            <main style="max-width:400px;margin:4rem auto;text-align:center;">
                <h2>Admin Login</h2>
                <input type="password" id="adminPass" placeholder="Password"><br>
                <button onclick="doLogin()">Login</button>
            </main>
        `;
    }
    function doLogin() {
        fetch('dropdown_config.php', {
            method: 'POST',
            headers: {'Content-Type':'application/x-www-form-urlencoded'},
            body: 'login=1&password=' + encodeURIComponent(document.getElementById('adminPass').value)
        })
        .then(r=>r.json())
        .then(res=>{
            if(res.success) location.reload();
            else alert('Wrong password');
        });
    }
    function showAdminPanel() {
        document.body.classList.add('admin-panel-mode');  // PATCH: fix scroll for admin
        document.body.innerHTML = `
            <header><h1>Admin Configurator</h1><div id="live-users">Loading...</div></header>
            <main style="max-width:700px;margin:2rem auto;">
                <div id="admin-menu"></div>
                <button onclick="addDropdown()">Add Dropdown</button>
                <button onclick="logoutAdmin()">Logout</button>
            </main>
        `;
        renderAdminMenu();
    }
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
    function addDropdown() {
        let title = prompt("Dropdown title?");
        if (!title) return;
        dropdownConfig.push({title, links: []});
        saveConfig();
    }
    function logoutAdmin() {
        document.body.classList.remove('admin-panel-mode');
        fetch('dropdown_config.php', {
            method: 'POST',
            headers: {'Content-Type':'application/x-www-form-urlencoded'},
            body: 'logout=1'
        }).then(() => {
            window.location.hash = '';
            location.reload();
        });
    }
    if (window.location.hash === "#admin") {
        fetch('dropdown_config.php')
            .then(r=>r.json())
            .then(res => {
                if (res.isAdmin) {
                    dropdownConfig = res.config;
                    isAdmin = true;
                    showAdminPanel();
                } else {
                    showLogin();
                }
            })
            .catch(showLogin);
    } else {
        loadConfig();
    }
    document.addEventListener('contextmenu', function (e) { e.preventDefault(); });
    document.addEventListener('keydown', function (e) {
        if (e.ctrlKey && (e.key === 'u' || e.key === 'U')) e.preventDefault();
    });
    document.addEventListener("DOMContentLoaded", renderOverlaySocial);
    </script>
</body>
</html>
