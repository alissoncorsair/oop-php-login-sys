<?php

class SignUp extends Dbh
{

    protected function setUser($uid, $pwd, $email)
    {
        $stmt = $this->connect()->prepare("INSERT into users(users_uid, users_pwd, users_email) VALUES (?, ?, ?);");

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        //it will check if the statement runs with no errors, not necessarily it will return someone or not
        if (!$stmt->execute([$uid, $hashedPwd, $email])) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($uid, $email)
    {
        $stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;');

        //it will check if the statement runs with no errors, not necessarily it will return someone or not
        if (!$stmt->execute([$uid, $email])) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        //here we check if it returned something
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }
        return $resultCheck;
    }

}