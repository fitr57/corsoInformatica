<?php
namespace Cls;
trait DigitalUser {

    private $email;

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

}
