<?php

namespace NotificationBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Notification
 *
 * @ORM\Table(name="notification")
 * @ORM\Entity(repositoryClass="NotificationBundle\Repository\NotificationRepository")
 */
class Notification
{
    private $id;
    private $user;
    private $date;
    private $description;
    private $statut;
}
