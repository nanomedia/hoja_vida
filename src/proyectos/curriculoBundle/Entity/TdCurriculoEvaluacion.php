<?php

namespace proyectos\curriculoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TdCurriculoEvaluacion
 *
 * @ORM\Table(name="td_curriculo_evaluacion")
 * @ORM\Entity
 */
class TdCurriculoEvaluacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_evaluacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idEvaluacion;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=50, nullable=false)
     */
    private $usuario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inicio_evaluacion", type="datetime", nullable=true)
     */
    private $inicioEvaluacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_evaluacion", type="datetime", nullable=true)
     */
    private $finEvaluacion;

    /**
     * @var \TmCurriculo
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="TmCurriculo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_curriculo", referencedColumnName="id_curriculo")
     * })
     */
    private $idCurriculo;



    /**
     * Set idEvaluacion
     *
     * @param integer $idEvaluacion
     * @return TdCurriculoEvaluacion
     */
    public function setIdEvaluacion($idEvaluacion)
    {
        $this->idEvaluacion = $idEvaluacion;
    
        return $this;
    }

    /**
     * Get idEvaluacion
     *
     * @return integer 
     */
    public function getIdEvaluacion()
    {
        return $this->idEvaluacion;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     * @return TdCurriculoEvaluacion
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set inicioEvaluacion
     *
     * @param \DateTime $inicioEvaluacion
     * @return TdCurriculoEvaluacion
     */
    public function setInicioEvaluacion($inicioEvaluacion)
    {
        $this->inicioEvaluacion = $inicioEvaluacion;
    
        return $this;
    }

    /**
     * Get inicioEvaluacion
     *
     * @return \DateTime 
     */
    public function getInicioEvaluacion()
    {
        return $this->inicioEvaluacion;
    }

    /**
     * Set finEvaluacion
     *
     * @param \DateTime $finEvaluacion
     * @return TdCurriculoEvaluacion
     */
    public function setFinEvaluacion($finEvaluacion)
    {
        $this->finEvaluacion = $finEvaluacion;
    
        return $this;
    }

    /**
     * Get finEvaluacion
     *
     * @return \DateTime 
     */
    public function getFinEvaluacion()
    {
        return $this->finEvaluacion;
    }

    /**
     * Set idCurriculo
     *
     * @param \proyectos\curriculoBundle\Entity\TmCurriculo $idCurriculo
     * @return TdCurriculoEvaluacion
     */
    public function setIdCurriculo(\proyectos\curriculoBundle\Entity\TmCurriculo $idCurriculo)
    {
        $this->idCurriculo = $idCurriculo;
    
        return $this;
    }

    /**
     * Get idCurriculo
     *
     * @return \proyectos\curriculoBundle\Entity\TmCurriculo 
     */
    public function getIdCurriculo()
    {
        return $this->idCurriculo;
    }
}