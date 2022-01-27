<?php

class LoginController extends Login
{
    private $uid;
    private $pwd;

    public function __construct($uid, $pwd, $pwdRepeat, $email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    public function loginUpUser()
    {
        //se der false quer dizer q o input ta vazio
        if($this->emptyInput()==false) {
//        echo "empty input!"
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidUid()==false) {
//        echo "invalid username!"
            header("location: ../index.php?error=username");
            exit();
        }
        if($this->invalidEmail()==false) {
//        echo "invalid email!"
            header("location: ../index.php?error=email");
            exit();
        }
        if($this->pwdMatch()==false) {
//        echo "passwords dont match!"
            header("location: ../index.php?error=passwordsdontmatch");
            exit();
        }
        if($this->uidTakenCheck()==false) {
//        echo "email or username already taken!"
            header("location: ../index.php?error=emailoruseralreadytaken");
            exit();
        }

        $this->getUser($this->uid, $this->pwd);
    }



    private function emptyInput()
    {
        $result;
        if (empty($this->uid) || empty($this->pwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}