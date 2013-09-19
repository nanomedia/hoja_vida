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
        $em = $c->getDoctrine()->getEntityManager();
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
        $em = $c->getDoctrine()->getEntityManager();
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

        $hoy = new DateTime();
        $ip = $request->getClientIp();
        $dpos->setUsuarioAudt($user);

        $dpos->setIpAudt($ip);
        $dpos->setFechaAudt($hoy);
        $dpos->setEstadoAudt(1);

        $em->persist($dpos);
        $em->flush();

        $this->actualizarConvAnteriores($c, $request, $dpos);
        return "se actualizo";
    }

    public function actualizarConvAnteriores($c, $request, $obj_datos_postulante) {
        $em = $c->getDoctrine()->getEntityManager();
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

    public function selectDatosAcademicos($c, $codigo) {
        $em = $c->getDoctrine()->getEntityManager();
        $query = $em->createQuery('SELECT d FROM hojaVidaBundle:DatosAcademicos d where d.pkDatPostulante=' . $codigo . ' and d.estadoAudt=1');
        $datoac = $query->getResult();

        $dac = $datoac[0];

        $cbo_univ_proc = $this->respuesta_univ($c, $dac->getUnivProcedencia());
        $cbo_col_proc = $this->respuesta_colegio($c, $dac->getColegioProfesional());
        $docderecho = $this->selectDocDerecho($c, $dac->getPkDatAcademicos());
        $maederecho = $this->selectMaeDerecho($c, $dac->getPkDatAcademicos());
        $docotros = $this->selectDocOtros($c, $dac->getPkDatAcademicos());
        $meruniv = $this->selectMerUniv($c, $dac->getPkDatAcademicos());

        $datosac = array(
            "dac" => $dac,
            "cbo_univ_prov" => $cbo_univ_proc,
            "cbo_col_proc" => $cbo_col_proc,
            "tables_doc_derecho" => $docderecho,
            "tables_mae_derecho" => $maederecho,
            "tables_docotros" => $docotros,
            "data_meritos_univ" => $meruniv
        );

        return $datosac;
    }

    public function selectDocDerecho($c, $codigo) {
        $em = $c->getDoctrine()->getEntityManager();
        $query = $em->createQuery('SELECT d FROM hojaVidaBundle:DocDerecho d where d.pkDatAcademicos=' . $codigo . ' and d.estadoAudt=1');
        $docderecho = $query->getResult();
        $new_row = "";
        $i = 0;
        foreach ($docderecho as $value) {
            $button = '<input type="button" class="remove_docderecho menos" value="-">';
            if ($i == 0) {
                $button = '';
            }
            $i++;
            $new_row .= '<tr class="rowDocDerecho">';
            $new_row .= '<td>';
            $new_row .= '     <table  class="table ui-widget ui-widget-content" style="margin-bottom: 35px;">';
            $new_row .= '         <tr>';
            $new_row .= '             <td width="110px" class="ui-widget-header">Universidad:</td>';
            $new_row .= '             <td>';

            $new_row .= '                 <select class="cbo_universidad_doc combo-univ" name="cbo_universidad_doc[]">';
            $new_row .=$this->respuesta_univ($c, $value->getUniversidad());
            $new_row .= '                 </select>';
            $new_row .= '             </td>';
            $new_row .= '         </tr>';
            $new_row .= '         <tr>';
            $new_row .= '             <td class="ui-widget-header">Nivel:</td>';
            $new_row .= '             <td>';
            $new_row .= '                 <select name="cbo_nivel_doc[]">';
            $new_row .=$this->respuesta_nivel($value->getNivel());
            $new_row .= '                 </select>';
            $new_row .= '             </td>';
            $new_row .= '         </tr>';
            $new_row .= '         <tr>';
            $new_row .= '             <td class="ui-widget-header">Mensi&oacute;n:</td>';
            $new_row .= '             <td><textarea name="txt_mencion_doc[]" type="text" class="info_textarea">';
            $new_row .=$value->getMension();
            $new_row .='               </textarea></td>';
            $new_row .= '         </tr>';
            $new_row .= '         <tr>';
            $new_row .= '             <td class="ui-widget-header">A&ntilde;o:</td>';
            $new_row .= '             <td>';
            $new_row .= '                 <input type="text" name="cbo_anio_doc[]"value="' . $value->getAnio() . '" class="numeric">';
            $new_row .= '             </td>';
            $new_row .= '         </tr>';
            $new_row .= '     </table>';
            $new_row .= ' </td>';
            $new_row .= ' <td>' . $button . '</td>';
            $new_row .= '</tr>';
        }
        return $new_row;
    }

    public function selectMaeDerecho($c, $codigo) {
        $em = $c->getDoctrine()->getEntityManager();
        $query = $em->createQuery('SELECT d FROM hojaVidaBundle:MaeDerecho d where d.pkDatAcademicos=' . $codigo . ' and d.estadoAudt=1');
        $maeder = $query->getResult();
        $new_row = "";
        $i = 0;
        foreach ($maeder as $value) {
            $button = '<input type="button" class="remove_MaeDerecho menos" value="-">';
            if ($i == 0) {
                $button = "";
            }
            $i++;
            $new_row .= '<tr class="rowMaeDerecho">';
            $new_row .= '            <td>';
            $new_row .= '                 <table class="table ui-widget ui-widget-content" style="margin-bottom: 35px;">';
            $new_row .= '                     <tr>';
            $new_row .= '                         <td width="110px" class="ui-widget-header">Universidad:</td>';
            $new_row .= '                         <td>';
            $new_row .= '                             <select name="cbo_universidad_mae[]" class="cbo_universidad_mae combo-univ">';
            $new_row .=$this->respuesta_univ($c, $value->getUniversidad());
            $new_row .='                             </select>';
            $new_row .= '                         </td>';
            $new_row .= '                     </tr>';
            $new_row .= '                     <tr>';
            $new_row .= '                         <td class="ui-widget-header">Nivel:</td>';
            $new_row .= '                         <td>';
            $new_row .= '                             <select name="cbo_nivel_mae[]">';
            $new_row .=$this->respuesta_nivel($value->getNivel());
            $new_row .= '                             </select>';
            $new_row .= '                         </td>';
            $new_row .= '                     </tr>';
            $new_row .= '                     <tr>';
            $new_row .= '                         <td class="ui-widget-header">Mensi&oacute;n:</td>';
            $new_row .= '                         <td><textarea  name="txt_mencion_mae[]" type="text" class="info_textarea">';
            $new_row .=$value->getMension();
            $new_row .='                      </textarea></td>';
            $new_row .= '                     </tr>';
            $new_row .= '                     <tr>';
            $new_row .= '                         <td class="ui-widget-header">A&ntilde;o:</td>';
            $new_row .= '                         <td> <input type="text" name="cbo_anio_mae[]" class="numeric" value="' . $value->getAnio() . '"></td>';
            $new_row .= '                     </tr>';
            $new_row .= '                 </table>';
            $new_row .='             </td>';
            $new_row .= '             <td>' . $button . '</td>';
            $new_row .= '         </tr>';
        }
        return $new_row;
    }

    public function selectDocOtros($c, $codigo) {
        $em = $c->getDoctrine()->getEntityManager();
        $query = $em->createQuery('SELECT d FROM hojaVidaBundle:OtrasDisciplinas d where d.pkDatAcademicos=' . $codigo . ' and d.estadoAudt=1');
        $docOtros = $query->getResult();
        $new_row = "";
        $i = 0;
        foreach ($docOtros as $value) {
            $button = '<input type="button" class="remove_MaeDerOtrasDisc menos" value="-">';
            if ($i == 0) {
                $button = "";
            }
            $i++;
            $new_row .='<tr class="rowMaeDerOtrasDisc">';
            $new_row .= '<td><table width="70%" class="table ui-widget ui-widget-content" style="margin-bottom: 35px;">';
            $new_row .= '<tr><td width="110px" class="ui-widget-header">Universidad:</td>';
            $new_row .= '<td><select name="cbo_universidad_otras[]" class="cbo_universidad_otras combo-univ">';
            $new_row .=$this->respuesta_univ($c, $value->getUniversidad());
            $new_row .= '</select>';
            $new_row .= '</td>';
            $new_row .= '</tr>';
            $new_row .= '<tr><td class="ui-widget-header">Nivel:</td>';
            $new_row .= '<td><select name="cbo_nivel_otras[]">';
            $new_row .=$this->respuesta_nivel($value->getNivel());
            $new_row .= '</select>';
            $new_row .= '</td></tr>';
            $new_row .= '<tr><td class="ui-widget-header">Mensi&oacute;n:</td>';
            $new_row .= '<td><textarea name="txt_mencion_otras[]" type="text" class="info_textarea">';
            $new_row .=$value->getMension();
            $new_row .='</textarea></td>';
            $new_row .= '</tr><tr>';
            $new_row .= '<td class="ui-widget-header">A&ntilde;o:</td>';
            $new_row .= '<td><input type="text" name="cbo_anio_otras[]" class="numeric" value="' . $value->getAnio() . '"></td>';
            $new_row .='</tr></table> ';
            $new_row .= '</td><td>' . $button . '</td></tr>';
        }
        return $new_row;
    }

    public function selectMerUniv($c, $codigo) {
        $em = $c->getDoctrine()->getEntityManager();
        $query = $em->createQuery('SELECT d FROM hojaVidaBundle:MeritosUniv d where d.pkDatAcademicos=' . $codigo . ' and d.estadoAudt=1');
        $mer = $query->getResult();
        $merUniv = $mer[0];
        $puestos = array("-ELEGIR-", "PRIMER PUESTO", "QUINTO SUPERIOR", "TERCER SUPERIOR");

        $cbo_puestos = "";
        for ($j = 0; $j < count($puestos); $j++) {
            $selected = "";
            if ($merUniv->getPuesto()==$j) {
                $selected = "selected";
            }
            $cbo_puestos.="<option $selected value='$j'>" . $puestos[$j] . "</option>";
        }
        $data = '<tr>
                <td></td>
                <td>
                    <select name="cbo_puesto_meritos">'
                . $cbo_puestos .
                '</select>&nbsp;&nbsp;&nbsp;&nbsp;
                    <label class="labelText">A&ntilde;o:</label>
                    <input type="text" name="cbo_anio_meritos" value="' . $merUniv->getAnio() . '" class="numeric">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <select name="cbo_univ_meritos" class="combo-univ">'
                . $this->respuesta_univ($c,$merUniv->getUniversidad()) .
                '</select>
                </td>
            </tr>';

        return $data;
    }

    public function llenar_formularios($c,$codpos) {
        $em = $c->getDoctrine()->getEntityManager();

        $query = $em->createQuery('SELECT u FROM hojaVidaBundle:Universidades u');
        $universidades = $query->getResult();
        $option = "<option value='0'>-ELEGIR-</option>";
        foreach ($universidades as $value) {
            $option .= "<option value='" . $value->getIdUniv() . "'>" . $value->getNombreUniv() . "</option>";
        }

        $query2 = $em->createQuery('SELECT c FROM hojaVidaBundle:ColegiosProfesionales c');
        $colegio = $query2->getResult();
        $option2 = "<option value='0'>-ELEGIR-</option>";
        foreach ($colegio as $value) {
            $option2 .= "<option value='" . $value->getIdColegio() . "'>" . $value->getNombreColegio() . "</option>";
        }
        $frm_datos = array("univ" => $option, "col" => $option2);

        $codigo = $codpos;
        $datos_postulante = $this->selectPostulante($c, $codigo);
        $datos_Academicos = $this->selectDatosAcademicos($c, $codigo);


        $frm_datos = array_merge($frm_datos, $datos_postulante);
        $frm_datos = array_merge($frm_datos, $datos_Academicos);

        return $c->render('hojaVidaBundle:Actualizacion:index.html.twig', $frm_datos);
    }

    public function respuesta_univ($c, $id) {
        $cbo_univ_proc = "<option value='0'>-ELEGIR-</option>";
        $em = $c->getDoctrine()->getEntityManager();
        $query = $em->createQuery('SELECT u FROM hojaVidaBundle:Universidades u');
        $universidades = $query->getResult();

        foreach ($universidades as $uni) {
            $selected = "";
            if ($id == $uni->getIdUniv()) {
                $selected = "selected";
            }
            $cbo_univ_proc.="<option $selected value='" . $uni->getIdUniv() . "'>" . $uni->getNombreUniv() . "</option>";
        }
        return $cbo_univ_proc;
    }

    public function respuesta_colegio($c, $id) {
        $cbo_col_proc = "<option value='0'>-ELEGIR-</option>";
        $em = $c->getDoctrine()->getEntityManager();
        $query = $em->createQuery('SELECT c FROM hojaVidaBundle:ColegiosProfesionales c');
        $colegio = $query->getResult();

        foreach ($colegio as $col) {
            $selected = "";
            if ($col->getIdColegio() == $id) {
                $selected = "selected";
            }
            $cbo_col_proc.="<option $selected value='" . $col->getIdColegio() . "'>" . $col->getNombreColegio() . "</option>";
        }
        return $cbo_col_proc;
    }

    public function respuesta_nivel($id) {
        $data = array("-ELEGIR-", "TITULADO", "EGRESADO", "ESTUDIOS INCOMPLETOS");
        $combo = "";
        for ($i = 0; $i < count($data); $i++) {
            $selected = "";
            if ($i == $id) {
                $selected = "selected";
            }
            $combo.="<option $selected value='$i'>" . $data[$i] . "</option>";
        }
        return $combo;
    }

}

?>
