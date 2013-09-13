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
     * @var string
     *
     * @ORM\Column(name="USUARIO_AUDT", type="string", length=50, nullable=true)
     */
    private $usuarioAudt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_AUDT", type="datetime", nullable=true)
     */
    private $fechaAudt;

    /**
     * @var string
     *
     * @ORM\Column(name="IP_AUDT", type="string", length=50, nullable=true)
     */
    private $ipAudt;

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
     * Set usuarioAudt
     *
     * @param string $usuarioAudt
     * @return InformacionRegistroDe
     */
    public function setUsuarioAudt($usuarioAudt)
    {
        $this->usuarioAudt = $usuarioAudt;
    
        return $this;
    }

    /**
     * Get usuarioAudt
     *
     * @return string 
     */
    public function getUsuarioAudt()
    {
        return $this->usuarioAudt;
    }

    /**
     * Set fechaAudt
     *
     * @param \DateTime $fechaAudt
     * @return InformacionRegistroDe
     */
    public function setFechaAudt($fechaAudt)
    {
        $this->fechaAudt = $fechaAudt;
    
        return $this;
    }

    /**
     * Get fechaAudt
     *
     * @return \DateTime 
     */
    public function getFechaAudt()
    {
        return $this->fechaAudt;
    }

    /**
     * Set ipAudt
     *
     * @param string $ipAudt
     * @return InformacionRegistroDe
     */
    public function setIpAudt($ipAudt)
    {
        $this->ipAudt = $ipAudt;
    
        return $this;
    }

    /**
     * Get ipAudt
     *
     * @return string 
     */
    public function getIpAudt()
    {
        return $this->ipAudt;
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