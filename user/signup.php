<?php
require_once '../dp.php';

if (isset($_POST['signup'])) {

    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $address  = $_POST['address'];

    $sql = "INSERT INTO users (Name, Email, Password, Address) 
            VALUES ('$name', '$email', '$password', '$address')";

    $result = mysqli_query($conn, $sql);


    if ($result) {
        $user_id = mysqli_insert_id($conn);

        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $name;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Signup unsuccessful: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Uber Signup</title>

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

        /* Main Box */
        .signup-container {
            width: 380px;
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

        /* Input Fields */
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

        /* Login link */
        .login-link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .login-link a {
            text-decoration: none;
            color: #000;
            font-weight: 500;
        }
    </style>
</head>

<body>

    <div class="signup-container">

        <div class="logo">Uber</div>

        <h2>Create your account</h2>

        <form method="post" action="signup.php">

            <div class="input-group">
                <input type="text" name="name" placeholder="Full Name" required>
            </div>

            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="input-group">
                <input type="text" name="address" placeholder="Address" required>
            </div>

            <button type="submit" name="signup">Sign up</button>

            <div class="login-link">
                Already have an account? <a href="login.php">Login</a>
            </div>

        </form>

    </div>

</body>

</html>