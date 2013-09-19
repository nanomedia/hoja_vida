<?php

namespace proyectos\curriculoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

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


        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_CURRICULO");
        $us = $em->createQuery("SELECT count(us) FROM curriculoBundle:SUsuario us")->getResult();
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

        $sql = "SELECT dni, nombre, apellido, email FROM s_usuario ORDER BY $sidx $sord LIMIT $start , $limit";
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
            $botones.='<div class="ui-state-default ui-corner-all" style = "float: left; margin: 3px;padding:2px;"></span><span class = "ui-icon ui-icon-script"></span></div>';

            $responce["rows"][$i]['id'] = $row["dni"];
            $responce["rows"][$i]['cell'] = array($row["dni"], $row["nombre"], $row["apellido"], $row["email"], $botones);
            $i++;
        }

        return new Response(json_encode($responce));
    }

    /**
     * @Route("/panel_usuario",name="_panel_usuario")
     */
    public function panel_usuarioAction() {
//        var_dump();
        return $this->render('curriculoBundle:index:panel_usuario.html.twig');
    }

    /**
     * @Route("/login",name="_login")
     */
    public function logeo() {

        $peticion = $this->getRequest();
        $sesion = $peticion->getSession();
        $error = $peticion->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR, $sesion->get(SecurityContext::AUTHENTICATION_ERROR)
        );
        return $this->render('curriculoBundle:index:acceso.html.twig', array(
                    'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
                    'error' => "Verifique su usuario y/o contraseña."
        ));
    }

    /**
     * @Route("/login_check",name="_login_check")
     */
    public function login_check() {
        
    }

    /**
     * @Route("logout", name="_logout")
     * 
     */
    public function logoutAction() {
        
    }

}

