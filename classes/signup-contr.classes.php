<?php

class SignupContr {

    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdrepeat, $email) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;
    }

    private function emtyInput() {
        $result;
        if (empty($this->uid) 
        || empty($this->pwd) 
        || empty($this->pwdrepeat) 
        || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }
    }
}