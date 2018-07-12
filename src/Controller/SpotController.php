<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SpotController extends Controller
{
    /**
     * @Route("/spot/ajouter", name="add_spot")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addSpot()
    {
        return $this->render('spot/addSpot.html.twig');
    }

    /**
     * @Route("/spot/chercher", name="search_spot")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function searchSpot()
    {
        return $this->render('spot/searchSpot.html.twig');
    }

    /**
     * @Route("/spot/numero/{id}", name="show_one_spot")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function OneSpot()
    {
         return $this->render('spot/oneSpot.html.twig');
    }

    /**
     * @Route("/spots", name="show_all_spot")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function AllSpot()
    {
        return $this->render('spot/allSpot.html.twig');
    }

    /**
     * @Route("/spots/derniers-publies", name="show_last_spot")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function LastSpot()
    {
        return $this->render('spot/lastSpot.html.twig');
    }
}
