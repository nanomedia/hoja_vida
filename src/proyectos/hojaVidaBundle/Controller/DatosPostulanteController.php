<?php

namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use proyectos\hojaVidaBundle\Util\Mantenimiento;
use proyectos\hojaVidaBundle\Util\Actualizacion;

class DatosPostulanteController extends Controller {

    /**
     * @Route("/frm_update_datospostulante/{codigo}",name="_frm_update_datospostulante")
     */
    public function direcAction($codigo) {

        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");

        $query = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ConvocatoriasAnteriores ddp where ddp.pkDatPostulante=' . $codigo . 'and ddp.estadoAudt=1');
        $dpostul_rep = $query->getResult();
        $data = array();
        $i = 0;
        foreach ($dpostul_rep as $dp) {
            $boton = '<input class="remove_canteriores menos" type="button" value="-">';
            if ($i == 0) {
                $boton = "";
            }
            $data[$i]["Num"] = ($i + 1);
            $data[$i]["convocatoria"] = $dp->getConvocatoria();
            $data[$i]["plaza"] = $dp->getPlaza();
            $data[$i]["etapa"] = $dp->getEtapa();
            $data[$i]["boton"] = $boton;

            $i++;
        }

        $cn = $this->getDoctrine()->getConnection("DB_HOJA_VIDA");     //  getcwd()->doctrin
        $sql = "select * from datos_postulante where PK_DAT_POSTULANTE=" . $codigo . " and  estado_audt=1 ";
        $query_2 = $cn->prepare($sql);
        $query_2->execute();
        $result = $query_2->fetchAll();

        $data_postulante = array("id_postulante" => $codigo, "ConvocatoriasAnteriores" => $data, "variable" => $result);


        return $this->render('hojaVidaBundle:update_formularios:frm_update_datospostulante.html.twig', $data_postulante);
    }

    /**
     * @Route("/updateDatosPostulante",name="_updateDatosPostulante")
     */
    public function updateDatosPostulanteAction(Request $request) {
        $codigo = $request->request->get("id_pos");
        $act = new Actualizacion();
        $act->actualizarDatosPostulante($this, $request);
        
        return $this->redirect($this->generateUrl('_frm_update_datospostulante', array('codigo' => $codigo)));
    }

}

?>