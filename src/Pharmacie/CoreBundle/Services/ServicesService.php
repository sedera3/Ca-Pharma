<?php
/**
 * User: sedera
 * Date: 04/04/2017
 * Time: 15:33
 */

namespace Pharmacie\CoreBundle\Services;


class ServicesService extends BaseService
{
    public function getDatabaseService()
    {
        return $this->container->get('databases');
    }
}