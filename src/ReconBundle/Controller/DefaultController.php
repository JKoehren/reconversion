<?php

namespace ReconBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $connect = false;
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($session['connect'])) {
            $connect = $session['connect'];
        }
        return $this->render('ReconBundle:Default:index.html.twig', ['id' => $connect]);
    }
    
    public function unconnectAction()
    {
        if (session_status() == PHP_SESSION_NONE) session_start();
        unset($_SESSION['connect']);
        unset($session);
        header('location: ./');
        return $this->render('ReconBundle:Default:index.html.twig');
    }
}
