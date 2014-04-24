<?php

namespace Ehann\Bundle\OpenAwesomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EhannOpenAwesomeBundle:Default:index.html.twig', array('name' => $name));
    }
}
