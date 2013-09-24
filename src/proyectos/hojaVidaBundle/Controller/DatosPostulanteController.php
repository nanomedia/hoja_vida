<?php
namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class DatosPostulanteController extends Controller {
 /**
     * @Route("/frm_update_datospostulante",name="_frm_update_datospostulante")
     */
    public function direcAction(){
       
        return $this->render('hojaVidaBundle:update_formularios:frm_update_datospostulante.html.twig',array("programador"=>"luis"));
    }
}
?>