<?php

class Card {

    private $holder;
    private $cardNumber;
    private $CVC;
    private $expirationDate;
    
    function __construct($_holder, $_cardNumber, $_CVC, $_expirationDate)
    {
        $this->holder = $_holder;
        $this->cardNumber = $_cardNumber;
        $this->CVC = $_CVC;
        $this->expirationDate = $_expirationDate;
    }
}

?>