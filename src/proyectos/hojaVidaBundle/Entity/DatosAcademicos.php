<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatosAcademicos
 *
 * @ORM\Table(name="datos_academicos")
 * @ORM\Entity
 */
class DatosAcademicos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_DAT_ACADEMICOS", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkDatAcademicos;

    /**
     * @var string
     *
     * @ORM\Column(name="UNIV_PROCEDENCIA", type="string", length=80, nullable=true)
     */
    private $univProcedencia;

    /**
     * @var string
     *
     * @ORM\Column(name="COLEGIO_PROFESIONAL", type="string", length=80, nullable=true)
     */
    private $colegioProfesional;

    /**
     * @var string
     *
     * @ORM\Column(name="FECHA_INCORPORACION", type="string", length=10, nullable=true)
     */
    private $fechaIncorporacion;

    /**
     * @var string
     *
     * @ORM\Column(name="TITULO_OTROS", type="string", length=100, nullable=true)
     */
    private $tituloOtros;

    /**
     * @var string
     *
     * @ORM\Column(name="TESIS_TITULAR", type="string", length=100, nullable=true)
     */
    private $tesisTitular;

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
     * Get pkDatAcademicos
     *
     * @return integer 
     */
    public function getPkDatAcademicos()
    {
        return $this->pkDatAcademicos;
    }

    /**
     * Set univProcedencia
     *
     * @param string $univProcedencia
     * @return DatosAcademicos
     */
    public function setUnivProcedencia($univProcedencia)
    {
        $this->univProcedencia = $univProcedencia;
    
        return $this;
    }

    /**
     * Get univProcedencia
     *
     * @return string 
     */
    public function getUnivProcedencia()
    {
        return $this->univProcedencia;
    }

    /**
     * Set colegioProfesional
     *
     * @param string $colegioProfesional
     * @return DatosAcademicos
     */
    public function setColegioProfesional($colegioProfesional)
    {
        $this->colegioProfesional = $colegioProfesional;
    
        return $this;
    }

    /**
     * Get colegioProfesional
     *
     * @return string 
     */
    public function getColegioProfesional()
    {
        return $this->colegioProfesional;
    }

    /**
     * Set fechaIncorporacion
     *
     * @param string $fechaIncorporacion
     * @return DatosAcademicos
     */
    public function setFechaIncorporacion($fechaIncorporacion)
    {
        $this->fechaIncorporacion = $fechaIncorporacion;
    
        return $this;
    }

    /**
     * Get fechaIncorporacion
     *
     * @return string 
     */
    public function getFechaIncorporacion()
    {
        return $this->fechaIncorporacion;
    }

    /**
     * Set tituloOtros
     *
     * @param string $tituloOtros
     * @return DatosAcademicos
     */
    public function setTituloOtros($tituloOtros)
    {
        $this->tituloOtros = $tituloOtros;
    
        return $this;
    }

    /**
     * Get tituloOtros
     *
     * @return string 
     */
    public function getTituloOtros()
    {
        return $this->tituloOtros;
    }

    /**
     * Set tesisTitular
     *
     * @param string $tesisTitular
     * @return DatosAcademicos
     */
    public function setTesisTitular($tesisTitular)
    {
        $this->tesisTitular = $tesisTitular;
    
        return $this;
    }

    /**
     * Get tesisTitular
     *
     * @return string 
     */
    public function getTesisTitular()
    {
        return $this->tesisTitular;
    }

    /**
     * Set usuarioAudt
     *
     * @param string $usuarioAudt
     * @return DatosAcademicos
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
     * @return DatosAcademicos
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
     * @return DatosAcademicos
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
     * @return DatosAcademicos
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