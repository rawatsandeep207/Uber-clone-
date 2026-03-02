<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us - Uber</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
/* ================= GLOBAL ================= */
body{
    margin:0;
    font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;
}
/* ================= NAVBAR ================= */
.navbar{
    background:#000 !important;
    padding:15px 50px;
}
.navbar-brand{
    font-weight:700;
    font-size:24px;
}
/* ================= HERO ================= */
.hero-container{
    position:relative;
}
.hero-container img{
    width:100%;
    height:600px;
    object-fit:cover;
}
.about-card{
    position:absolute;
    top:50%;
    left:8%;
    transform:translateY(-50%);
    background:#fff;
    padding:50px;
    width:450px;
    border-radius:12px;
    box-shadow:0 20px 50px rgba(0,0,0,0.2);
}
.about-card h1{
    font-size:40px;
    font-weight:700;
}
/* ================= MISSION ================= */
.mission{
    padding:100px 120px;
}
.mission h2{
    font-size:38px;
    font-weight:700;
    margin-bottom:25px;
}
.mission p{
    font-size:18px;
    color:#555;
    max-width:800px;
}

/* ================= STATS ================= */
.stats{
    background:#f6f6f6;
    padding:80px 50px;
    display:flex;
    justify-content:space-around;
    text-align:center;
}

.stats h3{
    font-size:42px;
    font-weight:700;
}

.stats p{
    color:#555;
}

/* ================= VALUES ================= */
.values{
    padding:100px 100px;
    text-align:center;
}

.values h2{
    font-size:36px;
    font-weight:700;
    margin-bottom:60px;
}

.value-box{
    padding:20px;
}

.value-box h4{
    font-weight:600;
    margin-bottom:15px;
}

/* ================= FOOTER ================= */
.uber-footer{
    background:#000;
    color:#fff;
    padding:70px 50px 30px;
}

.footer-links{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
    gap:40px;
    margin:40px 0;
}

.footer-column a{
    display:block;
    color:#aaa;
    margin-bottom:10px;
    text-decoration:none;
}

.footer-column a:hover{
    color:#fff;
}

.footer-bottom{
    border-top:1px solid #222;
    padding-top:20px;
    display:flex;
    justify-content:space-between;
    flex-wrap:wrap;
}

/* ================= RESPONSIVE ================= */
@media(max-width:992px){

    .about-card{
        position:static;
        transform:none;
        width:90%;
        margin:20px auto;
    }

    .hero-container img{
        height:350px;
    }

    .mission{
        padding:50px 30px;
    }

    .stats{
        flex-direction:column;
        gap:30px;
    }

    .values{
        padding:60px 30px;
    }

    .footer-bottom{
        flex-direction:column;
        text-align:center;
        gap:15px;
    }
}

</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">
<div class="container-fluid">
<a class="navbar-brand text-white" href="#">Uber</a>
</div>
</nav>

<!-- HERO -->
<main>
<div class="hero-container">
<img src="./public/images/uber2.avif" alt="About Uber">

<div class="about-card">
<h1>About Us</h1>
<p>We move the world forward.</p>
</div>
</div>
</main>

<!-- MISSION -->
<section class="mission">
<h2>Our Mission</h2>
<p>
We connect people to opportunity through safe, reliable and accessible transportation. 
Our technology helps cities move more efficiently and empowers millions of people 
around the world to earn and travel.
</p>
</section>

<!-- STATS -->
<section class="stats">
<div>
<h3>10M+</h3>
<p>Daily Trips</p>
</div>
<div>
<h3>70+</h3>
<p>Countries</p>
</div>
<div>
<h3>10,000+</h3>
<p>Cities</p>
</div>
</section>
<!-- VALUES -->
<section class="values">
<h2>Our Values</h2>
<div class="row">
<div class="col-md-4 value-box">
<h4>Safety</h4>
<p>Your safety drives everything we do.</p>
</div>
<div class="col-md-4 value-box">
<h4>Innovation</h4>
<p>We build technology that transforms mobility.</p>
</div>
<div class="col-md-4 value-box">
<h4>Opportunity</h4>
<p>We create earning opportunities worldwide.</p>
</div>
</div>
</section>
<!-- FOOTER -->
<footer class="uber-footer">
<div class="container">
<h2>Uber</h2>
<div class="footer-links">
<div class="footer-column">
<h5>Company</h5>
<a href="#">About us</a>
<a href="#">Newsroom</a>
<a href="#">Careers</a>
</div>
<div class="footer-column">
<h5>Products</h5>
<a href="#">Ride</a>
<a href="#">Drive</a>
<a href="#">Business</a>
</div>
<div class="footer-column">
<h5>Support</h5>
<a href="#">Help Center</a>
<a href="#">Contact</a>
</div>
</div>
<div class="footer-bottom">
<p>© 2026 Uber Technologies Inc.</p>
</div>
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>