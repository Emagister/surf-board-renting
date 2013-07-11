<?php

namespace spec\Surf\Bundle\DomainBundle\Entity;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use ReflectionObject;

class BoardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Surf\Bundle\DomainBundle\Entity\Board');
    }
}
