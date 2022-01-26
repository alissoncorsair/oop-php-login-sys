<?php

if (isset($_POST['submit'])) {

    // grabbing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];
    $email = $_POST['email'];

    //instantiate signupController class
    include "../classes/signup-controller.classes.php";
    include "../classes/signup.classes.php";
    $signUp = new SignUp($uid, $pwd, $pwdRepeat, $email);

    //running error handlers and user signup



    //going back to front page

}
