<?php
/**
 * User: sedera
 * Date: 04/04/2017
 * Time: 14:51
 */

namespace Pharmacie\CoreBundle\Resources\config\routing\Common;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller
{
    public function services()
    {
        return $this->get("services");
    }

    public function em()
    {
        return $this->getDoctrine()->getManager();
    }

    public function getTranslator()
    {
        return $this->container->get("translator");
    }

    public function trans($text, $options=array())
    {
        return $this->getTranslator()->trans($text, $options);
    }
}