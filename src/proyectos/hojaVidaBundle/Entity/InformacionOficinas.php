<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InformacionOficinas
 *
 * @ORM\Table(name="informacion_oficinas")
 * @ORM\Entity
 */
class InformacionOficinas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_PROCESOS_INFORMACION_OFICINAS", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkProcesosInformacionOficinas;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_OFICINA", type="integer", nullable=true)
     */
    private $idOficina;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=250, nullable=true)
     */
    private $descripcion;

    /**
     * @var \DatosPostulante
     *
     * @ORM\ManyToOne(targetEntity="DatosPostulante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PK_DAT_POSTULANTE", referencedColumnName="PK_DAT_POSTULANTE")
     * })
     */
    private $pkDatPostulante;



    /**
     * Get pkProcesosInformacionOficinas
     *
     * @return integer 
     */
    public function getPkProcesosInformacionOficinas()
    {
        return $this->pkProcesosInformacionOficinas;
    }

    /**
     * Set idOficina
     *
     * @param integer $idOficina
     * @return InformacionOficinas
     */
    public function setIdOficina($idOficina)
    {
        $this->idOficina = $idOficina;
    
        return $this;
    }

    /**
     * Get idOficina
     *
     * @return integer 
     */
    public function getIdOficina()
    {
        return $this->idOficina;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return InformacionOficinas
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
     * Set pkDatPostulante
     *
     * @param \proyectos\hojaVidaBundle\Entity\DatosPostulante $pkDatPostulante
     * @return InformacionOficinas
     */
    public function setPkDatPostulante(\proyectos\hojaVidaBundle\Entity\DatosPostulante $pkDatPostulante = null)
    {
        $this->pkDatPostulante = $pkDatPostulante;
    
        return $this;
    }

    /**
     * Get pkDatPostulante
     *
     * @return \proyectos\hojaVidaBundle\Entity\DatosPostulante 
     */
    public function getPkDatPostulante()
    {
        return $this->pkDatPostulante;
    }
}