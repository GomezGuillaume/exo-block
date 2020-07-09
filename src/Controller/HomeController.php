<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController {

    /**
     * @Route ("/accueil", name = "accueil")
     */
    public function accueil () {
       return $this->render("accueil.html.twig");
    }


    /**
     * @Route ("/contact", name = "contact")
     */
    public function contact () {
        return $this->render("contact.html.twig");

    }













}
