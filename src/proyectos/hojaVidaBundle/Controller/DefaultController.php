<?php

namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use proyectos\hojaVidaBundle\Util\Actualizacion;

class DefaultController extends Controller {

    /**
     * @Route("/llenagrid",name="_llenagrid")
     */
    public function indexAction(Request $request) {

        $page = $request->request->get("page");
        $limit = $request->request->get("rows");
        $sidx = $request->request->get("sidx");
        $sord = $request->request->get("sord");

        if (!$sidx)
            $sidx = 1;


        $em = $this->getDoctrine()->getEntityManager();
        $us = $em->createQuery("SELECT count(dp) FROM hojaVidaBundle:DatosPostulante dp")->getResult();
        $count = $us[0][1];

        if ($count > 0) {
            $total_pages = ceil($count / $limit);
        } else {
            $total_pages = 0;
        }
        if ($page > $total_pages)
            $page = $total_pages;

        $start = $limit * $page - $limit;

        $cn = $this->getDoctrine()->getConnection();
        $sql = " SELECT dp.pk_dat_postulante,dpe.dni,dpe.nombres,dpe.apellidos,dp.cargo_a_postular,dpe.edad FROM ";
        $sql .=" datos_postulante dp ";
        $sql .=" inner join datos_personales dpe";
        $sql .=" on dp.pk_susuario=dpe.dni  ORDER BY $sidx $sord LIMIT $start , $limit";

        $query = $cn->prepare($sql); //preparo consulta
        $query->execute(); //ejecuto la consulta
        $result = $query->fetchAll(); //guardo los resultados

        $response = array();

        $responce["page"] = $page;
        $responce["total"] = $total_pages;
        $responce["records"] = $count;

        $i = 0;
        foreach ($result as $row) {
            $url = $this->generateUrl('_datos_mantenimiento', array('codigo' => $row["pk_dat_postulante"]));

            $botones = '<div rel="' . $url . '" title="Actualizar" class="row-update ui-state-default ui-corner-all" style="float: left; margin: 3px;padding:2px;"></span><span class="ui-icon ui-icon-extlink"></span></div>';
            $botones.='<div class="ui-state-default ui-corner-all" style = "float: left; margin: 3px;padding:2px;"></span><span class = "ui-icon ui-icon-circle-close"></span></div>';
//            $botones.='<div class="ui-state-default ui-corner-all" style = "float: left; margin: 3px;padding:2px;"></span><span class = "ui-icon ui-icon-script"></span></div>';

            $responce["rows"][$i]['id'] = $row["dni"];
            $responce["rows"][$i]['cell'] = array($row["dni"], $row["nombres"], $row["apellidos"], $row["cargo_a_postular"], $row["edad"], $botones);
            $i++;
        }

        return new Response(json_encode($responce));
    }

    /**
     * @Route("/lista_postulante",name="_lista_postulante")
     */
    public function direcAction() {

        return $this->render('hojaVidaBundle:principal:home.html.twig');
    }

    /**
     * @Route("/datos_mantenimiento/{codigo}",name="_datos_mantenimiento")
     */
    public function datos_mantenimientoAction($codigo) {
        $act = new Actualizacion();
        return $act->llenar_formularios($this, $codigo);
    }

    /**
     * @Route("/actualiza_postulante",name="_actualiza_postulante")
     */
    public function actualiza_postulanteAction(Request $request) {
        $act = new Actualizacion();
        return new Response($act->actualizarDatosPostulante($this, $request));
    }

}
