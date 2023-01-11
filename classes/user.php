<?php
include_once __DIR__ . '/creditcard.php';
class User {
    public $name;
    public $surname;
    public $age;
    public $username;
    public $email;
    protected $password;

    public function __construct(
        String $name,
        String $surname,
        Int $age,
        String $username,
        String $email,
        String $password
    )
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
}
?>
