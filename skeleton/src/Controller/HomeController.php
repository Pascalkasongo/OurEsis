<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController{

    public function index():Response{
        return $this->render('mine/signin.html.twig');
    }

    public function MainIndex():Response{
        return $this->render('base.html.twig');
    }
}