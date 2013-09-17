<?php

namespace proyectos\curriculoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TdCampos
 *
 * @ORM\Table(name="td_campos")
 * @ORM\Entity
 */
class TdCampos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_campo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCampo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TmItem", mappedBy="idCampo")
     */
    private $idItem;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idItem = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idCampo
     *
     * @return integer 
     */
    public function getIdCampo()
    {
        return $this->idCampo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TdCampos
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
     * Set code
     *
     * @param string $code
     * @return TdCampos
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Add idItem
     *
     * @param \proyectos\curriculoBundle\Entity\TmItem $idItem
     * @return TdCampos
     */
    public function addIdItem(\proyectos\curriculoBundle\Entity\TmItem $idItem)
    {
        $this->idItem[] = $idItem;
    
        return $this;
    }

    /**
     * Remove idItem
     *
     * @param \proyectos\curriculoBundle\Entity\TmItem $idItem
     */
    public function removeIdItem(\proyectos\curriculoBundle\Entity\TmItem $idItem)
    {
        $this->idItem->removeElement($idItem);
    }

    /**
     * Get idItem
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdItem()
    {
        return $this->idItem;
    }
}