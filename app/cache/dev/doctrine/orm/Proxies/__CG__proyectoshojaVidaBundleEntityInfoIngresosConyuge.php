<?php

namespace Proxies\__CG__\proyectos\hojaVidaBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class InfoIngresosConyuge extends \proyectos\hojaVidaBundle\Entity\InfoIngresosConyuge implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getPkPatConyuge()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["pkPatConyuge"];
        }
        $this->__load();
        return parent::getPkPatConyuge();
    }

    public function setAnoEje($anoEje)
    {
        $this->__load();
        return parent::setAnoEje($anoEje);
    }

    public function getAnoEje()
    {
        $this->__load();
        return parent::getAnoEje();
    }

    public function setNombre($nombre)
    {
        $this->__load();
        return parent::setNombre($nombre);
    }

    public function getNombre()
    {
        $this->__load();
        return parent::getNombre();
    }

    public function setIngresoMensualPromedio($ingresoMensualPromedio)
    {
        $this->__load();
        return parent::setIngresoMensualPromedio($ingresoMensualPromedio);
    }

    public function getIngresoMensualPromedio()
    {
        $this->__load();
        return parent::getIngresoMensualPromedio();
    }

    public function setDependencia($dependencia)
    {
        $this->__load();
        return parent::setDependencia($dependencia);
    }

    public function getDependencia()
    {
        $this->__load();
        return parent::getDependencia();
    }

    public function setCargo($cargo)
    {
        $this->__load();
        return parent::setCargo($cargo);
    }

    public function getCargo()
    {
        $this->__load();
        return parent::getCargo();
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
        return array('__isInitialized__', 'pkPatConyuge', 'anoEje', 'nombre', 'ingresoMensualPromedio', 'dependencia', 'cargo', 'usuarioAudt', 'fechaAudt', 'ipAudt', 'estadoAudt', 'pkDatPostulante');
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