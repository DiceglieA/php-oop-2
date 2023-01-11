<?php
class Product {
    public $productId;
    public $name;
    public $price;
    public $category;

    public function __construct($productId, $name, $category) {
        $this->productId = $productId;
        $this->name = $name;
        $this->category = $category;
    }

    public function getPrice()
	{
		return $this->price;
	}
}
?>
