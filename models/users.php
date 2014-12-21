<?php

class Users {
    public $username;
    public $password;
    function __construct($username = null, $password = null)
    {
        $this->username = $username;
        $this->password = $password;
    }
}
?>