<?php

/* hojaVidaBundle:update_formularios:frm_update_expprofesional.html.twig */
class __TwigTemplate_46119c15ec698d13465c20a6abc995ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("hojaVidaBundle:plantillas:index.html.twig");

        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'titulo' => array($this, 'block_titulo'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "hojaVidaBundle:plantillas:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_scripts($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/hoja_vida/jquery-ui/js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/hoja_vida/jquery-ui/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/plugins/jValidate/jquery.validate.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/plugins/jquery_numeric/jquery.numeric.js"), "html", null, true);
        echo "\"></script>


<script>
    \$(document).ready(function() {
        ";
        // line 15
        $this->env->loadTemplate("hojaVidaBundle:update_formularios:util.html.twig")->display($context);
        // line 16
        echo "
                \$(\"#cboMagRatificado\").change(function() {
                    var opcion = \$(this).val();
                    switch (opcion) {
                        case \"0\":
                            \$(\"#opc\").css(\"display\", \"none\");
                            \$(\"#opcn2\").css(\"display\", \"block\");

                            break;
                        case \"1\":
                            \$(\"#opc\").css(\"display\", \"block\");
                            \$(\"#opcn2\").css(\"display\", \"block\");

                            break;
                        default :
                            \$(\"#opc\").css(\"display\", \"none\");
                            \$(\"#opcn2\").css(\"display\", \"none\");
                            break;
                    }

                });

                var num_rows_ddp = (\$(\"#doc_des_profesional tbody tr\").size() - 1);
                \$(\"#add_row_ddp\").click(function() {
                    if (num_rows_ddp < 15) {
                        num_rows_ddp++;
                        add_row_ddp();
                        actualizar_table_ddp();
                    }
                });
                \$(\"#doc_des_profesional\").delegate(\".remove_row_ddp\", \"click\", function() {
                    if (num_rows_ddp > 0) {
                        var row_position = (\$(\".remove_row_ddp\").index(\$(this)) + 1);
                        \$(\"#doc_des_profesional tbody tr\").eq(row_position).remove();
                        num_rows_ddp--;
                        actualizar_table_ddp();
                    }
                });
                function actualizar_table_ddp() {
                    for (var i = 1; i <= num_rows_ddp; i++) {
                        \$(\"#doc_des_profesional tbody tr:eq(\" + i + \") td:eq(0)\").html(i + 1);
                    }

                }
                function add_row_ddp() {
                    var new_row = '<tr>';
                    new_row += '<td></td>';
                    new_row += '<td><textarea name=\"txt_num_exp[]\" class=\"info_textarea\" ></textarea></td>';
                    new_row += '<td><textarea name=\"txt_ddas[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"txt_ddae[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"txt_materia[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><select name=\"txt_espec[]\" class=\"opt_esp1\"></select></td>';
                    new_row += '<td align=\"center\"><select name=\"txt_cal1[]\" class=\"opt1_nota\"></select></td>';
                    new_row += '<td align=\"center\"><select name=\"txt_cal2[]\" class=\"opt2_nota\"></select></td>';
                    new_row += '<td align=\"center\"><input type=\"button\" class=\"remove_row_ddp menos\" value=\"-\" ></td>';
                    new_row += '</tr>';

                    \$(\"#doc_des_profesional tbody\").append(new_row);
                    var num1 = (\$(\".opt1_nota\").size() - 1);



                    \$(\".opt1_nota\").eq(num1).html(opt_nota());
                    \$(\".opt2_nota\").eq(num1).html(opt_nota());
                    \$(\".opt_esp1\").eq(num1).html(especialidad());

                    // especialidad();
                    \$(\".menos\").button();

                }

                var num_rows_cdj = (\$(\"#calidad_des_jud tbody tr\").size() - 1);
                \$(\"#add_row_cdj\").click(function() {
                    if (num_rows_cdj < 15) {
                        num_rows_cdj++;
                        add_row_cdj();
                        actualizar_table_cdj();
                    }
                });

                \$(\"#calidad_des_jud\").delegate(\".remove_row_cdj\", \"click\", function() {
                    if (num_rows_cdj > 0) {
                        var row_position = (\$(\".remove_row_cdj\").index(\$(this)) + 1);
                        \$(\"#calidad_des_jud tbody tr\").eq(row_position).remove();
                        num_rows_cdj--;
                        actualizar_table_cdj();
                    }
                });

                function add_row_cdj() {
                    var new_row = '<tr>';

                    new_row += '<td></td>';
                    new_row += '<td><textarea name=\"txt_cal_numExp[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"txt_cal_tipResolucion[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><input name=\"txt_cal_fechaRes[]\" class=\"datepicker\" type=\"text\" size=\"10\"></td>';
                    new_row += '<td><textarea name=\"txt_cal_ddagraviado[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"txt_cal_ddagresor[]\" class=\"info_textarea\" ></textarea></td>';
                    new_row += '<td><textarea name=\"txt_cal_materia[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><select name=\"txt_cal_especialidad[]\" class=\"optcdj_especialidad\"></select></td>';
                    new_row += '<td align=\"center\"><select name=\"txt_cal_nota[]\" class=\"optcdj_nota\"></select></td>';
                    new_row += '<td align=\"center\"><input class=\"remove_row_cdj menos\" type=\"button\" value=\"-\"></td>';

                    new_row += '</tr>';

                    \$(\"#calidad_des_jud tbody\").append(new_row);

                    \$.datepicker.regional['es'] = {
                        closeText: 'Cerrar',
                        prevText: '<Ant',
                        nextText: 'Sig>',
                        currentText: 'Hoy', monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
                        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
                        weekHeader: 'Sm',
                        dateFormat: 'dd/mm/yy',
                        firstDay: 1,
                        isRTL: false,
                        showMonthAfterYear: false,
                        yearSuffix: ''
                    };
                    \$.datepicker.setDefaults(\$.datepicker.regional['es']);
                    \$(\".datepicker\").datepicker({
                        minDate: new Date(1900, 1 - 1, 1), maxDate: '-18Y',
                        dateFormat: 'dd/mm/yy',
                        defaultDate: new Date(1970, 1 - 1, 1),
                        changeMonth: true,
                        changeYear: true,
                        yearRange: '-110:-18'
                    });
                    //opt_nota();
                    //especialidad();

                    var num1 = (\$(\".optcdj_nota\").size() - 1);

                    \$(\".optcdj_nota\").eq(num1).html(opt_nota());
                    \$(\".optcdj_especialidad\").eq(num1).html(especialidad());
                    \$(\".menos\").button();


                }

                function actualizar_table_cdj() {
                    for (var i = 1; i <= num_rows_cdj; i++) {
                        \$(\"#calidad_des_jud tbody tr:eq(\" + i + \") td:eq(0)\").html(i + 1);
                    }

                }



                var num_rows_docuni = (\$(\".rowdocuni\").size() - 1);
                \$(\"#add_docuni\").click(function() {
                    if (num_rows_docuni < 4) {
                        num_rows_docuni++;
                        add_rows_docuni();
                    }
                });

                \$(\"#table_docuni\").delegate(\".remove_docuni\", \"click\", function() {
                    if (num_rows_docuni > 0) {
                        var row_position = (\$(\".remove_docuni\").index(\$(this)) + 1);
                        \$(\".rowdocuni\").eq(row_position).remove();
                        num_rows_docuni--;
                    }
                });

                function add_rows_docuni() {
                    var new_row = '<tr class=\"rowdocuni\">';
                    new_row += '            <td>';

                    new_row += '                <table class=\"table ui-widget ui-widget-content\" style=\"margin-bottom: 35px;\">';

                    new_row += '                    <tr>';
                    new_row += '                        <td width=\"180px\" class=\"ui-widget-header\">';
                    new_row += '                            Universidad:';
                    new_row += '                        </td>';
                    new_row += '                        <td>';
                    new_row += '                            <select name=\"cbo_univ_docuni[]\" class=\"combo-univ-docuni\"></select>';
                    new_row += '                        </td>';
                    new_row += '                    </tr>';
                    new_row += '                    <tr>';
                    new_row += '                        <td class=\"ui-widget-header\">Facultad:</td>';
                    new_row += '                        <td>';
                    new_row += '                            <input name=\"txt_facu_docuni[]\" type=\"text\" class=\"row-edit\"> ';
                    new_row += '            </td>';
                    new_row += '        </tr>';
                    new_row += '        <tr>';
                    new_row += '            <td class=\"ui-widget-header\">Condici&oacute;n</td>';
                    new_row += '            <td>';
                    new_row += '                <div id=\"rad-condicion\">';
                    new_row += '                    <select name=\"cbo_condicion_docuni[]\">';
                    new_row += '                       <option value=\"0\">-ELEGIR-</option>';
                    new_row += '                       <option value=\"1\">Nombrado</option>';
                    new_row += '                       <option value=\"2\">Contratado</option>';
                    new_row += '                    </select>';
                    new_row += '                </div>';
                    new_row += '            </td>';
                    new_row += '        </tr>';
                    new_row += '        <tr>';
                    new_row += '            <td class=\"ui-widget-header\">Categoria</td>';
                    new_row += '            <td>';
                    new_row += '                <select name=\"cbo_categoria_docuni[]\">';
                    new_row += '                     <option value=\"0\">-ELEGIR-</option>';
                    new_row += '                     <option value=\"1\">Principal</option>';
                    new_row += '                     <option value=\"2\">Asociado</option>';
                    new_row += '                     <option value=\"3\">Auxiliar</option>';
                    new_row += '                </select> ';
                    new_row += '            </td>';
                    new_row += '        </tr>';
                    new_row += '        <tr>';
                    new_row += '            <td class=\"ui-widget-header\">Cursos</td>';
                    new_row += '            <td><input name=\"txt_cursos_docuni[]\" type=\"text\" class=\"row-edit\"></td>';
                    new_row += '        </tr>';
                    new_row += '        <tr>';
                    new_row += '            <td class=\"ui-widget-header\">Periodo</td>';
                    new_row += '            <td><input name=\"txt_per_docuni[]\" type=\"text\" class=\"row-edit\"></td>';
                    new_row += '        </tr>';
                    new_row += '    </table>';
                    new_row += '</td>';
                    new_row += '<td><input type=\"button\"  value=\"-\" class=\"remove_docuni menos\"></td>';
                    new_row += '</tr>';

                    \$(\"#bodyDocuni\").append(new_row);
                    \$(\".combo-univ-docuni\").html(cbouniv);


                    \$(\".menos\").button();
                }

                function addLicOtorgadas() {
                    var d = new Date();
                    var anio = (parseInt(d.getFullYear()));
                    var temp_anio = anio - 5;
                    var contentLic = \"\";
                    var cont = 0;
                    for (temp_anio; temp_anio < anio; temp_anio++) {

                        var html = '<tr><td align=\"center\"><input name=\"hd_anio[]\" type=\"hidden\" value=\"' + temp_anio + '\"><b>' + temp_anio + '</b></td><td>Enfermedad</td>';
                        html += '<td><input name=\"txt_enfermedad[]\" class=\"txt_sum_lic' + cont + ' row-edit numeric\" type=\"text\" size=\"5\" value=\"0\"></td>';
                        html += '<td rowspan=\"6\" align=\"center\"><input name=\"txt_total_lic[]\" class=\"txt_total_lic' + cont + ' total_lic\" type=\"hidden\"><label class=\"lbl_total_lic' + cont + '\"><b>0</b></label></td>';
                        html += '</tr><tr><td></td>';
                        html += '<td>Vacaciones</td>';
                        html += '<td><input name=\"txt_vacaciones[]\" class=\"txt_sum_lic' + cont + ' row-edit numeric\" type=\"text\" size=\"5\" value=\"0\"></td>';
                        html += '</tr><tr>';
                        html += '<td></td>';
                        html += '<td>Capacitación</td>';
                        html += '<td><input name=\"txt_capacitacion[]\" class=\"txt_sum_lic' + cont + ' row-edit numeric\" type=\"text\" size=\"5\" value=\"0\"></td>';
                        html += '</tr><tr>';
                        html += '<td></td>';
                        html += '<td>Onomástico</td>';
                        html += '<td><input name=\"txt_onomastico[]\" type=\"text\" class=\"txt_sum_lic' + cont + ' row-edit numeric\" size=\"5\" value=\"0\"></td>';
                        html += '</tr>';
                        html += '<tr>';
                        html += '    <td></td>';
                        html += '    <td>Lic. Con Goce de haber</td>';
                        html += '    <td><input name=\"txt_lic_goce[]\" type=\"text\" class=\"txt_sum_lic' + cont + ' row-edit numeric\"size=\"5\" value=\"0\"></td>';
                        html += ' </tr><tr>';
                        html += '<td></td>';
                        html += '<td>Motivos personales</td>';
                        html += '<td><input name=\"txt_mot_personales[]\" type=\"text\" class=\"txt_sum_lic' + cont + ' row-edit numeric\" size=\"5\" value=\"0\"></td>';
                        html += '</tr>';

                        contentLic += html;
                        cont++;
                    }
                    var total = '  <tr>';
                    total += '<td align=\"right\" colspan=\"3\"><b>TOTAL:</b></td>';
                    total += '<td align=\"center\"><input type=\"hidden\" class=\"row-edit\"><label id=\"lic_total\"></label></td>';
                    total += '</tr>';
                    \$(\"#lic-otrogadas\").append(contentLic + total);
                    \$(\".numeric\").numeric();

                }
                addLicOtorgadas();


                var num_rows_lic_otor = (\$(\"#table_lic_otor tbody tr\").size() - 1);

                \$(\"#add_row_lic_otor\").click(function() {

                    num_rows_lic_otor++;
                    add_rows_lic_otor();
                    \$(\".menos\").button();
                    var size = \$(\".txt_anio_lic_otor\").size();
                    \$(\".txt_anio_lic_otor\").eq(size - 1).html(comboanio());

                });

                \$(\"#table_lic_otor\").delegate(\".remove_lic_otor\", \"click\", function() {
                    if (num_rows_lic_otor > 0) {
                        var row_position = (\$(\".remove_lic_otor\").index(\$(this)) + 1);
                        \$(\"#table_lic_otor tbody tr\").eq(row_position).remove();
                        num_rows_lic_otor--;
                        sum_lic_otor();
                    }
                });

                function add_rows_lic_otor() {
                    var new_row = '<tr>';
                    new_row += '<td><select name=\"txt_anio_lic_otor[]\" class=\"txt_anio_lic_otor cbo_anio\"></select></td>';
                    new_row += '<td><textarea name=\"txt_motivo_lic_otor[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><input name=\"txt_dias_lic_otor[]\" type=\"text\" class=\"txt_dias_lic_otor row-edit numeric\" value=\"0\"></td>';
                    new_row += '<td><input class=\"remove_lic_otor menos\" type=\"button\" value=\"-\"></td>';
                    new_row += '</tr>';

                    \$(\"#table_lic_otor tbody\").append(new_row);

                }

                \$(\"#table_lic_otor\").delegate(\".txt_dias_lic_otor\", \"keyup\", function() {
                    sum_lic_otor();
                });

                function sum_lic_otor() {
                    var sum = 0;
                    for (var i = 0; i < \$(\".txt_dias_lic_otor\").size(); i++) {
                        if (\$(\".txt_dias_lic_otor\").eq(i).val() === \"\") {
                            \$(\".txt_dias_lic_otor\").eq(i).val(0);
                        }
                        \$(\".txt_dias_lic_otor\").eq(i).val(parseFloat(\$(\".txt_dias_lic_otor\").eq(i).val()));
                        sum += parseFloat(\$(\".txt_dias_lic_otor\").eq(i).val());
                    }

                    \$(\".total_dias_lic_otor\").val(sum);
                }

                //magistrado_ratificado
                \$(\"#cboMagRatificado\").val(\"";
        // line 346
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "MagistradoRatificado"), "respuesta1"), "html", null, true);
        echo "\");
                \$('input:radio[name=rad-resp2][value=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "MagistradoRatificado"), "respuesta2"), "html", null, true);
        echo "\"]').attr('checked', true);
                \$(\"#txt_resolucion\").val(\"";
        // line 348
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "MagistradoRatificado"), "resolucion"), "html", null, true);
        echo "\");
                \$(\"#txt_fec_res\").val(\"";
        // line 349
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "MagistradoRatificado"), "fechaRes"), "html", null, true);
        echo "\");
                \$(\"#det_mag_rat\").val(\"";
        // line 350
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "MagistradoRatificado"), "respuesta3"), "html", null, true);
        echo "\");

                \$(\"#cboMagRatificado\").trigger(\"change\");





            });
    </script>



";
    }

    // line 364
    public function block_titulo($context, array $blocks = array())
    {
        // line 365
        echo "    <div>EXPERIENCIA PROFESIONAL</div>
    ";
    }

    // line 367
    public function block_cuerpo($context, array $blocks = array())
    {
        echo "   

    <div class=\"area-registro\">

        <div class=\"tab-title\">EXPERIENCIA PROFESIONAL</div>
        <form id=\"frm-exp-profesional\" action=\"";
        // line 372
        echo $this->env->getExtension('routing')->getPath("_update_expprofesional");
        echo "\" method=\"POST\">
            <table width=\"100%\" border=\"0\" cellspacing=\"10px\" align=\"center\">
                <tr>
                    <td >
                        <input type=\"hidden\" name=\"id_pos\" value=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->getContext($context, "id_postulante"), "html", null, true);
        echo "\">
                        <label class=\"labelText\">
                            1. Documentos Calificados de DESEMPEÑO PROFESIONAL:<input type=\"submit\" class=\"button\" value=\"Actualizar\">
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
                                ";
        // line 401
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "DocDesProfesional"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddp"]) {
            echo "  
                                    <tr>
                                        <td>";
            // line 403
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddp"), "Num"), "html", null, true);
            echo "</td>
                                        <td><textarea name=\"txt_num_exp[]\" class=\"info_textarea\" >";
            // line 404
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddp"), "NumExp"), "html", null, true);
            echo "</textarea></td>
                                        <td><textarea name=\"txt_ddas[]\" class=\"info_textarea\">";
            // line 405
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddp"), "Ddas"), "html", null, true);
            echo "</textarea></td>
                                        <td><textarea name=\"txt_ddae[]\" class=\"info_textarea\">";
            // line 406
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddp"), "Ddae"), "html", null, true);
            echo "</textarea></td>
                                        <td><textarea name=\"txt_materia[]\" class=\"info_textarea\">";
            // line 407
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddp"), "Materia"), "html", null, true);
            echo "</textarea></td>
                                        <td>
                                            <select name=\"txt_espec[]\" class=\"opt_especialidad\">
                                        ";
            // line 410
            echo $this->getAttribute($this->getContext($context, "ddp"), "Especialidad");
            echo "
                                                </select>
                                            </td>
                                            <td align=\"center\">
                                                <select name=\"txt_cal1[]\">";
            // line 414
            echo $this->getAttribute($this->getContext($context, "ddp"), "Calificacion1");
            echo "</select>
                                            </td>
                                            <td align=\"center\">
                                                <select name=\"txt_cal2[]\">";
            // line 417
            echo $this->getAttribute($this->getContext($context, "ddp"), "Calificacion2");
            echo "</select>
                                            </td>
                                            <td>";
            // line 419
            echo $this->getAttribute($this->getContext($context, "ddp"), "boton");
            echo "</td>
                                        </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 422
        echo "

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
                                ";
        // line 499
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "CalJudFis"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 500
            echo "                                            <tr>
                                                <td>";
            // line 501
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Num"), "html", null, true);
            echo "</td>
                                                <td><textarea name=\"txt_cal_numExp[]\" class=\"info_textarea\">";
            // line 502
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "NumExp"), "html", null, true);
            echo "</textarea></td>
                                                <td><textarea name=\"txt_cal_tipResolucion[]\" class=\"info_textarea\">";
            // line 503
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "TipResolucion"), "html", null, true);
            echo "</textarea></td>
                                                <td><input name=\"txt_cal_fechaRes[]\" class=\"datepicker\" type=\"text\" size=\"10\" value=\"";
            // line 504
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "FechaRes"), "html", null, true);
            echo "\"></td>
                                                <td><textarea name=\"txt_cal_ddagraviado[]\" class=\"info_textarea\">";
            // line 505
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Ddagraviado"), "html", null, true);
            echo "</textarea></td>
                                                <td><textarea name=\"txt_cal_ddagresor[]\" class=\"info_textarea\" >";
            // line 506
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Ddagresor"), "html", null, true);
            echo "</textarea></td>
                                                <td><textarea name=\"txt_cal_materia[]\" class=\"info_textarea\">";
            // line 507
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Materia"), "html", null, true);
            echo "</textarea></td>
                                                <td><select name=\"txt_cal_especialidad[]\" class=\"opt_especialidad\">";
            // line 508
            echo $this->getAttribute($this->getContext($context, "item"), "Especialidad");
            echo "</select></td>
                                                <td align=\"center\"><select name=\"txt_cal_nota[]\">";
            // line 509
            echo $this->getAttribute($this->getContext($context, "item"), "Nota");
            echo "</select></td>
                                                <td>";
            // line 510
            echo $this->getAttribute($this->getContext($context, "item"), "boton");
            echo "</td>
                                            </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 513
        echo "
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
                                    <textarea name=\"situacion_laboral_actual\" class=\"text-area\">";
        // line 528
        echo twig_escape_filter($this->env, $this->getContext($context, "SitLaboral"), "html", null, true);
        echo "</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    (tres &uacute;ltimas)
                                </td>
                            </tr>
                                    ";
        // line 536
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "DetSituacionLaboral"));
        foreach ($context['_seq'] as $context["_key"] => $context["det"]) {
            // line 537
            echo "                            <tr>
                                <td>
                                    <table width=\"70%\" class=\"table ui-widget ui-widget-content\">
                                        <tr>
                                            <td width=\"180px\" class=\"ui-widget-header\">
                                                Centro de Trabajo:
                                            </td>
                                            <td>
                                                <input name=\"txtctrabajo[]\" type=\"text\" class=\"row-edit\" value=\"";
            // line 545
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "det"), "CentroTrabajo"), "html", null, true);
            echo "\">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"ui-widget-header\">Cargo:</td>
                                            <td>
                                                <input  name=\"txtcargo[]\" type=\"text\" class=\"row-edit\" value=\"";
            // line 551
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "det"), "Cargo"), "html", null, true);
            echo "\"> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=\"ui-widget-header\">Periodo</td>
                                            <td><input name=\"txtperiodo[]\" type=\"text\" class=\"row-edit\" value=\"";
            // line 556
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "det"), "Periodo"), "html", null, true);
            echo "\"></td>
                                        </tr>

                                    </table>

                                </td>
                            </tr>
                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['det'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 564
        echo "                            <tr>
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

                                                    ";
        // line 576
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "DocenciaUniversitaria"));
        foreach ($context['_seq'] as $context["_key"] => $context["docu"]) {
            // line 577
            echo "
                                            <tr class=\"rowdocuni\">
                                                <td>
                                                    <table class=\"table ui-widget ui-widget-content\" style=\"margin-bottom: 35px;\">

                                                        <tr>
                                                            <td width=\"180px\" class=\"ui-widget-header\">
                                                                Universidad:
                                                            </td>
                                                            <td>
                                                                <select name=\"cbo_univ_docuni[]\">
                                                                        ";
            // line 588
            echo $this->getAttribute($this->getContext($context, "docu"), "Universidad");
            echo " 
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class=\"ui-widget-header\">Facultad:</td>
                                                                <td>
                                                                    <input name=\"txt_facu_docuni[]\" type=\"text\" class=\"row-edit\" value=\"";
            // line 595
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docu"), "Facultad"), "html", null, true);
            echo "\"> 

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class=\"ui-widget-header\">Condici&oacute;n</td>
                                                                <td>

                                                                    <select name=\"cbo_condicion_docuni[]\">
                                                                                ";
            // line 604
            echo $this->getAttribute($this->getContext($context, "docu"), "Condicion");
            echo "
                                                                        </select>

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class=\"ui-widget-header\">Categoria</td>
                                                                    <td>
                                                                        <select name=\"cbo_categoria_docuni[]\">
                                                                            ";
            // line 613
            echo $this->getAttribute($this->getContext($context, "docu"), "Categoria");
            echo "
                                                                            </select> 
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class=\"ui-widget-header\">Cursos</td>
                                                                        <td><input name=\"txt_cursos_docuni[]\" type=\"text\" class=\"row-edit\" value=\"";
            // line 619
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docu"), "Cursos"), "html", null, true);
            echo "\"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class=\"ui-widget-header\">Periodo</td>
                                                                        <td><input name=\"txt_per_docuni[]\" type=\"text\" class=\"row-edit\" value=\"";
            // line 623
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docu"), "Periodo"), "html", null, true);
            echo "\"></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td>";
            // line 627
            echo $this->getAttribute($this->getContext($context, "docu"), "boton");
            echo "</td>
                                                        </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['docu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 630
        echo "                                                    </tbody>
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
                                                <textarea  name=\"txt_ltUni\" class=\"text-area\">";
        // line 644
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Publicaciones"), "librosTextosUniv"), "html", null, true);
        echo "</textarea>
                                            </td>                                    
                                        </tr>
                                        <tr>
                                            <td>
                                                Investigaciones Jurídicas, Doctrinarias o de Campo:<br>
                                                <textarea name=\"txt_invJurDoc\" class=\"text-area\">";
        // line 650
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Publicaciones"), "invJuridicas"), "html", null, true);
        echo "</textarea>
                                            </td>                                    
                                        </tr>
                                        <tr>
                                            <td>
                                                Ensayos en materia Jurídica:<br>
                                                <textarea name=\"txt_EnMaJur\" class=\"text-area\">";
        // line 656
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Publicaciones"), "ensayosJuridico"), "html", null, true);
        echo "</textarea>
                                            </td>                                    
                                        </tr>
                                        <tr>
                                            <td>
                                                Artículos en materia Jurídica:<br>
                                                <textarea name=\"txt_amJur\" class=\"text-area\">";
        // line 662
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Publicaciones"), "articulosJuridicos"), "html", null, true);
        echo "</textarea>
                                            </td>                                    
                                        </tr>
                                        <tr>
                                            <td>
                                                Artículos en materia No Jurídica:<br>
                                                <textarea name=\"txtamNoJur\" class=\"text-area\">";
        // line 668
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Publicaciones"), "articulosNoJuridicos"), "html", null, true);
        echo "</textarea>
                                            </td>                                    
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class=\"labelText\">
                                                    7. Producción Jurisdiccional o Fiscal:
                                                </label>
                                                <select name=\"cbo_JurFis\">
                                               ";
        // line 677
        echo $this->getAttribute($this->getContext($context, "ProdJurFiscal"), "Respuesta");
        echo "
                                                    </select>
                                                </td>                                    
                                            </tr>
                                            <tr>
                                                <td>
                                                    <textarea name=\"text_area_JurFis\" class=\"text-area\">";
        // line 683
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ProdJurFiscal"), "DetRespuesta"), "html", null, true);
        echo "</textarea>
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
                                                            ";
        // line 706
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "LicenciasOtorgadas"));
        foreach ($context['_seq'] as $context["_key"] => $context["lic"]) {
            // line 707
            echo "                                                                <tr>
                                                                    <td><select name=\"txt_anio_lic_otor[]\" class=\"txt_anio_lic_otor cbo_anio\">";
            // line 708
            echo $this->getAttribute($this->getContext($context, "lic"), "Anio");
            echo "</select></td>
                                                                    <td><textarea name=\"txt_motivo_lic_otor[]\" class=\"info_textarea\">";
            // line 709
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lic"), "Motivo"), "html", null, true);
            echo "</textarea></td>
                                                                    <td><input name=\"txt_dias_lic_otor[]\" type=\"text\" class=\"txt_dias_lic_otor row-edit numeric\" value=\"";
            // line 710
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lic"), "Dias"), "html", null, true);
            echo "\"></td>
                                                                    <td>";
            // line 711
            echo $this->getAttribute($this->getContext($context, "lic"), "boton");
            echo "</td>
                                                                </tr>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 714
        echo "                                                            </tbody>
                                                        </table>    
                                                        <div style=\"width:380px; margin:10px auto;text-align: right;\">
                                                            Total:&nbsp;<input class=\"total_dias_lic_otor\" style=\"text-align: center;\" type=\"text\" size=\"12px\" value=\"";
        // line 717
        echo twig_escape_filter($this->env, $this->getContext($context, "sumdias"), "html", null, true);
        echo "\"> 
                                                        </div>
                                                    </td>
                                                </tr>

                                            </table>
                                        </form>
                                    </div> 





";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:update_formularios:frm_update_expprofesional.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  970 => 717,  965 => 714,  956 => 711,  952 => 710,  948 => 709,  944 => 708,  941 => 707,  937 => 706,  911 => 683,  902 => 677,  890 => 668,  881 => 662,  872 => 656,  863 => 650,  854 => 644,  838 => 630,  829 => 627,  822 => 623,  815 => 619,  806 => 613,  794 => 604,  782 => 595,  772 => 588,  759 => 577,  755 => 576,  741 => 564,  727 => 556,  719 => 551,  710 => 545,  700 => 537,  696 => 536,  685 => 528,  668 => 513,  659 => 510,  655 => 509,  651 => 508,  647 => 507,  643 => 506,  639 => 505,  635 => 504,  631 => 503,  627 => 502,  623 => 501,  620 => 500,  616 => 499,  537 => 422,  528 => 419,  523 => 417,  517 => 414,  510 => 410,  504 => 407,  500 => 406,  496 => 405,  492 => 404,  488 => 403,  481 => 401,  453 => 376,  446 => 372,  437 => 367,  432 => 365,  429 => 364,  411 => 350,  407 => 349,  403 => 348,  399 => 347,  395 => 346,  63 => 16,  61 => 15,  53 => 10,  49 => 9,  44 => 7,  40 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
