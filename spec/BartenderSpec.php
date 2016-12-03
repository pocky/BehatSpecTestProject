<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Beer;

class BartenderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Bartender');
    }

    function let(Beer $beer)
    {
        $this->beConstructedWith("Tom", $beer);
    }

    function it_should_give_a_beer(Beer $beer)
    {
        $this->giveBeer()->shouldReturn($beer);
    }
}
