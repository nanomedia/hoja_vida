<?php

namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use proyectos\hojaVidaBundle\Util\Actualizacion;

class PruebaController extends Controller{
   
    
/**
 * @Route("/red",name="_Postulante_red") 
 */
   public function iniciando_prebasAction(Request $request){
      
       $act=new Actualizacion();
       $res=$act->actualizarDatosPostulante($this,$request);
       
        return new Response($res);
       
   }
    
    
    
    
}

?>
