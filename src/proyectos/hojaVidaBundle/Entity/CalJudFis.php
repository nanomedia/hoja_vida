<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalJudFis
 *
 * @ORM\Table(name="cal_jud_fis")
 * @ORM\Entity
 */
class CalJudFis
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_EXP_JUD_FIS", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkExpJudFis;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUM_EXP", type="integer", nullable=true)
     */
    private $numExp;

    /**
     * @var string
     *
     * @ORM\Column(name="TIP_RESOLUCION", type="string", length=30, nullable=true)
     */
    private $tipResolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="FECHA_RES", type="string", length=10, nullable=true)
     */
    private $fechaRes;

    /**
     * @var string
     *
     * @ORM\Column(name="DDAGRAVIADO", type="string", length=30, nullable=true)
     */
    private $ddagraviado;

    /**
     * @var string
     *
     * @ORM\Column(name="DDAGRESOR", type="string", length=30, nullable=true)
     */
    private $ddagresor;

    /**
     * @var string
     *
     * @ORM\Column(name="MATERIA", type="string", length=30, nullable=true)
     */
    private $materia;

    /**
     * @var string
     *
     * @ORM\Column(name="ESPECIALIDAD", type="string", length=30, nullable=true)
     */
    private $especialidad;

    /**
     * @var float
     *
     * @ORM\Column(name="NOTA", type="float", nullable=true)
     */
    private $nota;

    /**
     * @var integer
     *
     * @ORM\Column(name="PK_EXP_PROFESIONAL", type="integer", nullable=true)
     */
    private $pkExpProfesional;

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
     * Get pkExpJudFis
     *
     * @return integer 
     */
    public function getPkExpJudFis()
    {
        return $this->pkExpJudFis;
    }

    /**
     * Set numExp
     *
     * @param integer $numExp
     * @return CalJudFis
     */
    public function setNumExp($numExp)
    {
        $this->numExp = $numExp;
    
        return $this;
    }

    /**
     * Get numExp
     *
     * @return integer 
     */
    public function getNumExp()
    {
        return $this->numExp;
    }

    /**
     * Set tipResolucion
     *
     * @param string $tipResolucion
     * @return CalJudFis
     */
    public function setTipResolucion($tipResolucion)
    {
        $this->tipResolucion = $tipResolucion;
    
        return $this;
    }

    /**
     * Get tipResolucion
     *
     * @return string 
     */
    public function getTipResolucion()
    {
        return $this->tipResolucion;
    }

    /**
     * Set fechaRes
     *
     * @param string $fechaRes
     * @return CalJudFis
     */
    public function setFechaRes($fechaRes)
    {
        $this->fechaRes = $fechaRes;
    
        return $this;
    }

    /**
     * Get fechaRes
     *
     * @return string 
     */
    public function getFechaRes()
    {
        return $this->fechaRes;
    }

    /**
     * Set ddagraviado
     *
     * @param string $ddagraviado
     * @return CalJudFis
     */
    public function setDdagraviado($ddagraviado)
    {
        $this->ddagraviado = $ddagraviado;
    
        return $this;
    }

    /**
     * Get ddagraviado
     *
     * @return string 
     */
    public function getDdagraviado()
    {
        return $this->ddagraviado;
    }

    /**
     * Set ddagresor
     *
     * @param string $ddagresor
     * @return CalJudFis
     */
    public function setDdagresor($ddagresor)
    {
        $this->ddagresor = $ddagresor;
    
        return $this;
    }

    /**
     * Get ddagresor
     *
     * @return string 
     */
    public function getDdagresor()
    {
        return $this->ddagresor;
    }

    /**
     * Set materia
     *
     * @param string $materia
     * @return CalJudFis
     */
    public function setMateria($materia)
    {
        $this->materia = $materia;
    
        return $this;
    }

    /**
     * Get materia
     *
     * @return string 
     */
    public function getMateria()
    {
        return $this->materia;
    }

    /**
     * Set especialidad
     *
     * @param string $especialidad
     * @return CalJudFis
     */
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;
    
        return $this;
    }

    /**
     * Get especialidad
     *
     * @return string 
     */
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    /**
     * Set nota
     *
     * @param float $nota
     * @return CalJudFis
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
     * Set pkExpProfesional
     *
     * @param integer $pkExpProfesional
     * @return CalJudFis
     */
    public function setPkExpProfesional($pkExpProfesional)
    {
        $this->pkExpProfesional = $pkExpProfesional;
    
        return $this;
    }

    /**
     * Get pkExpProfesional
     *
     * @return integer 
     */
    public function getPkExpProfesional()
    {
        return $this->pkExpProfesional;
    }

    /**
     * Set pkDatPostulante
     *
     * @param \proyectos\hojaVidaBundle\Entity\DatosPostulante $pkDatPostulante
     * @return CalJudFis
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