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
     * @var float
     *
     * @ORM\Column(name="TOTAL", type="float", nullable=true)
     */
    private $total;

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
     * Set total
     *
     * @param float $total
     * @return Ingresos
     */
    public function setTotal($total)
    {
        $this->total = $total;
    
        return $this;
    }

    /**
     * Get total
     *
     * @return float 
     */
    public function getTotal()
    {
        return $this->total;
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