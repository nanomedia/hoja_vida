<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagistradoRatificado
 *
 * @ORM\Table(name="magistrado_ratificado")
 * @ORM\Entity
 */
class MagistradoRatificado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_EXP_MAG_RAT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkExpMagRat;

    /**
     * @var string
     *
     * @ORM\Column(name="RESPUESTA1", type="string", length=2, nullable=true)
     */
    private $respuesta1;

    /**
     * @var string
     *
     * @ORM\Column(name="RESPUESTA2", type="string", length=30, nullable=true)
     */
    private $respuesta2;

    /**
     * @var string
     *
     * @ORM\Column(name="RESOLUCION", type="string", length=30, nullable=true)
     */
    private $resolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="FECHA_RES", type="string", length=10, nullable=true)
     */
    private $fechaRes;

    /**
     * @var string
     *
     * @ORM\Column(name="RESPUESTA3", type="string", length=30, nullable=true)
     */
    private $respuesta3;

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
     * Get pkExpMagRat
     *
     * @return integer 
     */
    public function getPkExpMagRat()
    {
        return $this->pkExpMagRat;
    }

    /**
     * Set respuesta1
     *
     * @param string $respuesta1
     * @return MagistradoRatificado
     */
    public function setRespuesta1($respuesta1)
    {
        $this->respuesta1 = $respuesta1;
    
        return $this;
    }

    /**
     * Get respuesta1
     *
     * @return string 
     */
    public function getRespuesta1()
    {
        return $this->respuesta1;
    }

    /**
     * Set respuesta2
     *
     * @param string $respuesta2
     * @return MagistradoRatificado
     */
    public function setRespuesta2($respuesta2)
    {
        $this->respuesta2 = $respuesta2;
    
        return $this;
    }

    /**
     * Get respuesta2
     *
     * @return string 
     */
    public function getRespuesta2()
    {
        return $this->respuesta2;
    }

    /**
     * Set resolucion
     *
     * @param string $resolucion
     * @return MagistradoRatificado
     */
    public function setResolucion($resolucion)
    {
        $this->resolucion = $resolucion;
    
        return $this;
    }

    /**
     * Get resolucion
     *
     * @return string 
     */
    public function getResolucion()
    {
        return $this->resolucion;
    }

    /**
     * Set fechaRes
     *
     * @param string $fechaRes
     * @return MagistradoRatificado
     */
    public function setFechaRes($fechaRes)
    {
        $this->fechaRes = $fechaRes;
    
        return $this;
    }

    /**
     * Get fechaRes
     *
     * @return string 
     */
    public function getFechaRes()
    {
        return $this->fechaRes;
    }

    /**
     * Set respuesta3
     *
     * @param string $respuesta3
     * @return MagistradoRatificado
     */
    public function setRespuesta3($respuesta3)
    {
        $this->respuesta3 = $respuesta3;
    
        return $this;
    }

    /**
     * Get respuesta3
     *
     * @return string 
     */
    public function getRespuesta3()
    {
        return $this->respuesta3;
    }

    /**
     * Set pkDatPostulante
     *
     * @param \proyectos\hojaVidaBundle\Entity\DatosPostulante $pkDatPostulante
     * @return MagistradoRatificado
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