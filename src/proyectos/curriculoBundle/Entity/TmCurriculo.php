<?php

namespace proyectos\curriculoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TmCurriculo
 *
 * @ORM\Table(name="tm_curriculo")
 * @ORM\Entity
 */
class TmCurriculo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_curriculo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCurriculo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_auditoria", type="datetime", nullable=true)
     */
    private $fechaAuditoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="flag_completo", type="integer", nullable=true)
     */
    private $flagCompleto;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_evaluador1", type="integer", nullable=false)
     */
    private $estadoEvaluador1;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_evaluador2", type="integer", nullable=false)
     */
    private $estadoEvaluador2;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_evaluado", type="integer", nullable=false)
     */
    private $estadoEvaluado;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SUsuario", inversedBy="idCurriculo")
     * @ORM\JoinTable(name="td_usuario_curriculo",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_curriculo", referencedColumnName="id_curriculo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="dni", referencedColumnName="dni")
     *   }
     * )
     */
    private $dni;

    /**
     * @var \TrTipoCargo
     *
     * @ORM\ManyToOne(targetEntity="TrTipoCargo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_cargo", referencedColumnName="id_tipo_cargo")
     * })
     */
    private $idTipoCargo;

    /**
     * @var \TrPlaza
     *
     * @ORM\ManyToOne(targetEntity="TrPlaza")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_plaza", referencedColumnName="id_plaza")
     * })
     */
    private $idPlaza;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dni = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idCurriculo
     *
     * @return integer 
     */
    public function getIdCurriculo()
    {
        return $this->idCurriculo;
    }

    /**
     * Set fechaAuditoria
     *
     * @param \DateTime $fechaAuditoria
     * @return TmCurriculo
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
     * Set flagCompleto
     *
     * @param integer $flagCompleto
     * @return TmCurriculo
     */
    public function setFlagCompleto($flagCompleto)
    {
        $this->flagCompleto = $flagCompleto;
    
        return $this;
    }

    /**
     * Get flagCompleto
     *
     * @return integer 
     */
    public function getFlagCompleto()
    {
        return $this->flagCompleto;
    }

    /**
     * Set estadoEvaluador1
     *
     * @param integer $estadoEvaluador1
     * @return TmCurriculo
     */
    public function setEstadoEvaluador1($estadoEvaluador1)
    {
        $this->estadoEvaluador1 = $estadoEvaluador1;
    
        return $this;
    }

    /**
     * Get estadoEvaluador1
     *
     * @return integer 
     */
    public function getEstadoEvaluador1()
    {
        return $this->estadoEvaluador1;
    }

    /**
     * Set estadoEvaluador2
     *
     * @param integer $estadoEvaluador2
     * @return TmCurriculo
     */
    public function setEstadoEvaluador2($estadoEvaluador2)
    {
        $this->estadoEvaluador2 = $estadoEvaluador2;
    
        return $this;
    }

    /**
     * Get estadoEvaluador2
     *
     * @return integer 
     */
    public function getEstadoEvaluador2()
    {
        return $this->estadoEvaluador2;
    }

    /**
     * Set estadoEvaluado
     *
     * @param integer $estadoEvaluado
     * @return TmCurriculo
     */
    public function setEstadoEvaluado($estadoEvaluado)
    {
        $this->estadoEvaluado = $estadoEvaluado;
    
        return $this;
    }

    /**
     * Get estadoEvaluado
     *
     * @return integer 
     */
    public function getEstadoEvaluado()
    {
        return $this->estadoEvaluado;
    }

    /**
     * Add dni
     *
     * @param \proyectos\curriculoBundle\Entity\SUsuario $dni
     * @return TmCurriculo
     */
    public function addDni(\proyectos\curriculoBundle\Entity\SUsuario $dni)
    {
        $this->dni[] = $dni;
    
        return $this;
    }

    /**
     * Remove dni
     *
     * @param \proyectos\curriculoBundle\Entity\SUsuario $dni
     */
    public function removeDni(\proyectos\curriculoBundle\Entity\SUsuario $dni)
    {
        $this->dni->removeElement($dni);
    }

    /**
     * Get dni
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set idTipoCargo
     *
     * @param \proyectos\curriculoBundle\Entity\TrTipoCargo $idTipoCargo
     * @return TmCurriculo
     */
    public function setIdTipoCargo(\proyectos\curriculoBundle\Entity\TrTipoCargo $idTipoCargo = null)
    {
        $this->idTipoCargo = $idTipoCargo;
    
        return $this;
    }

    /**
     * Get idTipoCargo
     *
     * @return \proyectos\curriculoBundle\Entity\TrTipoCargo 
     */
    public function getIdTipoCargo()
    {
        return $this->idTipoCargo;
    }

    /**
     * Set idPlaza
     *
     * @param \proyectos\curriculoBundle\Entity\TrPlaza $idPlaza
     * @return TmCurriculo
     */
    public function setIdPlaza(\proyectos\curriculoBundle\Entity\TrPlaza $idPlaza = null)
    {
        $this->idPlaza = $idPlaza;
    
        return $this;
    }

    /**
     * Get idPlaza
     *
     * @return \proyectos\curriculoBundle\Entity\TrPlaza 
     */
    public function getIdPlaza()
    {
        return $this->idPlaza;
    }
}