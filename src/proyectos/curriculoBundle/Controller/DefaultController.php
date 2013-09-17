<?php

namespace proyectos\curriculoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use proyectos\curriculoBundle\Entity\SUsuario;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/cur",name="_cur")
     */
    public function indexAction(Request $request) {

        $page = $request->request->get("page");
        $limit = $request->request->get("rows");
        $sidx = $request->request->get("sidx");
        $sord = $request->request->get("sord");

        if (!$sidx)
            $sidx = 1;


        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_CURRICULO");
        $us = $em->createQuery("SELECT count(u) FROM curriculoBundle:SUsuario u")->getResult();
        $count = $us[0][1];

        if ($count > 0) {
            $total_pages = ceil($count / $limit);
        } else {
            $total_pages = 0;
        }
        if ($page > $total_pages)
            $page = $total_pages;

        $start = $limit * $page - $limit;

        $cn = $this->getDoctrine()->getConnection("DB_CURRICULO");
        $sql = "SELECT u.dni, u.nombre, u.apellido, u.email FROM s_usuario u ORDER BY $sidx $sord LIMIT $start , $limit";
        $query = $cn->prepare($sql); //preparo consulta
        $query->execute(); //ejecuto la consulta
        $result = $query->fetchAll(); //guardo los resultados

        $response = array();

        $responce["page"] = $page;
        $responce["total"] = $total_pages;
        $responce["records"] = $count;

        $i = 0;
        foreach ($result as $row) {

            $botones = '<div class="ui-state-default ui-corner-all" style="float: left; margin-left: 5px;"></span><span class="ui-icon ui-icon-extlink"></span></div>';
            $botones.='<div class="ui-state-default ui-corner-all" style = "float: left; margin-left: 5px;"></span><span class = "ui-icon ui-icon-circle-close"></span></div>';
            $botones.='<div class="ui-state-default ui-corner-all" style = "float: left; margin-left: 5px;"></span><span class = "ui-icon ui-icon-script"></span></div>';


            $responce["rows"][$i]['id'] = $row["dni"];
            $responce["rows"][$i]['cell'] = array($row["dni"], $row["nombre"], $row["apellido"], $row["email"], $botones);
            $i++;
        }

        return new Response(json_encode($responce));
    }

    /**
     * @Route("/direc",name="_direc")
     */
    public function direcAction() {

        return $this->render('curriculoBundle:index:home.html.twig');
    }

}
