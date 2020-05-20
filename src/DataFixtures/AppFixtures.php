<?php

namespace App\DataFixtures;
use App\Entity\User;
use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use DateTime;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        // 
        
        $this->loadUsers($manager);
        $this->loadPosts($manager);
    }


    public function loadPosts(objectManager $manager)
    {

        for ($i=0; $i < 10; $i++) { 
            $post = new Post();
            $post->setTitle("my first title".rand(0,100));
            $post->setBody("my first body".rand(0,100));
            $post->setTime(new DateTime());
            $post->setUser($this->getReference('smojemmi@gmail.com'));
            $manager->persist($post);
        }
    
        $manager->flush();

    }

    public function loadUsers(ObjectManager $manager)
    {

        $user = new User();

        $user->setEmail('mojemmi.said@gmail.com');
        $user->setPassword($this->passwordEncoder->encodePassword($user,'123452'));
        $this->addReference('smojemmi@gmail.com',$user);
        $manager->persist($user);

        $manager->flush();

    }
}
