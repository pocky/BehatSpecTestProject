<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BeerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Beer');
    }
}
