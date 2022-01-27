<?php

class Login extends Dbh
{
    protected function getUser($uid, $pwd)
    {
        $stmt = $this->connect()->prepare("SELECT users_pwd FROM users WHERE users_uid = ? OR users_email = ?;");


        //it will check if the statement runs with no errors, not necessarily it will return someone or not
        if (!$stmt->execute([$uid, $pwd])) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {

            $stmt = null;
            header('location: ../index.php?error=usernotfound');
            exit();
        }


        $stmt = null;
    }

}