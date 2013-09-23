<?php

namespace proyectos\AccesoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\SecurityContext;

class AccesoController extends Controller {

   
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
                    'error' => $error
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
