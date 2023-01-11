<?php 
class RegisteredUser extends User{
	private string $username;
	private string $password;
	protected Int $discount = 20;
    protected array $products = [];

    function __construct($id, $username, $password)
    {
        // richiesta dal database
        $this->username = $username;
        $this->password = $password;
    }

}
?>