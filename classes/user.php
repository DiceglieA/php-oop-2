<?php
include_once __DIR__ . '/Creditcard.php';
include_once __DIR__ . '/registeredUser.php';
class User {

    public function __construct(
        protected String $name,
        protected String $surname,
        protected $creditCard,
        protected String $address,
        protected Int $discount = 0,
        protected array $products = []        
    )
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
    }
    public function buy() {
		$total_amount = 0;
		foreach ($this->products as $product) {
			$total_amount += $product->getPrice();
		}

		$total_amount = $total_amount - $total_amount * $this->discount / 100;

		if ($this->creditCard->pay($total_amount)) {
			foreach ($this->products as $product) {
				$total_amount += $product->decrementAvailableQty();
			}
			echo 'Hai comprato i prodotti';
			return true;
		} else {
			echo 'Error not found';
			return false;
		};
	}
}
?>
