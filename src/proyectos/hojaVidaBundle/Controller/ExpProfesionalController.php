<?php

namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use proyectos\hojaVidaBundle\Entity\DocDesProfesional;

class ExpProfesionalController extends Controller {

    /**
     * @Route("/frm_update_expprofesional/{codigo}",name="_frm_update_expprofesional")
     */
    public function direcAction($codigo) {
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
//        $dp = new DocDesProfesional();

        $query = $em->createQuery('SELECT ddp FROM hojaVidaBundle:DocDesProfesional ddp where ddp.pkDatPostulante='.$codigo);
        $dpostul_rep = $query->getResult();
//
        $data = array();
        $i = 0;
        foreach ($dpostul_rep as $dp) {
            $data[$i]["Num"] = ($i+1);
            $data[$i]["NumExp"] = $dp->getNumExp();
            $data[$i]["Ddas"] = $dp->getDdas();
            $data[$i]["Ddae"] = $dp->getDdae();
            $data[$i]["Materia"] = $dp->getMateria();
            $data[$i]["Especialidad"] = $dp->getEspecialidad();
            $data[$i]["Calificacion1"] = $dp->getCalificacion1();
            $data[$i]["Calificacion2"] = $dp->getCalificacion2();
            $i++;
        }
//        return var_dump($data);
        return $this->render('hojaVidaBundle:update_formularios:frm_update_expprofesional.html.twig',array("DocDesProfesional"=>$data));
    }

}

?>