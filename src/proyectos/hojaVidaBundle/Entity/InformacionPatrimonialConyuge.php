<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InformacionPatrimonialConyuge
 *
 * @ORM\Table(name="informacion_patrimonial_conyuge")
 * @ORM\Entity
 */
class InformacionPatrimonialConyuge
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_INFORMACION_PAT_CON", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkInformacionPatCon;

    /**
     * @var integer
     *
     * @ORM\Column(name="ANO_EJE", type="integer", nullable=true)
     */
    private $anoEje;

    /**
     * @var float
     *
     * @ORM\Column(name="INGRESO_ANUAL_PUBLICO", type="float", nullable=true)
     */
    private $ingresoAnualPublico;

    /**
     * @var float
     *
     * @ORM\Column(name="INGRESO_ANUAL_PRIVADO", type="float", nullable=true)
     */
    private $ingresoAnualPrivado;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_INGRESO_ANUAL_PROMEDIO", type="float", nullable=true)
     */
    private $totalIngresoAnualPromedio;

    /**
     * @var float
     *
     * @ORM\Column(name="AHORROS_SISTEMA", type="float", nullable=true)
     */
    private $ahorrosSistema;

    /**
     * @var float
     *
     * @ORM\Column(name="AHORROS_SIN_CUSTODIA", type="float", nullable=true)
     */
    private $ahorrosSinCustodia;

    /**
     * @var float
     *
     * @ORM\Column(name="NRO_PERSONAS", type="float", nullable=true)
     */
    private $nroPersonas;

    /**
     * @var float
     *
     * @ORM\Column(name="ACREENCIAS", type="float", nullable=true)
     */
    private $acreencias;

    /**
     * @var float
     *
     * @ORM\Column(name="INGRESO_ANUAL_CONYUGE", type="float", nullable=true)
     */
    private $ingresoAnualConyuge;

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
     * @var integer
     *
     * @ORM\Column(name="ESTADO_AUDT", type="integer", nullable=true)
     */
    private $estadoAudt;

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
     * Get pkInformacionPatCon
     *
     * @return integer 
     */
    public function getPkInformacionPatCon()
    {
        return $this->pkInformacionPatCon;
    }

    /**
     * Set anoEje
     *
     * @param integer $anoEje
     * @return InformacionPatrimonialConyuge
     */
    public function setAnoEje($anoEje)
    {
        $this->anoEje = $anoEje;
    
        return $this;
    }

    /**
     * Get anoEje
     *
     * @return integer 
     */
    public function getAnoEje()
    {
        return $this->anoEje;
    }

    /**
     * Set ingresoAnualPublico
     *
     * @param float $ingresoAnualPublico
     * @return InformacionPatrimonialConyuge
     */
    public function setIngresoAnualPublico($ingresoAnualPublico)
    {
        $this->ingresoAnualPublico = $ingresoAnualPublico;
    
        return $this;
    }

    /**
     * Get ingresoAnualPublico
     *
     * @return float 
     */
    public function getIngresoAnualPublico()
    {
        return $this->ingresoAnualPublico;
    }

    /**
     * Set ingresoAnualPrivado
     *
     * @param float $ingresoAnualPrivado
     * @return InformacionPatrimonialConyuge
     */
    public function setIngresoAnualPrivado($ingresoAnualPrivado)
    {
        $this->ingresoAnualPrivado = $ingresoAnualPrivado;
    
        return $this;
    }

    /**
     * Get ingresoAnualPrivado
     *
     * @return float 
     */
    public function getIngresoAnualPrivado()
    {
        return $this->ingresoAnualPrivado;
    }

    /**
     * Set totalIngresoAnualPromedio
     *
     * @param float $totalIngresoAnualPromedio
     * @return InformacionPatrimonialConyuge
     */
    public function setTotalIngresoAnualPromedio($totalIngresoAnualPromedio)
    {
        $this->totalIngresoAnualPromedio = $totalIngresoAnualPromedio;
    
        return $this;
    }

    /**
     * Get totalIngresoAnualPromedio
     *
     * @return float 
     */
    public function getTotalIngresoAnualPromedio()
    {
        return $this->totalIngresoAnualPromedio;
    }

    /**
     * Set ahorrosSistema
     *
     * @param float $ahorrosSistema
     * @return InformacionPatrimonialConyuge
     */
    public function setAhorrosSistema($ahorrosSistema)
    {
        $this->ahorrosSistema = $ahorrosSistema;
    
        return $this;
    }

    /**
     * Get ahorrosSistema
     *
     * @return float 
     */
    public function getAhorrosSistema()
    {
        return $this->ahorrosSistema;
    }

    /**
     * Set ahorrosSinCustodia
     *
     * @param float $ahorrosSinCustodia
     * @return InformacionPatrimonialConyuge
     */
    public function setAhorrosSinCustodia($ahorrosSinCustodia)
    {
        $this->ahorrosSinCustodia = $ahorrosSinCustodia;
    
        return $this;
    }

    /**
     * Get ahorrosSinCustodia
     *
     * @return float 
     */
    public function getAhorrosSinCustodia()
    {
        return $this->ahorrosSinCustodia;
    }

    /**
     * Set nroPersonas
     *
     * @param float $nroPersonas
     * @return InformacionPatrimonialConyuge
     */
    public function setNroPersonas($nroPersonas)
    {
        $this->nroPersonas = $nroPersonas;
    
        return $this;
    }

    /**
     * Get nroPersonas
     *
     * @return float 
     */
    public function getNroPersonas()
    {
        return $this->nroPersonas;
    }

    /**
     * Set acreencias
     *
     * @param float $acreencias
     * @return InformacionPatrimonialConyuge
     */
    public function setAcreencias($acreencias)
    {
        $this->acreencias = $acreencias;
    
        return $this;
    }

    /**
     * Get acreencias
     *
     * @return float 
     */
    public function getAcreencias()
    {
        return $this->acreencias;
    }

    /**
     * Set ingresoAnualConyuge
     *
     * @param float $ingresoAnualConyuge
     * @return InformacionPatrimonialConyuge
     */
    public function setIngresoAnualConyuge($ingresoAnualConyuge)
    {
        $this->ingresoAnualConyuge = $ingresoAnualConyuge;
    
        return $this;
    }

    /**
     * Get ingresoAnualConyuge
     *
     * @return float 
     */
    public function getIngresoAnualConyuge()
    {
        return $this->ingresoAnualConyuge;
    }

    /**
     * Set usuarioAudt
     *
     * @param string $usuarioAudt
     * @return InformacionPatrimonialConyuge
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
     * @return InformacionPatrimonialConyuge
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
     * @return InformacionPatrimonialConyuge
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
     * Set estadoAudt
     *
     * @param integer $estadoAudt
     * @return InformacionPatrimonialConyuge
     */
    public function setEstadoAudt($estadoAudt)
    {
        $this->estadoAudt = $estadoAudt;
    
        return $this;
    }

    /**
     * Get estadoAudt
     *
     * @return integer 
     */
    public function getEstadoAudt()
    {
        return $this->estadoAudt;
    }

    /**
     * Set pkDatPostulante
     *
     * @param \proyectos\hojaVidaBundle\Entity\DatosPostulante $pkDatPostulante
     * @return InformacionPatrimonialConyuge
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