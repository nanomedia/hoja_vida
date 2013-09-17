<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProcesosJudiciales
 *
 * @ORM\Table(name="procesos_judiciales")
 * @ORM\Entity
 */
class ProcesosJudiciales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_PROCESOS_JUD", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkProcesosJud;

    /**
     * @var integer
     *
     * @ORM\Column(name="TIPO", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="EXPEDIENTE", type="string", length=250, nullable=true)
     */
    private $expediente;

    /**
     * @var string
     *
     * @ORM\Column(name="ORGANO", type="string", length=250, nullable=true)
     */
    private $organo;

    /**
     * @var string
     *
     * @ORM\Column(name="DEMANDADO_AGRESOR", type="string", length=250, nullable=true)
     */
    private $demandadoAgresor;

    /**
     * @var string
     *
     * @ORM\Column(name="MATERIA", type="string", length=250, nullable=true)
     */
    private $materia;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADO", type="string", length=250, nullable=true)
     */
    private $estado;

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
     * Get pkProcesosJud
     *
     * @return integer 
     */
    public function getPkProcesosJud()
    {
        return $this->pkProcesosJud;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return ProcesosJudiciales
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
     * Set expediente
     *
     * @param string $expediente
     * @return ProcesosJudiciales
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
     * Set organo
     *
     * @param string $organo
     * @return ProcesosJudiciales
     */
    public function setOrgano($organo)
    {
        $this->organo = $organo;
    
        return $this;
    }

    /**
     * Get organo
     *
     * @return string 
     */
    public function getOrgano()
    {
        return $this->organo;
    }

    /**
     * Set demandadoAgresor
     *
     * @param string $demandadoAgresor
     * @return ProcesosJudiciales
     */
    public function setDemandadoAgresor($demandadoAgresor)
    {
        $this->demandadoAgresor = $demandadoAgresor;
    
        return $this;
    }

    /**
     * Get demandadoAgresor
     *
     * @return string 
     */
    public function getDemandadoAgresor()
    {
        return $this->demandadoAgresor;
    }

    /**
     * Set materia
     *
     * @param string $materia
     * @return ProcesosJudiciales
     */
    public function setMateria($materia)
    {
        $this->materia = $materia;
    
        return $this;
    }

    /**
     * Get materia
     *
     * @return string 
     */
    public function getMateria()
    {
        return $this->materia;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return ProcesosJudiciales
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
     * Set usuarioAudt
     *
     * @param string $usuarioAudt
     * @return ProcesosJudiciales
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
     * @return ProcesosJudiciales
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
     * @return ProcesosJudiciales
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
     * @return ProcesosJudiciales
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