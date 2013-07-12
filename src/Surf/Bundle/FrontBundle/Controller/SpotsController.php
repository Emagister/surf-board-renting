<?php

namespace Surf\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SpotsController extends Controller
{
    /**
     * @Route("/spots", name="homepage")
     * @Template()
     */
    public function indexAction()
    {
        $spots = $this->getDoctrine()->getRepository('SurfDomainBundle:Spot')->findAll();

        return array('spots' => $spots);
    }

    /**
     * @Route("/test")
     * @Template()
     */
    public function testAction()
    {
        return array();
    }
}
