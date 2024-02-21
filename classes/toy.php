<?php

require_once __DIR__.'/products.php';


class Toy extends Products {

    public $material;

    public function __construct(
        $name,
        $material,
        $image = null,
        $price = null,
        $availability = null,
        $description = null,
        $category = null
    )
    {
        parent::__construct($name,$image,$price,$availability,$description,$category);

        $this->material = $material;
        
    }
}