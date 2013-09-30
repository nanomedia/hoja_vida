<?php

namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Ps\PdfBundle\Annotation\Pdf;
use proyectos\hojaVidaBundle\Util\cargaCombosUpdate;

class reporteController extends Controller {

    /**
     * @Pdf()
     * @Route("/pdf/{codigo}", name="_pdf")
     */
    public function pdfAction($codigo) {
        /*
         * https://github.com/psliwa/PHPPdf#intro
         */
        $cbo = new cargaCombosUpdate();

        $facade = $this->get('ps_pdf.facade');
        $response = new Response();


        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        
        
//      DatosPersonales
        $query = $em->createQuery('SELECT dp FROM hojaVidaBundle:DatosPersonales dp where dp.pkDatPostulante=' . $codigo . ' and dp.estadoAudt=1');
        $DatosPersonales = $query->getResult();

//      DatosPostulante
        $query = $em->createQuery('SELECT ddp FROM hojaVidaBundle:DatosPostulante ddp where ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $DatosPostulante = $query->getResult();

//      ConvocatoriasAnteriores
        $query1 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ConvocatoriasAnteriores ddp where ddp.pkDatPostulante=' . $codigo . 'and ddp.estadoAudt=1');
        $ConvocatoriasAnteriores = $query1->getResult();


//      DatosAcademicos
        $query2 = $em->createQuery('SELECT da FROM hojaVidaBundle:DatosAcademicos da where da.pkDatPostulante=' . $codigo . 'and da.estadoAudt=1');
        $DatosAcademicos = $query2->getResult();

        $dt = $DatosAcademicos[0];
        $univ = $cbo->MuestraUniv($this, $dt->getUnivProcedencia());
        $cole = $cbo->MuestraColegio($this, $dt->getColegioProfesional());

        $nivelArray = array("NO ELIGIO", "TITULADO", "EGRESADO", "ESTUDIOS INCOMPLETOS");
//      DocDerecho
        $query3 = $em->createQuery('SELECT doc FROM hojaVidaBundle:DocDerecho doc where doc.pkDatAcademicos=' . $dt->getPkDatAcademicos() . ' and doc.estadoAudt=1');
        $DocDerecho = $query3->getResult();
        $DocDerechoArray = array();
        $i = 0;
        foreach ($DocDerecho as $doc) {
            $DocDerechoArray[$i]["Universidad"] = $cbo->MuestraUniv($this, $doc->getUniversidad());
            $DocDerechoArray[$i]["Nivel"] = $nivelArray[$doc->getNivel()];
            $DocDerechoArray[$i]["Mension"] = $doc->getMension();
            $DocDerechoArray[$i]["Anio"] = $doc->getAnio();
            $i++;
        }
//      MaeDerecho
        $query4 = $em->createQuery('SELECT mae FROM hojaVidaBundle:MaeDerecho mae where mae.pkDatAcademicos=' . $dt->getPkDatAcademicos() . ' and mae.estadoAudt=1');
        $MaeDerecho = $query4->getResult();
        $MaeDerechoArray = array();
        $i2 = 0;
        foreach ($MaeDerecho as $mae) {
            $MaeDerechoArray[$i2]["Universidad"] = $cbo->MuestraUniv($this, $mae->getUniversidad());
            $MaeDerechoArray[$i2]["Nivel"] = $nivelArray[$mae->getNivel()];
            $MaeDerechoArray[$i2]["Mension"] = $mae->getMension();
            $MaeDerechoArray[$i2]["Anio"] = $mae->getAnio();
            $i2++;
        }
//      OtrasDisciplinas
        $query5 = $em->createQuery('SELECT otr FROM hojaVidaBundle:OtrasDisciplinas otr where otr.pkDatAcademicos=' . $dt->getPkDatAcademicos() . ' and otr.estadoAudt=1');
        $OtrasDisciplinas = $query5->getResult();
        $OtrasDisciplinasArray = array();
        $i3 = 0;
        foreach ($OtrasDisciplinas as $otr) {
            $OtrasDisciplinasArray[$i3]["Universidad"] = $cbo->MuestraUniv($this, $otr->getUniversidad());
            $OtrasDisciplinasArray[$i3]["Nivel"] = $nivelArray[$otr->getNivel()];
            $OtrasDisciplinasArray[$i3]["Mension"] = $otr->getMension();
            $OtrasDisciplinasArray[$i3]["Anio"] = $otr->getAnio();
            $i3++;
        }
//      MeritosUniv       
        $query6 = $em->createQuery('SELECT mer FROM hojaVidaBundle:MeritosUniv mer where mer.pkDatAcademicos=' . $dt->getPkDatAcademicos() . ' and mer.estadoAudt=1');
        $MeritosUniv = $query6->getResult();
        $mer = $MeritosUniv[0];
        $MerUnivArray = array();

        $puesto = array("NO ELIGIO", "PRIMER PUESTO", "QUINTO SUPERIOR", "TERCER PUESTO");

        $MerUnivArray["Puesto"] = $puesto[$mer->getPuesto()];
        $MerUnivArray["Universidad"] = $cbo->MuestraUniv($this, $mer->getUniversidad());
        $MerUnivArray["Anio"] = $mer->getAnio();

        $especialidad = array("NO ELIGIO", "PENAL", "CIVIL", "CONTENCIOSO", "LABORAL");

        $calificacion = array("NO ELIGIO");
        for ($j = 1; $j <= 20; $j++) {
            array_push($calificacion, $j);
        }
        array_push($calificacion, "NP");
        array_push($calificacion, "EXP");

//      DocDesProfesional
        $query7 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:DocDesProfesional ddp where ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_rep = $query7->getResult();
        $DocDesProfesionalArray = array();
        $i4 = 0;
        foreach ($dpostul_rep as $dp) {
            $DocDesProfesionalArray[$i4]["Num"] = ($i4 + 1);
            $DocDesProfesionalArray[$i4]["NumExp"] = $dp->getNumExp();
            $DocDesProfesionalArray[$i4]["Ddas"] = $dp->getDdas();
            $DocDesProfesionalArray[$i4]["Ddae"] = $dp->getDdae();
            $DocDesProfesionalArray[$i4]["Materia"] = $dp->getMateria();
            $DocDesProfesionalArray[$i4]["Especialidad"] = $especialidad[$dp->getEspecialidad()];
            $DocDesProfesionalArray[$i4]["Calificacion1"] = $calificacion[$dp->getCalificacion1()];
            $DocDesProfesionalArray[$i4]["Calificacion2"] = $calificacion[$dp->getCalificacion2()];
            $i4++;
        }
//      MagistradoRatificado
        $query8 = $em->createQuery('SELECT mar FROM hojaVidaBundle:MagistradoRatificado mar where mar.pkDatPostulante=' . $codigo . ' and mar.estadoAudt=1');
        $MagistradoRatificado = $query8->getResult();
        $dataMagistradoRatificado = $MagistradoRatificado[0];

//      CalJudFis
        $query9 = $em->createQuery('SELECT cjf FROM hojaVidaBundle:CalJudFis cjf where cjf.pkDatPostulante=' . $codigo . ' and cjf.estadoAudt=1');
        $CalJudFis = $query9->getResult();
        $CalJudFisArray = array();
        $i5 = 0;
        foreach ($CalJudFis as $cjf) {
            $CalJudFisArray[$i5]["Num"] = ($i5 + 1);
            $CalJudFisArray[$i5]["NumExp"] = $cjf->getNumExp();
            $CalJudFisArray[$i5]["TipResolucion"] = $cjf->getTipResolucion();
            $CalJudFisArray[$i5]["FechaRes"] = $cjf->getFechaRes();
            $CalJudFisArray[$i5]["Ddagraviado"] = $cjf->getDdagraviado();
            $CalJudFisArray[$i5]["Ddagresor"] = $cjf->getDdagresor();
            $CalJudFisArray[$i5]["Materia"] = $cjf->getMateria();
            $CalJudFisArray[$i5]["Especialidad"] = $especialidad[$cjf->getEspecialidad()];
            $CalJudFisArray[$i5]["Nota"] = $calificacion[$cjf->getNota()];
            $i5++;
        }

//DetSituacionLaboral

        $query10 = $em->createQuery('SELECT det FROM hojaVidaBundle:DetSituacionLaboral det where det.pkDatPostulante=' . $codigo . ' and det.estadoAudt=1');
        $DetSituacionLaboral = $query10->getResult();
        $DetSituacionLaboralArray = array();
        $i6 = 0;
        foreach ($DetSituacionLaboral as $det) {

            $DetSituacionLaboralArray[$i6]["SituacionLaboral"] = $det->getSituacionLaboral();
            $DetSituacionLaboralArray[$i6]["CentroTrabajo"] = $det->getCentroTrabajo();
            $DetSituacionLaboralArray[$i6]["Cargo"] = $det->getCargo();
            $DetSituacionLaboralArray[$i6]["Periodo"] = $det->getPeriodo();
            $i6++;
        }
        $condicionArray = array("NO ELIGIO", "Nombrado", "Contratado");
        $categoriaArray = array("NO ELIGIO", "Principal", "Asociado", "Auxiliar");

        //DocenciaUniversitaria      
        $query11 = $em->createQuery('SELECT docu FROM hojaVidaBundle:DocenciaUniversitaria docu where docu.pkDatPostulante=' . $codigo . ' and docu.estadoAudt=1');
        $DocenciaUniversitaria = $query11->getResult();
        $DocenciaUniversitariaArray = array();
        $i7 = 0;
        foreach ($DocenciaUniversitaria as $docUniv) {
            $DocenciaUniversitariaArray[$i7]["Universidad"] = $cbo->MuestraUniv($this, $docUniv->getUniversidad());
            $DocenciaUniversitariaArray[$i7]["Facultad"] = $docUniv->getFacultad();
            $DocenciaUniversitariaArray[$i7]["Condicion"] = $condicionArray[$docUniv->getCondicion()];
            $DocenciaUniversitariaArray[$i7]["Categoria"] = $categoriaArray[$docUniv->getCategoria()];
            $DocenciaUniversitariaArray[$i7]["Cursos"] = $docUniv->getCursos();
            $DocenciaUniversitariaArray[$i7]["Periodo"] = $docUniv->getPeriodo();
            $i7++;
        }

//      Publicaciones
        $query12 = $em->createQuery('SELECT pub FROM hojaVidaBundle:Publicaciones pub where pub.pkDatPostulante=' . $codigo . ' and pub.estadoAudt=1');
        $Publicaciones = $query12->getResult();
        $PublicacionesData = $Publicaciones[0];


//      ProdJurFiscal        
        $query13 = $em->createQuery('SELECT pjf FROM hojaVidaBundle:ProdJurFiscal pjf where pjf.pkDatPostulante=' . $codigo . ' and pjf.estadoAudt=1');
        $ProdJurFiscal = $query13->getResult();
        $ProdJurFiscalArray = array();

        $DataProdJurFiscal = array("NO ELIGIO", "PODER JUDICIAL", "MINISTERIO PÚBLICO");
        $ProdJurFiscalArray["Respuesta"] = $DataProdJurFiscal[$ProdJurFiscal[0]->getRespuesta()];
        $ProdJurFiscalArray["DetRespuesta"] = $ProdJurFiscal[0]->getDetRespuesta();


//      LicenciasOtorgadas
        $query14 = $em->createQuery('SELECT lic FROM hojaVidaBundle:LicenciasOtorgadas lic where lic.pkDatPostulante=' . $codigo . ' and lic.estadoAudt=1');
        $LicenciasOtorgadas = $query14->getResult();
        $LicenciasOtorgadasArray = array();
        $i8 = 0;
        $sum_dias = 0;
        foreach ($LicenciasOtorgadas as $lic) {

            $LicenciasOtorgadasArray[$i8]["Anio"] = $lic->getAnio();
            $LicenciasOtorgadasArray[$i8]["Motivo"] = $lic->getMotivo();
            $LicenciasOtorgadasArray[$i8]["Dias"] = $lic->getDias();
            $sum_dias +=$lic->getDias();
            $i8++;
        }

//        1.  ANTECEDENTES PENALES, JUDICIALES Y POLICIALES:
        $quey = $em->createQuery('SELECT ddp FROM hojaVidaBundle:Antecedentes ddp where ddp.tipo=0 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dante_repA = $quey->getResult();
        $anteA = $dante_repA[0]->getDescripcion();

        $quey = $em->createQuery('SELECT ddp FROM hojaVidaBundle:Antecedentes ddp where ddp.tipo=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dante_repB = $quey->getResult();
        $anteB = $dante_repB[0]->getDescripcion();

        $quey = $em->createQuery('SELECT ddp FROM hojaVidaBundle:Antecedentes ddp where ddp.tipo=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dante_repC = $quey->getResult();
        $anteC = $dante_repC[0]->getDescripcion();

//2. PROCESOS JUDICIALES:
//PROCESOS JUDICIALES CIVILES, PENALES, DE FAMILIA, LABORALES COMO DEMANDANTE / DENUNCIANTE: 
        $query = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosJudiciales ddp where ddp.tipo=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_rep = $query->getResult();

//COMO DEMANDADO / DENUNCIADO
        $queryB = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosJudiciales ddp where ddp.tipo=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repB = $queryB->getResult();

//       COMO AGRAVIADO 
        $queryC = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosJudiciales ddp where ddp.tipo=3 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repC = $queryC->getResult();


//        3. PROCEDIMIENTOS ADMINISTRATIVOS EN LA ADMINISTRACIÓN PÚBLICA EN GENERA

        $queryD = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosAdministrativos ddp where ddp.tipo=1 and ddp.pkDatPostulante=' . $codigo . 'and ddp.estadoAudt=1');
        $dpostul_repD = $queryD->getResult();

//        4. SANCIONES ADMINISTRATIVAS EN LA ADMINISTRACIÓN PÚBLICA GENERAL 
        $queryE = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosAdministrativos ddp where ddp.tipo=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repE = $queryE->getResult();

//        5. MEDIDAS DISCIPLINARIAS EN EL PODER JUDICIAL Y MINISTERIO PÚBLICO
        $queryF = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosAdministrativos ddp where ddp.tipo=3 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repF = $queryF->getResult();

//        6. EN EL PODER JUDICIAL
//        EN TRÁMITE
//           1. PROCESOS DISCIPLINARIOS
        $queryFA = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.estado=1 and  ddp.tipo=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFA = $queryFA->getResult();


// 2. QUEJAS, VISITAS E INVESTIGACIONES ANTE LA OCMA / ODECMA
        $queryFB = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.estado=1 and  ddp.tipo=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFB = $queryFB->getResult();

        $dataFB = array();
        $iFB = 0;
        foreach ($dpostul_repFB as $dpFB) {
            $dataFB[$iFB]["Num"] = ($iFB + 1);
            $dataFB[$iFB]["IdInstitucion"] = $dpFB->getIdInstitucion();
            $dataFB[$iFB]["Quejas"] = $dpFB->getQuejas();
            $dataFB[$iFB]["Motivo"] = $dpFB->getMotivo();
            $dataFB[$iFB]["EstadoProc"] = $dpFB->getEstadoProc();
            $iFB++;
        }

//      3. INVESTIGACIONES PRELIMINARES
        $queryFC = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.estado=1 and  ddp.tipo=3 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFC = $queryFC->getResult();

        $dataFC = array();
        $iFC = 0;
        foreach ($dpostul_repFC as $dpFC) {
            $dataFC[$iFC]["Num"] = ($iFC + 1);
            $dataFC[$iFC]["Motivo"] = $dpFC->getMotivo();
            $dataFC[$iFC]["EstadoProc"] = $dpFC->getEstadoProc();
            $iFC++;
        }
//      CONCLUIDAS 
//      1. PROCESOS DISCIPLINARIOS EN EL PODER JUDICIAL      

        $queryFD = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.estado=2 and  ddp.tipo=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFD = $queryFD->getResult();
        $dataFD = array();
        $iFD = 0;
        foreach ($dpostul_repFD as $dpFD) {
            $dataFD[$iFD]["IdInstitucion"] = $dpFD->getIdInstitucion();
            $dataFD[$iFD]["Expediente"] = $dpFD->getExpediente();
            $dataFD[$iFD]["Motivo"] = $dpFD->getMotivo();
            $dataFD[$iFD]["EstadoProc"] = $dpFD->getEstadoProc();
            $iFD++;
        }
//      2. QUEJAS, VISITAS E INVESTIGACIONES ANTE LA OCMA / ODECMA 

        $queryFE = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.estado=2 and  ddp.tipo=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFE = $queryFE->getResult();

        $dataFE = array();
        $iFE = 0;
        foreach ($dpostul_repFE as $dpFE) {

            $dataFE[$iFE]["Num"] = ($iFE + 1);
            $dataFE[$iFE]["IdInstitucion"] = $dpFE->getIdInstitucion();
            $dataFE[$iFE]["Quejas"] = $dpFE->getQuejas();
            $dataFE[$iFE]["Motivo"] = $dpFE->getMotivo();
            $dataFE[$iFE]["EstadoProc"] = $dpFE->getEstadoProc();
            $iFE++;
        }

//         3. INVESTIGACIONES PRELIMINARES

        $queryFF = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnPoderJud ddp where ddp.estado=2 and  ddp.tipo=3 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFF = $queryFF->getResult();

        $dataFF = array();
        $iFF = 0;
        foreach ($dpostul_repFF as $dpFF) {

            $dataFF[$iFF]["Num"] = ($iFF + 1);
            $dataFF[$iFF]["Motivo"] = $dpFF->getMotivo();
            $dataFF[$iFF]["EstadoProc"] = $dpFF->getEstadoProc();
            $iFF++;
        }

//       EN TRÁMITE
//       1. PROCESOS DISCIPLINARIOS:
        $queryFA2 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnMinPub ddp where ddp.tipo=1 and ddp.estado=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFA2 = $queryFA2->getResult();
//
        $dataFA2 = array();
        $iFA2 = 0;
        foreach ($dpostul_repFA2 as $dpFA2) {
            $dataFA2[$iFA2]["Num"] = ($iFA2 + 1);
            $dataFA2[$iFA2]["IdInstitucion"] = $dpFA2->getIdInstitucion();
            $dataFA2[$iFA2]["Expediente"] = $dpFA2->getExpediente();
            $dataFA2[$iFA2]["Motivo"] = $dpFA2->getMotivo();
            $dataFA2[$iFA2]["EstadoProc"] = $dpFA2->getEstadoProc();
            $iFA2++;
        }

//        2. DENUNCIAS Y/O QUEJAS ANTE LA FISCALÍA SUPREMA DE CONTROL INTERNO: 
        $queryFB2 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnMinPub ddp where ddp.tipo=2 and ddp.estado=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFB2 = $queryFB2->getResult();
        $dataFB2 = array();
        $iFB2 = 0;
        foreach ($dpostul_repFB2 as $dpFB2) {
            $dataFB2[$iFB2]["Num"] = ($iFB2 + 1);
            $dataFB2[$iFB2]["IdInstitucion"] = $dpFB2->getIdInstitucion();
            $dataFB2[$iFB2]["Quejas"] = $dpFB2->getQuejas();
            $dataFB2[$iFB2]["Motivo"] = $dpFB2->getMotivo();
            $dataFB2[$iFB2]["EstadoProc"] = $dpFB2->getEstadoProc();
            $iFB2++;
        }

//   3. INVESTIGACIONES PRELIMINARES:
        $queryFC2 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnMinPub ddp where ddp.tipo=3 and ddp.estado=1 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFC2 = $queryFC2->getResult();
        $dataFC2 = array();
        $iFC2 = 0;
        foreach ($dpostul_repFC2 as $dpFC2) {
            $dataFC2[$iFC2]["Num"] = ($iFC2 + 1);
            $dataFC2[$iFC2]["Motivo"] = $dpFC2->getMotivo();
            $dataFC2[$iFC2]["EstadoProc"] = $dpFC2->getEstadoProc();
            $iFC2++;
        }

//        CONCLUIDAS
//        1. PROCESOS DISCIPLINARIOS EN EL MINISTERIO PÚBLICO

        $queryFD2 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnMinPub ddp where ddp.tipo=1 and ddp.estado=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFD2 = $queryFD2->getResult();
        $dataFD2 = array();
        $iFD2 = 0;
        foreach ($dpostul_repFD2 as $dpFD2) {

            $dataFD2[$iFD2]["Num"] = ($iFD2 + 1);
            $dataFD2[$iFD2]["IdInstitucion"] = $dpFD2->getIdInstitucion();
            $dataFD2[$iFD2]["Expediente"] = $dpFD2->getExpediente();
            $dataFD2[$iFD2]["Motivo"] = $dpFD2->getMotivo();
            $dataFD2[$iFD2]["EstadoProc"] = $dpFD2->getEstadoProc();
            $iFD2++;
        }

//      2. DENUNCIAS Y/O QUEJAS ANTE LA FISCALÍA SUPREMA DE CONTROL INTERNO:

        $queryFE2 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ProcesosEnMinPub ddp where ddp.tipo=2 and ddp.estado=2 and ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $dpostul_repFE2 = $queryFE2->getResult();
        $dataFE2 = array();
        $iFE2 = 0;
        foreach ($dpostul_repFE2 as $dpFE2) {

            $dataFE2[$iFE2]["Num"] = ($iFE2 + 1);
            $dataFE2[$iFE2]["IdInstitucion"] = $dpFE2->getIdInstitucion();
            $dataFE2[$iFE2]["Quejas"] = $dpFE2->getQuejas();
            $dataFE2[$iFE2]["Motivo"] = $dpFE2->getMotivo();
            $dataFE2[$iFE2]["EstadoProc"] = $dpFE2->getEstadoProc();
            $iFE2++;
        }

//RUBRO 2
        $query = $em->createQuery('SELECT inf FROM hojaVidaBundle:InformacionOficinas inf where inf.pkDatPostulante=' . $codigo . ' and inf.estadoAudt=1');
        $InformacionOficinas = $query->getResult();

        $info1 = "";
        $info2 = "";
        $info3 = "";
        foreach ($InformacionOficinas as $info) {


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

//      X. INFORMACIÓN PATRIMONIAL (ECONÓMICA E INMOBILIARIA)
//      1. Cuadro de Declaraciones Juradas de Bienes y Rentas
        $query = $em->createQuery('SELECT ddp FROM hojaVidaBundle:Ingresos ddp where ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $rubro3 = $query->getResult();
        $Ingre = array();
        $i = 0;
        $sum1 = 0;
        foreach ($rubro3 as $dp) {
            $Ingre[$i]["anio"] = $dp->getAnoEje();
            $Ingre[$i]["descripcion"] = $dp->getDescripcion();
            $Ingre[$i]["valor"] = $dp->getValor();
            $sum1+=$dp->getValor();
            $i++;
        }

        $queryC = $em->createQuery('SELECT aaa FROM hojaVidaBundle:OtrosIngresos aaa where aaa.pkDatPostulante=' . $codigo . ' and aaa.estadoAudt=1');
        $rubro3_1 = $queryC->getResult();
        $Otrosin = array();
        $sum_otr_ing = 0;
        $iC = 0;
        foreach ($rubro3_1 as $dC) {
            $Otrosin[$iC]["Descripcion"] = $dC->getDescripcion();
            $Otrosin[$iC]["Monto"] = $dC->getMonto();
            $sum_otr_ing+=$dC->getMonto();
            $iC++;
        }


        $queryA = $em->createQuery('SELECT bbb FROM hojaVidaBundle:Patrimonio bbb where bbb.tipoPatrimonio=1 and bbb.pkDatPostulante=' . $codigo . 'and bbb.estadoAudt=1');
        $dpostul = $queryA->getResult();
        $Immobi1 = array();
        $ia = 0;
        $sum_patr = 0;
        foreach ($dpostul as $dp1) {
            $Immobi1[$ia]["TipoBien"] = $dp1->getTipoBien();
            $Immobi1[$ia]["Ubicacion"] = $dp1->getUbicacion();
            $Immobi1[$ia]["Fecha"] = $dp1->getFecha();
            $Immobi1[$ia]["Monto"] = $dp1->getMonto();
            $sum_patr+=$dp1->getMonto();
            $ia++;
        }

        $queryB = $em->createQuery('SELECT ccc FROM hojaVidaBundle:Patrimonio ccc where ccc.tipoPatrimonio=2 and ccc.pkDatPostulante=' . $codigo . 'and ccc.estadoAudt=1');
        $dpo = $queryB->getResult();
        $Immobi2 = array();
        $iE = 0;
        $sum_patr2 = 0;
        foreach ($dpo as $dp2) {
            $Immobi2[$iE]["TipoBien"] = $dp2->getTipoBien();
            $Immobi2[$iE]["Ubicacion"] = $dp2->getUbicacion();
            $Immobi2[$iE]["Fecha"] = $dp2->getFecha();
            $Immobi2[$iE]["Monto"] = $dp2->getMonto();
            $sum_patr2+= $dp2->getMonto();
            $iE++;
        }


        $queC = $em->createQuery('SELECT ddd FROM hojaVidaBundle:PatrimonioOtros ddd where ddd.pkDatPostulante=' . $codigo . 'and ddd.estadoAudt=1');
        $dpatri = $queC->getResult();
        $Patriotr = array();
        $iD = 0;
        $sum_pat_otr = 0;
        foreach ($dpatri as $dp3) {
            $Patriotr[$iD]["Descripcion"] = $dp3->getDescripcion();
            $Patriotr[$iD]["Valor"] = $dp3->getValor();
            $sum_pat_otr+= $dp3->getValor();
            $iD++;
        }

        $que = $em->createQuery('SELECT eee FROM hojaVidaBundle:SistemaFinanciero eee where eee.pkDatPostulante=' . $codigo . 'and eee.estadoAudt=1');
        $dpfi = $que->getResult();
        $Financi = array();
        $iF = 0;
        $sum_sis_fin = 0;
        foreach ($dpfi as $dp4) {
            $Financi[$iF]["Clase"] = $dp4->getClase();
            $Financi[$iF]["Entidad"] = $dp4->getEntidad();
            $Financi[$iF]["Valor"] = $dp4->getValor();
            $sum_sis_fin+=$dp4->getValor();
            $iF++;
        }

        $query = $em->createQuery('SELECT acre FROM hojaVidaBundle:Acreencias acre where acre.pkDatPostulante=' . $codigo . 'and acre.estadoAudt=1');
        $Acreencias = $query->getResult();
        $Acre_array = array();
        $acr = 0;
        $sum_acre = 0;
        foreach ($Acreencias as $acre) {
            $Acre_array[$acr]["Naturaleza"] = $acre->getNaturaleza();
            $Acre_array[$acr]["Entidad"] = $acre->getEntidad();
            $Acre_array[$acr]["Valor"] = $acre->getValor();
            $sum_acre+= $acre->getValor();
            $acr++;
        }

        $quey = $em->createQuery('SELECT mov FROM hojaVidaBundle:MovimientoMigratorio mov where  mov.pkDatPostulante=' . $codigo . ' and mov.estadoAudt=1');
        $MovimientoMigratorio = $quey->getResult();
        $dataMovMig = array();
        $im = 0;
        $dataopt = array("NO ELIGIO", "ENTRADA", "SALIDA");
        foreach ($MovimientoMigratorio as $mm) {
            $dataMovMig[$im]["Tipo"] = $dataopt[$mm->getTipo()];
            $dataMovMig[$im]["Fecha"] = $mm->getFecha() . "";
            $dataMovMig[$im]["DestinoProcedencia"] = $mm->getDestinoProcedencia();
            $im++;
        }

        $query = $em->createQuery('SELECT inf FROM hojaVidaBundle:InformacionCamaInfo inf where inf.pkDatPostulante=' . $codigo . ' and inf.estadoAudt=1');
        $info_cam = $query->getResult();
        $info21 = "";
        $info22 = "";
        $info23 = "";
        foreach ($info_cam as $inf) {

            switch ($inf->getTipo()) {
                case "1":
                    $info21 = $inf->getDescripcion();
                    break;
                case "2":
                    $info22 = $inf->getDescripcion();
                    break;
                case "3":
                    $info23 = $inf->getDescripcion();
                    break;
            }
        }

        $query = $em->createQuery('SELECT ddp FROM hojaVidaBundle:InformacionRegistroDe ddp where ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $rubro4 = $query->getResult();

        $data = array(
            "DatosPersonales"=>$DatosPersonales[0],     
            "DatosPostulante" => $DatosPostulante[0],
            "ConvocatoriasAnteriores" => $ConvocatoriasAnteriores,
            "DatosAcademicos" => $DatosAcademicos[0],
            "daUniv" => $univ,
            "daCole" => $cole,
            "DocDerecho" => $DocDerechoArray,
            "MaeDerecho" => $MaeDerechoArray,
            "OtrasDisciplinas" => $OtrasDisciplinasArray,
            "MeritosUniv" => $MerUnivArray,
            "DocDesProfesional" => $DocDesProfesionalArray,
            "MagistradoRatificado" => $dataMagistradoRatificado,
            "CalJudFis" => $CalJudFisArray,
            "DetSituacionLaboral" => $DetSituacionLaboralArray,
            "SitLaboral" => $DetSituacionLaboralArray[0]["SituacionLaboral"],
            "DocenciaUniversitaria" => $DocenciaUniversitariaArray,
            "Publicaciones" => $PublicacionesData,
            "ProdJurFiscal" => $ProdJurFiscalArray,
            "LicenciasOtorgadas" => $LicenciasOtorgadasArray,
            "SumDias" => $sum_dias,
            "anteA" => $anteA,
            "anteB" => $anteB,
            "anteC" => $anteC,
            "dpostul_rep" => $dpostul_rep,
            "dpostul_repB" => $dpostul_repB,
            "dpostul_repC" => $dpostul_repC,
            "dpostul_repD" => $dpostul_repD,
            "dpostul_repE" => $dpostul_repE,
            "dpostul_repF" => $dpostul_repF,
            "dpostul_repFA" => $dpostul_repFA,
            "dpostul_repFB" => $dataFB,
            "dpostul_repFC" => $dataFC,
            "dpostul_repFD" => $dataFD,
            "dpostul_repFE" => $dataFE,
            "dpostul_repFF" => $dataFF,
            "dpostul_repFA2" => $dataFA2,
            "dpostul_repFB2" => $dataFB2,
            "dpostul_repFC2" => $dataFC2,
            "dpostul_repFD2" => $dataFD2,
            "dpostul_repFE2" => $dataFE2,
            "info1" => $info1,
            "info2" => $info2,
            "info3" => $info3,
            "Ingresos1" => $Ingre,
            "sum1" => $sum1,
            "otrosingresos" => $Otrosin,
            "sum2" => $sum_otr_ing,
            "dpostul" => $dpostul,
            "sum3" => $sum_patr,
            "dpo" => $Immobi2,
            "sum4" => $sum_patr2,
            "dpatri" => $dpatri,
            "sum5" => $sum_pat_otr,
            "Financi" => $Financi,
            "sum6" => $sum_sis_fin,
            "Acre_array" => $Acre_array,
            "sum7" => $sum_acre,
            "dataMovMig" => $dataMovMig,
            "info21" => $info21,
            "info22" => $info22,
            "info23" => $info23,
            "rubro4" => $rubro4[0]
        );


        $this->render('hojaVidaBundle:update_formularios:reporte.pdf.twig', $data, $response);
        $xml = $response->getContent();
        $content = $facade->render($xml);

        return new Response($content, 200, array('content-type' => 'application/pdf'));
    }

}

?>
