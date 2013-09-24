<?php

namespace Proxies\__CG__\proyectos\hojaVidaBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class PatrimonioBienesConyuge extends \proyectos\hojaVidaBundle\Entity\PatrimonioBienesConyuge implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getPkPatBienesConyuge()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["pkPatBienesConyuge"];
        }
        $this->__load();
        return parent::getPkPatBienesConyuge();
    }

    public function setTipo($tipo)
    {
        $this->__load();
        return parent::setTipo($tipo);
    }

    public function getTipo()
    {
        $this->__load();
        return parent::getTipo();
    }

    public function setDescripcion($descripcion)
    {
        $this->__load();
        return parent::setDescripcion($descripcion);
    }

    public function getDescripcion()
    {
        $this->__load();
        return parent::getDescripcion();
    }

    public function setFechaModo($fechaModo)
    {
        $this->__load();
        return parent::setFechaModo($fechaModo);
    }

    public function getFechaModo()
    {
        $this->__load();
        return parent::getFechaModo();
    }

    public function setUltValor($ultValor)
    {
        $this->__load();
        return parent::setUltValor($ultValor);
    }

    public function getUltValor()
    {
        $this->__load();
        return parent::getUltValor();
    }

    public function setDatosRegPublicos($datosRegPublicos)
    {
        $this->__load();
        return parent::setDatosRegPublicos($datosRegPublicos);
    }

    public function getDatosRegPublicos()
    {
        $this->__load();
        return parent::getDatosRegPublicos();
    }

    public function setFechaModoTransferencia($fechaModoTransferencia)
    {
        $this->__load();
        return parent::setFechaModoTransferencia($fechaModoTransferencia);
    }

    public function getFechaModoTransferencia()
    {
        $this->__load();
        return parent::getFechaModoTransferencia();
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
        return array('__isInitialized__', 'pkPatBienesConyuge', 'tipo', 'descripcion', 'fechaModo', 'ultValor', 'datosRegPublicos', 'fechaModoTransferencia', 'usuarioAudt', 'fechaAudt', 'ipAudt', 'estadoAudt', 'pkDatPostulante');
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