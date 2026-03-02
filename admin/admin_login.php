<?php
session_start();
require_once '../dp.php';
if (isset($_POST['admin_login'])) {
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  $stmt = $conn->prepare("SELECT * FROM admin WHERE Email = ? AND Password = ?");
  $stmt->bind_param("ss", $email, $password);
  $stmt->execute();

  $result = $stmt->get_result();

  if ($result->num_rows > 0) {

    $admin = $result->fetch_assoc();

    $_SESSION['admin_id'] = $admin['Id'];
    $_SESSION['admin_email'] = $admin['Email'];

    header("Location:admin_dashboard.php");
    exit();
  } else {
    echo "Invalid Admin Email or Password!";
  }

  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Uber Login</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    /* Container */
    .login-container {
      width: 360px;
    }

    /* Logo */
    .logo {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 25px;
    }

    /* Heading */
    h2 {
      font-size: 22px;
      font-weight: 600;
      margin-bottom: 20px;
    }

    /* Input fields */
    .input-group {
      margin-bottom: 15px;
    }

    input {
      width: 100%;
      padding: 14px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 14px;
      outline: none;
      transition: 0.3s;
    }

    input:focus {
      border: 1px solid #000;
    }

    /* Button */
    button {
      width: 100%;
      padding: 14px;
      background: #000;
      color: #fff;
      border: none;
      border-radius: 8px;
      font-size: 15px;
      font-weight: 500;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: #333;
    }

    /* Signup link */
    .signup-link {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
    }

    .signup-link a {
      text-decoration: none;
      color: #000;
      font-weight: 500;
    }
  </style>
</head>

<body>

  <div class="login-container">

    <div class="logo">Uber</div>

    <h2>Admin Login to your account</h2>

    <form method="post">

      <div class="input-group">
        <input type="email" name="email" placeholder="Email" required>
      </div>

      <div class="input-group">
        <input type="password" name="password" placeholder="Password" required>
      </div>

      <button type="submit" name="admin_login">Login</button>



    </form>

  </div>

</body>

</html>