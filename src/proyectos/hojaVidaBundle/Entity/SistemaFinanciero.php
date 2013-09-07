<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SistemaFinanciero
 *
 * @ORM\Table(name="sistema_financiero")
 * @ORM\Entity
 */
class SistemaFinanciero
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_SISTEMA_FINANCIERO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkSistemaFinanciero;

    /**
     * @var string
     *
     * @ORM\Column(name="CLASE", type="string", length=250, nullable=true)
     */
    private $clase;

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
     * Get pkSistemaFinanciero
     *
     * @return integer 
     */
    public function getPkSistemaFinanciero()
    {
        return $this->pkSistemaFinanciero;
    }

    /**
     * Set clase
     *
     * @param string $clase
     * @return SistemaFinanciero
     */
    public function setClase($clase)
    {
        $this->clase = $clase;
    
        return $this;
    }

    /**
     * Get clase
     *
     * @return string 
     */
    public function getClase()
    {
        return $this->clase;
    }

    /**
     * Set entidad
     *
     * @param string $entidad
     * @return SistemaFinanciero
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
     * @return SistemaFinanciero
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
     * @return SistemaFinanciero
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