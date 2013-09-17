<?php

namespace proyectos\curriculoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrTipoCargo
 *
 * @ORM\Table(name="tr_tipo_cargo")
 * @ORM\Entity
 */
class TrTipoCargo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_cargo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoCargo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var \TmConvocatoria
     *
     * @ORM\ManyToOne(targetEntity="TmConvocatoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_convocatoria", referencedColumnName="id_convocatoria")
     * })
     */
    private $idConvocatoria;

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
     * Get idTipoCargo
     *
     * @return integer 
     */
    public function getIdTipoCargo()
    {
        return $this->idTipoCargo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TrTipoCargo
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
     * Set idConvocatoria
     *
     * @param \proyectos\curriculoBundle\Entity\TmConvocatoria $idConvocatoria
     * @return TrTipoCargo
     */
    public function setIdConvocatoria(\proyectos\curriculoBundle\Entity\TmConvocatoria $idConvocatoria = null)
    {
        $this->idConvocatoria = $idConvocatoria;
    
        return $this;
    }

    /**
     * Get idConvocatoria
     *
     * @return \proyectos\curriculoBundle\Entity\TmConvocatoria 
     */
    public function getIdConvocatoria()
    {
        return $this->idConvocatoria;
    }

    /**
     * Set idPlaza
     *
     * @param \proyectos\curriculoBundle\Entity\TrPlaza $idPlaza
     * @return TrTipoCargo
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