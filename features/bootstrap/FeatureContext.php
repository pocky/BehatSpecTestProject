<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $beer = Beer::Guiness();
        $this->bartender = new Bartender("Tom", $beer);
    }

    /**
     * @Given I am a customer
     */
    public function iAmACustomer()
    {
        $this->customer = new Customer("John");
    }

    /**
     * @When I want a beer
     */
    public function iWantABeer()
    {
        $this->customer->askForABeer($this->bartender);
    }

    /**
     * @Then the bartender should give me one
     */
    public function theBartenderShouldGiveOne()
    {
        $this->bartender->giveBeer();
    }

    /**
     * @Then I drink my beer
     */
    public function iDrinkMyBeer()
    {
        $this->customer->drink();
    }

    /**
     * @Then I am :status
     */
    public function iAm($status)
    {
        if ($status !== $this->customer->status()) {
            throw new \Exception();
        }
    }
}
