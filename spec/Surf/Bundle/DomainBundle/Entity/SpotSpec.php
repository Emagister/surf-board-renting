<?php

namespace spec\Surf\Bundle\DomainBundle\Entity;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SpotSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Surf\Bundle\DomainBundle\Entity\Spot');
    }
}
