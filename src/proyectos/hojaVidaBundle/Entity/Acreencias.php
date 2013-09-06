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