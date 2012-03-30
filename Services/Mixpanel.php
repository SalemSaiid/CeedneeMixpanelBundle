<?php

namespace Ceednee\CeedneeMixpanelBundle\Services;

use Symfony\Component\DependencyInjection\ContainerBuilder;

class Mixpanel
{
    /**
     *
     */
    protected
        $auth,
        $export,
        $event,
        $property,
        $funnel,
        $segmentation,
        $retention,
        $error;

    /**
     * ContainerBuilder service
     * @var \ContainerBuilder
     */
    private $container;

    /**
     *
     * @param Auth $auth [description]
     */
    public function __construct(ContainerBuilder $container)
    {
        $this->container = $container;
        $this->auth = $this->container->get('ceednee_mixpanel.auth');
        $this->export = $this->container->get('ceednee_mixpanel.export');
        $this->event = $this->container->get('ceednee_mixpanel.event');
        $this->property = $this->container->get('ceednee_mixpanel.property');
        $this->funnel = $this->container->get('ceednee_mixpanel.funnel');
        $this->segmentation = $this->container->get('ceednee_mixpanel.segmentation');
        $this->retention = $this->container->get('ceednee_mixpanel.retention');
        $this->error = $this->container->get('ceednee_mixpanel.error');
    }

    /**
     * Gets Auth service
     *
     * @return Ceednee\CeedneeMixpanelBundle\Mixpanel\Auth
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * Gets Export service
     *
     * @return Ceednee\CeedneeMixpanelBundle\Mixpanel\Export
     */
    public function getExport()
    {
        return $this->export;
    }

    /**
     * Gets Event service
     *
     * @return Ceednee\CeedneeMixpanelBundle\Mixpanel\Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Gets Property service
     *
     * @return Ceednee\CeedneeMixpanelBundle\Mixpanel\Property
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Gets Funnel service
     *
     * @return Ceednee\CeedneeMixpanelBundle\Mixpanel\Funnel
     */
    public function getFunnel()
    {
        return $this->funnel;
    }

    /**
     * Gets Segmentation service
     *
     * @return Ceednee\CeedneeMixpanelBundle\Mixpanel\Segmentation
     */
    public function getSegmentation()
    {
        return $this->segmentation;
    }

    /**
     * Gets Retention service
     *
     * @return Ceednee\CeedneeMixpanelBundle\Mixpanel\Retention
     */
    public function getRetention()
    {
        return $this->retention;
    }

    /**
     * Gets Error service
     *
     * @return Ceednee\CeedneeMixpanelBundle\Mixpanel\Error
     */
    public function getError()
    {
        return $this->error;
    }

}


