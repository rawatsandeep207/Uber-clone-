<?php
session_start();
require_once '../dp.php';
if (isset($_POST['book'])) {
    $pickup  = mysqli_real_escape_string($conn, $_POST['pickup']);
    $drop    = mysqli_real_escape_string($conn, $_POST['drop']);
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO rides (User_Id, Pickup_location, Drop_location) 
            VALUES ('$user_id', '$pickup', '$drop')";

    if (mysqli_query($conn, $sql)) {
        header("location:bookride.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Book Ride</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #f3f3f3;
        }

        .hero {
            background: #000;
            color: #fff;
            padding: 60px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 40px;
            font-weight: 700;
        }

        /* Booking Card */
        .booking-card {
            background: #fff;
            max-width: 450px;
            margin: -50px auto 0 auto;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Input Style */
        .form-control {
            height: 50px;
            border-radius: 8px;
            border: 1px solid #ddd;
            padding-left: 15px;
            font-size: 15px;
        }

        .form-control:focus {
            border-color: #000;
            box-shadow: none;
        }

        /* Button */
        .btn-uber {
            background: #000;
            color: #fff;
            height: 50px;
            border-radius: 8px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-uber:hover {
            background: #333;
            color: #fff;
        }

        /* Responsive */
        @media(max-width:576px) {
            .booking-card {
                margin-top: -30px;
                padding: 25px;
            }
        }
    </style>
</head>

<body>
    <!-- Hero -->
    <div class="hero">
        <h1>Book a Ride</h1>
    </div>
    <!-- Booking Form -->
    <div class="booking-card">
        <form method="POST">
            <input type="text" id="pickup" name="pickup" placeholder="Enter Pickup Location" class="form-control mb-3" required>
            <input type="text" id="drop" name="drop" placeholder="Enter Drop Location" class="form-control mb-3" required>
            <button class="btn btn-dark mb-3" name="book">Show Route</button>
</body>

</html>