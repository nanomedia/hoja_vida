<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoPatConyugePersonal
 *
 * @ORM\Table(name="info_pat_conyuge_personal")
 * @ORM\Entity
 */
class InfoPatConyugePersonal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_PAT_CON_PERSONAL", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkPatConPersonal;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=250, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="OCUPACION", type="string", length=250, nullable=true)
     */
    private $ocupacion;

    /**
     * @var string
     *
     * @ORM\Column(name="REGIMEN", type="string", length=250, nullable=true)
     */
    private $regimen;

    /**
     * @var float
     *
     * @ORM\Column(name="NRO_DEPENDIENTES", type="float", nullable=true)
     */
    private $nroDependientes;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACION", type="string", length=250, nullable=true)
     */
    private $observacion;

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
     * Get pkPatConPersonal
     *
     * @return integer 
     */
    public function getPkPatConPersonal()
    {
        return $this->pkPatConPersonal;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return InfoPatConyugePersonal
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
     * Set ocupacion
     *
     * @param string $ocupacion
     * @return InfoPatConyugePersonal
     */
    public function setOcupacion($ocupacion)
    {
        $this->ocupacion = $ocupacion;
    
        return $this;
    }

    /**
     * Get ocupacion
     *
     * @return string 
     */
    public function getOcupacion()
    {
        return $this->ocupacion;
    }

    /**
     * Set regimen
     *
     * @param string $regimen
     * @return InfoPatConyugePersonal
     */
    public function setRegimen($regimen)
    {
        $this->regimen = $regimen;
    
        return $this;
    }

    /**
     * Get regimen
     *
     * @return string 
     */
    public function getRegimen()
    {
        return $this->regimen;
    }

    /**
     * Set nroDependientes
     *
     * @param float $nroDependientes
     * @return InfoPatConyugePersonal
     */
    public function setNroDependientes($nroDependientes)
    {
        $this->nroDependientes = $nroDependientes;
    
        return $this;
    }

    /**
     * Get nroDependientes
     *
     * @return float 
     */
    public function getNroDependientes()
    {
        return $this->nroDependientes;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return InfoPatConyugePersonal
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;
    
        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set usuarioAudt
     *
     * @param string $usuarioAudt
     * @return InfoPatConyugePersonal
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
     * @return InfoPatConyugePersonal
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
     * @return InfoPatConyugePersonal
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
     * @return InfoPatConyugePersonal
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