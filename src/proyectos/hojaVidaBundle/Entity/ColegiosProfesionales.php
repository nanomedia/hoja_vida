<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ColegiosProfesionales
 *
 * @ORM\Table(name="colegios_profesionales")
 * @ORM\Entity
 */
class ColegiosProfesionales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_colegio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idColegio;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_colegio", type="string", length=100, nullable=true)
     */
    private $nombreColegio;



    /**
     * Get idColegio
     *
     * @return integer 
     */
    public function getIdColegio()
    {
        return $this->idColegio;
    }

    /**
     * Set nombreColegio
     *
     * @param string $nombreColegio
     * @return ColegiosProfesionales
     */
    public function setNombreColegio($nombreColegio)
    {
        $this->nombreColegio = $nombreColegio;
    
        return $this;
    }

    /**
     * Get nombreColegio
     *
     * @return string 
     */
    public function getNombreColegio()
    {
        return $this->nombreColegio;
    }
}