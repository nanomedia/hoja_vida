<?php

namespace proyectos\hojaVidaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProcesosAdministrativos
 *
 * @ORM\Table(name="procesos_administrativos")
 * @ORM\Entity
 */
class ProcesosAdministrativos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PK_PROCESOS_ADM", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkProcesosAdm;

    /**
     * @var integer
     *
     * @ORM\Column(name="TIPO", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_INSTITUCION", type="integer", nullable=true)
     */
    private $idInstitucion;

    /**
     * @var string
     *
     * @ORM\Column(name="RESOLUCION", type="string", length=250, nullable=true)
     */
    private $resolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="SANCION", type="string", length=250, nullable=true)
     */
    private $sancion;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADO", type="string", length=250, nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="EXPEDIENTE", type="string", length=250, nullable=true)
     */
    private $expediente;

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
     * Get pkProcesosAdm
     *
     * @return integer 
     */
    public function getPkProcesosAdm()
    {
        return $this->pkProcesosAdm;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return ProcesosAdministrativos
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set idInstitucion
     *
     * @param integer $idInstitucion
     * @return ProcesosAdministrativos
     */
    public function setIdInstitucion($idInstitucion)
    {
        $this->idInstitucion = $idInstitucion;
    
        return $this;
    }

    /**
     * Get idInstitucion
     *
     * @return integer 
     */
    public function getIdInstitucion()
    {
        return $this->idInstitucion;
    }

    /**
     * Set resolucion
     *
     * @param string $resolucion
     * @return ProcesosAdministrativos
     */
    public function setResolucion($resolucion)
    {
        $this->resolucion = $resolucion;
    
        return $this;
    }

    /**
     * Get resolucion
     *
     * @return string 
     */
    public function getResolucion()
    {
        return $this->resolucion;
    }

    /**
     * Set sancion
     *
     * @param string $sancion
     * @return ProcesosAdministrativos
     */
    public function setSancion($sancion)
    {
        $this->sancion = $sancion;
    
        return $this;
    }

    /**
     * Get sancion
     *
     * @return string 
     */
    public function getSancion()
    {
        return $this->sancion;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return ProcesosAdministrativos
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set expediente
     *
     * @param string $expediente
     * @return ProcesosAdministrativos
     */
    public function setExpediente($expediente)
    {
        $this->expediente = $expediente;
    
        return $this;
    }

    /**
     * Get expediente
     *
     * @return string 
     */
    public function getExpediente()
    {
        return $this->expediente;
    }

    /**
     * Set pkDatPostulante
     *
     * @param \proyectos\hojaVidaBundle\Entity\DatosPostulante $pkDatPostulante
     * @return ProcesosAdministrativos
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