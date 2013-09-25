<?php

namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use proyectos\hojaVidaBundle\Entity\DocDesProfesional;
use proyectos\hojaVidaBundle\Util\cargaCombosUpdate;
use proyectos\hojaVidaBundle\Util\Mantenimiento;

class ExpProfesionalController extends Controller {

    /**
     * @Route("/frm_update_expprofesional/{codigo}",name="_frm_update_expprofesional")
     */
    public function llena_ExpProfesionalAction($codigo) {
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $cb = new cargaCombosUpdate();
//DocDesProfesional
        $query = $em->createQuery('SELECT ddp FROM hojaVidaBundle:DocDesProfesional ddp where ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_rep = $query->getResult();
        $data = array();
        $i = 0;
        foreach ($dpostul_rep as $dp) {
            $boton = '<input type="button" class="remove_row_ddp menos" value="-" >';
            if ($i == 0) {
                $boton = "";
            }
            $data[$i]["Num"] = ($i + 1);
            $data[$i]["NumExp"] = $dp->getNumExp();
            $data[$i]["Ddas"] = $dp->getDdas();
            $data[$i]["Ddae"] = $dp->getDdae();
            $data[$i]["Materia"] = $dp->getMateria();

            $data[$i]["Especialidad"] = $cb->cboEspecialidad($dp->getEspecialidad());
            $data[$i]["Calificacion1"] = $cb->cboCalificacion($dp->getCalificacion1());
            $data[$i]["Calificacion2"] = $cb->cboCalificacion($dp->getCalificacion2());
            $data[$i]["boton"] = $boton;
            $i++;
        }
//CalJudFis
        $query2 = $em->createQuery('SELECT cjf FROM hojaVidaBundle:CalJudFis cjf where cjf.pkDatPostulante=' . $codigo . ' and cjf.estadoAudt=1');
        $CalJudFis = $query2->getResult();
        $data2 = array();
        $i2 = 0;
        foreach ($CalJudFis as $cjf) {
            $boton = '<input class="remove_row_cdj menos" type="button" value="-">';
            if ($i2 == 0) {
                $boton = "";
            }
            $data2[$i2]["Num"] = ($i2 + 1);
            $data2[$i2]["NumExp"] = $cjf->getNumExp();
            $data2[$i2]["TipResolucion"] = $cjf->getTipResolucion();
            $data2[$i2]["FechaRes"] = $cjf->getFechaRes();
            $data2[$i2]["Ddagraviado"] = $cjf->getDdagraviado();
            $data2[$i2]["Ddagresor"] = $cjf->getDdagresor();
            $data2[$i2]["Materia"] = $cjf->getMateria();
            $data2[$i2]["Especialidad"] = $cb->cboEspecialidad($cjf->getEspecialidad());
            $data2[$i2]["Nota"] = $cb->cboCalificacion($cjf->getNota());
            $data2[$i2]["boton"] = $boton;
            $i2++;
        }
//DetSituacionLaboral
        
        $query3 = $em->createQuery('SELECT det FROM hojaVidaBundle:DetSituacionLaboral det where det.pkDatPostulante=' . $codigo . ' and det.estadoAudt=1');
        $DetSituacionLaboral = $query3->getResult();
        $data3 = array();
        $i3 = 0;
        foreach ($DetSituacionLaboral as $det) {

            $data3[$i3]["SituacionLaboral"] = $det->getSituacionLaboral();
            $data3[$i3]["CentroTrabajo"] = $det->getCentroTrabajo();
            $data3[$i3]["Cargo"] = $det->getCargo();
            $data3[$i3]["Periodo"] = $det->getPeriodo();
            $i3++;
        }
//MagistradoRatificado
        $query4 = $em->createQuery('SELECT mar FROM hojaVidaBundle:MagistradoRatificado mar where mar.pkDatPostulante=' . $codigo . ' and mar.estadoAudt=1');
        $MagistradoRatificado = $query4->getResult();
        $data4 = $MagistradoRatificado[0];


//DocenciaUniversitaria      
        $query5 = $em->createQuery('SELECT docu FROM hojaVidaBundle:DocenciaUniversitaria docu where docu.pkDatPostulante=' . $codigo . ' and docu.estadoAudt=1');
        $DocenciaUniversitaria = $query5->getResult();
        $data5 = array();
        $i5 = 0;
        foreach ($DocenciaUniversitaria as $docu) {
            $boton = '<input type="button"  value="-" class="remove_docuni menos">';
            if ($i5 == 0) {
                $boton = "";
            }

            $data5[$i5]["Universidad"] = $cb->cboUniversidad($this, $docu->getUniversidad());
            $data5[$i5]["Facultad"] = $docu->getFacultad();
            $data5[$i5]["Condicion"] = $cb->cboCondicion($docu->getCondicion());
            $data5[$i5]["Categoria"] = $cb->cboCategoria($docu->getCategoria());
            $data5[$i5]["Cursos"] = $docu->getCursos();
            $data5[$i5]["Periodo"] = $docu->getPeriodo();
            $data5[$i5]["boton"] = $boton;

            $i5++;
        }
//Publicaciones
        $query6 = $em->createQuery('SELECT pub FROM hojaVidaBundle:Publicaciones pub where pub.pkDatPostulante=' . $codigo . ' and pub.estadoAudt=1');
        $Publicaciones = $query6->getResult();
        $data_public = $Publicaciones[0];

//ProdJurFiscal        
        $query7 = $em->createQuery('SELECT pjf FROM hojaVidaBundle:ProdJurFiscal pjf where pjf.pkDatPostulante=' . $codigo . ' and pjf.estadoAudt=1');
        $ProdJurFiscal = $query7->getResult();
        $data7 = array();

        $data7[0]["Respuesta"] = $cb->cboProdJurFiscal($ProdJurFiscal[0]->getRespuesta());
        $data7[0]["DetRespuesta"] = $ProdJurFiscal[0]->getDetRespuesta();

//LicenciasOtorgadas
        $query8 = $em->createQuery('SELECT lic FROM hojaVidaBundle:LicenciasOtorgadas lic where lic.pkDatPostulante=' . $codigo . ' and lic.estadoAudt=1');
        $LicenciasOtorgadas = $query8->getResult();
        $data8 = array();
        $i8 = 0;
        $sum_dias = 0;
        foreach ($LicenciasOtorgadas as $lic) {
            $boton = '<input class="remove_lic_otor menos" type="button" value="-">';
            if ($i8 == 0) {
                $boton = "";
            }

            $data8[$i8]["Anio"] = $cb->cboAnio($lic->getAnio());
            $data8[$i8]["Motivo"] = $lic->getMotivo();
            $data8[$i8]["Dias"] = $lic->getDias();
            $data8[$i8]["boton"] = $boton;
            $sum_dias +=$data8[$i8]["Dias"];
            $i8++;
        }



        $data_content = array(
            "id_postulante" => $codigo,
            "DocDesProfesional" => $data,
            "CalJudFis" => $data2,
            "SitLaboral" => $data3[0]["SituacionLaboral"],
            "DetSituacionLaboral" => $data3,
            "MagistradoRatificado" => $data4,
            "DocenciaUniversitaria" => $data5,
            "Publicaciones" => $data_public,
            "ProdJurFiscal" => $data7[0],
            "LicenciasOtorgadas" => $data8,
            "sumdias" => $sum_dias
        );


        return $this->render('hojaVidaBundle:update_formularios:frm_update_expprofesional.html.twig', $data_content);
    }

    /**
     * @Route("/_update_expprofesional",name="_update_expprofesional")
     */
    public function ActualizaExpProfesionalAction(Request $request) {
        $codigo = $request->request->get("id_pos");
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");

        //Actualiza DocDesProfesional       
        $query = $em->createQuery('SELECT ddp FROM hojaVidaBundle:DocDesProfesional ddp where ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_rep = $query->getResult();

        foreach ($dpostul_rep as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }

        //Actualiza CalJudFis       
        $query2 = $em->createQuery('SELECT cjf FROM hojaVidaBundle:CalJudFis cjf where cjf.pkDatPostulante=' . $codigo . ' and cjf.estadoAudt=1');
        $CalJudFis = $query2->getResult();

        foreach ($CalJudFis as $cjf) {
            $cjf->setEstadoAudt(2);
            $em->persist($cjf);
            $em->flush();
        }

        //Actualiza DetSituacionLaboral      
        $query3 = $em->createQuery('SELECT det FROM hojaVidaBundle:DetSituacionLaboral det where det.pkDatPostulante=' . $codigo . ' and det.estadoAudt=1');
        $DetSituacionLaboral = $query3->getResult();
        foreach ($DetSituacionLaboral as $det) {
            $det->setEstadoAudt(2);
            $em->persist($det);
            $em->flush();
        }
        //Actualiza MagistradoRatificado 
        $query4 = $em->createQuery('SELECT mar FROM hojaVidaBundle:MagistradoRatificado mar where mar.pkDatPostulante=' . $codigo . ' and mar.estadoAudt=1');
        $MagistradoRatificado = $query4->getResult();

        foreach ($MagistradoRatificado as $mar) {
            $mar->setEstadoAudt(2);
            $em->persist($mar);
            $em->flush();
        }

        //Actualiza DocenciaUniversitaria
        $query5 = $em->createQuery('SELECT docu FROM hojaVidaBundle:DocenciaUniversitaria docu where docu.pkDatPostulante=' . $codigo . ' and docu.estadoAudt=1');
        $DocenciaUniversitaria = $query5->getResult();

        foreach ($DocenciaUniversitaria as $docu) {
            $docu->setEstadoAudt(2);
            $em->persist($docu);
            $em->flush();
        }
        //Actualiza Publicaciones
        $query6 = $em->createQuery('SELECT pub FROM hojaVidaBundle:Publicaciones pub where pub.pkDatPostulante=' . $codigo . ' and pub.estadoAudt=1');
        $Publicaciones = $query6->getResult();
        $data_public = $Publicaciones[0];
        $data_public->setEstadoAudt(2);
        $em->persist($docu);
        $em->flush();

        //ProdJurFiscal        
        $query7 = $em->createQuery('SELECT pjf FROM hojaVidaBundle:ProdJurFiscal pjf where pjf.pkDatPostulante=' . $codigo . ' and pjf.estadoAudt=1');
        $ProdJurFiscal = $query7->getResult();
        $ProdJurFiscal[0]->setEstadoAudt(2);
        $em->persist($ProdJurFiscal[0]);
        $em->flush();

        //LicenciasOtorgadas
        $query8 = $em->createQuery('SELECT lic FROM hojaVidaBundle:LicenciasOtorgadas lic where lic.pkDatPostulante=' . $codigo . ' and lic.estadoAudt=1');
        $LicenciasOtorgadas = $query8->getResult();

        foreach ($LicenciasOtorgadas as $lic) {
            $lic->setEstadoAudt(2);
            $em->persist($lic);
            $em->flush();
        }

        $m = new Mantenimiento();
        $m->insertarExpProfesional($this, $request);

        return $this->redirect($this->generateUrl('_frm_update_expprofesional', array('codigo' => $codigo)));
    }

}

?>