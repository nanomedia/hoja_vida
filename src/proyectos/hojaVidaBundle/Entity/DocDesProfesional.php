<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocDesProfesional
 *
 * @ORM\Table(name="doc_des_profesional")
 * @ORM\Entity
 */
class DocDesProfesional
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_EXP_PROFESIONAL", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkExpProfesional;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUM_EXP", type="integer", nullable=true)
     */
    private $numExp;

    /**
     * @var string
     *
     * @ORM\Column(name="DDAS", type="string", length=30, nullable=true)
     */
    private $ddas;

    /**
     * @var string
     *
     * @ORM\Column(name="DDAE", type="string", length=30, nullable=true)
     */
    private $ddae;

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
     * @ORM\Column(name="CALIFICACION1", type="float", nullable=true)
     */
    private $calificacion1;

    /**
     * @var float
     *
     * @ORM\Column(name="CALIFICACION2", type="float", nullable=true)
     */
    private $calificacion2;

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
     * Get pkExpProfesional
     *
     * @return integer 
     */
    public function getPkExpProfesional()
    {
        return $this->pkExpProfesional;
    }

    /**
     * Set numExp
     *
     * @param integer $numExp
     * @return DocDesProfesional
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
     * Set ddas
     *
     * @param string $ddas
     * @return DocDesProfesional
     */
    public function setDdas($ddas)
    {
        $this->ddas = $ddas;
    
        return $this;
    }

    /**
     * Get ddas
     *
     * @return string 
     */
    public function getDdas()
    {
        return $this->ddas;
    }

    /**
     * Set ddae
     *
     * @param string $ddae
     * @return DocDesProfesional
     */
    public function setDdae($ddae)
    {
        $this->ddae = $ddae;
    
        return $this;
    }

    /**
     * Get ddae
     *
     * @return string 
     */
    public function getDdae()
    {
        return $this->ddae;
    }

    /**
     * Set materia
     *
     * @param string $materia
     * @return DocDesProfesional
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
     * @return DocDesProfesional
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
     * Set calificacion1
     *
     * @param float $calificacion1
     * @return DocDesProfesional
     */
    public function setCalificacion1($calificacion1)
    {
        $this->calificacion1 = $calificacion1;
    
        return $this;
    }

    /**
     * Get calificacion1
     *
     * @return float 
     */
    public function getCalificacion1()
    {
        return $this->calificacion1;
    }

    /**
     * Set calificacion2
     *
     * @param float $calificacion2
     * @return DocDesProfesional
     */
    public function setCalificacion2($calificacion2)
    {
        $this->calificacion2 = $calificacion2;
    
        return $this;
    }

    /**
     * Get calificacion2
     *
     * @return float 
     */
    public function getCalificacion2()
    {
        return $this->calificacion2;
    }

    /**
     * Set pkDatPostulante
     *
     * @param \proyectos\hojaVidaBundle\Entity\DatosPostulante $pkDatPostulante
     * @return DocDesProfesional
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