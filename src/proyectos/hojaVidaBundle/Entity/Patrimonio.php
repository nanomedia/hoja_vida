<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patrimonio
 *
 * @ORM\Table(name="patrimonio")
 * @ORM\Entity
 */
class Patrimonio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_PATRIMONIO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkPatrimonio;

    /**
     * @var integer
     *
     * @ORM\Column(name="TIPO_PATRIMONIO", type="integer", nullable=true)
     */
    private $tipoPatrimonio;

    /**
     * @var integer
     *
     * @ORM\Column(name="TIPO_BIEN", type="integer", nullable=true)
     */
    private $tipoBien;

    /**
     * @var string
     *
     * @ORM\Column(name="UBICACION", type="string", length=250, nullable=true)
     */
    private $ubicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="FECHA", type="string", length=10, nullable=true)
     */
    private $fecha;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTO", type="float", nullable=true)
     */
    private $monto;

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
     * Get pkPatrimonio
     *
     * @return integer 
     */
    public function getPkPatrimonio()
    {
        return $this->pkPatrimonio;
    }

    /**
     * Set tipoPatrimonio
     *
     * @param integer $tipoPatrimonio
     * @return Patrimonio
     */
    public function setTipoPatrimonio($tipoPatrimonio)
    {
        $this->tipoPatrimonio = $tipoPatrimonio;
    
        return $this;
    }

    /**
     * Get tipoPatrimonio
     *
     * @return integer 
     */
    public function getTipoPatrimonio()
    {
        return $this->tipoPatrimonio;
    }

    /**
     * Set tipoBien
     *
     * @param integer $tipoBien
     * @return Patrimonio
     */
    public function setTipoBien($tipoBien)
    {
        $this->tipoBien = $tipoBien;
    
        return $this;
    }

    /**
     * Get tipoBien
     *
     * @return integer 
     */
    public function getTipoBien()
    {
        return $this->tipoBien;
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     * @return Patrimonio
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
    
        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set fecha
     *
     * @param string $fecha
     * @return Patrimonio
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return string 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set monto
     *
     * @param float $monto
     * @return Patrimonio
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;
    
        return $this;
    }

    /**
     * Get monto
     *
     * @return float 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set pkDatPostulante
     *
     * @param \proyectos\hojaVidaBundle\Entity\DatosPostulante $pkDatPostulante
     * @return Patrimonio
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