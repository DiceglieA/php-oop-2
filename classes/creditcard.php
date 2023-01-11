<?php
class Card{

    private String $holder;
    private Int $cardNumber;
    private Int $CCV;
    private Int $expirationDate;
    
    function __construct($_holder, $_cardNumber, $_CCV, $_expirationDate)
    {
        $this->holder = $_holder;
        $this->cardNumber = $_cardNumber;
        $this->CCV = $_CCV;
        $this->expirationDate = $_expirationDate;
    }

    public function isExpired(): bool {
		if ((int) date('y') < $this->expirationDate) {
			return false;
		} else if ((int) date('y') == $this->expirationDate) {
			return false;
		}
		return true;
	}
}

?>