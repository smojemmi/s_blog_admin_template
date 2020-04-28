<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

Class BlogController extends AbstractController{

    /**
     * @Route("/")
     */
    public function index(){
        /* return new Response(
            'Hello World'
        ); */

        $posts = [
            [
                'id' => 1,
                'title' => 'said',
                'body' => 'said est un prenom'
            ],
            [
                'id' => 2,
                'title' => 'younes',
                'body' => 'younes est un prenom'
            ],
            [
                'id' => 3,
                'title' => 'brahim',
                'body' => 'brahim est un prenom'
            ]
        ];
        return $this->render('index.html.twig',[
            'posts' => $posts
        ]);
    }

    /**
     * @Route("/add",name="post_add")
     */
    public function add(){
        return new Response("add post");
    }
}

?>