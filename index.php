<?php
include 'lang.php';
include './public/commonfiles.php';
?>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
<style>
    body {
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    }

    .navbar {
        background-color: #000 !important;
        padding: 15px 40px;
    }

    .navbar-brand {
        color: #fff !important;
        font-weight: 700;
        font-size: 22px;
    }

    .navbar-nav .nav-link {
        color: #fff !important;
        font-weight: 500;
        margin-right: 20px;
        position: relative;
        transition: 0.3s ease;
    }

    .navbar-nav .nav-link::after {
        content: "";
        position: absolute;
        width: 0%;
        height: 2px;
        background: #fff;
        left: 0;
        bottom: 0;
        transition: 0.3s ease;
    }

    .navbar-nav .nav-link:hover::after {
        width: 100%;
    }

    .btn-signup {
        background: #fff;
        color: #000 !important;
        border-radius: 30px;
        padding: 6px 18px;
        font-weight: 600;
        border: none;
        transition: 0.3s ease;
    }

    .btn-signup:hover {
        background: #e6e6e6;
    }

    /* Login Button */
    .btn-login {
        border: 1px solid #fff;
        color: #fff !important;
        border-radius: 30px;
        padding: 6px 18px;
        font-weight: 500;
        transition: 0.3s ease;
    }

    .btn-login:hover {
        background: #fff;
        color: #000 !important;
    }

    /* Dropdown menu */
    .dropdown-menu {
        border-radius: 10px;
        padding: 10px;
    }

    /* ===== UBER FOOTER STYLE ===== */

    .uber-footer {
        background-color: #000;
        color: #fff;
        padding: 60px 40px 30px;
    }

    .footer-logo {
        font-weight: 700;
        margin-bottom: 10px;
    }

    .footer-top p {
        color: #aaa;
        cursor: pointer;
    }

    .footer-links {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 40px;
        margin: 40px 0;
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
        transition: 0.3s;
    }

    .footer-bottom-links a:hover {
        color: #fff;
    }

    img {
        height: 100%;
        width: 50%;
    }

    /* ===== HERO SECTION ===== */

    main {
        position: relative;
    }

    .container {
        position: relative;
        padding: 0;
        max-width: 100%;
    }

    .container img {
        width: 100%;
        height: 600px;
        object-fit: cover;
    }

    /* Location Card */
    .location {
        position: absolute;
        top: 50%;
        left: 8%;
        transform: translateY(-50%);
        background: #fff;
        padding: 40px;
        width: 400px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .location h1 {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 25px;
    }

    /* Inputs */
    .location input {
        width: 100%;
        padding: 14px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 14px;
        outline: none;
        transition: 0.3s;
    }

    .location input:focus {
        border: 1px solid #000;
    }

    /* Button */
    .location button {
        width: 100%;
        padding: 14px;
        background: #000;
        color: #fff;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        transition: 0.3s;
    }

    .location button:hover {
        background: #333;
    }

    /* Responsive */
    @media(max-width:768px) {

        .location {
            position: static;
            transform: none;
            width: 90%;
            margin: 20px auto;
        }

        .container img {
            height: 350px;
        }
    }

    .dropdown-menu {
        background-color: #111;
        border: none;
    }

    .dropdown-item {
        color: #fff;
    }

    .dropdown-item:hover {
        background-color: #222;
        color: #fff;
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
                    <a class="btn btn-light ms-2 px-3 rounded-pill" href="./user/signup.php">Sign up</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-light ms-2 px-3 rounded-pill" href="./user/login.php">Login</a>
                </li>


                <li class="nav-item">
                    <a class="btn btn-outline-light ms-2 px-3 rounded-pill" href="./admin/admin_login.php">Admin Login</a>
                </li>

            </ul>
            </ul>
        </div>
    </div>
</nav>
<main>
    <div class="container">
        <img src="./public/images/uber.jpg">

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