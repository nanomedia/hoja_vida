<?php

namespace proyectos\curriculoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SUsuario
 *
 * @ORM\Table(name="s_usuario")
 * @ORM\Entity
 */
class SUsuario
{
    /**
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dni;

    /**
     * @var string
     *
     * @ORM\Column(name="contrasena", type="string", length=50, nullable=true)
     */
    private $contrasena;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255, nullable=true)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_contrasena", type="string", length=1, nullable=true)
     */
    private $estadoContrasena;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=true)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="intentos", type="integer", nullable=true)
     */
    private $intentos;

    /**
     * @var string
     *
     * @ORM\Column(name="email2", type="string", length=255, nullable=true)
     */
    private $email2;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cnm", type="integer", nullable=true)
     */
    private $idCnm;

    /**
     * @var string
     *
     * @ORM\Column(name="contrasena_adm", type="string", length=50, nullable=true)
     */
    private $contrasenaAdm;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=512, nullable=true)
     */
    private $observaciones;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TmCurriculo", mappedBy="dni")
     */
    private $idCurriculo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCurriculo = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get dni
     *
     * @return string 
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set contrasena
     *
     * @param string $contrasena
     * @return SUsuario
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    
        return $this;
    }

    /**
     * Get contrasena
     *
     * @return string 
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return SUsuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     * @return SUsuario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    
        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return SUsuario
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return SUsuario
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set estadoContrasena
     *
     * @param string $estadoContrasena
     * @return SUsuario
     */
    public function setEstadoContrasena($estadoContrasena)
    {
        $this->estadoContrasena = $estadoContrasena;
    
        return $this;
    }

    /**
     * Get estadoContrasena
     *
     * @return string 
     */
    public function getEstadoContrasena()
    {
        return $this->estadoContrasena;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return SUsuario
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set intentos
     *
     * @param integer $intentos
     * @return SUsuario
     */
    public function setIntentos($intentos)
    {
        $this->intentos = $intentos;
    
        return $this;
    }

    /**
     * Get intentos
     *
     * @return integer 
     */
    public function getIntentos()
    {
        return $this->intentos;
    }

    /**
     * Set email2
     *
     * @param string $email2
     * @return SUsuario
     */
    public function setEmail2($email2)
    {
        $this->email2 = $email2;
    
        return $this;
    }

    /**
     * Get email2
     *
     * @return string 
     */
    public function getEmail2()
    {
        return $this->email2;
    }

    /**
     * Set idCnm
     *
     * @param integer $idCnm
     * @return SUsuario
     */
    public function setIdCnm($idCnm)
    {
        $this->idCnm = $idCnm;
    
        return $this;
    }

    /**
     * Get idCnm
     *
     * @return integer 
     */
    public function getIdCnm()
    {
        return $this->idCnm;
    }

    /**
     * Set contrasenaAdm
     *
     * @param string $contrasenaAdm
     * @return SUsuario
     */
    public function setContrasenaAdm($contrasenaAdm)
    {
        $this->contrasenaAdm = $contrasenaAdm;
    
        return $this;
    }

    /**
     * Get contrasenaAdm
     *
     * @return string 
     */
    public function getContrasenaAdm()
    {
        return $this->contrasenaAdm;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return SUsuario
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    
        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Add idCurriculo
     *
     * @param \proyectos\curriculoBundle\Entity\TmCurriculo $idCurriculo
     * @return SUsuario
     */
    public function addIdCurriculo(\proyectos\curriculoBundle\Entity\TmCurriculo $idCurriculo)
    {
        $this->idCurriculo[] = $idCurriculo;
    
        return $this;
    }

    /**
     * Remove idCurriculo
     *
     * @param \proyectos\curriculoBundle\Entity\TmCurriculo $idCurriculo
     */
    public function removeIdCurriculo(\proyectos\curriculoBundle\Entity\TmCurriculo $idCurriculo)
    {
        $this->idCurriculo->removeElement($idCurriculo);
    }

    /**
     * Get idCurriculo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdCurriculo()
    {
        return $this->idCurriculo;
    }
}