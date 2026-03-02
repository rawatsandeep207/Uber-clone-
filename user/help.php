<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Uber Help</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family: 'Inter', sans-serif;
    background:#fff;
    color:#000;
}

/* HEADER */
header{
    background:#000;
    color:#fff;
    padding:20px 8%;
}

header h1{
    font-size:24px;
    font-weight:600;
}

/* HERO SECTION */
.hero{
    padding:80px 8%;
    background:#f6f6f6;
}

.hero h2{
    font-size:42px;
    font-weight:700;
    margin-bottom:20px;
}

.hero p{
    font-size:18px;
    max-width:700px;
    line-height:1.6;
    color:#444;
}

/* SUPPORT CARDS */
.support-section{
    padding:70px 8%;
}

.support-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(250px,1fr));
    gap:30px;
}

.card{
    border:1px solid #eee;
    padding:30px;
    border-radius:12px;
    transition:0.3s;
    cursor:pointer;
}

.card:hover{
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
    transform:translateY(-5px);
}

.card h3{
    margin-bottom:10px;
    font-size:20px;
}

.card p{
    font-size:14px;
    color:#666;
}

/* FOOTER */
footer{
    background:#000;
    color:#fff;
    padding:40px 8%;
    margin-top:60px;
}

footer p{
    font-size:14px;
    color:#aaa;
}
</style>
</head>

<body>

<header>
    <h1>Uber Support</h1>
</header>

<section class="hero">
    <h2>Welcome to Uber Support</h2>
    <p>
        We’re here to help. Explore support resources for riders, drivers, 
        and delivery partners to find the best way to resolve your issue quickly.
    </p>
</section>

<section class="support-section">
    <div class="support-grid">
        
        <div class="card">
            <h3>Rider Support</h3>
            <p>Get help with trips, payments, safety issues, and account access.</p>
        </div>

        <div class="card">
            <h3>Driver Support</h3>
            <p>Find help for earnings, documents, vehicle requirements, and more.</p>
        </div>

        <div class="card">
            <h3>Uber Eats</h3>
            <p>Support for food orders, refunds, restaurant issues, and deliveries.</p>
        </div>

        <div class="card">
            <h3>Business & Corporate</h3>
            <p>Help for Uber for Business accounts and company travel solutions.</p>
        </div>

    </div>
</section>

<footer>
    <p>© 2026 Uber Technologies Inc. All rights reserved.</p>
</footer>

</body>
</html>