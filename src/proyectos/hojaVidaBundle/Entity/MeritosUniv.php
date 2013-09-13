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
     * Set usuarioAudt
     *
     * @param string $usuarioAudt
     * @return MeritosUniv
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
     * @return MeritosUniv
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
     * @return MeritosUniv
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