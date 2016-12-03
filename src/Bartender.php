<?php

class Bartender
{
    private $name;

    private $beer;

    public function __construct($name, Beer $beer)
    {
        $this->name = $name;
        $this->beer = $beer;
    }

    public function giveBeer() : Beer
    {
        return $this->beer;
    }
}
