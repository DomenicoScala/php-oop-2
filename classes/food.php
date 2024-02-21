<?php

require_once __DIR__.'/products.php';

class Food extends Products{

    public $expirationDate;

    public function __construct(
        $name,
        $expirationDate,
        $image = null,
        $price = null,
        $availability = null,
        $description = null,
        $category = null
    )
    {
        parent::__construct($name,$image,$price,$availability,$description,$category);

        $this->expirationDate = $expirationDate;
        
    }

}