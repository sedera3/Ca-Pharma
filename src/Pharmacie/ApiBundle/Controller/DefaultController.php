<?php

namespace Pharmacie\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PharmacieApiBundle:Default:index.html.twig');
    }
}
