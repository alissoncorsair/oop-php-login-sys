<?php

if (isset($_POST['submit'])) {

    // grabbing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];
    $email = $_POST['email'];

    //instantiate signupController class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-controller.classes.php";
    $signUp = new SignUpController($uid, $pwd, $pwdRepeat, $email);

    //running error handlers and user signup
    $signUp->signUpUser();
    //going back to front page
    header("location: ../index.php?error=none");
}
