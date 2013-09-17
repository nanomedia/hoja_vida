<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProcesosEnMinPub
 *
 * @ORM\Table(name="procesos_en_min_pub")
 * @ORM\Entity
 */
class ProcesosEnMinPub
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_PROCESOS_PODER_JUD", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkProcesosPoderJud;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESTADO", type="integer", nullable=true)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="TIPO", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_INSTITUCION", type="integer", nullable=true)
     */
    private $idInstitucion;

    /**
     * @var string
     *
     * @ORM\Column(name="EXPEDIENTE", type="string", length=250, nullable=true)
     */
    private $expediente;

    /**
     * @var string
     *
     * @ORM\Column(name="QUEJAS", type="string", length=250, nullable=true)
     */
    private $quejas;

    /**
     * @var string
     *
     * @ORM\Column(name="MOTIVO", type="string", length=250, nullable=true)
     */
    private $motivo;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADO_PROC", type="string", length=250, nullable=true)
     */
    private $estadoProc;

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
     * Get pkProcesosPoderJud
     *
     * @return integer 
     */
    public function getPkProcesosPoderJud()
    {
        return $this->pkProcesosPoderJud;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return ProcesosEnMinPub
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return ProcesosEnMinPub
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
     * Set idInstitucion
     *
     * @param integer $idInstitucion
     * @return ProcesosEnMinPub
     */
    public function setIdInstitucion($idInstitucion)
    {
        $this->idInstitucion = $idInstitucion;
    
        return $this;
    }

    /**
     * Get idInstitucion
     *
     * @return integer 
     */
    public function getIdInstitucion()
    {
        return $this->idInstitucion;
    }

    /**
     * Set expediente
     *
     * @param string $expediente
     * @return ProcesosEnMinPub
     */
    public function setExpediente($expediente)
    {
        $this->expediente = $expediente;
    
        return $this;
    }

    /**
     * Get expediente
     *
     * @return string 
     */
    public function getExpediente()
    {
        return $this->expediente;
    }

    /**
     * Set quejas
     *
     * @param string $quejas
     * @return ProcesosEnMinPub
     */
    public function setQuejas($quejas)
    {
        $this->quejas = $quejas;
    
        return $this;
    }

    /**
     * Get quejas
     *
     * @return string 
     */
    public function getQuejas()
    {
        return $this->quejas;
    }

    /**
     * Set motivo
     *
     * @param string $motivo
     * @return ProcesosEnMinPub
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;
    
        return $this;
    }

    /**
     * Get motivo
     *
     * @return string 
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set estadoProc
     *
     * @param string $estadoProc
     * @return ProcesosEnMinPub
     */
    public function setEstadoProc($estadoProc)
    {
        $this->estadoProc = $estadoProc;
    
        return $this;
    }

    /**
     * Get estadoProc
     *
     * @return string 
     */
    public function getEstadoProc()
    {
        return $this->estadoProc;
    }

    /**
     * Set usuarioAudt
     *
     * @param string $usuarioAudt
     * @return ProcesosEnMinPub
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
     * @return ProcesosEnMinPub
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
     * @return ProcesosEnMinPub
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
     * @return ProcesosEnMinPub
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