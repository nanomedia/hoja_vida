<?php

namespace proyectos\curriculoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TmConvocatoria
 *
 * @ORM\Table(name="tm_convocatoria")
 * @ORM\Entity
 */
class TmConvocatoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_convocatoria", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConvocatoria;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;



    /**
     * Get idConvocatoria
     *
     * @return integer 
     */
    public function getIdConvocatoria()
    {
        return $this->idConvocatoria;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TmConvocatoria
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
}