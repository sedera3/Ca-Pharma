<?php
/**
 * Created by PhpStorm.
 * User: sedera
 * Date: 04/04/2017
 * Time: 15:47
 */

namespace Pharmacie\CoreBundle\Controller\Backend;


use Pharmacie\CoreBundle\Resources\config\routing\Common\BaseController;
use Symfony\Component\HttpFoundation\Request;

class UserController extends BaseController
{
    public function getListUser(Request $request)
    {
        return $this->renderView('Backend/listUser.html.twig', array(

        ));
    }

    public function setListUser(Request $request)
    {
    }
}