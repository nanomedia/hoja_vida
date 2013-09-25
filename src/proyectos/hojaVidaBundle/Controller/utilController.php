<?php

namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class utilController extends Controller {
   /**
     * @Route("/util_universidad",name="_util_universidad")
     */
    public function cbounivAction() {
       $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");

        $query = $em->createQuery('SELECT u FROM hojaVidaBundle:Universidades u');
        $universidades = $query->getResult();
        $option = "<option value='0'>-ELEGIR-</option>";
        foreach ($universidades as $value) {
            $option .= "<option value='" . $value->getIdUniv() . "'>" . $value->getNombreUniv() . "</option>";
        }
        return new Response($option);
    }
}
?>
