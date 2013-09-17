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
     * Set usuarioAudt
     *
     * @param string $usuarioAudt
     * @return ProdJurFiscal
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
     * @return ProdJurFiscal
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
     * @return ProdJurFiscal
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