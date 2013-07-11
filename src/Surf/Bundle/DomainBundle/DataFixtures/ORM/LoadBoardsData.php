<?php

namespace Surf\Bundle\DomainBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use Faker\ORM\Doctrine\Populator;

class LoadBoardsData extends AbstractFixture
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $generator = Factory::create('en');
        $populator = new Populator($generator, $manager);
        $populator->addEntity('Surf\Bundle\DomainBundle\Entity\Board', 10);
        $populator->execute();
    }
}