<?php

namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class rubro2Controller extends Controller {

    /**
     * @Route("/rubro2/{codigo}",name="_rubro2")
     */
    public function rubro2Action($codigo) {
        
        return $this->render('hojaVidaBundle:update_formularios:frm_update_rubro2.html.twig');
    }

}

?>
