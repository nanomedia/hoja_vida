<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProdJurFiscal
 *
 * @ORM\Table(name="prod_jur_fiscal")
 * @ORM\Entity
 */
class ProdJurFiscal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_PROD_JUR_FISCAL", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkProdJurFiscal;

    /**
     * @var string
     *
     * @ORM\Column(name="RESPUESTA", type="string", length=100, nullable=true)
     */
    private $respuesta;

    /**
     * @var string
     *
     * @ORM\Column(name="DET_RESPUESTA", type="string", length=200, nullable=false)
     */
    private $detRespuesta;

    /**
     * @var integer
     *
     * @ORM\Column(name="PK_EXP_PROFESIONAL", type="integer", nullable=true)
     */
    private $pkExpProfesional;

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
     * Get pkProdJurFiscal
     *
     * @return integer 
     */
    public function getPkProdJurFiscal()
    {
        return $this->pkProdJurFiscal;
    }

    /**
     * Set respuesta
     *
     * @param string $respuesta
     * @return ProdJurFiscal
     */
    public function setRespuesta($respuesta)
    {
        $this->respuesta = $respuesta;
    
        return $this;
    }

    /**
     * Get respuesta
     *
     * @return string 
     */
    public function getRespuesta()
    {
        return $this->respuesta;
    }

    /**
     * Set detRespuesta
     *
     * @param string $detRespuesta
     * @return ProdJurFiscal
     */
    public function setDetRespuesta($detRespuesta)
    {
        $this->detRespuesta = $detRespuesta;
    
        return $this;
    }

    /**
     * Get detRespuesta
     *
     * @return string 
     */
    public function getDetRespuesta()
    {
        return $this->detRespuesta;
    }

    /**
     * Set pkExpProfesional
     *
     * @param integer $pkExpProfesional
     * @return ProdJurFiscal
     */
    public function setPkExpProfesional($pkExpProfesional)
    {
        $this->pkExpProfesional = $pkExpProfesional;
    
        return $this;
    }

    /**
     * Get pkExpProfesional
     *
     * @return integer 
     */
    public function getPkExpProfesional()
    {
        return $this->pkExpProfesional;
    }

    /**
     * Set pkDatPostulante
     *
     * @param \proyectos\hojaVidaBundle\Entity\DatosPostulante $pkDatPostulante
     * @return ProdJurFiscal
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