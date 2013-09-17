<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConvocatoriasAnteriores
 *
 * @ORM\Table(name="convocatorias_anteriores")
 * @ORM\Entity
 */
class ConvocatoriasAnteriores
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_CONV_ANTERIORES", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkConvAnteriores;

    /**
     * @var string
     *
     * @ORM\Column(name="CONVOCATORIA", type="string", length=50, nullable=true)
     */
    private $convocatoria;

    /**
     * @var string
     *
     * @ORM\Column(name="PLAZA", type="string", length=50, nullable=true)
     */
    private $plaza;

    /**
     * @var string
     *
     * @ORM\Column(name="ETAPA", type="string", length=50, nullable=true)
     */
    private $etapa;

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
     * Get pkConvAnteriores
     *
     * @return integer 
     */
    public function getPkConvAnteriores()
    {
        return $this->pkConvAnteriores;
    }

    /**
     * Set convocatoria
     *
     * @param string $convocatoria
     * @return ConvocatoriasAnteriores
     */
    public function setConvocatoria($convocatoria)
    {
        $this->convocatoria = $convocatoria;
    
        return $this;
    }

    /**
     * Get convocatoria
     *
     * @return string 
     */
    public function getConvocatoria()
    {
        return $this->convocatoria;
    }

    /**
     * Set plaza
     *
     * @param string $plaza
     * @return ConvocatoriasAnteriores
     */
    public function setPlaza($plaza)
    {
        $this->plaza = $plaza;
    
        return $this;
    }

    /**
     * Get plaza
     *
     * @return string 
     */
    public function getPlaza()
    {
        return $this->plaza;
    }

    /**
     * Set etapa
     *
     * @param string $etapa
     * @return ConvocatoriasAnteriores
     */
    public function setEtapa($etapa)
    {
        $this->etapa = $etapa;
    
        return $this;
    }

    /**
     * Get etapa
     *
     * @return string 
     */
    public function getEtapa()
    {
        return $this->etapa;
    }

    /**
     * Set usuarioAudt
     *
     * @param string $usuarioAudt
     * @return ConvocatoriasAnteriores
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
     * @return ConvocatoriasAnteriores
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
     * @return ConvocatoriasAnteriores
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
     * @return ConvocatoriasAnteriores
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