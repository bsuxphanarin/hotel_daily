<?php 
    session_start();
    include("connect.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Hotel Rental System</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form action="Register_hotel.php" method="post"> 
    <?php if (isset($_SESSION["error"])): ?>
            <div class="error">
                <h3>
                    <?php
                        echo"".$_SESSION["error"];
                        unset( $_SESSION["error"]);
                    ?>
                </h3>
            </div>
        <?php endif; ?>
        <?php include("errors.php"); ?>
        <div class="input-group">
            <label for="username">Username</label>  
            <input type="text" name="username" required>
        </div>
        <div class="input-group">
            <label for="password_1">Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label for="password_2">Confirm Password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <label for="email">EMAIL</label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label for="Phone">Phone</label>
            <input type="phone" name="Phone">
        </div>
        <div class="input-group">
            <button type="submit" name="reg_useer" class="btn">Register_hotel</button>
        </div>
        <p>Already a member? <a href="login.php">Sign in</a></p>
    </form>
</body>
</html>         