<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatosPostulante
 *
 * @ORM\Table(name="datos_postulante")
 * @ORM\Entity
 */
class DatosPostulante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_DAT_POSTULANTE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkDatPostulante;

    /**
     * @var integer
     *
     * @ORM\Column(name="PK_SUSUARIO", type="integer", nullable=true)
     */
    private $pkSusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="CARGO_A_POSTULAR", type="string", length=100, nullable=true)
     */
    private $cargoAPostular;

    /**
     * @var string
     *
     * @ORM\Column(name="CONDICION", type="string", length=80, nullable=true)
     */
    private $condicion;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPO_CURSO", type="string", length=8, nullable=true)
     */
    private $tipoCurso;

    /**
     * @var float
     *
     * @ORM\Column(name="NOTA", type="float", nullable=true)
     */
    private $nota;

    /**
     * @var float
     *
     * @ORM\Column(name="PRE_PROMEDIO", type="float", nullable=true)
     */
    private $prePromedio;

    /**
     * @var integer
     *
     * @ORM\Column(name="ORDEN_MERITO", type="integer", nullable=true)
     */
    private $ordenMerito;

    /**
     * @var integer
     *
     * @ORM\Column(name="PLAZAS_VACANTES", type="integer", nullable=true)
     */
    private $plazasVacantes;

    /**
     * @var string
     *
     * @ORM\Column(name="EXAMEN_CONOCIMIENTOS", type="string", length=80, nullable=false)
     */
    private $examenConocimientos;

    /**
     * @var string
     *
     * @ORM\Column(name="AFILIACION_CURRICULAR", type="string", length=80, nullable=false)
     */
    private $afiliacionCurricular;

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
     * Get pkDatPostulante
     *
     * @return integer 
     */
    public function getPkDatPostulante()
    {
        return $this->pkDatPostulante;
    }

    /**
     * Set pkSusuario
     *
     * @param integer $pkSusuario
     * @return DatosPostulante
     */
    public function setPkSusuario($pkSusuario)
    {
        $this->pkSusuario = $pkSusuario;
    
        return $this;
    }

    /**
     * Get pkSusuario
     *
     * @return integer 
     */
    public function getPkSusuario()
    {
        return $this->pkSusuario;
    }

    /**
     * Set cargoAPostular
     *
     * @param string $cargoAPostular
     * @return DatosPostulante
     */
    public function setCargoAPostular($cargoAPostular)
    {
        $this->cargoAPostular = $cargoAPostular;
    
        return $this;
    }

    /**
     * Get cargoAPostular
     *
     * @return string 
     */
    public function getCargoAPostular()
    {
        return $this->cargoAPostular;
    }

    /**
     * Set condicion
     *
     * @param string $condicion
     * @return DatosPostulante
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
     * Set tipoCurso
     *
     * @param string $tipoCurso
     * @return DatosPostulante
     */
    public function setTipoCurso($tipoCurso)
    {
        $this->tipoCurso = $tipoCurso;
    
        return $this;
    }

    /**
     * Get tipoCurso
     *
     * @return string 
     */
    public function getTipoCurso()
    {
        return $this->tipoCurso;
    }

    /**
     * Set nota
     *
     * @param float $nota
     * @return DatosPostulante
     */
    public function setNota($nota)
    {
        $this->nota = $nota;
    
        return $this;
    }

    /**
     * Get nota
     *
     * @return float 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set prePromedio
     *
     * @param float $prePromedio
     * @return DatosPostulante
     */
    public function setPrePromedio($prePromedio)
    {
        $this->prePromedio = $prePromedio;
    
        return $this;
    }

    /**
     * Get prePromedio
     *
     * @return float 
     */
    public function getPrePromedio()
    {
        return $this->prePromedio;
    }

    /**
     * Set ordenMerito
     *
     * @param integer $ordenMerito
     * @return DatosPostulante
     */
    public function setOrdenMerito($ordenMerito)
    {
        $this->ordenMerito = $ordenMerito;
    
        return $this;
    }

    /**
     * Get ordenMerito
     *
     * @return integer 
     */
    public function getOrdenMerito()
    {
        return $this->ordenMerito;
    }

    /**
     * Set plazasVacantes
     *
     * @param integer $plazasVacantes
     * @return DatosPostulante
     */
    public function setPlazasVacantes($plazasVacantes)
    {
        $this->plazasVacantes = $plazasVacantes;
    
        return $this;
    }

    /**
     * Get plazasVacantes
     *
     * @return integer 
     */
    public function getPlazasVacantes()
    {
        return $this->plazasVacantes;
    }

    /**
     * Set examenConocimientos
     *
     * @param string $examenConocimientos
     * @return DatosPostulante
     */
    public function setExamenConocimientos($examenConocimientos)
    {
        $this->examenConocimientos = $examenConocimientos;
    
        return $this;
    }

    /**
     * Get examenConocimientos
     *
     * @return string 
     */
    public function getExamenConocimientos()
    {
        return $this->examenConocimientos;
    }

    /**
     * Set afiliacionCurricular
     *
     * @param string $afiliacionCurricular
     * @return DatosPostulante
     */
    public function setAfiliacionCurricular($afiliacionCurricular)
    {
        $this->afiliacionCurricular = $afiliacionCurricular;
    
        return $this;
    }

    /**
     * Get afiliacionCurricular
     *
     * @return string 
     */
    public function getAfiliacionCurricular()
    {
        return $this->afiliacionCurricular;
    }

    /**
     * Set usuarioAudt
     *
     * @param string $usuarioAudt
     * @return DatosPostulante
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
     * @return DatosPostulante
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
     * @return DatosPostulante
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
}