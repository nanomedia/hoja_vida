<?php
namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class DatosPersonalesController extends Controller {
 /**
     * @Route("/frm_update_datospersonales",name="_frm_update_datospersonales")
     */
    public function direcAction(){
        
        return $this->render('hojaVidaBundle:update_formularios:frm_update_datospersonales.html.twig',array("programador"=>"george"));
    }
}
?>