<?php

namespace App\Controller;

use App\Entity\Post;
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

        $repository = $this->getDoctrine()->getRepository(Post::class);
        $posts = $repository->findAll();
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

    /**
     * @Route("/blog/show/{id}",name="post_show")
     */
    public function show($id)
    {
        $repository = $this->getDoctrine()->getRepository(Post::class);
        $post = $repository->find($id);
        return $this->render("show.html.twig",[
            'post' => $post
        ]);
    }
}

?>