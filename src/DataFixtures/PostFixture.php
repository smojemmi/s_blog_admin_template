<?php

namespace App\DataFixtures;

use App\Entity\Post;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PostFixture extends Fixture
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
}
