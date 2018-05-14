<?php

namespace ReconBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ReconBundle:Default:index.html.twig');
    }
}
