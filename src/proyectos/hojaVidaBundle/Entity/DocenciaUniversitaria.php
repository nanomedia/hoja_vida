<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocenciaUniversitaria
 *
 * @ORM\Table(name="docencia_universitaria")
 * @ORM\Entity
 */
class DocenciaUniversitaria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_DOC_UNIVERSITARIA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkDocUniversitaria;

    /**
     * @var string
     *
     * @ORM\Column(name="UNIVERSIDAD", type="string", length=50, nullable=true)
     */
    private $universidad;

    /**
     * @var string
     *
     * @ORM\Column(name="FACULTAD", type="string", length=50, nullable=true)
     */
    private $facultad;

    /**
     * @var string
     *
     * @ORM\Column(name="CONDICION", type="string", length=50, nullable=true)
     */
    private $condicion;

    /**
     * @var string
     *
     * @ORM\Column(name="CATEGORIA", type="string", length=50, nullable=true)
     */
    private $categoria;

    /**
     * @var string
     *
     * @ORM\Column(name="CURSOS", type="string", length=50, nullable=true)
     */
    private $cursos;

    /**
     * @var string
     *
     * @ORM\Column(name="PERIODO", type="string", length=50, nullable=true)
     */
    private $periodo;

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
     * Get pkDocUniversitaria
     *
     * @return integer 
     */
    public function getPkDocUniversitaria()
    {
        return $this->pkDocUniversitaria;
    }

    /**
     * Set universidad
     *
     * @param string $universidad
     * @return DocenciaUniversitaria
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
     * Set facultad
     *
     * @param string $facultad
     * @return DocenciaUniversitaria
     */
    public function setFacultad($facultad)
    {
        $this->facultad = $facultad;
    
        return $this;
    }

    /**
     * Get facultad
     *
     * @return string 
     */
    public function getFacultad()
    {
        return $this->facultad;
    }

    /**
     * Set condicion
     *
     * @param string $condicion
     * @return DocenciaUniversitaria
     */
    public function setCondicion($condicion)
    {
        $this->condicion = $condicion;
    
        return $this;
    }

    /**
     * Get condicion
     *
     * @return string 
     */
    public function getCondicion()
    {
        return $this->condicion;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     * @return DocenciaUniversitaria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    
        return $this;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set cursos
     *
     * @param string $cursos
     * @return DocenciaUniversitaria
     */
    public function setCursos($cursos)
    {
        $this->cursos = $cursos;
    
        return $this;
    }

    /**
     * Get cursos
     *
     * @return string 
     */
    public function getCursos()
    {
        return $this->cursos;
    }

    /**
     * Set periodo
     *
     * @param string $periodo
     * @return DocenciaUniversitaria
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
     * Set usuarioAudt
     *
     * @param string $usuarioAudt
     * @return DocenciaUniversitaria
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
     * @return DocenciaUniversitaria
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
     * @return DocenciaUniversitaria
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
     * @return DocenciaUniversitaria
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
     * @return DocenciaUniversitaria
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