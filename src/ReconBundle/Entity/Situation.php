<?php

namespace ReconBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Situation
 *
 * @ORM\Table(name="situation")
 * @ORM\Entity(repositoryClass="ReconBundle\Repository\SituationRepository")
 */
class Situation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=255)
     */
    private $fonction;

    /**
     * @var int
     *
     * @ORM\Column(name="anneeExp", type="integer")
     */
    private $anneeExp;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEntreprise", type="string", length=255)
     */
    private $nomEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostal", type="string", length=5)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     *
     * @return Situation
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set anneeExp
     *
     * @param integer $anneeExp
     *
     * @return Situation
     */
    public function setAnneeExp($anneeExp)
    {
        $this->anneeExp = $anneeExp;

        return $this;
    }

    /**
     * Get anneeExp
     *
     * @return int
     */
    public function getAnneeExp()
    {
        return $this->anneeExp;
    }

    /**
     * Set nomEntreprise
     *
     * @param string $nomEntreprise
     *
     * @return Situation
     */
    public function setNomEntreprise($nomEntreprise)
    {
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Get nomEntreprise
     *
     * @return string
     */
    public function getNomEntreprise()
    {
        return $this->nomEntreprise;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return Situation
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Situation
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }
}

