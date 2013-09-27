<?php

namespace Proxies\__CG__\proyectos\hojaVidaBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class MagistradoRatificado extends \proyectos\hojaVidaBundle\Entity\MagistradoRatificado implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getPkExpMagRat()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["pkExpMagRat"];
        }
        $this->__load();
        return parent::getPkExpMagRat();
    }

    public function setRespuesta1($respuesta1)
    {
        $this->__load();
        return parent::setRespuesta1($respuesta1);
    }

    public function getRespuesta1()
    {
        $this->__load();
        return parent::getRespuesta1();
    }

    public function setRespuesta2($respuesta2)
    {
        $this->__load();
        return parent::setRespuesta2($respuesta2);
    }

    public function getRespuesta2()
    {
        $this->__load();
        return parent::getRespuesta2();
    }

    public function setResolucion($resolucion)
    {
        $this->__load();
        return parent::setResolucion($resolucion);
    }

    public function getResolucion()
    {
        $this->__load();
        return parent::getResolucion();
    }

    public function setFechaRes($fechaRes)
    {
        $this->__load();
        return parent::setFechaRes($fechaRes);
    }

    public function getFechaRes()
    {
        $this->__load();
        return parent::getFechaRes();
    }

    public function setRespuesta3($respuesta3)
    {
        $this->__load();
        return parent::setRespuesta3($respuesta3);
    }

    public function getRespuesta3()
    {
        $this->__load();
        return parent::getRespuesta3();
    }

    public function setUsuarioAudt($usuarioAudt)
    {
        $this->__load();
        return parent::setUsuarioAudt($usuarioAudt);
    }

    public function getUsuarioAudt()
    {
        $this->__load();
        return parent::getUsuarioAudt();
    }

    public function setFechaAudt($fechaAudt)
    {
        $this->__load();
        return parent::setFechaAudt($fechaAudt);
    }

    public function getFechaAudt()
    {
        $this->__load();
        return parent::getFechaAudt();
    }

    public function setIpAudt($ipAudt)
    {
        $this->__load();
        return parent::setIpAudt($ipAudt);
    }

    public function getIpAudt()
    {
        $this->__load();
        return parent::getIpAudt();
    }

    public function setEstadoAudt($estadoAudt)
    {
        $this->__load();
        return parent::setEstadoAudt($estadoAudt);
    }

    public function getEstadoAudt()
    {
        $this->__load();
        return parent::getEstadoAudt();
    }

    public function setPkDatPostulante(\proyectos\hojaVidaBundle\Entity\DatosPostulante $pkDatPostulante = NULL)
    {
        $this->__load();
        return parent::setPkDatPostulante($pkDatPostulante);
    }

    public function getPkDatPostulante()
    {
        $this->__load();
        return parent::getPkDatPostulante();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'pkExpMagRat', 'respuesta1', 'respuesta2', 'resolucion', 'fechaRes', 'respuesta3', 'usuarioAudt', 'fechaAudt', 'ipAudt', 'estadoAudt', 'pkDatPostulante');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}