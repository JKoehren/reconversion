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
     * @var bool
     *
     * @ORM\Column(name="type", type="boolean")
     */
    private $type;

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
     * @var bool
     *
     * @ORM\Column(name="poleemploie", type="boolean", options={"default" : NULL})
     */
    private $poleemploie;


    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="situations")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */
    private $user;
    
    /**
    * @ORM\ManyToOne(targetEntity="Contrat", inversedBy="situation")
    */
    private $contrat;
    
    /**
    * @ORM\ManyToOne(targetEntity="CSP", inversedBy="situation")
    */
    private $csp;
    
    /**
    * @ORM\ManyToOne(targetEntity="Etudes", inversedBy="situation")
    */
    private $etudes;
    
    /**
    * @ORM\ManyToOne(targetEntity="Taille", inversedBy="situation")
    */
    private $taille;

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
     * Set type
     *
     * @param string $type
     *
     * @return Situation
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
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

    /**
     * Set user
     *
     * @param \ReconBundle\Entity\User $user
     *
     * @return Situation
     */
    public function setUser(\ReconBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \ReconBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set contrat
     *
     * @param \ReconBundle\Entity\Contrat $contrat
     *
     * @return Situation
     */
    public function setContrat(\ReconBundle\Entity\Contrat $contrat = null)
    {
        $this->contrat = $contrat;
    
        return $this;
    }

    /**
     * Get contrat
     *
     * @return \ReconBundle\Entity\Contrat
     */
    public function getContrat()
    {
        return $this->contrat;
    }

    /**
     * Set csp
     *
     * @param \ReconBundle\Entity\CSP $csp
     *
     * @return Situation
     */
    public function setCSP(\ReconBundle\Entity\CSP $csp = null)
    {
        $this->csp = $csp;
    
        return $this;
    }

    /**
     * Get csp
     *
     * @return \ReconBundle\Entity\CSP
     */
    public function getCSP()
    {
        return $this->csp;
    }

    /**
     * Set etudes
     *
     * @param \ReconBundle\Entity\Etudes $etudes
     *
     * @return Situation
     */
    public function setEtudes(\ReconBundle\Entity\Etudes $etudes = null)
    {
        $this->etudes = $etudes;
    
        return $this;
    }

    /**
     * Get etudes
     *
     * @return \ReconBundle\Entity\Etudes
     */
    public function getEtudes()
    {
        return $this->etudes;
    }

    /**
     * Set taille
     *
     * @param \ReconBundle\Entity\Taille $taille
     *
     * @return Situation
     */
    public function setTaille(\ReconBundle\Entity\Taille $taille = null)
    {
        $this->taille = $taille;
    
        return $this;
    }

    /**
     * Get taille
     *
     * @return \ReconBundle\Entity\Taille
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set poleemploie
     *
     * @param boolean $poleemploie
     *
     * @return Situation
     */
    public function setPoleemploie($poleemploie)
    {
        $this->poleemploie = $poleemploie;
    
        return $this;
    }

    /**
     * Get poleemploie
     *
     * @return boolean
     */
    public function getPoleemploie()
    {
        return $this->poleemploie;
    }
}
