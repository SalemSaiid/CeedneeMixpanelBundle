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
     */
    public function indexAction($name)
    {
        $event = $this->get('ceednee.mixpanel.event');
        print $event->generateSignature();

        //return array('name' => $name);
    }
}
