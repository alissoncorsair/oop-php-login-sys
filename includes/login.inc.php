<?php

if (isset($_POST['submit'])) {

    // grabbing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    //instantiate signupController class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-controller.classes.php";
    $login = new LoginController($uid, $pwd);

    //running error handlers and user signup
    $login->loginUser();
    //going back to front page
    header("location: ../index.php?error=none");
}
