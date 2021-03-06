<?php

namespace Proxies\__CG__\proyectos\hojaVidaBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class DatosAcademicos extends \proyectos\hojaVidaBundle\Entity\DatosAcademicos implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getPkDatAcademicos()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["pkDatAcademicos"];
        }
        $this->__load();
        return parent::getPkDatAcademicos();
    }

    public function setUnivProcedencia($univProcedencia)
    {
        $this->__load();
        return parent::setUnivProcedencia($univProcedencia);
    }

    public function getUnivProcedencia()
    {
        $this->__load();
        return parent::getUnivProcedencia();
    }

    public function setColegioProfesional($colegioProfesional)
    {
        $this->__load();
        return parent::setColegioProfesional($colegioProfesional);
    }

    public function getColegioProfesional()
    {
        $this->__load();
        return parent::getColegioProfesional();
    }

    public function setFechaIncorporacion($fechaIncorporacion)
    {
        $this->__load();
        return parent::setFechaIncorporacion($fechaIncorporacion);
    }

    public function getFechaIncorporacion()
    {
        $this->__load();
        return parent::getFechaIncorporacion();
    }

    public function setTituloOtros($tituloOtros)
    {
        $this->__load();
        return parent::setTituloOtros($tituloOtros);
    }

    public function getTituloOtros()
    {
        $this->__load();
        return parent::getTituloOtros();
    }

    public function setTesisTitular($tesisTitular)
    {
        $this->__load();
        return parent::setTesisTitular($tesisTitular);
    }

    public function getTesisTitular()
    {
        $this->__load();
        return parent::getTesisTitular();
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
        return array('__isInitialized__', 'pkDatAcademicos', 'univProcedencia', 'colegioProfesional', 'fechaIncorporacion', 'tituloOtros', 'tesisTitular', 'usuarioAudt', 'fechaAudt', 'ipAudt', 'estadoAudt', 'pkDatPostulante');
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