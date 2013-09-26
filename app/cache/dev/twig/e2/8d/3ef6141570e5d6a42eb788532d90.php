<?php

/* hojaVidaBundle:formularios:frm_exp_profesional.html.twig */
class __TwigTemplate_e28d3ef6141570e5d6a42eb788532d90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"tabs1-4\">
    <div class=\"area-registro\">

        <div class=\"tab-title\">EXPERIENCIA PROFESIONAL</div>
        <form id=\"frm-exp-profesional\">
            <table width=\"100%\" border=\"0\" cellspacing=\"10px\" align=\"center\">
                <tr>
                    <td >

                        <label class=\"labelText\">
                            1. Documentos Calificados de DESEMPEÑO PROFESIONAL:
                        </label>
                    </td>

                </tr>
                <tr>
                    <td >
                        <div id=\"add_row_ddp\" class=\"add-icon\" >Nueva fila</div><br><br>
                        <table  id=\"doc_des_profesional\" width=\"95%\" class=\"table ui-widget ui-widget-content\">
                            <thead>
                                <tr class=\"ui-widget-header\">
                                    <th width=\"40px\">N°</th>
                                    <th width=\"90px\" >N° Exp.</th>
                                    <th>Demandante/<br>Denunciante/<br>Agraviado/<br>Solicitante</th>
                                    <th>Demandado/<br>Denunciado/<br>Agresor/<br>Entidad</th>
                                    <th>Materia</th>
                                    <th>Especialidad</th>
                                    <th>1° Calificación</th>
                                    <th>2° <br>Calificación <br>(R.R)</th>
                                    <th width=\"40px\"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><textarea name=\"txt_num_exp[]\" class=\"info_textarea\" ></textarea></td>
                                    <td><textarea name=\"txt_ddas[]\" class=\"info_textarea\"></textarea></td>
                                    <td><textarea name=\"txt_ddae[]\" class=\"info_textarea\"></textarea></td>
                                    <td><textarea name=\"txt_materia[]\" class=\"info_textarea\"></textarea></td>
                                    <td>
                                        <select name=\"txt_espec[]\" class=\"opt_especialidad\"></select>
                                    </td>
                                    <td align=\"center\">
                                        <select name=\"txt_cal1[]\" class=\"opt_nota\"></select>
                                    </td>
                                    <td align=\"center\">
                                        <select name=\"txt_cal2[]\" class=\"opt_nota\"></select>
                                    </td>
                                    <td></td>
                                </tr>

                            </tbody>


                        </table> 
                    </td>
                </tr>
                <tr>
                    <td >
                        <label class=\"labelText\">
                            2. Magistrado Ratificado:
                        </label>
                    </td>
                </tr>
                <tr>    
                    <td>
                        <table cellspacing=\"10px\">
                            <tr>
                                <td>
                                    <select name=\"rad-resp1\" id=\"cboMagRatificado\">
                                        <option value=\"0\">NO</option>
                                        <option value=\"1\">SI</option>
                                        <option value=\"2\">Aun no ha sido objeto de proceso de ratificación</option>
                                        <option value=\"3\">En convocatoria</option>
                                    </select>    
                                </td>
                                <td>
                                    <div id=\"opc\" style=\"display:none;\">
                                        <input type=\"radio\" id=\"opc1\" name=\"rad-resp2\" value=\"Por Unanimidad\" checked=\"checked\" /><label for=\"opc1\">Por Unanimidad</label>
                                        <input type=\"radio\" id=\"opc2\" name=\"rad-resp2\" value=\"Por Mayoría\"/><label for=\"opc2\">Por Mayoría</label>
                                    </div>

                                </td>

                            </tr>
                            <tr>
                                <td colspan=\"2\">

                                    <input type=\"text\" name=\"txt_resp_3\" class=\"textbox\" id=\"det_mag_rat\">

                                    <div id=\"opcn2\">
                                        Resolución N° <input type=\"text\" name=\"txt_resolucion\" size=\"5\"> de fecha <input name=\"txt_fec_res\"type=\"text\" class=\"datepicker\">
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <br>
                    </td>

                </tr>
                <tr>    
                    <td >
                        <label class=\"labelText\">
                            3. Calidad de sus Decisiones Judiciales y Fiscales (En caso de Magistrados Ratificados o No Ratificados):
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id=\"add_row_cdj\" class=\"add-icon\" >Nueva fila</div><br><br>
                        <table id=\"calidad_des_jud\" width=\"95%\" class=\"table ui-widget ui-widget-content\">
                            <thead>
                                <tr class=\"ui-widget-header\">
                                    <th width=\"40px\">N°</th>
                                    <th>N° Exp.</th>
                                    <th>Tipo de Resolución</th>
                                    <th >Fecha de Res.</th>
                                    <th>Demandante/<br>Denunciante/<br>Agraviado</th>
                                    <th>Demandado/<br>Denunciado/<br>Agresor</th>
                                    <th>Materia</th>
                                    <th>Especialidad</th>
                                    <th>Nota</th>
                                    <th width=\"40px\"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><textarea name=\"txt_cal_numExp[]\" class=\"info_textarea\"></textarea></td>
                                    <td><textarea name=\"txt_cal_tipResolucion[]\" class=\"info_textarea\"></textarea></td>
                                    <td><input name=\"txt_cal_fechaRes[]\" class=\"datepicker\" type=\"text\" size=\"10\"></td>
                                    <td><textarea name=\"txt_cal_ddagraviado[]\" class=\"info_textarea\"></textarea></td>
                                    <td><textarea name=\"txt_cal_ddagresor[]\" class=\"info_textarea\" ></textarea></td>
                                    <td><textarea name=\"txt_cal_materia[]\" class=\"info_textarea\"></textarea></td>
                                    <td><select name=\"txt_cal_especialidad[]\" class=\"opt_especialidad\"></select></td>
                                    <td align=\"center\"><select name=\"txt_cal_nota[]\" class=\"opt_nota\"></select></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table> 
                    </td>

                </tr>
                <tr>
                    <td>
                        <label class=\"labelText\">
                            4. SITUACIÓN LABORAL ACTUAL:
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name=\"situacion_laboral_actual\" class=\"text-area\"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        (tres &uacute;ltimas)
                    </td>
                </tr>
                <tr>
                    <td>
                        <table width=\"70%\" class=\"table ui-widget ui-widget-content\">
                            <tr>
                                <td width=\"180px\" class=\"ui-widget-header\">
                                    Centro de Trabajo:
                                </td>
                                <td>
                                    <input name=\"txtctrabajo[]\" type=\"text\" class=\"row-edit\">
                                </td>
                            </tr>
                            <tr>
                                <td class=\"ui-widget-header\">Cargo:</td>
                                <td>
                                    <input  name=\"txtcargo[]\" type=\"text\" class=\"row-edit\"> 
                                </td>
                            </tr>
                            <tr>
                                <td class=\"ui-widget-header\">Periodo</td>
                                <td><input name=\"txtperiodo[]\" type=\"text\" class=\"row-edit\"></td>
                            </tr>

                        </table>

                    </td>
                </tr>
                <tr>
                    <td>
                        <table width=\"70%\" class=\"table ui-widget ui-widget-content\">
                            <tr>
                                <td width=\"180px\" class=\"ui-widget-header\">
                                    Centro de Trabajo:
                                </td>
                                <td>
                                    <input name=\"txtctrabajo[]\" type=\"text\" class=\"row-edit\">
                                </td>
                            </tr>
                            <tr>
                                <td class=\"ui-widget-header\">Cargo:</td>
                                <td>
                                    <input name=\"txtcargo[]\" type=\"text\" class=\"row-edit\"> 
                                </td>
                            </tr>
                            <tr>
                                <td class=\"ui-widget-header\">Periodo</td>
                                <td><input name=\"txtperiodo[]\" type=\"text\" class=\"row-edit\"></td>
                            </tr>

                        </table>

                    </td>

                </tr>
                <tr>
                    <td>
                        <table width=\"70%\" class=\"table ui-widget ui-widget-content\">
                            <tr>
                                <td width=\"180px\" class=\"ui-widget-header\">
                                    Centro de Trabajo:
                                </td>
                                <td>
                                    <input name=\"txtctrabajo[]\" type=\"text\" class=\"row-edit\">
                                </td>
                            </tr>
                            <tr>
                                <td class=\"ui-widget-header\">Cargo:</td>
                                <td>
                                    <input name=\"txtcargo[]\" type=\"text\" class=\"row-edit\"> 
                                </td>
                            </tr>
                            <tr>
                                <td class=\"ui-widget-header\">Periodo</td>
                                <td><input name=\"txtperiodo[]\" type=\"text\" class=\"row-edit\"></td>
                            </tr>

                        </table>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label class=\"labelText\">
                            5. DOCENCIA UNIVERSITARIA:
                        </label>&nbsp;&nbsp;<div id=\"add_docuni\" class=\"add-icon\" >Agregar</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table id=\"table_docuni\" align=\"center\">
                            <tbody id=\"bodyDocuni\">
                                <tr class=\"rowdocuni\">
                                    <td>
                                        <table class=\"table ui-widget ui-widget-content\" style=\"margin-bottom: 35px;\">

                                            <tr>
                                                <td width=\"180px\" class=\"ui-widget-header\">
                                                    Universidad:
                                                </td>
                                                <td>
                                                    <select name=\"cbo_univ_docuni[]\" class=\"combo-univ\"></select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">Facultad:</td>
                                                <td>
                                                    <input name=\"txt_facu_docuni[]\" type=\"text\" class=\"row-edit\"> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">Condici&oacute;n</td>
                                                <td>
                                                    <div id=\"rad-condicion\">
                                                        <select name=\"cbo_condicion_docuni[]\">
                                                            <option value=\"0\">-ELEGIR-</option>
                                                            <option value=\"1\">Nombrado</option>
                                                            <option value=\"2\">Contratado</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">Categoria</td>
                                                <td>
                                                    <select name=\"cbo_categoria_docuni[]\">
                                                        <option value=\"0\">-ELEGIR-</option>
                                                        <option value=\"1\">Principal</option>
                                                        <option value=\"2\">Asociado</option>
                                                        <option value=\"3\">Auxiliar</option>
                                                    </select> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">Cursos</td>
                                                <td><input name=\"txt_cursos_docuni[]\" type=\"text\" class=\"row-edit\"></td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">Periodo</td>
                                                <td><input name=\"txt_per_docuni[]\" type=\"text\" class=\"row-edit\"></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class=\"labelText\">
                            6. PUBLICACIONES:
                        </label>
                    </td>                                    
                </tr>
                <tr>
                    <td>
                        Libros o textos Universitarios:<br>
                        <textarea  name=\"txt_ltUni\" class=\"text-area\"></textarea>
                    </td>                                    
                </tr>
                <tr>
                    <td>
                        Investigaciones Jurídicas, Doctrinarias o de Campo:<br>
                        <textarea name=\"txt_invJurDoc\" class=\"text-area\"></textarea>
                    </td>                                    
                </tr>
                <tr>
                    <td>
                        Ensayos en materia Jurídica:<br>
                        <textarea name=\"txt_EnMaJur\" class=\"text-area\"></textarea>
                    </td>                                    
                </tr>
                <tr>
                    <td>
                        Artículos en materia Jurídica:<br>
                        <textarea name=\"txt_amJur\" class=\"text-area\"></textarea>
                    </td>                                    
                </tr>
                <tr>
                    <td>
                        Artículos en materia No Jurídica:<br>
                        <textarea name=\"txtamNoJur\" class=\"text-area\"></textarea>
                    </td>                                    
                </tr>
                <tr>
                    <td>
                        <label class=\"labelText\">
                            7. Producción Jurisdiccional o Fiscal:
                        </label>
                        <select name=\"cbo_JurFis\">
                            <option value=\"0\">-ELEGIR-</option>
                            <option value=\"1\">PODER JUDICIAL</option>
                            <option value=\"2\">MINISTERIO P&Uacute;BLICO</option>
                        </select>
                    </td>                                    
                </tr>
                <tr>
                    <td>
                        <textarea name=\"text_area_JurFis\" class=\"text-area\"></textarea>
                    </td>                                    
                </tr>
                <tr>
                    <td>
                        <label class=\"labelText\">
                            8. Licencias Otorgadas (de los últimos cinco años)
                        </label>
                    </td>                                    
                </tr>
                <tr>
                    <td>
                        <!--<table id=\"lic-otrogadas\"  class=\"table ui-widget ui-widget-content\">
                            <thead>
                                <tr class=\"ui-widget-header\">
                                    <th width=\"100px\">AÑO</th>
                                    <th width=\"180px\">MOTIVO</th>
                                    <th width=\"100px\">Nº DIAS</th>
                                    <th width=\"160px\">TOTAL LICENCIAS<br>(en días)</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>-->

                        <div id=\"add_row_lic_otor\" class=\"add-icon\" >Nueva fila</div>
                        <table id=\"table_lic_otor\" class=\"table ui-widget ui-widget-content\" >
                            <thead>
                                <tr class=\"ui-widget-header\">
                                    <th width=\"100px\">AÑO</th>
                                    <th width=\"180px\">MOTIVO</th>
                                    <th width=50px\">Nº DIAS</th>
                                    <th width=\"50px\"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><select name=\"txt_anio_lic_otor[]\" class=\"txt_anio_lic_otor cbo_anio\"></select></td>
                                    <td><textarea name=\"txt_motivo_lic_otor[]\" class=\"info_textarea\"></textarea></td>
                                    <td><input name=\"txt_dias_lic_otor[]\" type=\"text\" class=\"txt_dias_lic_otor row-edit numeric\" value=\"0\"></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>    
                        <div style=\"width:380px; margin:10px auto;text-align: right;\">
                            Total:&nbsp;<input class=\"total_dias_lic_otor\" style=\"text-align: center;\" type=\"text\" size=\"12px\" value=\"0\"> 
                        </div>





                    </td>
                </tr>

            </table>
        </form>
    </div> 
