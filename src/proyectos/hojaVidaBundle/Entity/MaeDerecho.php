<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MaeDerecho
 *
 * @ORM\Table(name="mae_derecho")
 * @ORM\Entity
 */
class MaeDerecho
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_MAE_DERECHO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkMaeDerecho;

    /**
     * @var string
     *
     * @ORM\Column(name="UNIVERSIDAD", type="string", length=80, nullable=true)
     */
    private $universidad;

    /**
     * @var string
     *
     * @ORM\Column(name="NIVEL", type="string", length=20, nullable=true)
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="MENSION", type="string", length=100, nullable=true)
     */
    private $mension;

    /**
     * @var string
     *
     * @ORM\Column(name="ANIO", type="string", length=2013, nullable=true)
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
     * Get pkMaeDerecho
     *
     * @return integer 
     */
    public function getPkMaeDerecho()
    {
        return $this->pkMaeDerecho;
    }

    /**
     * Set universidad
     *
     * @param string $universidad
     * @return MaeDerecho
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
     * Set nivel
     *
     * @param string $nivel
     * @return MaeDerecho
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    
        return $this;
    }

    /**
     * Get nivel
     *
     * @return string 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set mension
     *
     * @param string $mension
     * @return MaeDerecho
     */
    public function setMension($mension)
    {
        $this->mension = $mension;
    
        return $this;
    }

    /**
     * Get mension
     *
     * @return string 
     */
    public function getMension()
    {
        return $this->mension;
    }

    /**
     * Set anio
     *
     * @param string $anio
     * @return MaeDerecho
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
     * @return MaeDerecho
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