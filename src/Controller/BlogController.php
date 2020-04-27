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

        return $this->render('index.html.twig');
    }

    /**
     * @Route("/add",name="post_add")
     */
    public function add(){
        return new Response("add post");
    }
}

?>