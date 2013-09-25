<?php

/* hojaVidaBundle:js:frm_exp_profesional.html.twig */
class __TwigTemplate_8c767c19616ebc89c8630fd55401ad12 extends Twig_Template
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
    var num_rows_ddp = 0;
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
        new_row += '<td><select name=\"txt_espec[]\" class=\"opt_especialidad\"></select></td>';
        new_row += '<td align=\"center\"><select name=\"txt_cal1[]\" class=\"opt_nota\"></select></td>';
        new_row += '<td align=\"center\"><select name=\"txt_cal2[]\" class=\"opt_nota\"></select></td>';
        new_row += '<td align=\"center\"><input type=\"button\" class=\"remove_row_ddp menos\" value=\"-\" ></td>';
        new_row += '</tr>';

        \$(\"#doc_des_profesional tbody\").append(new_row);
        opt_nota();
        especialidad();  
       \$(\".menos\").button();   

    }



    var num_rows_cdj = 0;
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
        new_row += '<td><select name=\"txt_cal_especialidad[]\" class=\"opt_especialidad\"></select></td>';
        new_row += '<td align=\"center\"><select name=\"txt_cal_nota[]\" class=\"opt_nota\"></select></td>';
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
    opt_nota();
    especialidad();
     \$(\".menos\").button();   


    }

    function actualizar_table_cdj() {
        for (var i = 1; i <= num_rows_cdj; i++) {
            \$(\"#calidad_des_jud tbody tr:eq(\" + i + \") td:eq(0)\").html(i + 1);
        }

    }



    var num_rows_docuni = 0;
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
        new_row += '                            <select name=\"cbo_univ_docuni[]\" class=\"combo-univ\"></select>';
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
        comboUniv();
        \$(\".menos\").button();   
    }
    
    function addLicOtorgadas(){
    var d = new Date();
    var anio = (parseInt(d.getFullYear()));
    var temp_anio = anio - 5;
    var contentLic = \"\";
    var cont=0;
    for (temp_anio; temp_anio < anio; temp_anio++) {
        
        var html = '<tr><td align=\"center\"><input name=\"hd_anio[]\" type=\"hidden\" value=\"' + temp_anio + '\"><b>' + temp_anio + '</b></td><td>Enfermedad</td>';
        html += '<td><input name=\"txt_enfermedad[]\" class=\"txt_sum_lic'+cont+' row-edit numeric\" type=\"text\" size=\"5\" value=\"0\"></td>';
        html += '<td rowspan=\"6\" align=\"center\"><input name=\"txt_total_lic[]\" class=\"txt_total_lic'+cont+' total_lic\" type=\"hidden\"><label class=\"lbl_total_lic'+cont+'\"><b>0</b></label></td>';
        html += '</tr><tr><td></td>';
        html += '<td>Vacaciones</td>';
        html += '<td><input name=\"txt_vacaciones[]\" class=\"txt_sum_lic'+cont+' row-edit numeric\" type=\"text\" size=\"5\" value=\"0\"></td>';
        html += '</tr><tr>';
        html += '<td></td>';
        html += '<td>Capacitación</td>';
        html += '<td><input name=\"txt_capacitacion[]\" class=\"txt_sum_lic'+cont+' row-edit numeric\" type=\"text\" size=\"5\" value=\"0\"></td>';
        html += '</tr><tr>';
        html += '<td></td>';
        html += '<td>Onomástico</td>';
        html += '<td><input name=\"txt_onomastico[]\" type=\"text\" class=\"txt_sum_lic'+cont+' row-edit numeric\" size=\"5\" value=\"0\"></td>';
        html += '</tr>';
        html += '<tr>';
        html += '    <td></td>';
        html += '    <td>Lic. Con Goce de haber</td>';
        html += '    <td><input name=\"txt_lic_goce[]\" type=\"text\" class=\"txt_sum_lic'+cont+' row-edit numeric\"size=\"5\" value=\"0\"></td>';
        html += ' </tr><tr>';
        html += '<td></td>';
        html += '<td>Motivos personales</td>';
        html += '<td><input name=\"txt_mot_personales[]\" type=\"text\" class=\"txt_sum_lic'+cont+' row-edit numeric\" size=\"5\" value=\"0\"></td>';
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

function opt_nota(){
    var opt=\"<option value='0'>-ELEGIR-</option>\";
    for(var i=1;i<=20;i++){
    opt+=\"<option value='\"+i+\"'>\"+i+\"</option>\";
    }
    opt+=\"<option value='21'>NP</option>\";
    opt+=\"<option value='21'>EX</option>\";
    
 \$(\".opt_nota\").html(opt);
 }
 function especialidad(){
    var esp='<option value=\"0\">-ELEGIR-</option>';
    esp+='<option value=\"1\">Penal</option>';
    esp+='<option value=\"2\">Civil</option>';
    esp+='<option value=\"3\">Contencioso</option>';
    esp+='<option value=\"4\">Laboral</option>';
 return esp;
 }
 opt_nota();
 especialidad();
 
 
   var num_rows_lic_otor = 0;
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
                        }";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:js:frm_exp_profesional.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  23 => 3,  19 => 1,  513 => 379,  511 => 378,  505 => 375,  499 => 372,  492 => 368,  486 => 365,  471 => 353,  466 => 352,  461 => 350,  458 => 349,  349 => 244,  342 => 240,  325 => 226,  309 => 213,  292 => 199,  276 => 186,  260 => 173,  244 => 160,  225 => 144,  208 => 130,  188 => 113,  167 => 95,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 7,  42 => 5,  38 => 4,  33 => 3,  30 => 2,);
    }
}