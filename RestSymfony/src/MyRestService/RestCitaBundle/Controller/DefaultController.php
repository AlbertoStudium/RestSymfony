<?php

namespace MyRestService\RestCitaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MyRestServiceRestCitaBundle:Default:index.html.twig', array('name' => $name));
    }
}
