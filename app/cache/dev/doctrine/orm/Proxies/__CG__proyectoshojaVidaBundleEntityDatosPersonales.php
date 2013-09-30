<?php

namespace Proxies\__CG__\proyectos\hojaVidaBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class DatosPersonales extends \proyectos\hojaVidaBundle\Entity\DatosPersonales implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getIdDatPersonal()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idDatPersonal"];
        }
        $this->__load();
        return parent::getIdDatPersonal();
    }

    public function setPkDatPostulante($pkDatPostulante)
    {
        $this->__load();
        return parent::setPkDatPostulante($pkDatPostulante);
    }

    public function getPkDatPostulante()
    {
        $this->__load();
        return parent::getPkDatPostulante();
    }

    public function setNombres($nombres)
    {
        $this->__load();
        return parent::setNombres($nombres);
    }

    public function getNombres()
    {
        $this->__load();
        return parent::getNombres();
    }

    public function setApellidos($apellidos)
    {
        $this->__load();
        return parent::setApellidos($apellidos);
    }

    public function getApellidos()
    {
        $this->__load();
        return parent::getApellidos();
    }

    public function setLugarNac($lugarNac)
    {
        $this->__load();
        return parent::setLugarNac($lugarNac);
    }

    public function getLugarNac()
    {
        $this->__load();
        return parent::getLugarNac();
    }

    public function setFechaNac($fechaNac)
    {
        $this->__load();
        return parent::setFechaNac($fechaNac);
    }

    public function getFechaNac()
    {
        $this->__load();
        return parent::getFechaNac();
    }

    public function setEdad($edad)
    {
        $this->__load();
        return parent::setEdad($edad);
    }

    public function getEdad()
    {
        $this->__load();
        return parent::getEdad();
    }

    public function setDni($dni)
    {
        $this->__load();
        return parent::setDni($dni);
    }

    public function getDni()
    {
        $this->__load();
        return parent::getDni();
    }

    public function setDiscapacidad($discapacidad)
    {
        $this->__load();
        return parent::setDiscapacidad($discapacidad);
    }

    public function getDiscapacidad()
    {
        $this->__load();
        return parent::getDiscapacidad();
    }

    public function setCertDiscapacidad($certDiscapacidad)
    {
        $this->__load();
        return parent::setCertDiscapacidad($certDiscapacidad);
    }

    public function getCertDiscapacidad()
    {
        $this->__load();
        return parent::getCertDiscapacidad();
    }

    public function setFoto($foto)
    {
        $this->__load();
        return parent::setFoto($foto);
    }

    public function getFoto()
    {
        $this->__load();
        return parent::getFoto();
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


    public function __sleep()
    {
        return array('__isInitialized__', 'idDatPersonal', 'pkDatPostulante', 'nombres', 'apellidos', 'lugarNac', 'fechaNac', 'edad', 'dni', 'discapacidad', 'certDiscapacidad', 'foto', 'usuarioAudt', 'fechaAudt', 'ipAudt', 'estadoAudt');
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