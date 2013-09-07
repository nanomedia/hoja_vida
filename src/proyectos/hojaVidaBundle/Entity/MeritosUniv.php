<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MeritosUniv
 *
 * @ORM\Table(name="meritos_univ")
 * @ORM\Entity
 */
class MeritosUniv
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_MERITOS_UNIV_DET", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkMeritosUnivDet;

    /**
     * @var string
     *
     * @ORM\Column(name="PUESTO", type="string", length=20, nullable=true)
     */
    private $puesto;

    /**
     * @var string
     *
     * @ORM\Column(name="UNIVERSIDAD", type="string", length=80, nullable=true)
     */
    private $universidad;

    /**
     * @var string
     *
     * @ORM\Column(name="ANIO", type="string", length=4, nullable=true)
     */
    private $anio;

    /**
     * @var \DatosAcademicos
     *
     * @ORM\ManyToOne(targetEntity="DatosAcademicos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PK_DAT_ACADEMICOS", referencedColumnName="PK_DAT_ACADEMICOS")
     * })
     */
    private $pkDatAcademicos;



    /**
     * Get pkMeritosUnivDet
     *
     * @return integer 
     */
    public function getPkMeritosUnivDet()
    {
        return $this->pkMeritosUnivDet;
    }

    /**
     * Set puesto
     *
     * @param string $puesto
     * @return MeritosUniv
     */
    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;
    
        return $this;
    }

    /**
     * Get puesto
     *
     * @return string 
     */
    public function getPuesto()
    {
        return $this->puesto;
    }

    /**
     * Set universidad
     *
     * @param string $universidad
     * @return MeritosUniv
     */
    public function setUniversidad($universidad)
    {
        $this->universidad = $universidad;
    
        return $this;
    }

    /**
     * Get universidad
     *
     * @return string 
     */
    public function getUniversidad()
    {
        return $this->universidad;
    }

    /**
     * Set anio
     *
     * @param string $anio
     * @return MeritosUniv
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
     * Set pkDatAcademicos
     *
     * @param \proyectos\hojaVidaBundle\Entity\DatosAcademicos $pkDatAcademicos
     * @return MeritosUniv
     */
    public function setPkDatAcademicos(\proyectos\hojaVidaBundle\Entity\DatosAcademicos $pkDatAcademicos = null)
    {
        $this->pkDatAcademicos = $pkDatAcademicos;
    
        return $this;
    }

    /**
     * Get pkDatAcademicos
     *
     * @return \proyectos\hojaVidaBundle\Entity\DatosAcademicos 
     */
    public function getPkDatAcademicos()
    {
        return $this->pkDatAcademicos;
    }
}