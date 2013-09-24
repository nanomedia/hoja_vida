<?php
namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class dsggdsController extends Controller {
 /**
     * @Route("/frm_update_conducta",name="_frm_update_conducta")
     */
    public function direcAction() {
       
        return $this->render('hojaVidaBundle:update_formularios:frm_update_conducta.html.twig',array("programador"=>"cesar"));
    }
}
?>