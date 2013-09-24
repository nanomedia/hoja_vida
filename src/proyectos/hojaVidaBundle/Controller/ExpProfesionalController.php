<?php
namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class ExpProfesionalController extends Controller {
 /**
     * @Route("/frm_update_expprofesional",name="_frm_update_expprofesional")
     */
    public function direcAction() {
        
        
       
       
        return $this->render('hojaVidaBundle:update_formularios:frm_update_expprofesional.html.twig',array("programador"=>"cesar"));
    }
}
?>