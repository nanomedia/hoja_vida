<?php

namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use proyectos\hojaVidaBundle\Util\Mantenimiento;
use proyectos\hojaVidaBundle\Entity\InformacionCamaInfo;

class InfoCamaraComercioController extends Controller {

    /**
     * @Route("/frm_update_info_cam/{codigo}",name="_frm_update_info_cam")
     */
    public function rubro2Action($codigo) {
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $query = $em->createQuery('SELECT inf FROM hojaVidaBundle:InformacionCamaInfo inf where inf.pkDatPostulante=' . $codigo . ' and inf.estadoAudt=1');
        $info_cam = $query->getResult();
        $info1 = "";
        $info2 = "";
        $info3 = "";
        foreach ($info_cam as $inf) {

            switch ($inf->getTipo()) {
                case "1":
                    $info1 = $inf->getDescripcion();
                    break;
                case "2":
                    $info2 = $inf->getDescripcion();
                    break;
                case "3":
                    $info3 = $inf->getDescripcion();
                    break;
            }
        }
        $data = array("codigo" => $codigo, "info1" => $info1, "info2" => $info2, "info3" => $info3);
        return $this->render('hojaVidaBundle:update_formularios:update_info_cam.html.twig', $data);
    }

    /**
     * @Route("/actualiza_expprofesional",name="_actualiza_expprofesional")
     */
    public function ActualizaExpProfesionalAction(Request $request) {
        $codigo = $request->request->get("id_pos");
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");

        //Actualiza InformacionCamaInfo       
        $query = $em->createQuery('SELECT inf FROM hojaVidaBundle:InformacionCamaInfo inf where inf.pkDatPostulante=' . $codigo . ' and inf.estadoAudt=1');
        $info_cam = $query->getResult();

        foreach ($info_cam as $inf) {
            $inf->setEstadoAudt(2);
            $em->persist($inf);
            $em->flush();
        }

        $m = new Mantenimiento();
        $m->insertarInformacionCamaInfo($this, $request);
        return $this->redirect($this->generateUrl('_frm_update_info_cam', array('codigo' => $codigo)));
    }

}

?>
