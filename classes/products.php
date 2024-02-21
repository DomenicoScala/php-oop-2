<?php

class Products {

    public $name;
    public $price;
    public $image;
    public $availability;
    public $description;
    public $category;

    public function __construct(
        $name,
        $image = null,
        $price = null,
        $availability = null,
        $description = null,
        $category = null
    )
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->availability = $availability;
        $this->description = $description;
        $this->category = $category;
    }

}

