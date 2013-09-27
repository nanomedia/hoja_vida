<?php

namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use proyectos\hojaVidaBundle\Util\Mantenimiento;

class MovMigratorioController extends Controller {

    /**
     * @Route("/frm_update_movMigratorio/{codigo}",name="_frm_update_movMigratorio")
     */
    public function movAction($codigo) {

        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $quey = $em->createQuery('SELECT mov FROM hojaVidaBundle:MovimientoMigratorio mov where  mov.pkDatPostulante=' . $codigo . ' and mov.estadoAudt=1');
        $MovimientoMigratorio = $quey->getResult();
        $dataMovMig = array();
        $i = 0;
        $cbo = array("-ELEGIR-", "ENTRADA", "SALIDA");

        foreach ($MovimientoMigratorio as $mov) {
            $boton = '<input class="remove_mov_migratorio menos" type="button" value="-">';
            if ($i == 0) {
                $boton = "";
            }
            $cbotipo = "";
            for ($j = 0; $j < count($cbo); $j++) {
                $selected = "";
                if ($j == $mov->getTipo()) {
                    $selected = "selected";
                }
                $cbotipo.="<option " . $selected . " value=" . $j . ">" . $cbo[$j] . "</option>";
            }

            $dataMovMig[$i]["Tipo"] = $cbotipo;
            $dataMovMig[$i]["Fecha"] = $mov->getFecha() . "";
            $dataMovMig[$i]["DestinoProcedencia"] = $mov->getDestinoProcedencia();
            $dataMovMig[$i]["boton"] = $boton;
            $i++;
        }

        $data = array("codigo" => $codigo, "MovimientoMigratorio" => $dataMovMig);
        return $this->render('hojaVidaBundle:update_formularios:update_mov_migratorio.html.twig', $data);
    }

    /**
     * @Route("/update_movMigratorio",name="_update_movMigratorio")
     */
    public function update_movMigratorioAction(Request $request) {
        $codigo = $request->request->get("id_pos");
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $quey = $em->createQuery('SELECT mov FROM hojaVidaBundle:MovimientoMigratorio mov where  mov.pkDatPostulante=' . $codigo . ' and mov.estadoAudt=1');
        $MovimientoMigratorio = $quey->getResult();

        foreach ($MovimientoMigratorio as $mov) {
            $mov->setEstadoAudt(2);
            $em->persist($mov);
            $em->flush();
        }
        $m = new Mantenimiento();
        $m->insertarMovimientoMigratorio($this, $request);


        return $this->redirect($this->generateUrl('_frm_update_movMigratorio', array('codigo' => $codigo)));
    }

}

?>
