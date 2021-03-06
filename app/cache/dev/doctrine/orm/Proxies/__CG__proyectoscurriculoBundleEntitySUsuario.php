<?php

namespace Proxies\__CG__\proyectos\curriculoBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class SUsuario extends \proyectos\curriculoBundle\Entity\SUsuario implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getDni()
    {
        if ($this->__isInitialized__ === false) {
            return $this->_identifier["dni"];
        }
        $this->__load();
        return parent::getDni();
    }

    public function setContrasena($contrasena)
    {
        $this->__load();
        return parent::setContrasena($contrasena);
    }

    public function getContrasena()
    {
        $this->__load();
        return parent::getContrasena();
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

    public function setApellido($apellido)
    {
        $this->__load();
        return parent::setApellido($apellido);
    }

    public function getApellido()
    {
        $this->__load();
        return parent::getApellido();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
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

    public function setEstadoContrasena($estadoContrasena)
    {
        $this->__load();
        return parent::setEstadoContrasena($estadoContrasena);
    }

    public function getEstadoContrasena()
    {
        $this->__load();
        return parent::getEstadoContrasena();
    }

    public function setEstado($estado)
    {
        $this->__load();
        return parent::setEstado($estado);
    }

    public function getEstado()
    {
        $this->__load();
        return parent::getEstado();
    }

    public function setIntentos($intentos)
    {
        $this->__load();
        return parent::setIntentos($intentos);
    }

    public function getIntentos()
    {
        $this->__load();
        return parent::getIntentos();
    }

    public function setEmail2($email2)
    {
        $this->__load();
        return parent::setEmail2($email2);
    }

    public function getEmail2()
    {
        $this->__load();
        return parent::getEmail2();
    }

    public function setIdCnm($idCnm)
    {
        $this->__load();
        return parent::setIdCnm($idCnm);
    }

    public function getIdCnm()
    {
        $this->__load();
        return parent::getIdCnm();
    }

    public function setContrasenaAdm($contrasenaAdm)
    {
        $this->__load();
        return parent::setContrasenaAdm($contrasenaAdm);
    }

    public function getContrasenaAdm()
    {
        $this->__load();
        return parent::getContrasenaAdm();
    }

    public function setObservaciones($observaciones)
    {
        $this->__load();
        return parent::setObservaciones($observaciones);
    }

    public function getObservaciones()
    {
        $this->__load();
        return parent::getObservaciones();
    }

    public function addIdCurriculo(\proyectos\curriculoBundle\Entity\TmCurriculo $idCurriculo)
    {
        $this->__load();
        return parent::addIdCurriculo($idCurriculo);
    }

    public function removeIdCurriculo(\proyectos\curriculoBundle\Entity\TmCurriculo $idCurriculo)
    {
        $this->__load();
        return parent::removeIdCurriculo($idCurriculo);
    }

    public function getIdCurriculo()
    {
        $this->__load();
        return parent::getIdCurriculo();
    }

    public function eraseCredentials()
    {
        $this->__load();
        return parent::eraseCredentials();
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function getRoles()
    {
        $this->__load();
        return parent::getRoles();
    }

    public function getSalt()
    {
        $this->__load();
        return parent::getSalt();
    }

    public function getUsername()
    {
        $this->__load();
        return parent::getUsername();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'dni', 'contrasena', 'nombre', 'apellido', 'email', 'descripcion', 'estadoContrasena', 'estado', 'intentos', 'email2', 'idCnm', 'contrasenaAdm', 'observaciones', 'idCurriculo');
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