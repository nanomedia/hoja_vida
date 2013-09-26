<?php

namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use proyectos\hojaVidaBundle\Util\Mantenimiento;

class rubro4Controller extends Controller {

    /**
     * @Route("/rubro4/{codigo}",name="_rubro4")
     */
    public function rubro4Action($codigo) {
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $query = $em->createQuery('SELECT ddp FROM hojaVidaBundle:InformacionRegistroDe ddp where ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $rubro4 = $query->getResult();
        $data = array();
        $i = 0;
        foreach ($rubro4 as $dp) {
            $data[$i]["DEUDORES_ALIMENTARIOS"] = $dp->getDeudoresAlimentarios();
            $data[$i]["COMPLEMENTARIA"] = $dp->getComplementaria();
            $i++;
        }
        return $this->render('hojaVidaBundle:update_formularios:frm_update_rubro4.html.twig', array("info_reg" => $data, "codigo" => $codigo));
    }

    /**
     * @Route("/upRubro4",name="_up_rubro4")
     */
    public function rubro4_updateAction(Request $request) {
        $codigo = $request->request->get("id_pos");
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $query = $em->createQuery('SELECT inf FROM hojaVidaBundle:InformacionRegistroDe inf where inf.pkDatPostulante=' . $codigo . ' and inf.estadoAudt=1');
        $rubro4 = $query->getResult();
        
        $dpo = $rubro4[0];
        $dpo->setEstadoAudt(2);
        $em->persist($dpo);
        $em->flush();
        
        $m = new Mantenimiento();
        $m->insertarInformacionRegistroDe($this, $request);
        return $this->redirect($this->generateUrl('_rubro4', array('codigo' => $codigo)));
        
        
        
        
        //$InformacionRegistroDe();

        return new Response(var_dump($rubro4));
//        $dpo = $rubro4[0];
//        $dpo->setEstadoAudt(2);
//        $em->persist($dpo);
//        $em->flush();
//        
//        $m = new Mantenimiento();
//        $m->insertarInformacionRegistroDe($this, $request);
//        return $this->redirect($this->generateUrl('_rubro4', array('codigo' => $codigo)));
    }

}

?>
