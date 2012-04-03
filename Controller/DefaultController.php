<?php

namespace Ceednee\CeedneeMixpanelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     * @param $name
     */
    public function indexAction($name)
    {
        $event = $this->get('ceednee.mixpanel.event');
        //var_dump($event->calculateSignature());

        var_dump($event->getEvents(
                array(
                    'event' => array('play song', 'log in'),
                    'type' => 'general',
                    'unit' => 'hours',
                    'interval' => 2)
            )
        );

        //return array('name' => $name);
    }
}
