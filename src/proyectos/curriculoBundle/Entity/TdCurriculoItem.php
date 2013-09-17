<?php

namespace proyectos\curriculoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TdCurriculoItem
 *
 * @ORM\Table(name="td_curriculo_item")
 * @ORM\Entity
 */
class TdCurriculoItem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_curriculo_item", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCurriculoItem;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_auditoria", type="datetime", nullable=true)
     */
    private $fechaAuditoria;

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=10, nullable=true)
     */
    private $extension;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_anulacion", type="datetime", nullable=true)
     */
    private $fechaAnulacion;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=true)
     */
    private $estado;

    /**
     * @var float
     *
     * @ORM\Column(name="evaluacion1", type="decimal", nullable=false)
     */
    private $evaluacion1;

    /**
     * @var float
     *
     * @ORM\Column(name="evaluacion2", type="decimal", nullable=false)
     */
    private $evaluacion2;

    /**
     * @var float
     *
     * @ORM\Column(name="consensuado", type="decimal", nullable=false)
     */
    private $consensuado;

    /**
     * @var integer
     *
     * @ORM\Column(name="flag_eval", type="integer", nullable=false)
     */
    private $flagEval;

    /**
     * @var integer
     *
     * @ORM\Column(name="flag_eval2", type="integer", nullable=false)
     */
    private $flagEval2;

    /**
     * @var integer
     *
     * @ORM\Column(name="evaluado1", type="integer", nullable=false)
     */
    private $evaluado1;

    /**
     * @var integer
     *
     * @ORM\Column(name="evaluado2", type="integer", nullable=false)
     */
    private $evaluado2;

    /**
     * @var string
     *
     * @ORM\Column(name="foja", type="string", length=50, nullable=true)
     */
    private $foja;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=500, nullable=true)
     */
    private $observacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="nuevo_item", type="integer", nullable=true)
     */
    private $nuevoItem;

    /**
     * @var float
     *
     * @ORM\Column(name="puntaje_reporte", type="decimal", nullable=true)
     */
    private $puntajeReporte;

    /**
     * @var integer
     *
     * @ORM\Column(name="evaluado_aux", type="integer", nullable=false)
     */
    private $evaluadoAux;

    /**
     * @var integer
     *
     * @ORM\Column(name="flag_eval_aux", type="integer", nullable=false)
     */
    private $flagEvalAux;

    /**
     * @var float
     *
     * @ORM\Column(name="puntaje_aux", type="decimal", nullable=false)
     */
    private $puntajeAux;

    /**
     * @var string
     *
     * @ORM\Column(name="foja2", type="string", length=50, nullable=true)
     */
    private $foja2;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion2", type="string", length=255, nullable=true)
     */
    private $observacion2;

    /**
     * @var \TmCurriculo
     *
     * @ORM\ManyToOne(targetEntity="TmCurriculo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_curriculo", referencedColumnName="id_curriculo")
     * })
     */
    private $idCurriculo;

    /**
     * @var \TmItem
     *
     * @ORM\ManyToOne(targetEntity="TmItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_item", referencedColumnName="id_item")
     * })
     */
    private $idItem;



    /**
     * Get idCurriculoItem
     *
     * @return integer 
     */
    public function getIdCurriculoItem()
    {
        return $this->idCurriculoItem;
    }

    /**
     * Set fechaAuditoria
     *
     * @param \DateTime $fechaAuditoria
     * @return TdCurriculoItem
     */
    public function setFechaAuditoria($fechaAuditoria)
    {
        $this->fechaAuditoria = $fechaAuditoria;
    
        return $this;
    }

    /**
     * Get fechaAuditoria
     *
     * @return \DateTime 
     */
    public function getFechaAuditoria()
    {
        return $this->fechaAuditoria;
    }

    /**
     * Set extension
     *
     * @param string $extension
     * @return TdCurriculoItem
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
    
        return $this;
    }

    /**
     * Get extension
     *
     * @return string 
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set fechaAnulacion
     *
     * @param \DateTime $fechaAnulacion
     * @return TdCurriculoItem
     */
    public function setFechaAnulacion($fechaAnulacion)
    {
        $this->fechaAnulacion = $fechaAnulacion;
    
        return $this;
    }

    /**
     * Get fechaAnulacion
     *
     * @return \DateTime 
     */
    public function getFechaAnulacion()
    {
        return $this->fechaAnulacion;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return TdCurriculoItem
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set evaluacion1
     *
     * @param float $evaluacion1
     * @return TdCurriculoItem
     */
    public function setEvaluacion1($evaluacion1)
    {
        $this->evaluacion1 = $evaluacion1;
    
        return $this;
    }

    /**
     * Get evaluacion1
     *
     * @return float 
     */
    public function getEvaluacion1()
    {
        return $this->evaluacion1;
    }

    /**
     * Set evaluacion2
     *
     * @param float $evaluacion2
     * @return TdCurriculoItem
     */
    public function setEvaluacion2($evaluacion2)
    {
        $this->evaluacion2 = $evaluacion2;
    
        return $this;
    }

    /**
     * Get evaluacion2
     *
     * @return float 
     */
    public function getEvaluacion2()
    {
        return $this->evaluacion2;
    }

    /**
     * Set consensuado
     *
     * @param float $consensuado
     * @return TdCurriculoItem
     */
    public function setConsensuado($consensuado)
    {
        $this->consensuado = $consensuado;
    
        return $this;
    }

    /**
     * Get consensuado
     *
     * @return float 
     */
    public function getConsensuado()
    {
        return $this->consensuado;
    }

    /**
     * Set flagEval
     *
     * @param integer $flagEval
     * @return TdCurriculoItem
     */
    public function setFlagEval($flagEval)
    {
        $this->flagEval = $flagEval;
    
        return $this;
    }

    /**
     * Get flagEval
     *
     * @return integer 
     */
    public function getFlagEval()
    {
        return $this->flagEval;
    }

    /**
     * Set flagEval2
     *
     * @param integer $flagEval2
     * @return TdCurriculoItem
     */
    public function setFlagEval2($flagEval2)
    {
        $this->flagEval2 = $flagEval2;
    
        return $this;
    }

    /**
     * Get flagEval2
     *
     * @return integer 
     */
    public function getFlagEval2()
    {
        return $this->flagEval2;
    }

    /**
     * Set evaluado1
     *
     * @param integer $evaluado1
     * @return TdCurriculoItem
     */
    public function setEvaluado1($evaluado1)
    {
        $this->evaluado1 = $evaluado1;
    
        return $this;
    }

    /**
     * Get evaluado1
     *
     * @return integer 
     */
    public function getEvaluado1()
    {
        return $this->evaluado1;
    }

    /**
     * Set evaluado2
     *
     * @param integer $evaluado2
     * @return TdCurriculoItem
     */
    public function setEvaluado2($evaluado2)
    {
        $this->evaluado2 = $evaluado2;
    
        return $this;
    }

    /**
     * Get evaluado2
     *
     * @return integer 
     */
    public function getEvaluado2()
    {
        return $this->evaluado2;
    }

    /**
     * Set foja
     *
     * @param string $foja
     * @return TdCurriculoItem
     */
    public function setFoja($foja)
    {
        $this->foja = $foja;
    
        return $this;
    }

    /**
     * Get foja
     *
     * @return string 
     */
    public function getFoja()
    {
        return $this->foja;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return TdCurriculoItem
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;
    
        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set nuevoItem
     *
     * @param integer $nuevoItem
     * @return TdCurriculoItem
     */
    public function setNuevoItem($nuevoItem)
    {
        $this->nuevoItem = $nuevoItem;
    
        return $this;
    }

    /**
     * Get nuevoItem
     *
     * @return integer 
     */
    public function getNuevoItem()
    {
        return $this->nuevoItem;
    }

    /**
     * Set puntajeReporte
     *
     * @param float $puntajeReporte
     * @return TdCurriculoItem
     */
    public function setPuntajeReporte($puntajeReporte)
    {
        $this->puntajeReporte = $puntajeReporte;
    
        return $this;
    }

    /**
     * Get puntajeReporte
     *
     * @return float 
     */
    public function getPuntajeReporte()
    {
        return $this->puntajeReporte;
    }

    /**
     * Set evaluadoAux
     *
     * @param integer $evaluadoAux
     * @return TdCurriculoItem
     */
    public function setEvaluadoAux($evaluadoAux)
    {
        $this->evaluadoAux = $evaluadoAux;
    
        return $this;
    }

    /**
     * Get evaluadoAux
     *
     * @return integer 
     */
    public function getEvaluadoAux()
    {
        return $this->evaluadoAux;
    }

    /**
     * Set flagEvalAux
     *
     * @param integer $flagEvalAux
     * @return TdCurriculoItem
     */
    public function setFlagEvalAux($flagEvalAux)
    {
        $this->flagEvalAux = $flagEvalAux;
    
        return $this;
    }

    /**
     * Get flagEvalAux
     *
     * @return integer 
     */
    public function getFlagEvalAux()
    {
        return $this->flagEvalAux;
    }

    /**
     * Set puntajeAux
     *
     * @param float $puntajeAux
     * @return TdCurriculoItem
     */
    public function setPuntajeAux($puntajeAux)
    {
        $this->puntajeAux = $puntajeAux;
    
        return $this;
    }

    /**
     * Get puntajeAux
     *
     * @return float 
     */
    public function getPuntajeAux()
    {
        return $this->puntajeAux;
    }

    /**
     * Set foja2
     *
     * @param string $foja2
     * @return TdCurriculoItem
     */
    public function setFoja2($foja2)
    {
        $this->foja2 = $foja2;
    
        return $this;
    }

    /**
     * Get foja2
     *
     * @return string 
     */
    public function getFoja2()
    {
        return $this->foja2;
    }

    /**
     * Set observacion2
     *
     * @param string $observacion2
     * @return TdCurriculoItem
     */
    public function setObservacion2($observacion2)
    {
        $this->observacion2 = $observacion2;
    
        return $this;
    }

    /**
     * Get observacion2
     *
     * @return string 
     */
    public function getObservacion2()
    {
        return $this->observacion2;
    }

    /**
     * Set idCurriculo
     *
     * @param \proyectos\curriculoBundle\Entity\TmCurriculo $idCurriculo
     * @return TdCurriculoItem
     */
    public function setIdCurriculo(\proyectos\curriculoBundle\Entity\TmCurriculo $idCurriculo = null)
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

    /**
     * Set idItem
     *
     * @param \proyectos\curriculoBundle\Entity\TmItem $idItem
     * @return TdCurriculoItem
     */
    public function setIdItem(\proyectos\curriculoBundle\Entity\TmItem $idItem = null)
    {
        $this->idItem = $idItem;
    
        return $this;
    }

    /**
     * Get idItem
     *
     * @return \proyectos\curriculoBundle\Entity\TmItem 
     */
    public function getIdItem()
    {
        return $this->idItem;
    }
}