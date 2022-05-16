<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin") {
    if ($password == "123456") {
        echo "Username and Password is correct, you have been logged in";
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header( "refresh:2;url=database_check.php" );
    }
    else {
        echo "Password Not Correct";
    }
} else {
    echo "Username is not Correect";
}
