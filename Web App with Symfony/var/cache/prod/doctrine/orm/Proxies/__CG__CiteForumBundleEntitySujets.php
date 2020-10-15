<?php

namespace Proxies\__CG__\Cite\ForumBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Sujets extends \Cite\ForumBundle\Entity\Sujets implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Cite\\ForumBundle\\Entity\\Sujets' . "\0" . 'idSujet', '' . "\0" . 'Cite\\ForumBundle\\Entity\\Sujets' . "\0" . 'theme', '' . "\0" . 'Cite\\ForumBundle\\Entity\\Sujets' . "\0" . 'titre', '' . "\0" . 'Cite\\ForumBundle\\Entity\\Sujets' . "\0" . 'statut', '' . "\0" . 'Cite\\ForumBundle\\Entity\\Sujets' . "\0" . 'dateCreation', '' . "\0" . 'Cite\\ForumBundle\\Entity\\Sujets' . "\0" . 'idAbonne', '' . "\0" . 'Cite\\ForumBundle\\Entity\\Sujets' . "\0" . 'motsMasques', '' . "\0" . 'Cite\\ForumBundle\\Entity\\Sujets' . "\0" . 'nbrMessages'];
        }

        return ['__isInitialized__', '' . "\0" . 'Cite\\ForumBundle\\Entity\\Sujets' . "\0" . 'idSujet', '' . "\0" . 'Cite\\ForumBundle\\Entity\\Sujets' . "\0" . 'theme', '' . "\0" . 'Cite\\ForumBundle\\Entity\\Sujets' . "\0" . 'titre', '' . "\0" . 'Cite\\ForumBundle\\Entity\\Sujets' . "\0" . 'statut', '' . "\0" . 'Cite\\ForumBundle\\Entity\\Sujets' . "\0" . 'dateCreation', '' . "\0" . 'Cite\\ForumBundle\\Entity\\Sujets' . "\0" . 'idAbonne', '' . "\0" . 'Cite\\ForumBundle\\Entity\\Sujets' . "\0" . 'motsMasques', '' . "\0" . 'Cite\\ForumBundle\\Entity\\Sujets' . "\0" . 'nbrMessages'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Sujets $proxy) {
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
    public function getIdSujet()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdSujet();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdSujet', []);

        return parent::getIdSujet();
    }

    /**
     * {@inheritDoc}
     */
    public function setTheme($theme)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTheme', [$theme]);

        return parent::setTheme($theme);
    }

    /**
     * {@inheritDoc}
     */
    public function getTheme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTheme', []);

        return parent::getTheme();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre($titre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatut($statut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatut', [$statut]);

        return parent::setStatut($statut);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatut', []);

        return parent::getStatut();
    }

    /**
     * {@inheritDoc}
     */
    public function onPrePersistSetDateCreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onPrePersistSetDateCreation', []);

        return parent::onPrePersistSetDateCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreation($dateCreation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreation', [$dateCreation]);

        return parent::setDateCreation($dateCreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreation', []);

        return parent::getDateCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdAbonne(\Cite\UserBundle\Entity\User $idAbonne = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdAbonne', [$idAbonne]);

        return parent::setIdAbonne($idAbonne);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdAbonne()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdAbonne', []);

        return parent::getIdAbonne();
    }

    /**
     * {@inheritDoc}
     */
    public function addMotsMasque(\Cite\ForumBundle\Entity\MotsMasques $motsMasque)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMotsMasque', [$motsMasque]);

        return parent::addMotsMasque($motsMasque);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMotsMasque(\Cite\ForumBundle\Entity\MotsMasques $motsMasque)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMotsMasque', [$motsMasque]);

        return parent::removeMotsMasque($motsMasque);
    }

    /**
     * {@inheritDoc}
     */
    public function getMotsMasques()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMotsMasques', []);

        return parent::getMotsMasques();
    }

    /**
     * {@inheritDoc}
     */
    public function getNbrMessages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbrMessages', []);

        return parent::getNbrMessages();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbrMessages($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbrMessages', [$value]);

        return parent::setNbrMessages($value);
    }

}