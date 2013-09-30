<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatosPersonales
 *
 * @ORM\Table(name="datos_personales")
 * @ORM\Entity
 */
class DatosPersonales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_DAT_PERSONAL", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDatPersonal;

    /**
     * @var integer
     *
     * @ORM\Column(name="PK_DAT_POSTULANTE", type="integer", nullable=true)
     */
    private $pkDatPostulante;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRES", type="string", length=50, nullable=true)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="APELLIDOS", type="string", length=50, nullable=true)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="LUGAR_NAC", type="string", length=20, nullable=true)
     */
    private $lugarNac;

    /**
     * @var string
     *
     * @ORM\Column(name="FECHA_NAC", type="string", length=10, nullable=true)
     */
    private $fechaNac;

    /**
     * @var integer
     *
     * @ORM\Column(name="EDAD", type="integer", nullable=true)
     */
    private $edad;

    /**
     * @var string
     *
     * @ORM\Column(name="DNI", type="string", length=12, nullable=true)
     */
    private $dni;

    /**
     * @var string
     *
     * @ORM\Column(name="DISCAPACIDAD", type="string", length=2, nullable=true)
     */
    private $discapacidad;

    /**
     * @var string
     *
     * @ORM\Column(name="CERT_DISCAPACIDAD", type="string", length=300, nullable=true)
     */
    private $certDiscapacidad;

    /**
     * @var string
     *
     * @ORM\Column(name="FOTO", type="string", length=20, nullable=true)
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="USUARIO_AUDT", type="string", length=50, nullable=true)
     */
    private $usuarioAudt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_AUDT", type="datetime", nullable=true)
     */
    private $fechaAudt;

    /**
     * @var string
     *
     * @ORM\Column(name="IP_AUDT", type="string", length=50, nullable=true)
     */
    private $ipAudt;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESTADO_AUDT", type="integer", nullable=true)
     */
    private $estadoAudt;



    /**
     * Get idDatPersonal
     *
     * @return integer 
     */
    public function getIdDatPersonal()
    {
        return $this->idDatPersonal;
    }

    /**
     * Set pkDatPostulante
     *
     * @param integer $pkDatPostulante
     * @return DatosPersonales
     */
    public function setPkDatPostulante($pkDatPostulante)
    {
        $this->pkDatPostulante = $pkDatPostulante;
    
        return $this;
    }

    /**
     * Get pkDatPostulante
     *
     * @return integer 
     */
    public function getPkDatPostulante()
    {
        return $this->pkDatPostulante;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return DatosPersonales
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    
        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return DatosPersonales
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    
        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set lugarNac
     *
     * @param string $lugarNac
     * @return DatosPersonales
     */
    public function setLugarNac($lugarNac)
    {
        $this->lugarNac = $lugarNac;
    
        return $this;
    }

    /**
     * Get lugarNac
     *
     * @return string 
     */
    public function getLugarNac()
    {
        return $this->lugarNac;
    }

    /**
     * Set fechaNac
     *
     * @param string $fechaNac
     * @return DatosPersonales
     */
    public function setFechaNac($fechaNac)
    {
        $this->fechaNac = $fechaNac;
    
        return $this;
    }

    /**
     * Get fechaNac
     *
     * @return string 
     */
    public function getFechaNac()
    {
        return $this->fechaNac;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     * @return DatosPersonales
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    
        return $this;
    }

    /**
     * Get edad
     *
     * @return integer 
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set dni
     *
     * @param string $dni
     * @return DatosPersonales
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    
        return $this;
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
     * Set discapacidad
     *
     * @param string $discapacidad
     * @return DatosPersonales
     */
    public function setDiscapacidad($discapacidad)
    {
        $this->discapacidad = $discapacidad;
    
        return $this;
    }

    /**
     * Get discapacidad
     *
     * @return string 
     */
    public function getDiscapacidad()
    {
        return $this->discapacidad;
    }

    /**
     * Set certDiscapacidad
     *
     * @param string $certDiscapacidad
     * @return DatosPersonales
     */
    public function setCertDiscapacidad($certDiscapacidad)
    {
        $this->certDiscapacidad = $certDiscapacidad;
    
        return $this;
    }

    /**
     * Get certDiscapacidad
     *
     * @return string 
     */
    public function getCertDiscapacidad()
    {
        return $this->certDiscapacidad;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return DatosPersonales
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    
        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set usuarioAudt
     *
     * @param string $usuarioAudt
     * @return DatosPersonales
     */
    public function setUsuarioAudt($usuarioAudt)
    {
        $this->usuarioAudt = $usuarioAudt;
    
        return $this;
    }

    /**
     * Get usuarioAudt
     *
     * @return string 
     */
    public function getUsuarioAudt()
    {
        return $this->usuarioAudt;
    }

    /**
     * Set fechaAudt
     *
     * @param \DateTime $fechaAudt
     * @return DatosPersonales
     */
    public function setFechaAudt($fechaAudt)
    {
        $this->fechaAudt = $fechaAudt;
    
        return $this;
    }

    /**
     * Get fechaAudt
     *
     * @return \DateTime 
     */
    public function getFechaAudt()
    {
        return $this->fechaAudt;
    }

    /**
     * Set ipAudt
     *
     * @param string $ipAudt
     * @return DatosPersonales
     */
    public function setIpAudt($ipAudt)
    {
        $this->ipAudt = $ipAudt;
    
        return $this;
    }

    /**
     * Get ipAudt
     *
     * @return string 
     */
    public function getIpAudt()
    {
        return $this->ipAudt;
    }

    /**
     * Set estadoAudt
     *
     * @param integer $estadoAudt
     * @return DatosPersonales
     */
    public function setEstadoAudt($estadoAudt)
    {
        $this->estadoAudt = $estadoAudt;
    
        return $this;
    }

    /**
     * Get estadoAudt
     *
     * @return integer 
     */
    public function getEstadoAudt()
    {
        return $this->estadoAudt;
    }
}