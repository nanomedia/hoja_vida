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

    public function selectPostulante($c, $codigo) {

        $em = $c->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $dp = $em->getRepository('hojaVidaBundle:DatosPostulante')->find($codigo);

        $opt = "";

        $opciones = array("-ELEGIR-", "PROFA", "Ascenso");
        for ($i = 0; $i < 3; $i++) {
            $select = "";
            if ($dp->getTipoCurso() == $i) {
                $select = "selected";
            };
            $opt.='<option value="' . $i . '"' . $select . '>' . $opciones[$i] . '</option>';
        }

        $query = $em->createQuery('SELECT c FROM hojaVidaBundle:ConvocatoriasAnteriores c WHERE c.pkDatPostulante=' . $dp->getPkDatPostulante() . ' and c.estadoAudt=1');
        $canteriores = $query->getResult();

        $count = 1;
        $str = "";
        foreach ($canteriores as $val) {
            $boton = '<input class="remove_canteriores menos" type="button" value="-">';
            if ($count == 1) {
                $boton = "";
            }

            $str.= '<tr>
                        <td align="center">' . $count . '</td>
                        <td><input type="text" name="convocatoria[]" class="row-edit" value="' . $val->getConvocatoria() . '" ></td>
                        <td><input type="text" name="plaza[]" class="row-edit" value="' . $val->getPlaza() . '"></td>
                        <td><input type="text" name="etapa[]" class="row-edit" value="' . $val->getEtapa() . '"></td>
                        <td>' . $boton . '</td>
                   </tr>';
            $count++;
        }

        return array("postulante" => $dp, "cbo" => $opt, "canteriores" => $str);
    }

    public function actualizarDatosPostulante($c, $request) {
        $em = $c->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $id_pos = $request->request->get("id_pos");
        $txt_cargoAPostular = $request->request->get('txt_cargoAPostular');
        $txt_condicion = $request->request->get('txt_condicion');
        $cbo_tipoCurso = $request->request->get('cbo_tipoCurso');
        $txt_nota = $request->request->get('txt_nota');
        $txt_prePromedio = $request->request->get('txt_prePromedio');
        $txt_ordenMerito = $request->request->get('txt_ordenMerito');
        $txt_plazasVacantes = $request->request->get('txt_plazasVacantes');
        $txt_ex_cono = $request->request->get('txt_ex_cono');
        $afi_curr = $request->request->get('afi_curr');
        $user = $request->request->get('user');

        $dpos = $em->getRepository('hojaVidaBundle:DatosPostulante')->find($id_pos);

        $dpos->setCargoAPostular($txt_cargoAPostular);
        $dpos->setCondicion($txt_condicion);
        $dpos->setTipoCurso($cbo_tipoCurso);
        $dpos->setNota($txt_nota);
        $dpos->setPrePromedio($txt_prePromedio);
        $dpos->setOrdenMerito($txt_ordenMerito);
        $dpos->setPlazasVacantes($txt_plazasVacantes);
        $dpos->setExamenConocimientos($txt_ex_cono);
        $dpos->setAfiliacionCurricular($afi_curr);

        $dpos->setUsuarioAudt($user);
        $dpos->setEstadoAudt(1);

        $em->persist($dpos);
        $em->flush();

        $this->actualizarConvAnteriores($c, $request, $dpos);
        return "se actualizo";
    }

    public function actualizarConvAnteriores($c, $request, $obj_datos_postulante) {
        $em = $c->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $query = $em->createQuery('SELECT c FROM hojaVidaBundle:ConvocatoriasAnteriores c WHERE c.pkDatPostulante=' . $obj_datos_postulante->getPkDatPostulante() . ' and c.estadoAudt=1');
        $canteriores = $query->getResult();

        foreach ($canteriores as $value) {
            $value->setEstadoAudt(2);
            $em->persist($value);
            $em->flush();
        }

        $convocatoria = $request->request->get('convocatoria');
        $plaza = $request->request->get('plaza');
        $etapa = $request->request->get('etapa');
        $user = $request->request->get('user');
        $hoy = new DateTime();
        $ip = $request->getClientIp();

        for ($i = 0; $i < count($convocatoria); $i++) {

            $conv = new ConvocatoriasAnteriores();
            $conv->setConvocatoria($convocatoria[$i]);
            $conv->setPlaza($plaza[$i]);
            $conv->setEtapa($etapa[$i]);
            $conv->setPkDatPostulante($obj_datos_postulante);
            $conv->setIpAudt($ip);
            $conv->setFechaAudt($hoy);
            $conv->setUsuarioAudt($user);
            $conv->setEstadoAudt(1);
            $em->persist($conv);
            $em->flush();
        }
    }
 
}

?>
