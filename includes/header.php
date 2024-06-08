<header>
    <div class="main-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-3 col-8 text-left">
                    <a href="./" class="logo" aria-label="logo">
                        <img src="assets/images/rectangale8.png" alt="Logo">
                    </a>
                </div>
                <div class="col-sm-6 col-4 text-center">
                    <div class="menuWrap">
                        <button class="menu-toggle" aria-label="Toggle navigation" onclick="toggleMenu()">
                            <i class="fa fa-bars"></i>
                        </button>
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="/" class="menu-link active">Home</a>
                            </li>
                            <li class="menu-item">
                                <a href="#portfolio" class="menu-link">Portfolio</a>
                            </li>
                            <li class="menu-item dropdown">
                                <a href="javascript:void(0);" class="menu-link dropdown-toggle">Services</a>
                                <ul class="dropdown-menu">
                                    <li><a href="nfts/" class="dropdown-item">NFTs</a></li>
                                    <li><a href="logo/" class="dropdown-item">Logo</a></li>
                                    <li><a href="2d-animation/" class="dropdown-item">2D Animation</a></li>
                                    <li><a href="3d-animation/" class="dropdown-item">3D Animation</a></li>
                                    <li><a href="ui-ux-designing/" class="dropdown-item">UI UX Designing</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="about-us/" class="menu-link">About Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-8 text-right">
                    <div class="menuWrap">
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="contact-us/" class="header-btn" onclick="setButtonURL();">
                                    <img src="assets/images/contactbtn.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
/* General header styles */
.menuWrap {
    position: relative;
}

.menu {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

.menu-item {
    position: relative;
    margin: 0 1rem;
}

.menu-link {
    color: white;
    text-decoration: none;
    padding: 0.5rem 1rem;
    display: block;
}

.menu-link:hover,
.dropdown-item:hover {
    color: purple;
}

/* Active menu item styles */
.menu-link.active {
    font-weight: bold;
    position: relative;
}

.menu-link.active::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 50%;
    transform: translateX(-50%);
    width: 6px;
    height: 6px;
    background-color: lightblue;
    border-radius: 50%;
}

.contact-icon {
    margin-right: 0.5rem;
}

/* Dropdown menu styles */
.dropdown {
    position: relative;
}

.dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    color: #000;
    min-width: 200px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    z-index: 1000;
}

.dropdown-item {
    padding: 0.5rem 1rem;
    color: #000;
    text-decoration: none;
    display: block;
}

.dropdown:hover .dropdown-menu,
.dropdown-menu:hover {
    display: block;
}

/* Responsive styles */
@media (max-width: 768px) {
    .menu {
        flex-direction: column;
        display: none; /* Hide menu by default on mobile */
    }

    .menu.active {
        display: flex; /* Show menu when active on mobile */
    }

    .menu-item {
        margin: 0.5rem 0;
    }

    .dropdown-menu {
        position: static;
    }
}
</style>

<script>
function toggleMenu() {
    const menu = document.querySelector('.menu');
    menu.classList.toggle('active');
}
</script>
