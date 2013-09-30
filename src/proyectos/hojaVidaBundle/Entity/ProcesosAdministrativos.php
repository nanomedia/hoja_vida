<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProcesosAdministrativos
 *
 * @ORM\Table(name="procesos_administrativos")
 * @ORM\Entity
 */
class ProcesosAdministrativos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_PROCESOS_ADM", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkProcesosAdm;

    /**
     * @var integer
     *
     * @ORM\Column(name="TIPO", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_INSTITUCION", type="string", length=350, nullable=true)
     */
    private $idInstitucion;

    /**
     * @var string
     *
     * @ORM\Column(name="RESOLUCION", type="string", length=250, nullable=true)
     */
    private $resolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="SANCION", type="string", length=250, nullable=true)
     */
    private $sancion;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADO", type="string", length=250, nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="EXPEDIENTE", type="string", length=250, nullable=true)
     */
    private $expediente;

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
     * Get pkProcesosAdm
     *
     * @return integer 
     */
    public function getPkProcesosAdm()
    {
        return $this->pkProcesosAdm;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return ProcesosAdministrativos
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
     * @param string $idInstitucion
     * @return ProcesosAdministrativos
     */
    public function setIdInstitucion($idInstitucion)
    {
        $this->idInstitucion = $idInstitucion;
    
        return $this;
    }

    /**
     * Get idInstitucion
     *
     * @return string 
     */
    public function getIdInstitucion()
    {
        return $this->idInstitucion;
    }

    /**
     * Set resolucion
     *
     * @param string $resolucion
     * @return ProcesosAdministrativos
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
     * Set sancion
     *
     * @param string $sancion
     * @return ProcesosAdministrativos
     */
    public function setSancion($sancion)
    {
        $this->sancion = $sancion;
    
        return $this;
    }

    /**
     * Get sancion
     *
     * @return string 
     */
    public function getSancion()
    {
        return $this->sancion;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return ProcesosAdministrativos
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set expediente
     *
     * @param string $expediente
     * @return ProcesosAdministrativos
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
     * Set usuarioAudt
     *
     * @param string $usuarioAudt
     * @return ProcesosAdministrativos
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
     * @return ProcesosAdministrativos
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
     * @return ProcesosAdministrativos
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
     * @return ProcesosAdministrativos
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
     * @return ProcesosAdministrativos
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