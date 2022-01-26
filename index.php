<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<section class="index-login">
    <h4>SIGN UP</h4>

    <form action="includes/signup.inc.php" method="post">

        <input type="text" name="uid" placeholder="Username">
        <br><br>
         <input type="password" name="pwd" placeholder="password">
        <br><br>
        <input type="password" name="pwdrepeat" placeholder="repeat password">
        <br><br>
        <input type="text" name="email" placeholder="e-mail">
        <br><br>
        <button type="submit">sign up</button>
    </form>

    <br><br><br><br><br><br><br>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <br><br>
        <input type="password" name="pwd" placeholder="password">
        <br><br>
        <button type="submit">login</button>
    </form>


    
</section>

</body>
</html>
