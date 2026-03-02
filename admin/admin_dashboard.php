<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: admin_login.php");
  exit();
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Admin Dashboard</title>

  <style>
    /* ===== BODY STYLE ===== */
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #f4f6f9;
    }

    /* ===== NAVBAR ===== */
    .navbar {
      background-color: #000;
      padding: 15px 30px;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar h2 {
      margin: 0;
      font-size: 20px;
    }

    .logout-btn {
      color: white;
      text-decoration: none;
      background-color: red;
      padding: 8px 15px;
      border-radius: 5px;
    }

    /* ===== DASHBOARD CONTAINER ===== */
    .container {
      padding: 40px;
    }

    /* ===== CARD DESIGN ===== */
    .card {
      background: white;
      padding: 30px;
      width: 250px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      text-align: center;
      transition: 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card a {
      text-decoration: none;
      color: black;
      font-weight: bold;
      font-size: 18px;
    }

    /* ===== FLEX ROW ===== */
    .row {
      display: flex;
      gap: 30px;
    }
  </style>

</head>

<body>

  <div class="navbar">
    <h2>Welcome <?php echo $_SESSION['user_name']; ?></h2>
    <a href="admin_logout.php" class="logout-btn">Logout</a>
  </div>

  <div class="container">
    <div class="row">

      <div class="card">
        <a href="userlist.php">👤 Manage Users</a>
      </div>

      <div class="card">
        <a href="rides.php">🚗 Manage Rides</a>
      </div>

    </div>
  </div>

</body>

</html>