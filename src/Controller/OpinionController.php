<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OpinionController extends Controller
{
    /**
     * @Route("/opinion/ajouter", name="add_opinion")
     */
    public function addOpinion()
    {
        return $this->render('opinion/addOpinion.html.twig');
    }

    /**
     * @Route("/opinions", name="show_all_opinion")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function allOpinion()
    {
        return $this->render('opinion/allOpinion.html.twig');
    }
}
