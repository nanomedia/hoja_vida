<?php

namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/curo",name="_curo")
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
        $sql = "SELECT dt.pk_dat_postulante,dt.cargo_a_postular, dt.tipo_curso,dt.nota, dt.plazas_vacantes  FROM datos_postulante dt ORDER BY $sidx $sord LIMIT $start , $limit";
        $query = $cn->prepare($sql); //preparo consulta
        $query->execute(); //ejecuto la consulta
        $result = $query->fetchAll(); //guardo los resultados

        $response = array();

        $responce["page"] = $page;
        $responce["total"] = $total_pages;
        $responce["records"] = $count;

        $i = 0;
        foreach ($result as $row) {

            $botones = '<div class="ui-state-default ui-corner-all" style="float: left; margin: 3px;padding:2px;"></span><span class="ui-icon ui-icon-extlink"></span></div>';
            $botones.='<div class="ui-state-default ui-corner-all" style = "float: left; margin: 3px;padding:2px;"></span><span class = "ui-icon ui-icon-circle-close"></span></div>';
//            $botones.='<div class="ui-state-default ui-corner-all" style = "float: left; margin: 3px;padding:2px;"></span><span class = "ui-icon ui-icon-script"></span></div>';

            $responce["rows"][$i]['id'] = $row["pk_dat_postulante"];
            $responce["rows"][$i]['cell'] = array($row["pk_dat_postulante"], $row["cargo_a_postular"], $row["tipo_curso"], $row["nota"], $row["plazas_vacantes"], $botones);
            $i++;
        }

        return new Response(json_encode($responce));
    }

    /**
     * @Route("/direc",name="_direc")
     */
    public function direcAction() {

        return $this->render('hojaVidaBundle:principal:home.html.twig');
    }

}
