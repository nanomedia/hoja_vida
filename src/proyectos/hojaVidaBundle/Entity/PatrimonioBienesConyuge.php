<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PatrimonioBienesConyuge
 *
 * @ORM\Table(name="patrimonio_bienes_conyuge")
 * @ORM\Entity
 */
class PatrimonioBienesConyuge
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_PAT_BIENES_CONYUGE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkPatBienesConyuge;

    /**
     * @var integer
     *
     * @ORM\Column(name="TIPO", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=250, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="FECHA_MODO", type="string", length=250, nullable=true)
     */
    private $fechaModo;

    /**
     * @var float
     *
     * @ORM\Column(name="ULT_VALOR", type="float", nullable=true)
     */
    private $ultValor;

    /**
     * @var string
     *
     * @ORM\Column(name="DATOS_REG_PUBLICOS", type="string", length=250, nullable=true)
     */
    private $datosRegPublicos;

    /**
     * @var string
     *
     * @ORM\Column(name="FECHA_MODO_TRANSFERENCIA", type="string", length=250, nullable=true)
     */
    private $fechaModoTransferencia;

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
     * Get pkPatBienesConyuge
     *
     * @return integer 
     */
    public function getPkPatBienesConyuge()
    {
        return $this->pkPatBienesConyuge;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return PatrimonioBienesConyuge
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return PatrimonioBienesConyuge
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
     * Set fechaModo
     *
     * @param string $fechaModo
     * @return PatrimonioBienesConyuge
     */
    public function setFechaModo($fechaModo)
    {
        $this->fechaModo = $fechaModo;
    
        return $this;
    }

    /**
     * Get fechaModo
     *
     * @return string 
     */
    public function getFechaModo()
    {
        return $this->fechaModo;
    }

    /**
     * Set ultValor
     *
     * @param float $ultValor
     * @return PatrimonioBienesConyuge
     */
    public function setUltValor($ultValor)
    {
        $this->ultValor = $ultValor;
    
        return $this;
    }

    /**
     * Get ultValor
     *
     * @return float 
     */
    public function getUltValor()
    {
        return $this->ultValor;
    }

    /**
     * Set datosRegPublicos
     *
     * @param string $datosRegPublicos
     * @return PatrimonioBienesConyuge
     */
    public function setDatosRegPublicos($datosRegPublicos)
    {
        $this->datosRegPublicos = $datosRegPublicos;
    
        return $this;
    }

    /**
     * Get datosRegPublicos
     *
     * @return string 
     */
    public function getDatosRegPublicos()
    {
        return $this->datosRegPublicos;
    }

    /**
     * Set fechaModoTransferencia
     *
     * @param string $fechaModoTransferencia
     * @return PatrimonioBienesConyuge
     */
    public function setFechaModoTransferencia($fechaModoTransferencia)
    {
        $this->fechaModoTransferencia = $fechaModoTransferencia;
    
        return $this;
    }

    /**
     * Get fechaModoTransferencia
     *
     * @return string 
     */
    public function getFechaModoTransferencia()
    {
        return $this->fechaModoTransferencia;
    }

    /**
     * Set pkDatPostulante
     *
     * @param \proyectos\hojaVidaBundle\Entity\DatosPostulante $pkDatPostulante
     * @return PatrimonioBienesConyuge
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