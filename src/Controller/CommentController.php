<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommentController extends Controller
{
    /**
     * @Route("/commentaire/signaler", name="signal_comment")
     */
    public function reportComment()
    {
        return $this->render('comment/reportComment.html.twig');
    }

    /**
     * @Route("/commentaire/ajouter", name="add_comment")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addComment()
    {
        return $this->render('comment/addComment.html.twig');
    }
}
