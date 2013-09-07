<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MovimientoMigratorio
 *
 * @ORM\Table(name="movimiento_migratorio")
 * @ORM\Entity
 */
class MovimientoMigratorio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_MOVIMIENTO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkMovimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="TIPO", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="FECHA", type="string", length=10, nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="DESTINO_PROCEDENCIA", type="string", length=250, nullable=true)
     */
    private $destinoProcedencia;

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
     * Get pkMovimiento
     *
     * @return integer 
     */
    public function getPkMovimiento()
    {
        return $this->pkMovimiento;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return MovimientoMigratorio
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
     * Set fecha
     *
     * @param string $fecha
     * @return MovimientoMigratorio
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
     * Set destinoProcedencia
     *
     * @param string $destinoProcedencia
     * @return MovimientoMigratorio
     */
    public function setDestinoProcedencia($destinoProcedencia)
    {
        $this->destinoProcedencia = $destinoProcedencia;
    
        return $this;
    }

    /**
     * Get destinoProcedencia
     *
     * @return string 
     */
    public function getDestinoProcedencia()
    {
        return $this->destinoProcedencia;
    }

    /**
     * Set pkDatPostulante
     *
     * @param \proyectos\hojaVidaBundle\Entity\DatosPostulante $pkDatPostulante
     * @return MovimientoMigratorio
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