<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InformacionRegistroDe
 *
 * @ORM\Table(name="informacion_registro_de")
 * @ORM\Entity
 */
class InformacionRegistroDe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_INFORMACION_REG_DEU", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkInformacionRegDeu;

    /**
     * @var string
     *
     * @ORM\Column(name="DEUDORES_ALIMENTARIOS", type="string", length=250, nullable=true)
     */
    private $deudoresAlimentarios;

    /**
     * @var string
     *
     * @ORM\Column(name="COMPLEMENTARIA", type="string", length=250, nullable=true)
     */
    private $complementaria;

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
     * Get pkInformacionRegDeu
     *
     * @return integer 
     */
    public function getPkInformacionRegDeu()
    {
        return $this->pkInformacionRegDeu;
    }

    /**
     * Set deudoresAlimentarios
     *
     * @param string $deudoresAlimentarios
     * @return InformacionRegistroDe
     */
    public function setDeudoresAlimentarios($deudoresAlimentarios)
    {
        $this->deudoresAlimentarios = $deudoresAlimentarios;
    
        return $this;
    }

    /**
     * Get deudoresAlimentarios
     *
     * @return string 
     */
    public function getDeudoresAlimentarios()
    {
        return $this->deudoresAlimentarios;
    }

    /**
     * Set complementaria
     *
     * @param string $complementaria
     * @return InformacionRegistroDe
     */
    public function setComplementaria($complementaria)
    {
        $this->complementaria = $complementaria;
    
        return $this;
    }

    /**
     * Get complementaria
     *
     * @return string 
     */
    public function getComplementaria()
    {
        return $this->complementaria;
    }

    /**
     * Set pkDatPostulante
     *
     * @param \proyectos\hojaVidaBundle\Entity\DatosPostulante $pkDatPostulante
     * @return InformacionRegistroDe
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