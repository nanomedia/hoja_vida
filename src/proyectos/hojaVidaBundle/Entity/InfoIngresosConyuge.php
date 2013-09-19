<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoIngresosConyuge
 *
 * @ORM\Table(name="info_ingresos_conyuge")
 * @ORM\Entity
 */
class InfoIngresosConyuge
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_PAT_CONYUGE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkPatConyuge;

    /**
     * @var integer
     *
     * @ORM\Column(name="ANO_EJE", type="integer", nullable=true)
     */
    private $anoEje;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=250, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="INGRESO_MENSUAL_PROMEDIO", type="string", length=250, nullable=true)
     */
    private $ingresoMensualPromedio;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPENDENCIA", type="string", length=250, nullable=true)
     */
    private $dependencia;

    /**
     * @var string
     *
     * @ORM\Column(name="CARGO", type="string", length=250, nullable=true)
     */
    private $cargo;

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
     * Get pkPatConyuge
     *
     * @return integer 
     */
    public function getPkPatConyuge()
    {
        return $this->pkPatConyuge;
    }

    /**
     * Set anoEje
     *
     * @param integer $anoEje
     * @return InfoIngresosConyuge
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
     * Set nombre
     *
     * @param string $nombre
     * @return InfoIngresosConyuge
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set ingresoMensualPromedio
     *
     * @param string $ingresoMensualPromedio
     * @return InfoIngresosConyuge
     */
    public function setIngresoMensualPromedio($ingresoMensualPromedio)
    {
        $this->ingresoMensualPromedio = $ingresoMensualPromedio;
    
        return $this;
    }

    /**
     * Get ingresoMensualPromedio
     *
     * @return string 
     */
    public function getIngresoMensualPromedio()
    {
        return $this->ingresoMensualPromedio;
    }

    /**
     * Set dependencia
     *
     * @param string $dependencia
     * @return InfoIngresosConyuge
     */
    public function setDependencia($dependencia)
    {
        $this->dependencia = $dependencia;
    
        return $this;
    }

    /**
     * Get dependencia
     *
     * @return string 
     */
    public function getDependencia()
    {
        return $this->dependencia;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     * @return InfoIngresosConyuge
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    
        return $this;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set usuarioAudt
     *
     * @param string $usuarioAudt
     * @return InfoIngresosConyuge
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
     * @return InfoIngresosConyuge
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
     * @return InfoIngresosConyuge
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
     * @return InfoIngresosConyuge
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
     * @return InfoIngresosConyuge
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