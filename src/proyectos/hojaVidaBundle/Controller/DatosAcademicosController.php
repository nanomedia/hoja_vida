<?php

namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use proyectos\hojaVidaBundle\Util\Mantenimiento;
use proyectos\hojaVidaBundle\Util\Actualizacion;
use proyectos\hojaVidaBundle\Entity\DatosAcademicos;
use proyectos\hojaVidaBundle\Util\cargaCombosUpdate;

class DatosAcademicosController extends Controller {

    /**
     * @Route("/frm_update_datosacademicos/{codigo}",name="_frm_update_datosacademicos")
     */
    public function frmDatosAcademicosAction($codigo) {
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $cb = new cargaCombosUpdate();

        $query = $em->createQuery('SELECT da FROM hojaVidaBundle:DatosAcademicos da where da.pkDatPostulante=' . $codigo . ' and da.estadoAudt=1');
        $DatosAcademicos = $query->getResult();
        var_dump($DatosAcademicos[0]->getUnivProcedencia());
        $data1 = array();


        $data1[0]["UnivProcedencia"] = $cb->cboUniversidad($this, $DatosAcademicos[0]->getUnivProcedencia());
        $data1[0]["ColegioProfesional"] = $DatosAcademicos[0]->getColegioProfesional();
        $data1[0]["TituloOtros"] = $DatosAcademicos[0]->getTituloOtros();
        $data1[0]["TesisTitular"] = $DatosAcademicos[0]->getTesisTitular();

        $all_data = array("DatosAcademicos" => $data1);


        return $this->render('hojaVidaBundle:update_formularios:frm_update_datosacademicos.html.twig', $all_data);
    }

}

?>