</div>
";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:formularios:frm_exp_profesional.html.twig";
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  37 => 17,  76 => 44,  48 => 19,  44 => 18,  36 => 12,  32 => 10,  28 => 8,  34 => 15,  23 => 3,  19 => 1,  513 => 379,  511 => 378,  505 => 375,  499 => 372,  492 => 368,  486 => 365,  471 => 353,  466 => 352,  461 => 350,  458 => 349,  349 => 244,  342 => 240,  325 => 226,  309 => 213,  292 => 199,  276 => 186,  260 => 173,  244 => 160,  225 => 144,  208 => 130,  188 => 113,  167 => 95,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 45,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 7,  42 => 5,  38 => 4,  33 => 3,  30 => 10,);
=======
        return array (  76 => 44,  48 => 19,  44 => 18,  36 => 12,  34 => 11,  32 => 10,  28 => 8,  63 => 40,  19 => 1,  513 => 379,  511 => 378,  505 => 375,  499 => 372,  492 => 368,  486 => 365,  471 => 353,  466 => 352,  461 => 350,  458 => 349,  349 => 244,  342 => 240,  325 => 226,  309 => 213,  292 => 199,  276 => 186,  260 => 173,  244 => 160,  225 => 144,  208 => 130,  188 => 113,  167 => 95,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 45,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 27,  42 => 5,  38 => 4,  33 => 3,  30 => 10,);
>>>>>>> 7991ed05889c6f9fd7ed6df311218f701bda0941
    }
}
