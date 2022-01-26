<?php

class SignUp extends Dbh
{

    protected function checkUser($uid, $email)
    {
        $stmt = $this->connect()->prepare('SELECT users_uid users WHERE users_uid = ? OR users_email = ?;');

        //it will check if the statement runs with no errors, not necessarily it will return someone or not
        if (!$stmt->execute([$uid, $email])) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;

        //here we check if it returned something
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }
        return $resultCheck;
    }

}