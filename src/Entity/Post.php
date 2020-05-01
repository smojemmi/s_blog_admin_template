<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="string",length=200)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $body;

    /**
     * @ORM\Column(type="date")
     */
    private $time;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title) : void
    {
        $this->title = $title;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body) : void
    {
        $this->body = $body;
    }

    public function getTime()
    {
        $this->time;

    }

    public function setTime($time) : void
    {
        $this->time = $time;
    }
}

