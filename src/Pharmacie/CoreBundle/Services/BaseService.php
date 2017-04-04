<?php
/**
 * User: sedera
 * Date: 04/04/2017
 * Time: 14:41
 */

namespace Pharmacie\CoreBundle\Services;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\CssSelector\Exception\InternalErrorException;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;

class BaseService extends ContainerAwareService
{

    /**
     * Sets a service.
     *
     * @param string $id The service identifier
     * @param object $service The service instance
     */
    public function set($id, $service)
    {
        // TODO: Implement set() method.
    }

    /**
     * Gets a service.
     *
     * @param string $id The service identifier
     * @param int $invalidBehavior The behavior when the service does not exist
     *
     * @return object The associated service
     *
     * @throws ServiceCircularReferenceException When a circular reference is detected
     * @throws ServiceNotFoundException          When the service is not defined
     *
     * @see Reference
     */
    public function get($id, $invalidBehavior = self::EXCEPTION_ON_INVALID_REFERENCE)
    {
        return $this->container->get($id);
    }

    /**
     * Returns true if the given service is defined.
     *
     * @param string $id The service identifier
     *
     * @return bool true if the service is defined, false otherwise
     */
    public function has($id)
    {
        // TODO: Implement has() method.
    }

    /**
     * Check for whether or not a service has been initialized.
     *
     * @param string $id
     *
     * @return bool true if the service has been initialized, false otherwise
     */
    public function initialized($id)
    {
        // TODO: Implement initialized() method.
    }

    /**
     * Gets a parameter.
     *
     * @param string $name The parameter name
     *
     * @return mixed The parameter value
     *
     * @throws InvalidArgumentException if the parameter is not defined
     */
    public function getParameter($name)
    {
        // TODO: Implement getParameter() method.
    }

    /**
     * Checks if a parameter exists.
     *
     * @param string $name The parameter name
     *
     * @return bool The presence of parameter in container
     */
    public function hasParameter($name)
    {
        // TODO: Implement hasParameter() method.
    }

    /**
     * Sets a parameter.
     *
     * @param string $name The parameter name
     * @param mixed $value The parameter value
     */
    public function setParameter($name, $value)
    {
        // TODO: Implement setParameter() method.
    }

    public function getSession()
    {
        return $this->container->get('session');
    }

    public function getTranslator() {
        return $this->container->get('translator');
    }

    public function trans($text, $options = array()) {
        return $this->getTranslator()->trans($text, $options);
    }

    public function em() {
        return $this->container->get('doctrine')->getManager();
    }

    public function services() {
        return $this->container->get("services");
    }

    public function getLocale()
    {
        if (is_null($this->getSession()->get('_locale'))) {
            throw new InternalErrorException($this->trans('Locale is used in service but is not set in session'));
        }
        return $this->getSession()->get('_locale');
    }


    public function getUser()
    {
        //@todo user
    }
}