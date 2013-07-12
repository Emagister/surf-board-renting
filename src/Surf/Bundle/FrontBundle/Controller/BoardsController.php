<?php

namespace Surf\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class BoardsController extends Controller
{
    /**
     * @Route("/boards", name="boards-listing")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
