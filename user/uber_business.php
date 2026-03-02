<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Uber for Business</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

/* GLOBAL */
body {
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

/* NAVBAR */
.navbar {
    background-color: #000;
    padding: 15px 60px;
}

.navbar-brand {
    color: #fff !important;
    font-weight: bold;
    font-size: 24px;
}

.nav-link {
    color: #fff !important;
    margin-left: 20px;
}

/* HERO SECTION */
.hero {
    background-color: #000;
    color: #fff;
    padding: 100px 60px;
}

.hero h1 {
    font-size: 48px;
    font-weight: 700;
}

.hero p {
    font-size: 20px;
    margin-top: 20px;
}

.btn-uber {
    background-color: #fff;
    color: #000;
    border-radius: 8px;
    padding: 12px 25px;
    font-weight: 600;
    margin-top: 20px;
}

/* FEATURES */
.features {
    padding: 80px 60px;
}

.feature-box {
    padding: 20px;
}

.feature-box h4 {
    font-weight: 600;
}

/* CTA */
.cta {
    background-color: #f6f6f6;
    padding: 80px 60px;
    text-align: center;
}

.cta h2 {
    font-weight: 700;
}

/* FOOTER */
.footer {
    background-color: #000;
    color: #fff;
    padding: 40px 60px;
}

.footer a {
    color: #fff;
    text-decoration: none;
}

</style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Uber</a>
    <div>
      <a class="nav-link d-inline" href="#">Solutions</a>
      <a class="nav-link d-inline" href="#">Pricing</a>
      <a class="nav-link d-inline" href="#">Resources</a>
      <a class="btn btn-light ms-3">Get Started</a>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>Move your business forward</h1>
                <p>Manage rides, meals, and deliveries for your company with one global platform.</p>
                <button class="btn btn-uber">Get started</button>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- FEATURES -->
<section class="features">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4 feature-box">
                <h4>Business travel</h4>
                <p>Control and manage employee rides with flexible policies.</p>
            </div>
            <div class="col-md-4 feature-box">
                <h4>Meal programs</h4>
                <p>Feed your team with easy meal solutions.</p>
            </div>
            <div class="col-md-4 feature-box">
                <h4>Delivery solutions</h4>
                <p>Send packages and products quickly and safely.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta">
    <h2>Ready to get started?</h2>
    <p>Join thousands of businesses using Uber solutions worldwide.</p>
    <button class="btn btn-dark mt-3">Contact Sales</button>
</section>

<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Company</h5>
                <p><a href="#">About us</a></p>
                <p><a href="#">Careers</a></p>
            </div>
            <div class="col-md-4">
                <h5>Solutions</h5>
                <p><a href="#">Travel</a></p>
                <p><a href="#">Meals</a></p>
            </div>
            <div class="col-md-4">
                <h5>Support</h5>
                <p><a href="#">Help Center</a></p>
                <p><a href="#">Contact</a></p>
            </div>
        </div>
        <hr style="background:#444;">
        <p class="text-center mt-3">© 2026 Uber Business</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>