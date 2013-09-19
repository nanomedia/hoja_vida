<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OtrasDisciplinas
 *
 * @ORM\Table(name="otras_disciplinas")
 * @ORM\Entity
 */
class OtrasDisciplinas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_OTRAS_DISC", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkOtrasDisc;

    /**
     * @var string
     *
     * @ORM\Column(name="UNIVERSIDAD", type="string", length=80, nullable=true)
     */
    private $universidad;

    /**
     * @var string
     *
     * @ORM\Column(name="NIVEL", type="string", length=20, nullable=true)
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="MENSION", type="string", length=100, nullable=true)
     */
    private $mension;

    /**
     * @var string
     *
     * @ORM\Column(name="ANIO", type="string", length=2013, nullable=true)
     */
    private $anio;

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
     * @var \DatosAcademicos
     *
     * @ORM\ManyToOne(targetEntity="DatosAcademicos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PK_DAT_ACADEMICOS", referencedColumnName="PK_DAT_ACADEMICOS")
     * })
     */
    private $pkDatAcademicos;



    /**
     * Get pkOtrasDisc
     *
     * @return integer 
     */
    public function getPkOtrasDisc()
    {
        return $this->pkOtrasDisc;
    }

    /**
     * Set universidad
     *
     * @param string $universidad
     * @return OtrasDisciplinas
     */
    public function setUniversidad($universidad)
    {
        $this->universidad = $universidad;
    
        return $this;
    }

    /**
     * Get universidad
     *
     * @return string 
     */
    public function getUniversidad()
    {
        return $this->universidad;
    }

    /**
     * Set nivel
     *
     * @param string $nivel
     * @return OtrasDisciplinas
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    
        return $this;
    }

    /**
     * Get nivel
     *
     * @return string 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set mension
     *
     * @param string $mension
     * @return OtrasDisciplinas
     */
    public function setMension($mension)
    {
        $this->mension = $mension;
    
        return $this;
    }

    /**
     * Get mension
     *
     * @return string 
     */
    public function getMension()
    {
        return $this->mension;
    }

    /**
     * Set anio
     *
     * @param string $anio
     * @return OtrasDisciplinas
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;
    
        return $this;
    }

    /**
     * Get anio
     *
     * @return string 
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set usuarioAudt
     *
     * @param string $usuarioAudt
     * @return OtrasDisciplinas
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
     * @return OtrasDisciplinas
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
     * @return OtrasDisciplinas
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
     * @return OtrasDisciplinas
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

    /**
     * Set pkDatAcademicos
     *
     * @param \proyectos\hojaVidaBundle\Entity\DatosAcademicos $pkDatAcademicos
     * @return OtrasDisciplinas
     */
    public function setPkDatAcademicos(\proyectos\hojaVidaBundle\Entity\DatosAcademicos $pkDatAcademicos = null)
    {
        $this->pkDatAcademicos = $pkDatAcademicos;
    
        return $this;
    }

    /**
     * Get pkDatAcademicos
     *
     * @return \proyectos\hojaVidaBundle\Entity\DatosAcademicos 
     */
    public function getPkDatAcademicos()
    {
        return $this->pkDatAcademicos;
    }
}