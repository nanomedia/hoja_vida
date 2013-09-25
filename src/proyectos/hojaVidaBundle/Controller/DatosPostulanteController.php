<?php
namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class DatosPostulanteController extends Controller {
    /**                                             
     * @Route("/frm_update_datospostulante/{codigo}",name="_frm_update_datospostulante")
     */                                                                                 
    public function direcAction($codigo){
        
        $cn=$this->getDoctrine()->getConnection("DB_HOJA_VIDA");     //  getcwd()->doctrin
        $sql = "select * from datos_postulante where PK_DAT_POSTULANTE=".$codigo." ";

            $query = $cn->prepare($sql); 
            $query->execute();
            $result = $query->fetchAll();
            
        return $this->render('hojaVidaBundle:update_formularios:frm_update_datospostulante.html.twig',array( "programador"=>"luis","variable"=>$result));
       
    }
}
?>