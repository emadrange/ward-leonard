<?php

namespace WardLeonard\NewsBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use WardLeonard\NewsBundle\Entity\News;


class Fixtures extends Fixture
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $news = new News();
        $news->setTitle('Ward Leonard en concert à Rock en Seine');
        $news->setContent('Bla... bla...');
        $news->setAuthor('Omar');
        $news->setVideo('concert.mp4');
        $news->setPhoto('concert.jpg');

        $manager->persist($news);
        $manager->flush();

    }
}