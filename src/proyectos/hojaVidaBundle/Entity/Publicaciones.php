<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publicaciones
 *
 * @ORM\Table(name="publicaciones")
 * @ORM\Entity
 */
class Publicaciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_PUBLICACIONES", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkPublicaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBROS_TEXTOS_UNIV", type="string", length=100, nullable=true)
     */
    private $librosTextosUniv;

    /**
     * @var string
     *
     * @ORM\Column(name="INV_JURIDICAS", type="string", length=100, nullable=true)
     */
    private $invJuridicas;

    /**
     * @var string
     *
     * @ORM\Column(name="ENSAYOS_JURIDICO", type="string", length=100, nullable=true)
     */
    private $ensayosJuridico;

    /**
     * @var string
     *
     * @ORM\Column(name="ARTICULOS_JURIDICOS", type="string", length=100, nullable=true)
     */
    private $articulosJuridicos;

    /**
     * @var string
     *
     * @ORM\Column(name="ARTICULOS_NO_JURIDICOS", type="string", length=100, nullable=true)
     */
    private $articulosNoJuridicos;

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
     * Get pkPublicaciones
     *
     * @return integer 
     */
    public function getPkPublicaciones()
    {
        return $this->pkPublicaciones;
    }

    /**
     * Set librosTextosUniv
     *
     * @param string $librosTextosUniv
     * @return Publicaciones
     */
    public function setLibrosTextosUniv($librosTextosUniv)
    {
        $this->librosTextosUniv = $librosTextosUniv;
    
        return $this;
    }

    /**
     * Get librosTextosUniv
     *
     * @return string 
     */
    public function getLibrosTextosUniv()
    {
        return $this->librosTextosUniv;
    }

    /**
     * Set invJuridicas
     *
     * @param string $invJuridicas
     * @return Publicaciones
     */
    public function setInvJuridicas($invJuridicas)
    {
        $this->invJuridicas = $invJuridicas;
    
        return $this;
    }

    /**
     * Get invJuridicas
     *
     * @return string 
     */
    public function getInvJuridicas()
    {
        return $this->invJuridicas;
    }

    /**
     * Set ensayosJuridico
     *
     * @param string $ensayosJuridico
     * @return Publicaciones
     */
    public function setEnsayosJuridico($ensayosJuridico)
    {
        $this->ensayosJuridico = $ensayosJuridico;
    
        return $this;
    }

    /**
     * Get ensayosJuridico
     *
     * @return string 
     */
    public function getEnsayosJuridico()
    {
        return $this->ensayosJuridico;
    }

    /**
     * Set articulosJuridicos
     *
     * @param string $articulosJuridicos
     * @return Publicaciones
     */
    public function setArticulosJuridicos($articulosJuridicos)
    {
        $this->articulosJuridicos = $articulosJuridicos;
    
        return $this;
    }

    /**
     * Get articulosJuridicos
     *
     * @return string 
     */
    public function getArticulosJuridicos()
    {
        return $this->articulosJuridicos;
    }

    /**
     * Set articulosNoJuridicos
     *
     * @param string $articulosNoJuridicos
     * @return Publicaciones
     */
    public function setArticulosNoJuridicos($articulosNoJuridicos)
    {
        $this->articulosNoJuridicos = $articulosNoJuridicos;
    
        return $this;
    }

    /**
     * Get articulosNoJuridicos
     *
     * @return string 
     */
    public function getArticulosNoJuridicos()
    {
        return $this->articulosNoJuridicos;
    }

    /**
     * Set pkDatPostulante
     *
     * @param \proyectos\hojaVidaBundle\Entity\DatosPostulante $pkDatPostulante
     * @return Publicaciones
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