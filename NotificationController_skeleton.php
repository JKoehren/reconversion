<?php

namespace NotificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NotificationBundle\Entity\Notification;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class NotificationController extends Controller
{
    public function indexAction()
    {
      // liste des notifications d'un user
    }
  	public function createAction()
  	{
  	}
  	public function deleteAction()
    {
  	}
	  public function markAsReadAction()
    {
    }
}
