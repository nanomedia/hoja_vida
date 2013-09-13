<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetSituacionLaboral
 *
 * @ORM\Table(name="det_situacion_laboral")
 * @ORM\Entity
 */
class DetSituacionLaboral
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_SIT_LABORAL", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkSitLaboral;

    /**
     * @var string
     *
     * @ORM\Column(name="CENTRO_TRABAJO", type="string", length=50, nullable=true)
     */
    private $centroTrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="CARGO", type="string", length=50, nullable=true)
     */
    private $cargo;

    /**
     * @var string
     *
     * @ORM\Column(name="PERIODO", type="string", length=50, nullable=true)
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="SITUACION_LABORAL", type="string", length=50, nullable=false)
     */
    private $situacionLaboral;

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
     * Get pkSitLaboral
     *
     * @return integer 
     */
    public function getPkSitLaboral()
    {
        return $this->pkSitLaboral;
    }

    /**
     * Set centroTrabajo
     *
     * @param string $centroTrabajo
     * @return DetSituacionLaboral
     */
    public function setCentroTrabajo($centroTrabajo)
    {
        $this->centroTrabajo = $centroTrabajo;
    
        return $this;
    }

    /**
     * Get centroTrabajo
     *
     * @return string 
     */
    public function getCentroTrabajo()
    {
        return $this->centroTrabajo;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     * @return DetSituacionLaboral
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
     * Set periodo
     *
     * @param string $periodo
     * @return DetSituacionLaboral
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;
    
        return $this;
    }

    /**
     * Get periodo
     *
     * @return string 
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set situacionLaboral
     *
     * @param string $situacionLaboral
     * @return DetSituacionLaboral
     */
    public function setSituacionLaboral($situacionLaboral)
    {
        $this->situacionLaboral = $situacionLaboral;
    
        return $this;
    }

    /**
     * Get situacionLaboral
     *
     * @return string 
     */
    public function getSituacionLaboral()
    {
        return $this->situacionLaboral;
    }

    /**
     * Set usuarioAudt
     *
     * @param string $usuarioAudt
     * @return DetSituacionLaboral
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
     * @return DetSituacionLaboral
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
     * @return DetSituacionLaboral
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
     * @return DetSituacionLaboral
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