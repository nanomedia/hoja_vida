<?php
namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class ConductaController extends Controller {
 /**
     * @Route("/frm_update_conducta/{codigo}",name="_frm_update_conducta")
     */
    public function direcAction($codigo) {


        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
//        $dp = new DocDesProfesional();

        $query = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosJudiciales ddp where ddp.tipo=1 and ddp.pkDatPostulante='.$codigo);
        $dpostul_rep = $query->getResult();
//
        $dataA = array();
        $i = 0;
        foreach ($dpostul_rep as $dp) {
            $dataA[$i]["Num"] = ($i+1);
            $dataA[$i]["Expediente"] = $dp->getExpediente();
            $dataA[$i]["Organo"] = $dp->getOrgano();
            $dataA[$i]["Demandadoagresor"] = $dp->getDemandadoagresor();
            $dataA[$i]["Materia"] = $dp->getMateria();
            $dataA[$i]["Estado"] = $dp->getEstado();			
            $i++;
        }


        $queryB = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosJudiciales ddp where ddp.tipo=2 and ddp.pkDatPostulante='.$codigo);
        $dpostul_repB = $queryB->getResult();
//
        $dataB = array();
        $iB = 0;
        foreach ($dpostul_repB as $dpB) {
            $dataB[$iB]["Num"] = ($iB+1);
            $dataB[$iB]["Expediente"] = $dpB->getExpediente();
            $dataB[$iB]["Organo"] = $dpB->getOrgano();
            $dataB[$iB]["Demandadoagresor"] = $dpB->getDemandadoagresor();
            $dataB[$iB]["Materia"] = $dpB->getMateria();
            $dataB[$iB]["Estado"] = $dpB->getEstado();			
            $iB++;
        }
		

        $queryC = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosJudiciales ddp where ddp.tipo=3 and ddp.pkDatPostulante='.$codigo);
        $dpostul_repC = $queryC->getResult();
//
        $dataC = array();
        $iC = 0;
        foreach ($dpostul_repC as $dpC) {
            $dataC[$iC]["Num"] = ($iC+1);
            $dataC[$iC]["Expediente"] = $dpC->getExpediente();
            $dataC[$iC]["Organo"] = $dpC->getOrgano();
            $dataC[$iC]["Demandadoagresor"] = $dpC->getDemandadoagresor();
            $dataC[$iC]["Materia"] = $dpC->getMateria();
            $dataC[$iC]["Estado"] = $dpC->getEstado();			
            $iC++;
        }
		





        $queryD = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosAdministrativos ddp where ddp.tipo=1 and ddp.pkDatPostulante='.$codigo);
        $dpostul_repD = $queryD->getResult();
//
        $dataD = array();
        $iD = 0;
        foreach ($dpostul_repD as $dpD) {
            $dataD[$iD]["Num"] = ($iD+1);
            $dataD[$iD]["IdInstitucion"] = $dpD->getIdInstitucion();
            $dataD[$iD]["Resolucion"] = $dpD->getResolucion();
            $dataD[$iD]["Sancion"] = $dpD->getSancion();
            $dataD[$iD]["Estado"] = $dpD->getEstado();			
            $iD++;
        }
		


        $queryE = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosAdministrativos ddp where ddp.tipo=2 and ddp.pkDatPostulante='.$codigo);
        $dpostul_repE = $queryE->getResult();
//
        $dataE = array();
        $iE = 0;
        foreach ($dpostul_repE as $dpE) {
            $dataE[$iE]["Num"] = ($iE+1);
            $dataE[$iE]["IdInstitucion"] = $dpE->getIdInstitucion();
            $dataE[$iE]["Resolucion"] = $dpE->getResolucion();
            $dataE[$iE]["Sancion"] = $dpE->getSancion();
            $iE++;
        }



        $queryF = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosAdministrativos ddp where ddp.tipo=3 and ddp.pkDatPostulante='.$codigo);
        $dpostul_repF = $queryF->getResult();
//
        $dataF = array();
        $iF = 0;
        foreach ($dpostul_repF as $dpF) {
            $dataF[$iF]["Num"] = ($iF+1);
            $dataF[$iF]["IdInstitucion"] = $dpF->getIdInstitucion();
            $dataF[$iF]["Sancion"] = $dpF->getSancion();
			$dataF[$iF]["Expediente"] = $dpF->getExpediente();			           
            $iF++;
        }

// $dataF[$iF]["Expediente"] = $dpF->getExpediente();			
//var_dump($dpostul_repF);
		
       

        $queryFA = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.tipo=1 and ddp.pkDatPostulante='.$codigo);
        $dpostul_repFA = $queryFA->getResult();
//
        $dataFA = array();
        $iFA = 0;
        foreach ($dpostul_repFA as $dpFA) {
            $dataFA[$iFA]["Num"] = ($iFA+1);
            $dataFA[$iFA]["IdInstitucion"] = $dpFA->getIdInstitucion();
			$dataFA[$iFA]["Expediente"] = $dpFA->getExpediente();			           
            $dataFA[$iFA]["Motivo"] = $dpFA->getMotivo();
            $dataFA[$iFA]["EstadoProc"] = $dpFA->getEstadoProc();						
            $iFA++;
        }


        $queryFB = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.tipo=2 and ddp.pkDatPostulante='.$codigo);
        $dpostul_repFB = $queryFB->getResult();
//
        $dataFB = array();
        $iFB = 0;
        foreach ($dpostul_repFB as $dpFB) {
            $dataFB[$iFB]["Num"] = ($iFB+1);
            $dataFB[$iFB]["IdInstitucion"] = $dpFB->getIdInstitucion();
			$dataFB[$iFB]["Quejas"] = $dpFB->getQuejas();			           
            $dataFB[$iFB]["Motivo"] = $dpFB->getMotivo();
            $dataFB[$iFB]["EstadoProc"] = $dpFB->getEstadoProc();						
            $iFB++;
        }




        $queryFC = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.tipo=3 and ddp.pkDatPostulante='.$codigo);
        $dpostul_repFC = $queryFC->getResult();
//
        $dataFC = array();
        $iFC = 0;
        foreach ($dpostul_repFC as $dpFC) {
            $dataFC[$iFC]["Num"] = ($iFC+1);
            $dataFC[$iFC]["Motivo"] = $dpFC->getMotivo();
            $dataFC[$iFC]["EstadoProc"] = $dpFC->getEstadoProc();						
            $iFC++;
        }

	   








      $queryFA2 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnMinPub ddp where ddp.tipo=1 and ddp.estado=1 and ddp.pkDatPostulante='.$codigo);
        $dpostul_repFA2 = $queryFA2->getResult();
//
        $dataFA2 = array();
        $iFA2 = 0;
        foreach ($dpostul_repFA2 as $dpFA2) {
            $dataFA2[$iFA2]["Num"] = ($iFA2+1);
            $dataFA2[$iFA2]["IdInstitucion"] = $dpFA2->getIdInstitucion();
			$dataFA2[$iFA2]["Expediente"] = $dpFA2->getExpediente();			           
            $dataFA2[$iFA2]["Motivo"] = $dpFA2->getMotivo();
            $dataFA2[$iFA2]["EstadoProc"] = $dpFA2->getEstadoProc();						
            $iFA2++;
        }


        $queryFB2 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnMinPub ddp where ddp.tipo=2 and ddp.estado=1 and ddp.pkDatPostulante='.$codigo);
        $dpostul_repFB2 = $queryFB2->getResult();
//
        $dataFB2 = array();
        $iFB2 = 0;
        foreach ($dpostul_repFB2 as $dpFB2) {
            $dataFB2[$iFB2]["Num"] = ($iFB2+1);
            $dataFB2[$iFB2]["IdInstitucion"] = $dpFB2->getIdInstitucion();
			$dataFB2[$iFB2]["Quejas"] = $dpFB2->getQuejas();			           
            $dataFB2[$iFB2]["Motivo"] = $dpFB2->getMotivo();
            $dataFB2[$iFB2]["EstadoProc"] = $dpFB2->getEstadoProc();						
            $iFB2++;
        }




        $queryFC2 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnMinPub ddp where ddp.tipo=3 and ddp.estado=1 and ddp.pkDatPostulante='.$codigo);
        $dpostul_repFC2 = $queryFC2->getResult();
//
        $dataFC2 = array();
        $iFC2 = 0;
        foreach ($dpostul_repFC as $dpFC2) {
            $dataFC2[$iFC2]["Num"] = ($iFC2+1);
            $dataFC2[$iFC2]["Motivo"] = $dpFC2->getMotivo();
            $dataFC2[$iFC2]["EstadoProc"] = $dpFC2->getEstadoProc();						
            $iFC2++;
        }

	   
	   



      $queryFC22 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnMinPub ddp where ddp.tipo=1 and ddp.estado=2 and ddp.pkDatPostulante='.$codigo);
        $dpostul_repFC22 = $queryFC22->getResult();
//
        $dataFC22 = array();
        $iFC22 = 0;
        foreach ($dpostul_repFC22 as $dpFC22) {
            $dataFC22[$iFC22]["Num"] = ($iFC22+1);
            $dataFC22[$iFC22]["IdInstitucion"] = $dpFC22->getIdInstitucion();
			$dataFC22[$iFC22]["Expediente"] = $dpFC22->getExpediente();			           
            $dataFC22[$iFC22]["Motivo"] = $dpFC22->getMotivo();
            $dataFC22[$iFC22]["EstadoProc"] = $dpFC22->getEstadoProc();						
            $iFC22++;
        }




      $queryFC222 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnMinPub ddp where ddp.tipo=2 and ddp.estado=2 and ddp.pkDatPostulante='.$codigo);
        $dpostul_repFC222 = $queryFC222->getResult();
//
        $dataFC222 = array();
        $iFC222 = 0;
        foreach ($dpostul_repFC22 as $dpFC222) {
            $dataFC222[$iFC222]["Num"] = ($iFC222+1);
            $dataFC222[$iFC222]["IdInstitucion"] = $dpFC222->getIdInstitucion();
			$dataFC222[$iFC222]["Quejas"] = $dpFC222->getQuejas();			           
            $dataFC222[$iFC222]["Motivo"] = $dpFC222->getMotivo();
            $dataFC222[$iFC222]["EstadoProc"] = $dpFC222->getEstadoProc();						
            $iFC222++;
        }


	   
	   
        return $this->render('hojaVidaBundle:update_formularios:frm_update_conducta.html.twig',
		array(
		"ConprocesojudicialesA"=>$dataA, 
		"ConprocesojudicialesB"=>$dataB,
		"ConprocesojudicialesC"=>$dataC,
		"ConprocesoadministrativosD"=>$dataD,	
		"ConprocesoadministrativosE"=>$dataE,	
		"ConprocesoadministrativosF"=>$dataF,	
		"ConprocesoenPodJudA"=>$dataFA,	
		"ConprocesoenPodJudB"=>$dataFB,	
		"ConprocesoenPodJudC"=>$dataFC,	
		"ConprocesoenMinJudA"=>$dataFA2,	
		"ConprocesoenMinJudB"=>$dataFB2,	
		"ConprocesoenMinJudC"=>$dataFC2,

		"ConprocesoenadmA"=>$dataFC22,	
		"ConprocesoenadmB"=>$dataFC222,
																		
		"programador"=>"pollo"));
       

    }
	

	
}
?>
