<?php

namespace proyectos\curriculoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TdCurriculoCampo
 *
 * @ORM\Table(name="td_curriculo_campo")
 * @ORM\Entity
 */
class TdCurriculoCampo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_auditoria", type="datetime", nullable=true)
     */
    private $fechaAuditoria;

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
     * @var \TdCampos
     *
     * @ORM\ManyToOne(targetEntity="TdCampos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_campo", referencedColumnName="id_campo")
     * })
     */
    private $idCampo;

    /**
     * @var \TdCurriculoItem
     *
     * @ORM\ManyToOne(targetEntity="TdCurriculoItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_curriculo_item", referencedColumnName="id_curriculo_item")
     * })
     */
    private $idCurriculoItem;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TdCurriculoCampo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fechaAuditoria
     *
     * @param \DateTime $fechaAuditoria
     * @return TdCurriculoCampo
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
     * Set fechaAnulacion
     *
     * @param \DateTime $fechaAnulacion
     * @return TdCurriculoCampo
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
     * @return TdCurriculoCampo
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
     * Set idCampo
     *
     * @param \proyectos\curriculoBundle\Entity\TdCampos $idCampo
     * @return TdCurriculoCampo
     */
    public function setIdCampo(\proyectos\curriculoBundle\Entity\TdCampos $idCampo = null)
    {
        $this->idCampo = $idCampo;
    
        return $this;
    }

    /**
     * Get idCampo
     *
     * @return \proyectos\curriculoBundle\Entity\TdCampos 
     */
    public function getIdCampo()
    {
        return $this->idCampo;
    }

    /**
     * Set idCurriculoItem
     *
     * @param \proyectos\curriculoBundle\Entity\TdCurriculoItem $idCurriculoItem
     * @return TdCurriculoCampo
     */
    public function setIdCurriculoItem(\proyectos\curriculoBundle\Entity\TdCurriculoItem $idCurriculoItem = null)
    {
        $this->idCurriculoItem = $idCurriculoItem;
    
        return $this;
    }

    /**
     * Get idCurriculoItem
     *
     * @return \proyectos\curriculoBundle\Entity\TdCurriculoItem 
     */
    public function getIdCurriculoItem()
    {
        return $this->idCurriculoItem;
    }
}