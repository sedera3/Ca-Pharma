<?php
/**
 * User: sedera
 * Date: 04/04/2017
 * Time: 15:14
 */

namespace Pharmacie\CoreBundle\Services;


use Symfony\Component\DependencyInjection\ContainerInterface;

abstract class ContainerAwareService implements ContainerInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @param ContainerInterface|null $container {@inheritdoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}