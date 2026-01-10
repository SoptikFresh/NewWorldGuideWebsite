const navLinksConfig = [
        { text: "Home", url: "../" },
        { text: "S9 Builds", url: "/new-world-builds" },
        {
            text: "Guides",
            url: "#",
            dropdown: true,
            children: [
              { text: "New Player Guide", url: "/new-world-new-player-guide" },
              { text: "PvP Guide", url: "/new-world-pvp-guide" },
              { text: "Opr Healing Guide", url: "/new-world-opr-healing-guide" },
              { text: "Hive of Gorgon Guide", url: "/new-world-hive-of-gorgons-raid-guide" },
              { text: "Ultimate Gold Making Guide", url: "/new-world-gold-making" }
            ]
        },
        { text: "Armor Weight Calculator", url: "/new-world-weight-calculator" },
        {
            text: "Gold Making Tools",
            url: "#",
            dropdown: true,
            children: [
              { text: "Runeglass", url: "/new-world-runeglass" },
              { text: "Trophies", url: "/new-world-trophy" },
              { text: "Matrix", url: "/new-world-matrix" }
            ]
        }
    ];
    function renderNavLinks() {
        const navBar = document.getElementById("nav-links");
        navBar.innerHTML = "";
        navLinksConfig.forEach(link => {
            if (link.dropdown && Array.isArray(link.children)) {
                const wrapper = document.createElement("div");
                wrapper.className = "nav-dropdown";
    
                let toggle = document.createElement("a");
                toggle.className = "nav-link";
                toggle.textContent = link.text;
                toggle.href = link.url;
                toggle.tabIndex = 0;
    
                // Dropdown open/close on click
                toggle.onclick = function(e) {
                    e.preventDefault();
                    // close other open dropdowns
                    document.querySelectorAll('.nav-dropdown.open').forEach(d=>{
                      if(d!==wrapper) d.classList.remove('open');
                    });
                    // toggle this one
                    wrapper.classList.toggle("open");
                };
    
                wrapper.appendChild(toggle);
    
                const menu = document.createElement("div");
                menu.className = "dropdown-menu";
                link.children.forEach(child => {
                    let item = document.createElement("a");
                    item.href = child.url;
                    item.className = "dropdown-link";
                    item.textContent = child.text;
                    // Close dropdown upon click
                    item.onclick = () => {
                      wrapper.classList.remove("open");
                    }
                    menu.appendChild(item);
                });
                wrapper.appendChild(menu);
    
                navBar.appendChild(wrapper);
            } else {
                let a = document.createElement("a");
                a.className = "nav-link";
                a.textContent = link.text;
                a.href = link.url;
                navBar.appendChild(a);
            }
        });
    
        // Overlay for mobile
        const overlayLinks = document.getElementById("navOverlayLinks");
        overlayLinks.innerHTML = "";
        navLinksConfig.forEach(link => {
            if (link.dropdown && Array.isArray(link.children)) {
                const dropdownGroup = document.createElement("div");
                dropdownGroup.className = "nav-dropdown";
                let toggle = document.createElement("a");
                toggle.className = "nav-link";
                toggle.textContent = link.text;
                toggle.href = link.url;
                toggle.onclick = function(e) {
                    e.preventDefault();
                    // close other open dropdowns
                    document.querySelectorAll('#navOverlay .nav-dropdown.open').forEach(d=>{
                      if(d!==dropdownGroup) d.classList.remove('open');
                    });
                    dropdownGroup.classList.toggle("open");
                };
                dropdownGroup.appendChild(toggle);
    
                const menu = document.createElement("div");
                menu.className = "dropdown-menu";
                link.children.forEach(child => {
                    let item = document.createElement("a");
                    item.href = child.url;
                    item.className = "dropdown-link";
                    item.textContent = child.text;
                    item.onclick = () => {
                      dropdownGroup.classList.remove("open");
                    }
                    menu.appendChild(item);
                });
                dropdownGroup.appendChild(menu);
                overlayLinks.appendChild(dropdownGroup);
            } else {
                let a = document.createElement("a");
                a.className = "nav-link";
                a.textContent = link.text;
                a.href = link.url;
                overlayLinks.appendChild(a);
            }
        });
    }

    function renderOverlaySocial() {
        const overlaySocial = document.getElementById("navOverlaySocial");
        const socialCol = document.getElementById("social-col");
        overlaySocial.innerHTML = "";
        Array.from(socialCol.children).forEach(el => {
            overlaySocial.appendChild(el.cloneNode(true));
        });
    }
    function setupHamburger() {
        const hamburger = document.getElementById("hamburgerBtn");
        const navOverlay = document.getElementById("navOverlay");
        function closeOverlay() {
            hamburger.classList.remove("active");
            navOverlay.classList.remove("open");
            document.body.style.overflow = "";
        }
        hamburger.onclick = function() {
            const open = hamburger.classList.toggle("active");
            navOverlay.classList.toggle("open", open);
            document.body.style.overflow = open ? "hidden" : "";
        };
        navOverlay.onclick = function(e) {
            if (e.target === navOverlay) closeOverlay();
        };
        document.addEventListener("keydown", function(e) {
            if (navOverlay.classList.contains("open") && e.key === "Escape") closeOverlay();
        });
        navOverlay.addEventListener("blur", closeOverlay, true);
    }
    renderNavLinks();
    renderOverlaySocial();
    setupHamburger();

    document.addEventListener("DOMContentLoaded", async function () {
        const twitchUsername = "llangi";
        try {
            const response = await fetch(`https://decapi.me/twitch/avatar/${twitchUsername}`);
            const profileImageUrl = await response.text();
            const twitchAvatar = document.getElementById("twitch-avatar");
            if (profileImageUrl && twitchAvatar) {
                twitchAvatar.src = profileImageUrl;
            }
        } catch (error) {
            document.getElementById("twitch-avatar").src = "https://static-cdn.jtvnw.net/jtv_user_pictures/xarth/404_user_70x70.png";
        }
    });