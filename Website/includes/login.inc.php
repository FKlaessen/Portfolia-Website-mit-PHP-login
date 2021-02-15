<?php

if (isset($_POST["submit"])) {
    //Get data from URL
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    // Error Message
    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");
            exit();
    }
    // Log in user
    loginUser($conn, $username, $pwd);
}
else {
    header("location: ../login.php");
    exit();
}