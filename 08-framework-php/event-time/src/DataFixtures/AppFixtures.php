<?php

namespace App\DataFixtures;

use App\Entity\Event;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $event = new Event;
        $event->setName('Concert 1');
        $event->setDescription('Lorem ipsum');
        $event->setPrice(15);
        $manager->persist($event);

        $event = new Event;
        $event->setName('Concert 2');
        $event->setDescription('Lorem ipsum');
        $event->setPrice(25);
        $manager->persist($event);

        $event = new Event;
        $event->setName('Concert 3');
        $event->setDescription('Lorem ipsum');
        $event->setPrice(50);
        $manager->persist($event);

        $event = new Event;
        $event->setName('Concert 4');
        $event->setDescription('Lorem ipsum');
        $event->setPrice(10);
        $manager->persist($event);

        $manager->flush();
    }
}
