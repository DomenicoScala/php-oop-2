<?php

require_once __DIR__.'/products.php';
require_once __DIR__.'/../HasMaterial.php';


class Cuccia extends Products {

    use HasMaterial;

    public $width;
    public $height;

    public function __construct(
        $name,
        $width,
        $height,
        $image = null,
        $price = null,
        $availability = null,
        $description = null,
        $category = null,
        $material = null
    )
    {
        parent::__construct($name,$image,$price,$availability,$description,$category);

        $this->width = $width;
        $this->height = $height;
        $this->material= $material;
        
    }


}