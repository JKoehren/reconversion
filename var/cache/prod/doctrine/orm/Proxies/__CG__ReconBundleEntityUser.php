<?php

namespace Proxies\__CG__\ReconBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \ReconBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'categorie', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'civilite', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'dateDeNaissance', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'adresse', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'codePostal', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'ville', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'tel', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'pass', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'nom', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'prenom', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'projet', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'attente', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'situations'];
        }

        return ['__isInitialized__', 'id', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'categorie', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'civilite', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'dateDeNaissance', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'adresse', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'codePostal', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'ville', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'tel', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'pass', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'nom', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'prenom', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'projet', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'attente', '' . "\0" . 'ReconBundle\\Entity\\User' . "\0" . 'situations'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorie($categorie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorie', [$categorie]);

        return parent::setCategorie($categorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorie', []);

        return parent::getCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setCivilite($civilite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCivilite', [$civilite]);

        return parent::setCivilite($civilite);
    }

    /**
     * {@inheritDoc}
     */
    public function getCivilite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCivilite', []);

        return parent::getCivilite();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDeNaissance($dateDeNaissance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDeNaissance', [$dateDeNaissance]);

        return parent::setDateDeNaissance($dateDeNaissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDeNaissance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDeNaissance', []);

        return parent::getDateDeNaissance();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodePostal($codePostal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodePostal', [$codePostal]);

        return parent::setCodePostal($codePostal);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodePostal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodePostal', []);

        return parent::getCodePostal();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille($ville)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel($tel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel', [$tel]);

        return parent::setTel($tel);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel', []);

        return parent::getTel();
    }

    /**
     * {@inheritDoc}
     */
    public function setPass($pass)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPass', [$pass]);

        return parent::setPass($pass);
    }

    /**
     * {@inheritDoc}
     */
    public function getPass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPass', []);

        return parent::getPass();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setProjet($projet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProjet', [$projet]);

        return parent::setProjet($projet);
    }

    /**
     * {@inheritDoc}
     */
    public function getProjet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProjet', []);

        return parent::getProjet();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttente($attente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttente', [$attente]);

        return parent::setAttente($attente);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttente', []);

        return parent::getAttente();
    }

}
