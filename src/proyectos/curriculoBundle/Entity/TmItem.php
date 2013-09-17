<?php

namespace proyectos\curriculoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TmItem
 *
 * @ORM\Table(name="tm_item")
 * @ORM\Entity
 */
class TmItem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_item", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idItem;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var float
     *
     * @ORM\Column(name="puntaje", type="decimal", nullable=true)
     */
    private $puntaje;

    /**
     * @var float
     *
     * @ORM\Column(name="puntaje_maximo", type="decimal", nullable=true)
     */
    private $puntajeMaximo;

    /**
     * @var string
     *
     * @ORM\Column(name="formato", type="string", length=1, nullable=true)
     */
    private $formato;

    /**
     * @var integer
     *
     * @ORM\Column(name="flag", type="integer", nullable=true)
     */
    private $flag;

    /**
     * @var integer
     *
     * @ORM\Column(name="flag_upload", type="integer", nullable=true)
     */
    private $flagUpload;

    /**
     * @var integer
     *
     * @ORM\Column(name="fff", type="integer", nullable=true)
     */
    private $fff;

    /**
     * @var integer
     *
     * @ORM\Column(name="muestra_reporte", type="integer", nullable=true)
     */
    private $muestraReporte;

    /**
     * @var integer
     *
     * @ORM\Column(name="flag_calculofecha", type="integer", nullable=true)
     */
    private $flagCalculofecha;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TdCampos", inversedBy="idItem")
     * @ORM\JoinTable(name="td_item_campos",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_item", referencedColumnName="id_item")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_campo", referencedColumnName="id_campo")
     *   }
     * )
     */
    private $idCampo;

    /**
     * @var \TmItem
     *
     * @ORM\ManyToOne(targetEntity="TmItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_item_padre", referencedColumnName="id_item")
     * })
     */
    private $idItemPadre;

    /**
     * @var \TrTipoCargo
     *
     * @ORM\ManyToOne(targetEntity="TrTipoCargo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_cargo", referencedColumnName="id_tipo_cargo")
     * })
     */
    private $idTipoCargo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCampo = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idItem
     *
     * @return integer 
     */
    public function getIdItem()
    {
        return $this->idItem;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TmItem
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
     * Set puntaje
     *
     * @param float $puntaje
     * @return TmItem
     */
    public function setPuntaje($puntaje)
    {
        $this->puntaje = $puntaje;
    
        return $this;
    }

    /**
     * Get puntaje
     *
     * @return float 
     */
    public function getPuntaje()
    {
        return $this->puntaje;
    }

    /**
     * Set puntajeMaximo
     *
     * @param float $puntajeMaximo
     * @return TmItem
     */
    public function setPuntajeMaximo($puntajeMaximo)
    {
        $this->puntajeMaximo = $puntajeMaximo;
    
        return $this;
    }

    /**
     * Get puntajeMaximo
     *
     * @return float 
     */
    public function getPuntajeMaximo()
    {
        return $this->puntajeMaximo;
    }

    /**
     * Set formato
     *
     * @param string $formato
     * @return TmItem
     */
    public function setFormato($formato)
    {
        $this->formato = $formato;
    
        return $this;
    }

    /**
     * Get formato
     *
     * @return string 
     */
    public function getFormato()
    {
        return $this->formato;
    }

    /**
     * Set flag
     *
     * @param integer $flag
     * @return TmItem
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;
    
        return $this;
    }

    /**
     * Get flag
     *
     * @return integer 
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set flagUpload
     *
     * @param integer $flagUpload
     * @return TmItem
     */
    public function setFlagUpload($flagUpload)
    {
        $this->flagUpload = $flagUpload;
    
        return $this;
    }

    /**
     * Get flagUpload
     *
     * @return integer 
     */
    public function getFlagUpload()
    {
        return $this->flagUpload;
    }

    /**
     * Set fff
     *
     * @param integer $fff
     * @return TmItem
     */
    public function setFff($fff)
    {
        $this->fff = $fff;
    
        return $this;
    }

    /**
     * Get fff
     *
     * @return integer 
     */
    public function getFff()
    {
        return $this->fff;
    }

    /**
     * Set muestraReporte
     *
     * @param integer $muestraReporte
     * @return TmItem
     */
    public function setMuestraReporte($muestraReporte)
    {
        $this->muestraReporte = $muestraReporte;
    
        return $this;
    }

    /**
     * Get muestraReporte
     *
     * @return integer 
     */
    public function getMuestraReporte()
    {
        return $this->muestraReporte;
    }

    /**
     * Set flagCalculofecha
     *
     * @param integer $flagCalculofecha
     * @return TmItem
     */
    public function setFlagCalculofecha($flagCalculofecha)
    {
        $this->flagCalculofecha = $flagCalculofecha;
    
        return $this;
    }

    /**
     * Get flagCalculofecha
     *
     * @return integer 
     */
    public function getFlagCalculofecha()
    {
        return $this->flagCalculofecha;
    }

    /**
     * Add idCampo
     *
     * @param \proyectos\curriculoBundle\Entity\TdCampos $idCampo
     * @return TmItem
     */
    public function addIdCampo(\proyectos\curriculoBundle\Entity\TdCampos $idCampo)
    {
        $this->idCampo[] = $idCampo;
    
        return $this;
    }

    /**
     * Remove idCampo
     *
     * @param \proyectos\curriculoBundle\Entity\TdCampos $idCampo
     */
    public function removeIdCampo(\proyectos\curriculoBundle\Entity\TdCampos $idCampo)
    {
        $this->idCampo->removeElement($idCampo);
    }

    /**
     * Get idCampo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdCampo()
    {
        return $this->idCampo;
    }

    /**
     * Set idItemPadre
     *
     * @param \proyectos\curriculoBundle\Entity\TmItem $idItemPadre
     * @return TmItem
     */
    public function setIdItemPadre(\proyectos\curriculoBundle\Entity\TmItem $idItemPadre = null)
    {
        $this->idItemPadre = $idItemPadre;
    
        return $this;
    }

    /**
     * Get idItemPadre
     *
     * @return \proyectos\curriculoBundle\Entity\TmItem 
     */
    public function getIdItemPadre()
    {
        return $this->idItemPadre;
    }

    /**
     * Set idTipoCargo
     *
     * @param \proyectos\curriculoBundle\Entity\TrTipoCargo $idTipoCargo
     * @return TmItem
     */
    public function setIdTipoCargo(\proyectos\curriculoBundle\Entity\TrTipoCargo $idTipoCargo = null)
    {
        $this->idTipoCargo = $idTipoCargo;
    
        return $this;
    }

    /**
     * Get idTipoCargo
     *
     * @return \proyectos\curriculoBundle\Entity\TrTipoCargo 
     */
    public function getIdTipoCargo()
    {
        return $this->idTipoCargo;
    }
}