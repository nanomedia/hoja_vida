<?php

namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use proyectos\hojaVidaBundle\Entity\InformacionOficinas;
use proyectos\hojaVidaBundle\Util\Mantenimiento;

class rubro2Controller extends Controller {

    /**
     * @Route("/rubro2/{codigo}",name="_rubro2")
     */
    public function rubro2Action($codigo) {
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $query = $em->createQuery('SELECT inf FROM hojaVidaBundle:InformacionOficinas inf where inf.pkDatPostulante=' . $codigo . ' and inf.estadoAudt=1');
        $InformacionOficinas = $query->getResult();

        $info1 = "";
        $info2 = "";
        $info3 = "";


        foreach ($InformacionOficinas as $info) {

            $i = new InformacionOficinas();

            if ($info->getIdOficina() == "1") {
                $info1 = $info->getDescripcion();
            }

            if ($info->getIdOficina() == "2") {
                $info2 = $info->getDescripcion();
            }

            if ($info->getIdOficina() == "3") {
                $info3 = $info->getDescripcion();
            }
        }
        $data = array("infoa" => $info1, "infob" => $info2, "infoc" => $info3, "codigo" => $codigo);
        return $this->render('hojaVidaBundle:update_formularios:frm_update_rubro2.html.twig', $data);
    }

    /**
     * @Route("/upInfo",name="_upInfo")
     */
    public function frmUpdateInfo1Action(Request $request) {
        $codigo = $request->request->get("id_pos");
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $query = $em->createQuery('SELECT inf FROM hojaVidaBundle:InformacionOficinas inf where inf.idOficina=1 and inf.pkDatPostulante=' . $codigo . ' and inf.estadoAudt=1');
        $InformacionOficinas = $query->getResult();

        $dpo = $InformacionOficinas[0];
        $dpo->setEstadoAudt(2);
        $em->persist($dpo);
        $em->flush();
        $m = new Mantenimiento();
        $m->insertarinfojuefis($this, $request);

        return $this->redirect($this->generateUrl('_rubro2', array('codigo' => $codigo)));
    }

    /**
     * @Route("/upInfo2",name="_upInfo2")
     */
    public function frmUpdateInfo2Action(Request $request) {
        $codigo = $request->request->get("id_pos");
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $query = $em->createQuery('SELECT inf FROM hojaVidaBundle:InformacionOficinas inf where inf.idOficina=2 and inf.pkDatPostulante=' . $codigo . ' and inf.estadoAudt=1');
        $InformacionOficinas = $query->getResult();
        
        $dpo = $InformacionOficinas[0];
        $dpo->setEstadoAudt(2);
        $em->persist($dpo);
        $em->flush();
        $m = new Mantenimiento();
        $m->insertardirecproc($this, $request);

        return $this->redirect($this->generateUrl('_rubro2', array('codigo' => $codigo)));
    }

    /**
     * @Route("/upInfo3",name="_upInfo3")
     */
    public function frmUpdateInfo3Action(Request $request) {
        $codigo = $request->request->get("id_pos");
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $query = $em->createQuery('SELECT inf FROM hojaVidaBundle:InformacionOficinas inf where inf.idOficina=3 and inf.pkDatPostulante=' . $codigo . ' and inf.estadoAudt=1');
        $InformacionOficinas = $query->getResult();
        $dpo = $InformacionOficinas[0];

        $dpo->setEstadoAudt(2);
        $em->persist($dpo);
        $em->flush();
        $m = new Mantenimiento();
        $m->insertarinfo_colegio($this, $request);
        return $this->redirect($this->generateUrl('_rubro2', array('codigo' => $codigo)));
    }

}

?>
