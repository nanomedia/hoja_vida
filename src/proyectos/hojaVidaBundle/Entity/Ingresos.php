<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingresos
 *
 * @ORM\Table(name="ingresos")
 * @ORM\Entity
 */
class Ingresos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_INGRESOS", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkIngresos;

    /**
     * @var float
     *
     * @ORM\Column(name="ANO_EJE", type="float", nullable=true)
     */
    private $anoEje;

    /**
     * @var float
     *
     * @ORM\Column(name="REMUNERACION", type="float", nullable=true)
     */
    private $remuneracion;

    /**
     * @var float
     *
     * @ORM\Column(name="DIETAS", type="float", nullable=true)
     */
    private $dietas;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=250, nullable=true)
     */
    private $descripcion;

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
     * Get pkIngresos
     *
     * @return integer 
     */
    public function getPkIngresos()
    {
        return $this->pkIngresos;
    }

    /**
     * Set anoEje
     *
     * @param float $anoEje
     * @return Ingresos
     */
    public function setAnoEje($anoEje)
    {
        $this->anoEje = $anoEje;
    
        return $this;
    }

    /**
     * Get anoEje
     *
     * @return float 
     */
    public function getAnoEje()
    {
        return $this->anoEje;
    }

    /**
     * Set remuneracion
     *
     * @param float $remuneracion
     * @return Ingresos
     */
    public function setRemuneracion($remuneracion)
    {
        $this->remuneracion = $remuneracion;
    
        return $this;
    }

    /**
     * Get remuneracion
     *
     * @return float 
     */
    public function getRemuneracion()
    {
        return $this->remuneracion;
    }

    /**
     * Set dietas
     *
     * @param float $dietas
     * @return Ingresos
     */
    public function setDietas($dietas)
    {
        $this->dietas = $dietas;
    
        return $this;
    }

    /**
     * Get dietas
     *
     * @return float 
     */
    public function getDietas()
    {
        return $this->dietas;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Ingresos
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
     * Set valor
     *
     * @param float $valor
     * @return Ingresos
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
     * @return Ingresos
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
     * @return Ingresos
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
     * @return Ingresos
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
     * @return Ingresos
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