<?php

namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use proyectos\hojaVidaBundle\Util\Mantenimiento;
use proyectos\hojaVidaBundle\Util\Actualizacion;
use proyectos\hojaVidaBundle\Entity\OtrasDisciplinas;
use proyectos\hojaVidaBundle\Util\cargaCombosUpdate;

class DatosAcademicosController extends Controller {

    /**
     * @Route("/frm_update_datosacademicos/{codigo}",name="_frm_update_datosacademicos")
     */
    public function frmDatosAcademicosAction($codigo) {
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $cb = new cargaCombosUpdate();

//DatosAcademicos

        $query = $em->createQuery('SELECT da FROM hojaVidaBundle:DatosAcademicos da where da.pkDatPostulante=' . $codigo . ' and da.estadoAudt=1');
        $DatosAcademicos = $query->getResult();

        $data1 = array();
        var_dump($DatosAcademicos);
        $data1["UnivProcedencia"] = $cb->cboUniversidad($this, $DatosAcademicos[0]->getUnivProcedencia());
        $data1["ColegioProfesional"] = $cb->cboColegio($this, $DatosAcademicos[0]->getColegioProfesional());
        $data1["FechaIncorporacion"] = $DatosAcademicos[0]->getFechaIncorporacion();
        $data1["TituloOtros"] = trim($DatosAcademicos[0]->getTituloOtros());
        $data1["TesisTitular"] = trim($DatosAcademicos[0]->getTesisTitular());

//MeritosUniv       
        $query2 = $em->createQuery('SELECT mer FROM hojaVidaBundle:MeritosUniv mer where mer.pkDatAcademicos=' . $DatosAcademicos[0]->getPkDatAcademicos() . ' and mer.estadoAudt=1');
        $MeritosUniv = $query2->getResult();
        $mer = $MeritosUniv[0];

        $data2["Puesto"] = $cb->cboPuestos($mer->getPuesto());
        $data2["Anio"] = $cb->cboAnio($mer->getAnio());
        $data2["Universidad"] = $cb->cboUniversidad($this, $mer->getUniversidad());

        //DocDerecho
        $query3 = $em->createQuery('SELECT doc FROM hojaVidaBundle:DocDerecho doc where doc.pkDatAcademicos=' . $DatosAcademicos[0]->getPkDatAcademicos() . ' and doc.estadoAudt=1');
        $DocDerecho = $query3->getResult();
        $data3 = array();
        $i3 = 0;
        foreach ($DocDerecho as $doc) {
            $boton = '<input type="button" class="remove_docderecho menos" value="-">';
            if ($i3 == 0) {
                $boton = "";
            }

            $data3[$i3]["Universidad"] = $cb->cboUniversidad($this, $doc->getUniversidad());
            $data3[$i3]["Nivel"] = $cb->cboNiveles($doc->getNivel());
            $data3[$i3]["Mension"] = $doc->getMension();
            $data3[$i3]["Anio"] = $cb->cboAnio($doc->getAnio());
            $data3[$i3]["boton"] = $boton;

            $i3++;
        }

//MaeDerecho
        $query4 = $em->createQuery('SELECT mae FROM hojaVidaBundle:MaeDerecho mae where mae.pkDatAcademicos=' . $DatosAcademicos[0]->getPkDatAcademicos() . ' and mae.estadoAudt=1');
        $MaeDerecho = $query4->getResult();
        $data4 = array();
        $i4 = 0;

        foreach ($MaeDerecho as $mae) {
            $boton = '<input type="button" class="remove_MaeDerecho menos" value="-">';
            if ($i4 == 0) {
                $boton = "";
            }
            $data4[$i4]["Universidad"] = $cb->cboUniversidad($this, $mae->getUniversidad());
            $data4[$i4]["Nivel"] = $cb->cboNiveles($mae->getNivel());
            $data4[$i4]["Mension"] = $mae->getMension();
            $data4[$i4]["Anio"] = $cb->cboAnio($mae->getAnio());
            $data4[$i4]["boton"] = $boton;
            $i4++;
        }



        $query5 = $em->createQuery('SELECT otr FROM hojaVidaBundle:OtrasDisciplinas otr where otr.pkDatAcademicos=' . $DatosAcademicos[0]->getPkDatAcademicos() . ' and otr.estadoAudt=1');
        $OtrasDisciplinas = $query5->getResult();
        $data5 = array();
        $i5 = 0;
        foreach ($OtrasDisciplinas as $otr) {
            $boton = '<input type="button" class="remove_MaeDerOtrasDisc menos" value="-">';
            if ($i5 == 0) {
                $boton = "";
            }
            $data5[$i5]["Universidad"] = $cb->cboUniversidad($this, $otr->getUniversidad());
            $data5[$i5]["Nivel"] = $cb->cboNiveles($otr->getNivel());
            $data5[$i5]["Mension"] = $otr->getMension();
            $data5[$i5]["Anio"] = $cb->cboAnio($otr->getAnio());
            $data5[$i5]["boton"] = $boton;
            $i5++;
        }

        $all_data = array("DatosAcademicos" => $data1, "MeritosUniv" => $data2, "DocDerecho" => $data3, "MaeDerecho" => $data4, "OtrasDisciplinas" => $data5);

        return $this->render('hojaVidaBundle:update_formularios:frm_update_datosacademicos.html.twig', $all_data);
    }

}

?>
