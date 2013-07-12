<?php

namespace Surf\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class RidersController extends Controller
{
    /**
     * @Route("/riders", name="homepage")
     * @Template()
     */
    public function indexAction()
    {
        $riders = $this->getDoctrine()->getRepository('SurfDomainBundle:Rider')->findAll();

        return array('riders' => $riders);
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
