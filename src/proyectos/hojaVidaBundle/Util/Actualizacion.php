<?php

namespace proyectos\hojaVidaBundle\Util;

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
use proyectos\hojaVidaBundle\Entity\MovimientoMigratorio;
use proyectos\hojaVidaBundle\Entity\InformacionCamaInfo;
use proyectos\hojaVidaBundle\Entity\InformacionRegistroDe;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use \DateTime;

class Actualizacion {

    public function actualizarDatosPostulante($c,$request) {

//        $txt_cargoAPostular = $request->request->get('txt_cargoAPostular');
//        $txt_condicion = $request->request->get('txt_condicion');
//        $cbo_tipoCurso = $request->request->get('cbo_tipoCurso');
//        $txt_nota = $request->request->get('txt_nota');
//        $txt_prePromedio = $request->request->get('txt_prePromedio');
//        $txt_ordenMerito = $request->request->get('txt_ordenMerito');
//        $txt_plazasVacantes = $request->request->get('txt_plazasVacantes');
//        $id_cod = $request->request->get("id_cod");
//        $txt_ex_cono = $request->request->get('txt_ex_cono');
//        $afi_curr = $request->request->get('afi_curr');
//        $user = $request->request->get('user');


        $txt_cargoAPostular = "121212";
        $txt_condicion = "121212";
        $cbo_tipoCurso = "121212";
        $txt_nota = "121212";
        $txt_prePromedio = "121212";
        $txt_ordenMerito = "1";
        $txt_plazasVacantes = "12";
        $id_cod = "121212";
        ;
        $txt_ex_cono = "121212";
        $afi_curr = "121212";
        $cod = "1";
        $user = "1235";

        $hoy = new DateTime();
        $ip = $request->getClientIp();
        
        $em = $c->getDoctrine()->getEntityManager();

        $obj = new DatosPostulante();
        $obj = $em->getRepository('hojaVidaBundle:DatosPostulante')->find($cod);
        $obj->setCondicion("0");

        $obj->setUsuarioAudt($user);

        $obj->setIpAudt($ip);
        $obj->setFechaAudt($hoy);
        $em->persist($obj);
        $em->flush();



        $dpos = new DatosPostulante();
        $dpos->setCargoAPostular($txt_cargoAPostular);
        $dpos->setCondicion($txt_condicion);
        $dpos->setTipoCurso($cbo_tipoCurso);
        $dpos->setNota($txt_nota);
        $dpos->setPrePromedio($txt_prePromedio);
        $dpos->setOrdenMerito($txt_ordenMerito);
        $dpos->setPkSusuario($id_cod);
        $dpos->setPlazasVacantes($txt_plazasVacantes);
        $dpos->setExamenConocimientos($txt_ex_cono);
        $dpos->setAfiliacionCurricular($afi_curr);

        $dpos->setUsuarioAudt($user);

        $dpos->setIpAudt($ip);
        $dpos->setFechaAudt($hoy);


        $em = $c->getDoctrine()->getEntityManager();
        $em->persist($dpos);
        $em->flush();

//        $this->insertarConvAnteriores($c, $request, $dpos);

        return "se inserto";
    }

}

?>
