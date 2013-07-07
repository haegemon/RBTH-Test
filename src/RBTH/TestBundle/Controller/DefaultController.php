<?php

namespace RBTH\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RBTHTestBundle:Default:add.html.twig', array('name' => $name));
    }
}
