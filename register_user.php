<?php 
    session_start();
    include("connect.php");
    $errors = array();

    if (isset($_POST["reg_user"])) {}
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password_1 = mysqli_real_escape_string($conn, $_POST["password_1"]);
        $password_2 = mysqli_real_escape_string($conn, $_POST["password_2"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
        
        if (empty($username)){
            array_push($errors,"Username is required");
        }
        if (empty($password_1)){
            array_push($errors,"password is required");
        }
        if ($password_1 !=$password_2){
            array_push($errors,"The two password do not match");
        }
        if (empty($email)){
            array_push($errors,"Email is required");
        }
        if (empty($phone)){
            array_push($errors,"Phone is required");
        }
        $user_check_query= "SELECT* FROM user WHERE username = '$username',email='$email OR phone ='$phone'";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) {// if user exists
            if ($result["username"] === $username){
                array_push($errors,"Username already exists");
        }
            if ($result["password"] === $password){
                array_push($errors,"password already exists");
        }
        }

        if(count($errors) == 0){
            $password = md5($password_1);

            $sql = "INSERT INTO username,email, password) VALUES ('$username', '$email','$password ";
            mysqli_query($conn, $sql);

            $_SESSION["username"] = $username;
            $_SESSION["success"] = "You are now logged in";
            header("location:index.php");
        }else{
            array_push($errors,'Username or Email already exists');
            $_SESSION['error'] = 'Wrong Username or Email try again';
             header('location: register.php');
        }
?>