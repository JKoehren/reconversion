<?php

namespace MessagerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="MessagerieBundle\Repository\MessageRepository")
 */
class Message
{

    private $id;
    private $user;
    private $destinataire;
    private $sujet;
    private $corps;
