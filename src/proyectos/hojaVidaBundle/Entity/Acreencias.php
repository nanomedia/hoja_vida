<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acreencias
 *
 * @ORM\Table(name="acreencias")
 * @ORM\Entity
 */
class Acreencias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_ACREENCIAS", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkAcreencias;

    /**
     * @var string
     *
     * @ORM\Column(name="NATURALEZA", type="string", length=250, nullable=true)
     */
    private $naturaleza;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTIDAD", type="string", length=250, nullable=true)
     */
    private $entidad;

    /**
     * @var float
     *
     * @ORM\Column(name="VALOR", type="float", nullable=true)
     */
    private $valor;

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
     * @var \DatosPostulante
     *
     * @ORM\ManyToOne(targetEntity="DatosPostulante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PK_DAT_POSTULANTE", referencedColumnName="PK_DAT_POSTULANTE")
     * })
     */
    private $pkDatPostulante;



    /**
     * Get pkAcreencias
     *
     * @return integer 
     */
    public function getPkAcreencias()
    {
        return $this->pkAcreencias;
    }

    /**
     * Set naturaleza
     *
     * @param string $naturaleza
     * @return Acreencias
     */
    public function setNaturaleza($naturaleza)
    {
        $this->naturaleza = $naturaleza;
    
        return $this;
    }

    /**
     * Get naturaleza
     *
     * @return string 
     */
    public function getNaturaleza()
    {
        return $this->naturaleza;
    }

    /**
     * Set entidad
     *
     * @param string $entidad
     * @return Acreencias
     */
    public function setEntidad($entidad)
    {
        $this->entidad = $entidad;
    
        return $this;
    }

    /**
     * Get entidad
     *
     * @return string 
     */
    public function getEntidad()
    {
        return $this->entidad;
    }

    /**
     * Set valor
     *
     * @param float $valor
     * @return Acreencias
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    
        return $this;
    }

    /**
     * Get valor
     *
     * @return float 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set usuarioAudt
     *
     * @param string $usuarioAudt
     * @return Acreencias
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
     * @return Acreencias
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
     * @return Acreencias
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
     * Set pkDatPostulante
     *
     * @param \proyectos\hojaVidaBundle\Entity\DatosPostulante $pkDatPostulante
     * @return Acreencias
     */
    public function setPkDatPostulante(\proyectos\hojaVidaBundle\Entity\DatosPostulante $pkDatPostulante = null)
    {
        $this->pkDatPostulante = $pkDatPostulante;
    
        return $this;
    }

    /**
     * Get pkDatPostulante
     *
     * @return \proyectos\hojaVidaBundle\Entity\DatosPostulante 
     */
    public function getPkDatPostulante()
    {
        return $this->pkDatPostulante;
    }
}