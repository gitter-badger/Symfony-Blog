<?php

namespace caguna\demoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {

    	$um = $this->get('cagunademo.user_manager');
    	die(print_r($um->getAll()));
        return $this->render('cagunademoBundle:Default:index.html.twig', array('name' => $name));
    }
}