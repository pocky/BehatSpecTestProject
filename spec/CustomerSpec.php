<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Bartender;
use Customer;

class CustomerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Customer');
    }

    function let()
    {
        $this->beConstructedWith("john");
    }

    function it_should_ask_for_a_beer(Bartender $bartender)
    {
        $bartender->giveBeer()->shouldBeCalled();
        $this->askForABeer($bartender);

        $this->hasBeer()->shouldReturn(true);
    }

    function it_should_drink_a_beer()
    {
        $this->drink();
        $this->hasBeer()->shouldReturn(false);
        $this->status()->shouldReturn(Customer::DRUNK);
    }
}
