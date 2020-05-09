<?php

namespace App\DataFixtures;

use App\Entity\Post;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;

class PostFixture extends Fixture implements FixtureGroupInterface
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        for ($i=0; $i < 10; $i++) { 
            $post = new Post();
            $post->setTitle("my first title".rand(0,100));
            $post->setBody("my first body".rand(0,100));
            $post->setTime(new DateTime());
            $manager->persist($post);
        }
    
        $manager->flush();
    }

    public static function getGroups(): array
    {
        return ['group1'];
    }
}
