<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LicenciasOtorgadas
 *
 * @ORM\Table(name="licencias_otorgadas")
 * @ORM\Entity
 */
class LicenciasOtorgadas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_LICENCIAS_OTOR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkLicenciasOtor;

    /**
     * @var string
     *
     * @ORM\Column(name="ANIO", type="string", length=4, nullable=true)
     */
    private $anio;

    /**
     * @var string
     *
     * @ORM\Column(name="MOTIVO", type="string", length=100, nullable=true)
     */
    private $motivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="DIAS", type="integer", nullable=true)
     */
    private $dias;

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
     * Get pkLicenciasOtor
     *
     * @return integer 
     */
    public function getPkLicenciasOtor()
    {
        return $this->pkLicenciasOtor;
    }

    /**
     * Set anio
     *
     * @param string $anio
     * @return LicenciasOtorgadas
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;
    
        return $this;
    }

    /**
     * Get anio
     *
     * @return string 
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set motivo
     *
     * @param string $motivo
     * @return LicenciasOtorgadas
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
     * Set dias
     *
     * @param integer $dias
     * @return LicenciasOtorgadas
     */
    public function setDias($dias)
    {
        $this->dias = $dias;
    
        return $this;
    }

    /**
     * Get dias
     *
     * @return integer 
     */
    public function getDias()
    {
        return $this->dias;
    }

    /**
     * Set pkDatPostulante
     *
     * @param \proyectos\hojaVidaBundle\Entity\DatosPostulante $pkDatPostulante
     * @return LicenciasOtorgadas
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