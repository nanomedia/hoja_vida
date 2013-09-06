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
     * @var integer
     *
     * @ORM\Column(name="ENFERMEDAD", type="integer", nullable=true)
     */
    private $enfermedad;

    /**
     * @var integer
     *
     * @ORM\Column(name="VACACIONES", type="integer", nullable=true)
     */
    private $vacaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="CAPACITACION", type="integer", nullable=true)
     */
    private $capacitacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ONOMASTICO", type="integer", nullable=true)
     */
    private $onomastico;

    /**
     * @var integer
     *
     * @ORM\Column(name="LICENCIA_GOCE", type="integer", nullable=true)
     */
    private $licenciaGoce;

    /**
     * @var integer
     *
     * @ORM\Column(name="MOTIVOS_PERSONALES", type="integer", nullable=true)
     */
    private $motivosPersonales;

    /**
     * @var integer
     *
     * @ORM\Column(name="TOTAL_LICENCIAS", type="integer", nullable=true)
     */
    private $totalLicencias;

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
     * Set enfermedad
     *
     * @param integer $enfermedad
     * @return LicenciasOtorgadas
     */
    public function setEnfermedad($enfermedad)
    {
        $this->enfermedad = $enfermedad;
    
        return $this;
    }

    /**
     * Get enfermedad
     *
     * @return integer 
     */
    public function getEnfermedad()
    {
        return $this->enfermedad;
    }

    /**
     * Set vacaciones
     *
     * @param integer $vacaciones
     * @return LicenciasOtorgadas
     */
    public function setVacaciones($vacaciones)
    {
        $this->vacaciones = $vacaciones;
    
        return $this;
    }

    /**
     * Get vacaciones
     *
     * @return integer 
     */
    public function getVacaciones()
    {
        return $this->vacaciones;
    }

    /**
     * Set capacitacion
     *
     * @param integer $capacitacion
     * @return LicenciasOtorgadas
     */
    public function setCapacitacion($capacitacion)
    {
        $this->capacitacion = $capacitacion;
    
        return $this;
    }

    /**
     * Get capacitacion
     *
     * @return integer 
     */
    public function getCapacitacion()
    {
        return $this->capacitacion;
    }

    /**
     * Set onomastico
     *
     * @param integer $onomastico
     * @return LicenciasOtorgadas
     */
    public function setOnomastico($onomastico)
    {
        $this->onomastico = $onomastico;
    
        return $this;
    }

    /**
     * Get onomastico
     *
     * @return integer 
     */
    public function getOnomastico()
    {
        return $this->onomastico;
    }

    /**
     * Set licenciaGoce
     *
     * @param integer $licenciaGoce
     * @return LicenciasOtorgadas
     */
    public function setLicenciaGoce($licenciaGoce)
    {
        $this->licenciaGoce = $licenciaGoce;
    
        return $this;
    }

    /**
     * Get licenciaGoce
     *
     * @return integer 
     */
    public function getLicenciaGoce()
    {
        return $this->licenciaGoce;
    }

    /**
     * Set motivosPersonales
     *
     * @param integer $motivosPersonales
     * @return LicenciasOtorgadas
     */
    public function setMotivosPersonales($motivosPersonales)
    {
        $this->motivosPersonales = $motivosPersonales;
    
        return $this;
    }

    /**
     * Get motivosPersonales
     *
     * @return integer 
     */
    public function getMotivosPersonales()
    {
        return $this->motivosPersonales;
    }

    /**
     * Set totalLicencias
     *
     * @param integer $totalLicencias
     * @return LicenciasOtorgadas
     */
    public function setTotalLicencias($totalLicencias)
    {
        $this->totalLicencias = $totalLicencias;
    
        return $this;
    }

    /**
     * Get totalLicencias
     *
     * @return integer 
     */
    public function getTotalLicencias()
    {
        return $this->totalLicencias;
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