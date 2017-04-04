<?php

namespace Pharmacie\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PharmacieCoreBundle:Default:index.html.twig');
    }
}
