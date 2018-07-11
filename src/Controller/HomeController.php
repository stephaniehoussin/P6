<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{

    /**
     * @Route("/landing", name="landing")
     * @return \Symfony\Component\HttpFoundation\Response
     */
     public function landing()
     {
         return $this->render('landing/reportComment.html.twig');
     }

    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/reportComment.html.twig');
    }
}
