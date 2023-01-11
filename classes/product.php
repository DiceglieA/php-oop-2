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
        if ($this->price < 0 ){
            throw new Exception('prezzo non valido');
        } else {
            return $this->price;
        }
        
	}

}
?>
