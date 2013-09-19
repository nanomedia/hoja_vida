<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Universidades
 *
 * @ORM\Table(name="universidades")
 * @ORM\Entity
 */
class Universidades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_univ", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUniv;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_univ", type="string", length=100, nullable=true)
     */
    private $nombreUniv;



    /**
     * Get idUniv
     *
     * @return integer 
     */
    public function getIdUniv()
    {
        return $this->idUniv;
    }

    /**
     * Set nombreUniv
     *
     * @param string $nombreUniv
     * @return Universidades
     */
    public function setNombreUniv($nombreUniv)
    {
        $this->nombreUniv = $nombreUniv;
    
        return $this;
    }

    /**
     * Get nombreUniv
     *
     * @return string 
     */
    public function getNombreUniv()
    {
        return $this->nombreUniv;
    }
}