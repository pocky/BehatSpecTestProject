<?php

class Customer
{
    const DRUNK = "drunk";

    const SOBER = "sober";

    private $name;

    private $beer;

    private $counter;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function askForABeer(Bartender $bartender)
    {
        $this->beer = $bartender->giveBeer();
    }

    public function hasBeer() : bool
    {
        return (bool) $this->beer;
    }

    public function drink()
    {
        $this->beer = false;
        $this->counter = $this->counter + 1;
    }

    public function status()
    {
        if ($this->counter >= 1) {
            return self::DRUNK;
        }

        return self::SOBER;
    }
}
