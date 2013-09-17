<?php

namespace proyectos\curriculoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrPlaza
 *
 * @ORM\Table(name="tr_plaza")
 * @ORM\Entity
 */
class TrPlaza
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_plaza", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlaza;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;



    /**
     * Get idPlaza
     *
     * @return integer 
     */
    public function getIdPlaza()
    {
        return $this->idPlaza;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TrPlaza
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