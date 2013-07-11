<?php

namespace spec\Surf\Bundle\DomainBundle\Entity;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RiderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Surf\Bundle\DomainBundle\Entity\Rider');
    }
}
