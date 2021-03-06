<?php

namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use proyectos\hojaVidaBundle\Util\Mantenimiento;

class ConductaController extends Controller {

    /**
     * @Route("/frm_update_conducta/{codigo}",name="_frm_update_conducta")
     */
    public function direcAction($codigo) {

        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
//        $dp = new DocDesProfesional();

        $quey = $em->createQuery('SELECT ddp FROM hojaVidaBundle:Antecedentes ddp where ddp.tipo=0 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dante_repA = $quey->getResult();
        $daA = array();
        $i = 0;
        foreach ($dante_repA as $dp) {
            $daA[$i]["descripcion"] = $dp->getDescripcion();
            $i++;
        }

        $quey = $em->createQuery('SELECT ddp FROM hojaVidaBundle:Antecedentes ddp where ddp.tipo=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dante_repB = $quey->getResult();
        $daB = array();
        $i = 0;
        foreach ($dante_repB as $dp) {
            $daB[$i]["descripcion"] = $dp->getDescripcion();
            $i++;
        }
        $quey = $em->createQuery('SELECT ddp FROM hojaVidaBundle:Antecedentes ddp where ddp.tipo=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dante_repC = $quey->getResult();
        $daC = array();
        $i = 0;
        foreach ($dante_repC as $dp) {
            $daC[$i]["descripcion"] = $dp->getDescripcion();
            $i++;
        }
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");

        $query = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosJudiciales ddp where ddp.tipo=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_rep = $query->getResult();
//
        $dataA = array();
        $i = 0;
        foreach ($dpostul_rep as $dp) {
            $boton = '<input class="remove_proc_jud menos" type="button" value="-">';
            if ($i == 0) {
                $boton = "";
            }
            $dataA[$i]["Num"] = ($i + 1);
            $dataA[$i]["Expediente"] = $dp->getExpediente();
            $dataA[$i]["Organo"] = $dp->getOrgano();
            $dataA[$i]["Demandadoagresor"] = $dp->getDemandadoagresor();
            $dataA[$i]["Materia"] = $dp->getMateria();
            $dataA[$i]["Estado"] = $dp->getEstado();
            $dataA[$i]["boton"] = $boton;
            $i++;
        }


        $queryB = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosJudiciales ddp where ddp.tipo=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repB = $queryB->getResult();
//
        $dataB = array();
        $iB = 0;
        foreach ($dpostul_repB as $dpB) {

            $boton2 = '<input class="remove_dem_den menos" type="button" value="-">';
            if ($iB == 0) {
                $boton2 = "";
            }

            $dataB[$iB]["Num"] = ($iB + 1);
            $dataB[$iB]["Expediente"] = $dpB->getExpediente();
            $dataB[$iB]["Organo"] = $dpB->getOrgano();
            $dataB[$iB]["Demandadoagresor"] = $dpB->getDemandadoagresor();
            $dataB[$iB]["Materia"] = $dpB->getMateria();
            $dataB[$iB]["Estado"] = $dpB->getEstado();
            $dataB[$iB]["boton"] = $boton2;
            $iB++;
        }


        $queryC = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosJudiciales ddp where ddp.tipo=3 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repC = $queryC->getResult();
//
        $dataC = array();
        $iC = 0;
        foreach ($dpostul_repC as $dpC) {

            $boton3 = '<input class="remove_como_agraviado menos" type="button" value="-">';
            if ($iC == 0) {
                $boton3 = "";
            }

            $dataC[$iC]["Num"] = ($iC + 1);
            $dataC[$iC]["Expediente"] = $dpC->getExpediente();
            $dataC[$iC]["Organo"] = $dpC->getOrgano();
            $dataC[$iC]["Demandadoagresor"] = $dpC->getDemandadoagresor();
            $dataC[$iC]["Materia"] = $dpC->getMateria();
            $dataC[$iC]["Estado"] = $dpC->getEstado();
            $dataC[$iC]["boton"] = $boton3;
            $iC++;
        }
        $queryD = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosAdministrativos ddp where ddp.tipo=1 and ddp.pkDatPostulante=' . $codigo . 'and ddp.estadoAudt=1');
        $dpostul_repD = $queryD->getResult();
//
        $dataD = array();
        $iD = 0;
        foreach ($dpostul_repD as $dpD) {

            $boton3 = '<input class="remove_pro_ad_pub_gen menos" type="button" value="-">';
            if ($iD == 0) {
                $boton3 = "";
            }

            $dataD[$iD]["Num"] = ($iD + 1);
            $dataD[$iD]["IdInstitucion"] = $dpD->getIdInstitucion();
            $dataD[$iD]["Resolucion"] = $dpD->getResolucion();
            $dataD[$iD]["Sancion"] = $dpD->getSancion();
            $dataD[$iD]["Estado"] = $dpD->getEstado();
            $dataD[$iD]["boton"] = $boton3;
            $iD++;
        }



        $queryE = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosAdministrativos ddp where ddp.tipo=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repE = $queryE->getResult();
//
        $dataE = array();
        $iE = 0;
        foreach ($dpostul_repE as $dpE) {

            $boton3 = '<input class="remove_sanciones_admin_pub menos" type="button" value="-">';
            if ($iE == 0) {
                $boton3 = "";
            }

            $dataE[$iE]["Num"] = ($iE + 1);
            $dataE[$iE]["IdInstitucion"] = $dpE->getIdInstitucion();
            $dataE[$iE]["Resolucion"] = $dpE->getResolucion();
            $dataE[$iE]["Sancion"] = $dpE->getSancion();
            $dataE[$iE]["boton"] = $boton3;
            $iE++;
        }



        $queryF = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosAdministrativos ddp where ddp.tipo=3 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repF = $queryF->getResult();
//
        $dataF = array();
        $iF = 0;
        foreach ($dpostul_repF as $dpF) {

            $boton3 = '<input class="remove_med_disc_pod_jud menos" type="button" value="-">';
            if ($iF == 0) {
                $boton3 = "";
            }

            $dataF[$iF]["Num"] = ($iF + 1);
            $dataF[$iF]["IdInstitucion"] = $dpF->getIdInstitucion();
            $dataF[$iF]["Sancion"] = $dpF->getSancion();

            $dataF[$iF]["Expediente"] = $dpF->getResolucion();
//            $dataF[$iF]["Expediente"] = $dpF->getExpediente();
            $dataF[$iF]["boton"] = $boton3;




            $iF++;
        }

// $dataF[$iF]["Expediente"] = $dpF->getExpediente();			
//var_dump($dpostul_repF);

        $queryFA = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.estado=1 and  ddp.tipo=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFA = $queryFA->getResult();
//
        $dataFA = array();
        $iFA = 0;
        foreach ($dpostul_repFA as $dpFA) {

            $boton3 = '<input class="remove_tra_proc_disc menos" type="button" value="-">';
            if ($iFA == 0) {
                $boton3 = "";
            }

            $dataFA[$iFA]["Num"] = ($iFA + 1);
            $dataFA[$iFA]["IdInstitucion"] = $dpFA->getIdInstitucion();
            $dataFA[$iFA]["Expediente"] = $dpFA->getExpediente();
            $dataFA[$iFA]["Motivo"] = $dpFA->getMotivo();
            $dataFA[$iFA]["EstadoProc"] = $dpFA->getEstadoProc();
            $dataFA[$iFA]["boton"] = $boton3;
            $iFA++;
        }


        $queryFB = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.estado=1 and  ddp.tipo=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFB = $queryFB->getResult();
//
        $dataFB = array();
        $iFB = 0;
        foreach ($dpostul_repFB as $dpFB) {

            $boton3 = '<input class="remove_que_vis_inv menos" type="button" value="-">';
            if ($iFB == 0) {
                $boton3 = "";
            }


            $dataFB[$iFB]["Num"] = ($iFB + 1);
            $dataFB[$iFB]["IdInstitucion"] = $dpFB->getIdInstitucion();
            $dataFB[$iFB]["Quejas"] = $dpFB->getQuejas();
            $dataFB[$iFB]["Motivo"] = $dpFB->getMotivo();
            $dataFB[$iFB]["EstadoProc"] = $dpFB->getEstadoProc();
            $dataFB[$iFB]["boton"] = $boton3;
            $iFB++;
        }




        $queryFC = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.estado=1 and  ddp.tipo=3 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFC = $queryFC->getResult();
//
        $dataFC = array();
        $iFC = 0;
        foreach ($dpostul_repFC as $dpFC) {
            $boton3 = '<input class="remove_invs_preliminares menos" type="button" value="-">';
            if ($iFC == 0) {
                $boton3 = "";
            }

            $dataFC[$iFC]["Num"] = ($iFC + 1);
            $dataFC[$iFC]["Motivo"] = $dpFC->getMotivo();
            $dataFC[$iFC]["EstadoProc"] = $dpFC->getEstadoProc();
            $dataFC[$iFC]["boton"] = $boton3;


            $iFC++;
        }



        $queryFD = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.estado=2 and  ddp.tipo=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFD = $queryFD->getResult();
        $dataFD = array();
        $iFD = 0;
        foreach ($dpostul_repFD as $dpFD) {

//            $boton3 = '<input class="remove_min_pub_tra_proc_disc menos" type="button" value="--">';
            $boton3 = '<input class="remove_proc_desciplinarios menos" type="button" value="--">';

            if ($iFD == 0) {
                $boton3 = "";
            }
            $dataFD[$iFD]["Num"] = ($iFD + 1);
            $dataFD[$iFD]["IdInstitucion"] = $dpFD->getIdInstitucion();
            $dataFD[$iFD]["Expediente"] = $dpFD->getExpediente();
            $dataFD[$iFD]["Motivo"] = $dpFD->getMotivo();
            $dataFD[$iFD]["EstadoProc"] = $dpFD->getEstadoProc();
            $dataFD[$iFD]["boton"] = $boton3;
            $iFD++;
        }


        $queryFE = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.estado=2 and  ddp.tipo=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFE = $queryFE->getResult();
//
        $dataFE = array();
        $iFE = 0;
        foreach ($dpostul_repFE as $dpFE) {
            $boton3 = '<input class="remove_que_vis_ocma menos" type="button" value="-">';
            if ($iFE == 0) {
                $boton3 = "";
            }
            $dataFE[$iFE]["Num"] = ($iFE + 1);
            $dataFE[$iFE]["IdInstitucion"] = $dpFE->getIdInstitucion();
            $dataFE[$iFE]["Quejas"] = $dpFE->getQuejas();
            $dataFE[$iFE]["Motivo"] = $dpFE->getMotivo();
            $dataFE[$iFE]["EstadoProc"] = $dpFE->getEstadoProc();
            $dataFE[$iFE]["boton"] = $boton3;
            $iFE++;
        }


        $queryFF = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.estado=2 and  ddp.tipo=3 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFF = $queryFF->getResult();
//
        $dataFF = array();
        $iFF = 0;
        foreach ($dpostul_repFF as $dpFF) {

            $boton3 = '<input class="remove_inv_preli menos" type="button" value="-">';
            if ($iFF == 0) {
                $boton3 = "";
            }
            $dataFF[$iFF]["Num"] = ($iFF + 1);
            $dataFF[$iFF]["Motivo"] = $dpFF->getMotivo();
            $dataFF[$iFF]["EstadoProc"] = $dpFF->getEstadoProc();
            $dataFF[$iFF]["boton"] = $boton3;
            $iFF++;
        }



        $queryFA2 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnMinPub ddp where ddp.tipo=1 and ddp.estado=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFA2 = $queryFA2->getResult();
//
        $dataFA2 = array();
        $iFA2 = 0;
        foreach ($dpostul_repFA2 as $dpFA2) {

            $boton3 = '<input class="remove_min_pub_tra_proc_disc menos" type="button" value="-">';
            if ($iFA2 == 0) {
                $boton3 = "";
            }



            $dataFA2[$iFA2]["Num"] = ($iFA2 + 1);
            $dataFA2[$iFA2]["IdInstitucion"] = $dpFA2->getIdInstitucion();
            $dataFA2[$iFA2]["Expediente"] = $dpFA2->getExpediente();
            $dataFA2[$iFA2]["Motivo"] = $dpFA2->getMotivo();
            $dataFA2[$iFA2]["EstadoProc"] = $dpFA2->getEstadoProc();
            $dataFA2[$iFA2]["boton"] = $boton3;
            $iFA2++;
        }


        $queryFB2 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnMinPub ddp where ddp.tipo=2 and ddp.estado=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFB2 = $queryFB2->getResult();
//
        $dataFB2 = array();
        $iFB2 = 0;
        foreach ($dpostul_repFB2 as $dpFB2) {

            $boton3 = '<input class="remove_min_pub_tra_den_fisc menos" type="button" value="-">';
            if ($iFB2 == 0) {
                $boton3 = "";
            }

            $dataFB2[$iFB2]["Num"] = ($iFB2 + 1);
            $dataFB2[$iFB2]["IdInstitucion"] = $dpFB2->getIdInstitucion();
            $dataFB2[$iFB2]["Quejas"] = $dpFB2->getQuejas();
            $dataFB2[$iFB2]["Motivo"] = $dpFB2->getMotivo();
            $dataFB2[$iFB2]["EstadoProc"] = $dpFB2->getEstadoProc();
            $dataFB2[$iFB2]["boton"] = $boton3;
            $iFB2++;
        }




        $queryFC2 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnMinPub ddp where ddp.tipo=3 and ddp.estado=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFC2 = $queryFC2->getResult();
//
        $dataFC2 = array();
        $iFC2 = 0;
        foreach ($dpostul_repFC2 as $dpFC2) {

            $boton3 = '<input class="remove_min_pub_tra_inv_prel menos" type="button" value="-">';
            if ($iFC2 == 0) {
                $boton3 = "";
            }

            $dataFC2[$iFC2]["Num"] = ($iFC2 + 1);
            $dataFC2[$iFC2]["Motivo"] = $dpFC2->getMotivo();
            $dataFC2[$iFC2]["EstadoProc"] = $dpFC2->getEstadoProc();
            $dataFC2[$iFC2]["boton"] = $boton3;
            $iFC2++;
        }

        $queryFD2 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnMinPub ddp where ddp.tipo=1 and ddp.estado=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFD2 = $queryFD2->getResult();
//
        $dataFD2 = array();
        $iFD2 = 0;
        foreach ($dpostul_repFD2 as $dpFD2) {

            $boton3 = '<input class="remove_min_pub_con_proc_desc menos" type="button" value="-">';
            if ($iFD2 == 0) {
                $boton3 = "";
            }
            $dataFD2[$iFD2]["Num"] = ($iFD2 + 1);
            $dataFD2[$iFD2]["IdInstitucion"] = $dpFD2->getIdInstitucion();
            $dataFD2[$iFD2]["Expediente"] = $dpFD2->getExpediente();
            $dataFD2[$iFD2]["Motivo"] = $dpFD2->getMotivo();
            $dataFD2[$iFD2]["EstadoProc"] = $dpFD2->getEstadoProc();
            $dataFD2[$iFD2]["boton"] = $boton3;

            $iFD2++;
        }

//gh

        $queryFE2 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnMinPub ddp where ddp.tipo=2 and ddp.estado=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFE2 = $queryFE2->getResult();
//
        $dataFE2 = array();
        $iFE2 = 0;
        foreach ($dpostul_repFE2 as $dpFE2) {

            $boton3 = '<input class="remove_min_pub_con_den_fis menos" type="button" value="-">';
            if ($iFE2 == 0) {
                $boton3 = "";
            }

            $dataFE2[$iFE2]["Num"] = ($iFE2 + 1);
            $dataFE2[$iFE2]["IdInstitucion"] = $dpFE2->getIdInstitucion();
            $dataFE2[$iFE2]["Quejas"] = $dpFE2->getQuejas();
            $dataFE2[$iFE2]["Motivo"] = $dpFE2->getMotivo();
            $dataFE2[$iFE2]["EstadoProc"] = $dpFE2->getEstadoProc();

            $dataFE2[$iFE2]["boton"] = $boton3;

            $iFE2++;
        }




        return $this->render('hojaVidaBundle:update_formularios:frm_update_conducta.html.twig', array(
                    "codigo" => $codigo,
                    "ConantecedentespenalesA" => $daA,
                    "ConantecedentespenalesB" => $daB,
                    "ConantecedentespenalesC" => $daC,
                    "ConprocesojudicialesA" => $dataA,
                    "ConprocesojudicialesB" => $dataB,
                    "ConprocesojudicialesC" => $dataC,
                    "ConprocesoadministrativosD" => $dataD,
                    "ConprocesoadministrativosE" => $dataE,
                    "ConprocesoadministrativosF" => $dataF,
                    "ConprocesoenPodJudA" => $dataFA,
                    "ConprocesoenPodJudB" => $dataFB,
                    "ConprocesoenPodJudC" => $dataFC,
                    "ConprocesoenPodJudD" => $dataFD,
                    "ConprocesoenPodJudE" => $dataFE,
                    "ConprocesoenPodJudF" => $dataFF,
                    "ConprocesoenMinJudA" => $dataFA2,
                    "ConprocesoenMinJudB" => $dataFB2,
                    "ConprocesoenMinJudC" => $dataFC2,
                    "ConprocesoenadmA" => $dataFD2,
                    "ConprocesoenadmB" => $dataFE2,
                    "programador" => "pollo"));
    }

    /**
     * @Route("/actualiza_conducta",name="_actualiza_conducta")
     */
    public function ActualizaExpConductaAction(Request $request) {

        $codigo = $request->request->get("id_pos");
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");

        $quey = $em->createQuery('SELECT ddp FROM hojaVidaBundle:Antecedentes ddp where ddp.tipo=0 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dante_repA = $quey->getResult();
        foreach ($dante_repA as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }

        $quey = $em->createQuery('SELECT ddp FROM hojaVidaBundle:Antecedentes ddp where ddp.tipo=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dante_repB = $quey->getResult();
        foreach ($dante_repB as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }

        $quey = $em->createQuery('SELECT ddp FROM hojaVidaBundle:Antecedentes ddp where ddp.tipo=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dante_repC = $quey->getResult();
        foreach ($dante_repC as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }

        $query = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosJudiciales ddp where ddp.tipo=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_rep = $query->getResult();
        foreach ($dpostul_rep as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }
        $queryB = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosJudiciales ddp where ddp.tipo=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repB = $queryB->getResult();

        foreach ($dpostul_repB as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }
        $queryC = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosJudiciales ddp where ddp.tipo=3 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repC = $queryC->getResult();
        foreach ($dpostul_repC as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }

        $queryD = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosAdministrativos ddp where ddp.tipo=1 and ddp.pkDatPostulante=' . $codigo . 'and ddp.estadoAudt=1');
        $dpostul_repD = $queryD->getResult();
        foreach ($dpostul_repD as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }

        $queryE = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosAdministrativos ddp where ddp.tipo=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repE = $queryE->getResult();
        foreach ($dpostul_repE as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }

        $queryF = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosAdministrativos ddp where ddp.tipo=3 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repF = $queryF->getResult();
        foreach ($dpostul_repF as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }

        $queryFA = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.estado=1 and  ddp.tipo=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFA = $queryFA->getResult();
        foreach ($dpostul_repFA as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }

        $queryFB = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.estado=1 and  ddp.tipo=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFB = $queryFB->getResult();
        foreach ($dpostul_repFB as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }
        $queryFC = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.estado=1 and  ddp.tipo=3 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFC = $queryFC->getResult();
        foreach ($dpostul_repFC as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }

        $queryFD = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.estado=2 and  ddp.tipo=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFD = $queryFD->getResult();
        foreach ($dpostul_repFD as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }
        
        $queryFE = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.estado=2 and  ddp.tipo=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFE = $queryFE->getResult();
        foreach ($dpostul_repFE as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }
        $queryFF = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.estado=2 and  ddp.tipo=3 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFF = $queryFF->getResult();
        foreach ($dpostul_repFF as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }
        $queryFA2 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnMinPub ddp where ddp.tipo=1 and ddp.estado=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFA2 = $queryFA2->getResult();
        
        foreach ($dpostul_repFA2 as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }
        
        $queryFB2 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnMinPub ddp where ddp.tipo=2 and ddp.estado=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFB2 = $queryFB2->getResult();
        foreach ($dpostul_repFB2 as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }
        
        $queryFC2 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnMinPub ddp where ddp.tipo=3 and ddp.estado=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFC2 = $queryFC2->getResult();
        foreach ($dpostul_repFC2 as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }
        
        $queryFD2 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnMinPub ddp where ddp.tipo=1 and ddp.estado=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFD2 = $queryFD2->getResult();
        foreach ($dpostul_repFD2 as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }
        $queryFE2 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnMinPub ddp where ddp.tipo=2 and ddp.estado=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFE2 = $queryFE2->getResult();
        foreach ($dpostul_repFE2 as $ddp) {
            $ddp->setEstadoAudt(2);
            $em->persist($ddp);
            $em->flush();
        }
        
        $m = new Mantenimiento();
        $m->insertarConducta($this, $request);
        return $this->redirect($this->generateUrl('_frm_update_conducta', array('codigo' => $codigo)));
    }

}

?>
