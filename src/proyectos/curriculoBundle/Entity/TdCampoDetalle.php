<?php

namespace proyectos\curriculoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TdCampoDetalle
 *
 * @ORM\Table(name="td_campo_detalle")
 * @ORM\Entity
 */
class TdCampoDetalle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_campo_detalle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCampoDetalle;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

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
     * Get idCampoDetalle
     *
     * @return integer 
     */
    public function getIdCampoDetalle()
    {
        return $this->idCampoDetalle;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TdCampoDetalle
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
     * Set idCampo
     *
     * @param \proyectos\curriculoBundle\Entity\TdCampos $idCampo
     * @return TdCampoDetalle
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
}