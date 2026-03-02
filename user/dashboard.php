<?php
include '../public/commonfiles.php';
?>
<style>
    /* ===================== */
    /* GLOBAL */
    /* ===================== */

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        background: #fff;
    }

    /* ===================== */
    /* NAVBAR */
    /* ===================== */

    .navbar {
        background: #000 !important;
        padding: 15px 40px;
    }

    .navbar-brand {
        font-size: 22px;
        font-weight: 700;
        color: #fff !important;
    }

    .nav-link {
        color: #fff !important;
        font-weight: 500;
        margin-right: 20px;
        position: relative;
        transition: 0.3s;
    }

    .nav-link::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0%;
        height: 2px;
        background: #fff;
        transition: 0.3s;
    }

    .nav-link:hover::after {
        width: 100%;
    }

    .btn-light {
        font-weight: 600;
    }

    /* Dropdown */

    .dropdown-menu {
        background: #111;
        border: none;
        border-radius: 10px;
        padding: 10px;
    }

    .dropdown-item {
        color: #fff;
    }

    .dropdown-item:hover {
        background: #222;
        color: #fff;
    }

    /* ===================== */
    /* HERO SECTION */
    /* ===================== */

    main .container {
        position: relative;
        max-width: 100%;
        padding: 0;
    }

    main .container img {
        width: 100%;
        height: 600px;
        object-fit: cover;
    }

    /* Dark overlay */

    main .container::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 600px;
        background: rgba(0, 0, 0, 0.45);
    }

    /* ===================== */
    /* LOCATION CARD */
    /* ===================== */

    .location {
        position: absolute;
        top: 50%;
        left: 8%;
        transform: translateY(-50%);
        background: #fff;
        padding: 40px;
        width: 420px;
        border-radius: 14px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        z-index: 2;
    }

    .location h1 {
        font-size: 30px;
        font-weight: 700;
        margin-bottom: 25px;
    }

    .location input {
        width: 100%;
        padding: 14px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 14px;
        transition: 0.3s;
    }

    .location input:focus {
        border-color: #000;
        outline: none;
    }

    .location button {
        width: 100%;
        padding: 14px;
        background: #000;
        color: #fff;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
    }

    .location button:hover {
        background: #333;
    }

    /* ===================== */
    /* FOOTER */
    /* ===================== */

    .uber-footer {
        background: #000;
        color: #fff;
        padding: 60px 40px 30px;
    }

    .footer-top {
        margin-bottom: 40px;
    }

    .footer-logo {
        font-weight: 700;
        margin-bottom: 10px;
    }

    .footer-top p {
        color: #aaa;
    }

    .footer-links {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 40px;
        margin-bottom: 40px;
    }

    .footer-column h5 {
        margin-bottom: 20px;
        font-weight: 600;
    }

    .footer-column a {
        display: block;
        color: #aaa;
        text-decoration: none;
        margin-bottom: 10px;
        transition: 0.3s;
    }

    .footer-column a:hover {
        color: #fff;
    }

    .footer-bottom {
        border-top: 1px solid #222;
        padding-top: 20px;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .footer-bottom-links a {
        color: #aaa;
        text-decoration: none;
        margin-left: 20px;
    }

    .footer-bottom-links a:hover {
        color: #fff;
    }

    /* ===================== */
    /* RESPONSIVE */
    /* ===================== */

    @media(max-width:768px) {

        main .container img {
            height: 350px;
        }

        main .container::after {
            height: 350px;
        }

        .location {
            position: static;
            transform: none;
            width: 90%;
            margin: -50px auto 40px;
        }

        .footer-bottom {
            flex-direction: column;
            gap: 10px;
        }

    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand fw-bold fs-4" href="#">Uber</a>
        <!-- Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link text-white" href="bookride.php">Ride</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Drive</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="uber_business.php">Business</a>
                </li>

                <!-- Language -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white"
                        href="#"
                        id="languageDropdown"
                        role="button"
                        data-bs-toggle="dropdown">
                        🌐 Language
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="?lang=en">English</a></li>
                        <li><a class="dropdown-item" href="?lang=hi">Hindi</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="help.php">Help</a>
                </li>





                <li class="nav-item">
                    <a class="btn btn-light ms-2 px-3 rounded-pill" href="logout.php">Logout</a>
                </li>





            </ul>
        </div>
    </div>
</nav>
<main>
    <div class="container">
        <img src="../public/images/uber_dashboard.jpg">
        <div class="location">
            <h1>Go anywhere with Uber</h1>
            <div>
                <input type="text" placeholder="Pickup location">
            </div>
            <div>
                <input type="text" placeholder="Dropoff location">
            </div>
            <div>
                <button>See prices</button>
            </div>
        </div>
    </div>
</main>
<footer class="uber-footer">
    <div class="container">
        <!-- Top Logo -->
        <div class="footer-top">
            <h2 class="footer-logo">Uber</h2>
            <p>Visit Help Center</p>
        </div>
        <!-- Footer Links -->
        <div class="footer-links">
            <div class="footer-column">
                <h5>Company</h5>
                <a href="#">About us</a>
                <a href="#">Our offerings</a>
                <a href="#">Newsroom</a>
                <a href="#">Investors</a>
                <a href="#">Blog</a>
            </div>
            <div class="footer-column">
                <h5>Products</h5>
                <a href="#">Ride</a>
                <a href="#">Drive</a>
                <a href="#">Eat</a>
                <a href="#">Business</a>
            </div>
            <div class="footer-column">
                <h5>Global citizenship</h5>
                <a href="#">Safety</a>
                <a href="#">Sustainability</a>
            </div>
            <div class="footer-column">
                <h5>Travel</h5>
                <a href="#">Airports</a>
                <a href="#">Cities</a>
            </div>
        </div>
        <!-- Bottom Section -->
        <div class="footer-bottom">
            <p>© 2026 Uber Technologies Inc.</p>
            <div class="footer-bottom-links">
                <a href="#">Privacy</a>
                <a href="#">Accessibility</a>
                <a href="#">Terms</a>
            </div>
        </div>
    </div>
</footer>