<?php

namespace proyectos\hojaVidaBundle\Util;

use proyectos\hojaVidaBundle\Entity\DatosPersonales;
use proyectos\hojaVidaBundle\Entity\DatosPostulante;
use proyectos\hojaVidaBundle\Entity\ConvocatoriasAnteriores;
use proyectos\hojaVidaBundle\Entity\DatosAcademicos;
use proyectos\hojaVidaBundle\Entity\MeritosUniv;
use proyectos\hojaVidaBundle\Entity\DocDesProfesional;
use proyectos\hojaVidaBundle\Entity\MagistradoRatificado;
use proyectos\hojaVidaBundle\Entity\CalJudFis;
use proyectos\hojaVidaBundle\Entity\DocDerecho;
use proyectos\hojaVidaBundle\Entity\MaeDerecho;
use proyectos\hojaVidaBundle\Entity\OtrasDisciplinas;
use proyectos\hojaVidaBundle\Entity\DetSituacionLaboral;
use proyectos\hojaVidaBundle\Entity\DocenciaUniversitaria;
use proyectos\hojaVidaBundle\Entity\Publicaciones;
use proyectos\hojaVidaBundle\Entity\ProdJurFiscal;
use proyectos\hojaVidaBundle\Entity\LicenciasOtorgadas;
use proyectos\hojaVidaBundle\Entity\Antecedentes;
use proyectos\hojaVidaBundle\Entity\ProcesosJudiciales;
use proyectos\hojaVidaBundle\Entity\ProcesosAdministrativos;
use proyectos\hojaVidaBundle\Entity\ProcesosEnPoderJud;
use proyectos\hojaVidaBundle\Entity\ProcesosEnMinPub;
use proyectos\hojaVidaBundle\Entity\InformacionOficinas;
use proyectos\hojaVidaBundle\Entity\Ingresos;
use proyectos\hojaVidaBundle\Entity\OtrosIngresos;
use proyectos\hojaVidaBundle\Entity\Patrimonio;
use proyectos\hojaVidaBundle\Entity\PatrimonioOtros;
use proyectos\hojaVidaBundle\Entity\SistemaFinanciero;
use proyectos\hojaVidaBundle\Entity\Acreencias;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Mantenimiento {

    public function insertarDatosPersonales($c, $request) {

        $txt_nombres = $request->request->get('txt_nombres');
        $txt_apellidos = $request->request->get('txt_apellidos');
        $txt_lugarNac = $request->request->get('txt_lugarNac');
        $txt_fechaNac = $request->request->get('txt_fechaNac');
        $txt_edad = $request->request->get('txt_edad');
        $txt_dni = $request->request->get('txt_dni');
        $rad_discapacidad = $request->request->get('rad_discapacidad');
        $txt_certDiscapacidad = $request->request->get('txt_certDiscapacidad');
        $uploadedFile = $request->files->get('file_foto');

        $destino = __DIR__ . '/../../../../web/fotos';
        $uploadedFile->move($destino, "$txt_dni.jpg");

        $dp = new DatosPersonales();
        $dp->setNombres($txt_nombres);
        $dp->setApellidos($txt_apellidos);
        $dp->setLugarNac($txt_lugarNac);
        $dp->setFechaNac($txt_fechaNac);
        $dp->setEdad($txt_edad);
        $dp->setDni($txt_dni);
        $dp->setDiscapacidad($rad_discapacidad);
        $dp->setCertDiscapacidad($txt_certDiscapacidad);
        $dp->setFoto($txt_dni . ".jpg");
        $em = $c->getDoctrine()->getEntityManager();
        $em->persist($dp);
        $em->flush();

        return $dp->getIdDatPersonal();
    }

    public function insertarDatosPostulante($c, $request) {

        $txt_cargoAPostular = $request->request->get('txt_cargoAPostular');
        $txt_condicion = $request->request->get('txt_condicion');
        $cbo_tipoCurso = $request->request->get('cbo_tipoCurso');
        $txt_nota = $request->request->get('txt_nota');
        $txt_prePromedio = $request->request->get('txt_prePromedio');
        $txt_ordenMerito = $request->request->get('txt_ordenMerito');
        $txt_plazasVacantes = $request->request->get('txt_plazasVacantes');
        $id_cod = $request->request->get("id_cod");
        $txt_ex_cono = $request->request->get('txt_ex_cono');
        $afi_curr = $request->request->get('afi_curr');

        $dp = $c->getDoctrine()->getRepository('hojaVidaBundle:DatosPersonales')->find($id_cod);

        $dpos = new DatosPostulante();
        $dpos->setCargoAPostular($txt_cargoAPostular);
        $dpos->setCondicion($txt_condicion);
        $dpos->setTipoCurso($cbo_tipoCurso);
        $dpos->setNota($txt_nota);
        $dpos->setPrePromedio($txt_prePromedio);
        $dpos->setOrdenMerito($txt_ordenMerito);
        $dpos->setIdDatPersonal($dp);
        $dpos->setPlazasVacantes($txt_plazasVacantes);
        $dpos->setExamenConocimientos($txt_ex_cono);
        $dpos->setAfiliacionCurricular($afi_curr);

        $em = $c->getDoctrine()->getEntityManager();
        $em->persist($dpos);
        $em->flush();

        $this->insertarConvAnteriores($c, $request, $dpos);

        return $dpos->getPkDatPostulante();
    }

    public function insertarConvAnteriores($c, $request, $obj_datos_postulante) {

        $convocatoria = $request->request->get('convocatoria');
        $plaza = $request->request->get('plaza');
        $etapa = $request->request->get('etapa');

        for ($i = 0; $i < count($convocatoria); $i++) {

            $conv = new ConvocatoriasAnteriores();
            $conv->setConvocatoria($convocatoria[$i]);
            $conv->setPlaza($plaza[$i]);
            $conv->setEtapa($etapa[$i]);
            $conv->setPkDatPostulante($obj_datos_postulante);

            $em = $c->getDoctrine()->getEntityManager();
            $em->persist($conv);
            $em->flush();
        }
    }

    public function insertarDatosAcademicos($c, $request) {
        $cbo_univProcedencia = $request->request->get('cbo_univProcedencia');
        $cbo_colegioProfesional = $request->request->get('cbo_colegioProfesional');
        $txt_fechaIncorporacion = $request->request->get('txt_fechaIncorporacion');
        $txt_tituloOtros = $request->request->get('txt_tituloOtros');
        $txt_tesisTitular = $request->request->get('txt_tesisTitular');
        $id_pos = $request->request->get("id_pos");
        $dp = $c->getDoctrine()->getEntityManager()->getRepository('hojaVidaBundle:DatosPostulante')->find($id_pos);

        $da = new DatosAcademicos();
        $da->setUnivProcedencia($cbo_univProcedencia);
        $da->setColegioProfesional($cbo_colegioProfesional);
        $da->setFechaIncorporacion($txt_fechaIncorporacion);
        $da->setTituloOtros($txt_tituloOtros);
        $da->setTesisTitular($txt_tesisTitular);
        $da->setPkDatPostulante($dp);

        $em = $c->getDoctrine()->getEntityManager();
        $em->persist($da);
        $em->flush();

        $this->insertarDocDerecho($c, $request, $da);
        $this->insertarMaeDerecho($c, $request, $da);
        $this->insertarOtrasDisciplinas($c, $request, $da);
        $this->insertarMeritosUniversitarios($c, $request, $da);


        return "Se Inserto Datos Postulante";
    }

    public function insertarDocDerecho($c, $request, $obj_datos_academicos) {
        $cbo_universidad_doc = $request->request->get('cbo_universidad_doc');
        $cbo_nivel_doc = $request->request->get('cbo_nivel_doc');
        $txt_mencion_doc = $request->request->get('txt_mencion_doc');
        $cbo_anio_doc = $request->request->get('cbo_anio_doc');

        for ($i = 0; $i < count($cbo_universidad_doc); $i++) {
            $dder = new DocDerecho();
            $dder->setUniversidad($cbo_universidad_doc[$i]);
            $dder->setNivel($cbo_nivel_doc[$i]);
            $dder->setMension($txt_mencion_doc[$i]);
            $dder->setAnio($cbo_anio_doc[$i]);
            $dder->setPkDatAcademicos($obj_datos_academicos);

            $em = $c->getDoctrine()->getEntityManager();
            $em->persist($dder);
            $em->flush();
        }
    }

    public function insertarMaeDerecho($c, $request, $obj_datos_academicos) {
        $cbo_universidad_mae = $request->request->get('cbo_universidad_mae');
        $cbo_nivel_mae = $request->request->get('cbo_nivel_mae');
        $txt_mencion_mae = $request->request->get('txt_mencion_mae');
        $cbo_anio_mae = $request->request->get('cbo_anio_mae');

        for ($i = 0; $i < count($cbo_universidad_mae); $i++) {
            $mder = new MaeDerecho();
            $mder->setUniversidad($cbo_universidad_mae[$i]);
            $mder->setNivel($cbo_nivel_mae[$i]);
            $mder->setMension($txt_mencion_mae[$i]);
            $mder->setAnio($cbo_anio_mae[$i]);
            $mder->setPkDatAcademicos($obj_datos_academicos);

            $em = $c->getDoctrine()->getEntityManager();
            $em->persist($mder);
            $em->flush();
        }
    }

    public function insertarOtrasDisciplinas($c, $request, $obj_datos_academicos) {
        $cbo_universidad_otras = $request->request->get('cbo_universidad_otras');
        $cbo_nivel_otras = $request->request->get('cbo_nivel_otras');
        $txt_mencion_otras = $request->request->get('txt_mencion_otras');
        $cbo_anio_otras = $request->request->get('cbo_anio_otras');

        $otr = new OtrasDisciplinas();
        $otr->setUniversidad($cbo_universidad_otras);
        $otr->setNivel($cbo_nivel_otras);
        $otr->setMension($txt_mencion_otras);
        $otr->setAnio($cbo_anio_otras);
        $otr->setPkDatAcademicos($obj_datos_academicos);

        $em = $c->getDoctrine()->getEntityManager();
        $em->persist($otr);
        $em->flush();
    }

    public function insertarMeritosUniversitarios($c, $request, $obj_datos_academicos) {
        $cbo_puesto_meritos = $request->request->get('cbo_puesto_meritos');
        $cbo_anio_meritos = $request->request->get('cbo_anio_meritos');
        $cbo_univ_meritos = $request->request->get('cbo_univ_meritos');

        $me = new MeritosUniv();
        $me->setPuesto($cbo_puesto_meritos);
        $me->setAnio($cbo_anio_meritos);
        $me->setUniversidad($cbo_univ_meritos);
        $me->setPkDatAcademicos($obj_datos_academicos);

        $em = $c->getDoctrine()->getEntityManager();
        $em->persist($me);
        $em->flush();
    }

    public function insertarExpProfesional($c, $request) {
        $id_pos = $request->request->get("id_pos");
        $dp = $c->getDoctrine()->getEntityManager()->getRepository('hojaVidaBundle:DatosPostulante')->find($id_pos);
        $this->insertarDocDESProfesional($c, $request, $dp);
        $this->insertarMagistradoRatificado($c, $request, $dp);
        $this->insertarCalJudFis($c, $request, $dp);
        $this->insertarSituacionLaboral($c, $request, $dp);
        $this->insertarDocUniversitaria($c, $request, $dp);
        $this->insertarPublicaciones($c, $request, $dp);
        $this->insertarProJurFiscal($c, $request, $dp);
        $this->insertarLicOtorgadas($c, $request, $dp);
        return "se inserto";
    }

    public function insertarDocDESProfesional($c, $request, $obj_datos_postulante) {

        $txt_num_exp = $request->request->get('txt_num_exp');
        $txt_ddas = $request->request->get('txt_ddas');
        $txt_ddae = $request->request->get('txt_ddae');
        $txt_materia = $request->request->get('txt_materia');
        $txt_espec = $request->request->get('txt_espec');
        $txt_cal1 = $request->request->get('txt_cal1');
        $txt_cal2 = $request->request->get('txt_cal2');

        for ($i = 0; $i < count($txt_num_exp); $i++) {
            $ddp = new DocDesProfesional();
            $ddp->setNumExp($txt_num_exp[$i]);
            $ddp->setDdas($txt_ddas[$i]);
            $ddp->setDdae($txt_ddae[$i]);
            $ddp->setMateria($txt_materia[$i]);
            $ddp->setEspecialidad($txt_espec[$i]);
            $ddp->setCalificacion1($txt_cal1[$i]);
            $ddp->setCalificacion2($txt_cal2[$i]);
            $ddp->setPkDatPostulante($obj_datos_postulante);

            $em = $c->getDoctrine()->getEntityManager();
            $em->persist($ddp);
            $em->flush();
        }
    }

    public function insertarMagistradoRatificado($c, $request, $obj_datos_postulante) {
        $rad_resp1 = $request->request->get('rad-resp1');
        $rad_resp2 = $request->request->get('rad-resp2');
        $txt_resolucion = $request->request->get('txt_resolucion');
        $txt_fec_res = $request->request->get('txt_fec_res');
        $cbo_resp3 = $request->request->get('cbo-resp3');
        $mr = new MagistradoRatificado();
        $mr->setRespuesta1($rad_resp1);
        if ($mr->getRespuesta1() == "0") {
            $rad_resp2 = null;
        }
        $mr->setRespuesta2($rad_resp2);
        $mr->setResolucion($txt_resolucion);
        $mr->setFechaRes($txt_fec_res);
        $mr->setRespuesta3($cbo_resp3);
        $mr->setPkDatPostulante($obj_datos_postulante);
        $em = $c->getDoctrine()->getEntityManager();
        $em->persist($mr);
        $em->flush();
    }

    public function insertarCalJudFis($c, $request, $obj_datos_postulante) {
        $txt_cal_numExp = $request->request->get('txt_cal_numExp');
        $txt_cal_tipResolucion = $request->request->get('txt_cal_tipResolucion');
        $txt_cal_fechaRes = $request->request->get('txt_cal_fechaRes');
        $txt_cal_ddagraviado = $request->request->get('txt_cal_ddagraviado');
        $txt_cal_ddagresor = $request->request->get('txt_cal_ddagresor');
        $txt_cal_materia = $request->request->get('txt_cal_materia');
        $txt_cal_especialidad = $request->request->get('txt_cal_especialidad');
        $txt_cal_nota = $request->request->get('txt_cal_nota');


        for ($i = 0; $i < count($txt_cal_numExp); $i++) {

            $cal = new CalJudFis();
            $cal->setNumExp($txt_cal_numExp[$i]);
            $cal->setTipResolucion($txt_cal_tipResolucion[$i]);
            $cal->setFechaRes($txt_cal_fechaRes[$i]);
            $cal->setDdagraviado($txt_cal_ddagraviado[$i]);
            $cal->setDdagresor($txt_cal_ddagresor[$i]);
            $cal->setMateria($txt_cal_materia[$i]);
            $cal->setEspecialidad($txt_cal_especialidad[$i]);
            $cal->setNota($txt_cal_nota[$i]);
            $cal->setPkDatPostulante($obj_datos_postulante);
            $em = $c->getDoctrine()->getEntityManager();
            $em->persist($cal);
            $em->flush();
        }
    }

    public function insertarSituacionLaboral($c, $request, $obj_datos_postulante) {
        $txtctrabajo = $request->request->get('txtctrabajo');
        $txtcargo = $request->request->get('txtcargo');
        $txtperiodo = $request->request->get('txtperiodo');
        $situacion_laboral_actual = $request->request->get('situacion_laboral_actual');

        for ($i = 0; $i < count($txtctrabajo); $i++) {
            $dl = new DetSituacionLaboral();
            $dl->setCentroTrabajo($txtctrabajo[$i]);
            $dl->setCargo($txtcargo[$i]);
            $dl->setPeriodo($txtperiodo[$i]);
            $dl->setSituacionLaboral($situacion_laboral_actual);
            $dl->setPkDatPostulante($obj_datos_postulante);
            $em = $c->getDoctrine()->getEntityManager();
            $em->persist($dl);
            $em->flush();
        }
    }

    public function insertarDocUniversitaria($c, $request, $obj_datos_postulante) {
        $cbo_univ_docuni = $request->request->get('cbo_univ_docuni');
        $txt_facu_docuni = $request->request->get('txt_facu_docuni');
        $cbo_condicion_docuni = $request->request->get('cbo_condicion_docuni');
        $cbo_categoria_docuni = $request->request->get('cbo_categoria_docuni');
        $txt_cursos_docuni = $request->request->get('txt_cursos_docuni');
        $txt_per_docuni = $request->request->get('txt_per_docuni');

        for ($i = 0; $i < count($cbo_univ_docuni); $i++) {
            $du = new DocenciaUniversitaria();
            $du->setUniversidad($cbo_univ_docuni[$i]);
            $du->setFacultad($txt_facu_docuni[$i]);
            $du->setCondicion($cbo_condicion_docuni[$i]);
            $du->setCategoria($cbo_categoria_docuni[$i]);
            $du->setCursos($txt_cursos_docuni[$i]);
            $du->setPeriodo($txt_per_docuni[$i]);
            $du->setPkDatPostulante($obj_datos_postulante);
            $em = $c->getDoctrine()->getEntityManager();
            $em->persist($du);
            $em->flush();
        }
    }

    public function insertarPublicaciones($c, $request, $obj_datos_postulante) {
        $txt_ltUni = $request->request->get('txt_ltUni');
        $txt_invJurDoc = $request->request->get('txt_invJurDoc');
        $txt_EnMaJur = $request->request->get('txt_EnMaJur');
        $txt_amJur = $request->request->get('txt_amJur');
        $txtamNoJur = $request->request->get('txtamNoJur');
        $pu = new Publicaciones();
        $pu->setLibrosTextosUniv($txt_ltUni);
        $pu->setInvJuridicas($txt_invJurDoc);
        $pu->setEnsayosJuridico($txt_EnMaJur);
        $pu->setArticulosJuridicos($txt_amJur);
        $pu->setArticulosNoJuridicos($txtamNoJur);
        $pu->setPkDatPostulante($obj_datos_postulante);
        $em = $c->getDoctrine()->getEntityManager();
        $em->persist($pu);
        $em->flush();
    }

    public function insertarProJurFiscal($c, $request, $obj_datos_postulante) {
        $cbo_JurFis = $request->request->get('cbo_JurFis');
        $text_area_JurFis = $request->request->get('text_area_JurFis');
        $pj = new ProdJurFiscal();
        $pj->setRespuesta($cbo_JurFis);
        $pj->setDetRespuesta($text_area_JurFis);
        $pj->setPkDatPostulante($obj_datos_postulante);
        $em = $c->getDoctrine()->getEntityManager();
        $em->persist($pj);
        $em->flush();
    }

    public function insertarLicOtorgadas($c, $request, $obj_datos_postulante) {

        $hd_anio = $request->request->get('hd_anio');
        $txt_total_lic = $request->request->get('txt_total_lic');
        $txt_enfermedad = $request->request->get('txt_enfermedad');
        $txt_vacaciones = $request->request->get('txt_vacaciones');
        $txt_capacitacion = $request->request->get('txt_capacitacion');
        $txt_onomastico = $request->request->get('txt_onomastico');
        $txt_lic_goce = $request->request->get('txt_lic_goce');
        $txt_mot_personales = $request->request->get('txt_mot_personales');

        for ($i = 0; $i < count($hd_anio); $i++) {
            $lc = new LicenciasOtorgadas();
            $lc->setAnio($hd_anio[$i]);
            $lc->setTotalLicencias($txt_total_lic[$i]);
            $lc->setEnfermedad($txt_enfermedad[$i]);
            $lc->setVacaciones($txt_vacaciones[$i]);
            $lc->setCapacitacion($txt_capacitacion[$i]);
            $lc->setOnomastico($txt_onomastico[$i]);
            $lc->setLicenciaGoce($txt_lic_goce[$i]);
            $lc->setMotivosPersonales($txt_mot_personales[$i]);
            $lc->setPkDatPostulante($obj_datos_postulante);
            $em = $c->getDoctrine()->getEntityManager();
            $em->persist($lc);
            $em->flush();
        }
    }

    public function insertarConducta($c, $request) {
        $id_pos = $request->request->get("id_pos");
        $dp = $c->getDoctrine()->getEntityManager()->getRepository('hojaVidaBundle:DatosPostulante')->find($id_pos);
        $this->insertarAntecedentes($c, $request, $dp);
        $this->insertarProcesosJudiciales($c, $request, $dp);
        $this->insertarProcesosAdministrativos($c, $request, $dp);
        $this->insertarProcesosEnPoderJud($c, $request, $dp);
        $this->insertarProcesosEnMinisterioPublico($c, $request, $dp);
        return $dp->getPkDatPostulante();
    }

    public function insertarAntecedentes($c, $request, $dp) {

        $txt_apenales = $request->request->get('txt_apenales');
        $txt_ajudiciales = $request->request->get('txt_ajudiciales');
        $txt_apoliciales = $request->request->get('txt_apoliciales');
        $an1 = new Antecedentes();
        $an1->setTipo(0);
        $an1->setDescripcion($txt_apenales);
        $an1->setPkDatPostulante($dp);
        $an2 = new Antecedentes();
        $an2->setTipo(1);
        $an2->setDescripcion($txt_ajudiciales);
        $an2->setPkDatPostulante($dp);
        $an3 = new Antecedentes();
        $an3->setTipo(2);
        $an3->setDescripcion($txt_apoliciales);
        $an3->setPkDatPostulante($dp);
        $em = $c->getDoctrine()->getEntityManager();
        $em->persist($an1);
        $em->persist($an2);
        $em->persist($an3);
        $em->flush();
    }

    public function insertarProcesosJudiciales($c, $request, $dp) {

        $hd_tipo_jud = $request->request->get('hd_tipo_jud');
        $txt_exp_con = $request->request->get('txt_exp_con');
        $txt_exp_org_con = $request->request->get('txt_exp_org_con');
        $txt_dem_agre_con = $request->request->get('txt_dem_agre_con');
        $txt_materia_con = $request->request->get('txt_materia_con');
        $txt_estado_con = $request->request->get('txt_estado_con');

        for ($i = 0; $i < count($txt_exp_con); $i++) {
            $pj = new ProcesosJudiciales();
            $pj->setTipo($hd_tipo_jud[$i]);
            $pj->setExpediente($txt_exp_con[$i]);
            $pj->setOrgano($txt_exp_org_con[$i]);
            $pj->setDemandadoAgresor($txt_dem_agre_con[$i]);
            $pj->setMateria($txt_materia_con[$i]);
            $pj->setEstado($txt_estado_con[$i]);
            $pj->setPkDatPostulante($dp);

            $em = $c->getDoctrine()->getEntityManager();
            $em->persist($pj);
            $em->flush();
        }
    }

    public function insertarProcesosAdministrativos($c, $request, $dp) {
        /*
         * TIPO : PROCEDIMIENTOS 1, SANCIONES 2, MEDIDAS 3,
         * ID_INSTITUCION: PJ 1, MP 2 ,Otra institución 3, SERVIR 4 
         */

        $cbo_ins_adm1 = $request->request->get('cbo_ins_adm1');
        $txt_res_adm1 = $request->request->get('txt_res_adm1');
        $txt_san_adm1 = $request->request->get('txt_san_adm1');
        $txt_est_adm1 = $request->request->get('txt_est_adm1');
        $pa1 = new ProcesosAdministrativos();
        $pa1->setTipo(1);
        $pa1->setIdInstitucion($cbo_ins_adm1);
        $pa1->setResolucion($txt_res_adm1);
        $pa1->setSancion($txt_san_adm1);
        $pa1->setEstado($txt_est_adm1);
        $pa1->setPkDatPostulante($dp);


        $cbo_ins_adm2 = $request->request->get('cbo_ins_adm2');
        $txt_res_adm2 = $request->request->get('txt_res_adm2');
        $txt_san_adm2 = $request->request->get('txt_san_adm2');
        $pa2 = new ProcesosAdministrativos();
        $pa2->setTipo(2);
        $pa2->setIdInstitucion($cbo_ins_adm2);
        $pa2->setResolucion($txt_res_adm2);
        $pa2->setSancion($txt_san_adm2);
        $pa2->setPkDatPostulante($dp);


        $cbo_ins_adm3 = $request->request->get('cbo_ins_adm3');
        $txt_res_adm3 = $request->request->get('txt_res_adm3');
        $txt_san_adm3 = $request->request->get('txt_san_adm3');

        $pa3 = new ProcesosAdministrativos();
        $pa3->setTipo(3);
        $pa3->setIdInstitucion($cbo_ins_adm3);
        $pa3->setResolucion($txt_res_adm3);
        $pa3->setSancion($txt_san_adm3);
        $pa3->setPkDatPostulante($dp);

        $em = $c->getDoctrine()->getEntityManager();
        $em->persist($pa1);
        $em->persist($pa2);
        $em->persist($pa3);
        $em->flush();
    }

    public function insertarProcesosEnPoderJud($c, $request, $dp) {
        //EN TRAMITE
        $tra_tipo_pjud = $request->request->get('tra_tipo_pjud');
        $tra_ins_pjud = $request->request->get('tra_ins_pjud');
        $tra_exp_pjud = $request->request->get('tra_exp_pjud');
        $tra_que_pjud = $request->request->get('tra_que_pjud');

        $tra_mot_pjud = $request->request->get('tra_mot_pjud');
        $tra_est_pjud = $request->request->get('tra_est_pjud');

        for ($i = 0; $i < count($tra_tipo_pjud); $i++) {
            $pp = new ProcesosEnPoderJud();
            $pp->setTipo($tra_tipo_pjud[$i]);
            $pp->setIdInstitucion($tra_ins_pjud[$i]);
            $pp->setExpediente($tra_exp_pjud[$i]);
            $pp->setQuejas($tra_que_pjud[$i]);
            $pp->setMotivo($tra_mot_pjud[$i]);
            $pp->setEstadoProc($tra_est_pjud[$i]);
            $pp->setEstado(1);
            $pp->setPkDatPostulante($dp);

            $em = $c->getDoctrine()->getEntityManager();
            $em->persist($pp);
            $em->flush();
        }
        //CONCLUIDAS
        $con_tipo_pjud = $request->request->get('con_tipo_pjud');
        $con_ins_pjud = $request->request->get('con_ins_pjud');
        $con_exp_pjud = $request->request->get('con_exp_pjud');
        $con_que_pjud = $request->request->get('con_que_pjud');
        $con_mot_pjud = $request->request->get('con_mot_pjud');
        $con_est_pjud = $request->request->get('con_est_pjud');

        for ($i = 0; $i < count($con_tipo_pjud); $i++) {
            $pp = new ProcesosEnPoderJud();
            $pp->setTipo($con_tipo_pjud[$i]);
            $pp->setIdInstitucion($con_ins_pjud[$i]);
            $pp->setExpediente($con_exp_pjud[$i]);
            $pp->setQuejas($con_que_pjud[$i]);
            $pp->setMotivo($con_mot_pjud[$i]);
            $pp->setEstadoProc($con_est_pjud[$i]);
            $pp->setEstado(2);
            $pp->setPkDatPostulante($dp);

            $em = $c->getDoctrine()->getEntityManager();
            $em->persist($pp);
            $em->flush();
        }
    }

    public function insertarProcesosEnMinisterioPublico($c, $request, $dp) {
        //EN TRAMITE
        $tra_tipo_mpub = $request->request->get('tra_tipo_mpub');
        $tra_ins_mpub = $request->request->get('tra_ins_mpub');
        $tra_exp_mpub = $request->request->get('tra_exp_mpub');
        $tra_que_mpub = $request->request->get('tra_que_mpub');

        $tra_mot_mpub = $request->request->get('tra_mot_mpub');
        $tra_est_mpub = $request->request->get('tra_est_mpub');

        for ($i = 0; $i < count($tra_tipo_mpub); $i++) {
            $pe = new ProcesosEnMinPub();
            $pe->setTipo($tra_tipo_mpub[$i]);
            $pe->setIdInstitucion($tra_ins_mpub[$i]);
            $pe->setExpediente($tra_exp_mpub[$i]);
            $pe->setQuejas($tra_que_mpub[$i]);
            $pe->setMotivo($tra_mot_mpub[$i]);
            $pe->setEstadoProc($tra_est_mpub[$i]);
            $pe->setEstado(1);
            $pe->setPkDatPostulante($dp);

            $em = $c->getDoctrine()->getEntityManager();
            $em->persist($pe);
            $em->flush();
        }
        //CONCLUIDAS
        $con_tipo_mpub = $request->request->get('con_tipo_mpub');
        $con_ins_mpub = $request->request->get('con_ins_mpub');
        $con_exp_mpub = $request->request->get('con_exp_mpub');
        $con_que_mpub = $request->request->get('con_que_mpub');
        $con_mot_mpub = $request->request->get('con_mot_mpub');
        $con_est_mpub = $request->request->get('con_est_mpub');

        for ($i = 0; $i < count($con_tipo_mpub); $i++) {
            $pe = new ProcesosEnMinPub();
            $pe->setTipo($con_tipo_mpub[$i]);
            $pe->setIdInstitucion($con_ins_mpub[$i]);
            $pe->setExpediente($con_exp_mpub[$i]);
            $pe->setQuejas($con_que_mpub[$i]);
            $pe->setMotivo($con_mot_mpub[$i]);
            $pe->setEstadoProc($con_est_mpub[$i]);
            $pe->setEstado(2);
            $pe->setPkDatPostulante($dp);
            $em = $c->getDoctrine()->getEntityManager();
            $em->persist($pe);
            $em->flush();
        }
    }

    public function insertarinfojuefis($c, $request) {
        $id_pos = $request->request->get('id_pos');
        $tdescripcion = $request->request->get('tdescripcion');
        $dp = $c->getDoctrine()->getEntityManager()->getRepository('hojaVidaBundle:DatosPostulante')->find($id_pos);

        $io = new InformacionOficinas();
        $io->setIdOficina(1);
        $io->setDescripcion($tdescripcion);
        $io->setPkDatPostulante($dp);

        $em = $c->getDoctrine()->getEntityManager();
        $em->persist($io);
        $em->flush();

        return "se inserto";
    }

    public function insertardirecproc($c, $request) {
        $id_pos = $request->request->get('id_pos');
        $tdescripcion = $request->request->get('tdescripcion');
        $dp = $c->getDoctrine()->getEntityManager()->getRepository('hojaVidaBundle:DatosPostulante')->find($id_pos);

        $io = new InformacionOficinas();
        $io->setIdOficina(2);
        $io->setDescripcion($tdescripcion);
        $io->setPkDatPostulante($dp);

        $em = $c->getDoctrine()->getEntityManager();
        $em->persist($io);
        $em->flush();

        return "se inserto";
    }

    public function insertarinfo_colegio($c, $request) {
        $id_pos = $request->request->get('id_pos');
        $tdescripcion = $request->request->get('tdescripcion');
        $dp = $c->getDoctrine()->getEntityManager()->getRepository('hojaVidaBundle:DatosPostulante')->find($id_pos);

        $io = new InformacionOficinas();
        $io->setIdOficina(3);
        $io->setDescripcion($tdescripcion);
        $io->setPkDatPostulante($dp);

        $em = $c->getDoctrine()->getEntityManager();
        $em->persist($io);
        $em->flush();

        return "se inserto";
    }

    public function insertarinfo_patrimonial($c, $request) {
        $id_pos = $request->request->get('id_pos');
        $dp = $c->getDoctrine()->getEntityManager()->getRepository('hojaVidaBundle:DatosPostulante')->find($id_pos);
        $this->insertar_ingresos($c, $request, $dp);
        $this->insertar_OtrosIngresos($c, $request, $dp);
        $this->insertarPatrimonio($c, $request, $dp);
        $this->insertarPatrimonioOtros($c, $request, $dp);
        $this->insertarSistemaFinanciero($c, $request, $dp);
        $this->insertarAcreencias($c, $request, $dp);
        return $id_pos;
    }

    public function insertar_ingresos($c, $request, $dp) {
        $txt_ing_anio = $request->request->get('txt_ing_anio');
        $txt_ing_remu = $request->request->get('txt_ing_remu');
        $txt_ing_dietas = $request->request->get('txt_ing_dietas');
        $txt_ing_total = $request->request->get('txt_ing_total');
        $in = new Ingresos();
        $in->setAnoEje($txt_ing_anio);
        $in->setRemuneracion($txt_ing_remu);
        $in->setDietas($txt_ing_dietas);
        $in->setTotal($txt_ing_total);
        $in->setPkDatPostulante($dp);
        $em = $c->getDoctrine()->getEntityManager();
        $em->persist($in);
        $em->flush();
    }

    public function insertar_OtrosIngresos($c, $request, $dp) {
        $txt_otr_ing = $request->request->get('txt_otr_ing');
        $txt_otr_val = $request->request->get('txt_otr_val');

        for ($i = 0; $i < count($txt_otr_ing); $i++) {
            $oi = new OtrosIngresos();
            $oi->setDescripcion($txt_otr_ing[$i]);
            $oi->setMonto($txt_otr_val[$i]);
            $oi->setPkDatPostulante($dp);

            $em = $c->getDoctrine()->getEntityManager();
            $em->persist($oi);
            $em->flush();
        }
    }

    public function insertarPatrimonio($c, $request, $dp) {
        $txt_tip_patrimonio = $request->request->get('txt_tip_patrimonio');
        $txt_tip_bien = $request->request->get('txt_tip_bien');
        $txt_ubic = $request->request->get('txt_ubic');
        $txt_fec_pat = $request->request->get('txt_fec_pat');
        $txt_monto_pat = $request->request->get('txt_monto_pat');

        for ($i = 0; $i < count($txt_tip_patrimonio); $i++) {
            $pa = new Patrimonio();
            $pa->setTipoPatrimonio($txt_tip_patrimonio[$i]);
            $pa->setTipoBien($txt_tip_bien[$i]);
            $pa->setUbicacion($txt_ubic[$i]);
            $pa->setFecha($txt_fec_pat[$i]);
            $pa->setMonto($txt_monto_pat[$i]);
            $pa->setPkDatPostulante($dp);

            $em = $c->getDoctrine()->getEntityManager();
            $em->persist($pa);
            $em->flush();
        }
    }

    public function insertarPatrimonioOtros($c, $request, $dp) {
        $txt_otr_descrip = $request->request->get('txt_otr_descrip');
        $txt_otr_valor = $request->request->get('txt_otr_valor');
        $po = new PatrimonioOtros();
        $po->setDescripcion($txt_otr_descrip);
        $po->setValor($txt_otr_valor);
        $po->setPkDatPostulante($dp);

        $em = $c->getDoctrine()->getEntityManager();
        $em->persist($po);
        $em->flush();
    }

    public function insertarSistemaFinanciero($c, $request, $dp) {
        $txt_clase_sis = $request->request->get('txt_clase_sis');
        $txt_enti_sis = $request->request->get('txt_enti_sis');
        $txt_val_sis = $request->request->get('txt_val_sis');

        $sis = new SistemaFinanciero();
        $sis->setClase($txt_clase_sis);
        $sis->setEntidad($txt_enti_sis);
        $sis->setValor($txt_val_sis);
        $sis->setPkDatPostulante($dp);

        $em = $c->getDoctrine()->getEntityManager();
        $em->persist($sis);
        $em->flush();
    }

    public function insertarAcreencias($c, $request, $dp) {
        $txt_nat_acre = $request->request->get('txt_nat_acre');
        $txt_ent_acre = $request->request->get('txt_ent_acre');
        $txt_mon_acre = $request->request->get('txt_mon_acre');

        $ac = new Acreencias();
        $ac->setNaturaleza($txt_nat_acre);
        $ac->setEntidad($txt_ent_acre);
        $ac->setValor($txt_mon_acre);
        $ac->setPkDatPostulante($dp);

        $em = $c->getDoctrine()->getEntityManager();
        $em->persist($ac);
        $em->flush();
    }

}

?>
