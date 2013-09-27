<?php

/* hojaVidaBundle:update_formularios:frm_updateInfoPatrimonial.html.twig */
class __TwigTemplate_fc8139920d6067f6540c19f9f5932a2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("hojaVidaBundle:plantillas:index.html.twig");

        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'titulo' => array($this, 'block_titulo'),
            'submenu' => array($this, 'block_submenu'),
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

    // line 2
    public function block_scripts($context, array $blocks = array())
    {
        // line 3
        echo "
";
        // line 4
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/hoja_vida/jquery-ui/js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/hoja_vida/jquery-ui/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/plugins/jValidate/jquery.validate.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/plugins/jquery_numeric/jquery.numeric.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(document).ready(function() {
     ";
        // line 12
        $this->env->loadTemplate("hojaVidaBundle:update_formularios:util.html.twig")->display($context);
        // line 13
        echo "
             //frm info patrimonial

             \$(\".txt_ing1\").keyup(function() {
                 var sum = 0;
                 for (var i = 0; i < \$(\".txt_ing1\").size(); i++) {
                     if (\$(\".txt_ing1\").eq(i).val() === \"\") {
                         \$(\".txt_ing1\").eq(i).val(0);
                     }
                     \$(\".txt_ing1\").eq(i).val(parseFloat(\$(\".txt_ing1\").eq(i).val()));
                     sum += parseFloat(\$(\".txt_ing1\").eq(i).val());
                 }

                 \$(\".txt_ing_total\").val(sum);
             });

             var num_rows_otros_ing = (\$(\"#frm_otros_ingresos tbody tr\").size()-1)
             \$(\"#add_otros_ing\").click(function() {

                 num_rows_otros_ing++;
                 add_rows_otros_ingresos()
                 \$(\".menos\").button();
                 \$(\".numeric\").numeric();
                 \$(\".decimal\").numeric(\".\");
                 sum_otr_ing();

             });
             \$(\"#frm_otros_ingresos\").delegate(\".remove_otros_ing\", \"click\", function() {
                 if (num_rows_otros_ing > 0) {
                     var row_position = (\$(\".remove_otros_ing\").index(\$(this)) + 1);
                     \$(\"#frm_otros_ingresos tbody tr\").eq(row_position).remove();
                     num_rows_otros_ing--;
                     sum_otr_ing();
                 }
             });

             function add_rows_otros_ingresos() {
                 var new_row = '<tr>';
                 new_row += '<td><input name=\"txt_otr_ing[]\" type=\"text\" class=\"row-edit\"></td>';
                 new_row += '<td width=\"30px;\"><div id=\"add_otros_ing\" class=\"menos remove_otros_ing\">-</div></td>';
                 new_row += '<td><input name=\"txt_otr_val[]\" type=\"text\" class=\"txt_valor_ing row-edit decimal\"></td>';
                 new_row += '</tr>';

                 \$(\"#frm_otros_ingresos tbody\").append(new_row);

             }


             \$(\"#frm_otros_ingresos\").delegate(\".txt_valor_ing\", \"keyup\", function() {
                 sum_otr_ing();
             });

             function sum_otr_ing() {
                 var sum = 0;
                 for (var i = 0; i < \$(\".txt_valor_ing\").size(); i++) {
                     if (\$(\".txt_valor_ing\").eq(i).val() === \"\") {
                         \$(\".txt_valor_ing\").eq(i).val(0);
                     }
                     \$(\".txt_valor_ing\").eq(i).val(parseFloat(\$(\".txt_valor_ing\").eq(i).val()));
                     sum += parseFloat(\$(\".txt_valor_ing\").eq(i).val());
                 }

                 \$(\".txt_valor_otr_ing\").val(sum);
             }



             var num_dec_bienes_rentas = (\$(\"#table_dec_bienes_rentas tbody tr\").size()-1);
             \$(\"#add_dec_bienes_rentas\").click(function() {

                 num_dec_bienes_rentas++;
                 add_dec_bienes_rentas();
                 \$(\".menos\").button();
                 var size = \$(\".txt_ing_anio\").size();
                 \$(\".txt_ing_anio_pat\").eq(size - 1).html(comboanio());
                 \$(\".decimal\").numeric(\".\");

             });
             \$(\"#table_dec_bienes_rentas\").delegate(\".remove_dec_bienes_rentas\", \"click\", function() {
                 if (num_dec_bienes_rentas > 0) {
                     var row_position = (\$(\".remove_dec_bienes_rentas\").index(\$(this)) + 1);
                     \$(\"#table_dec_bienes_rentas tbody tr\").eq(row_position).remove();
                     num_dec_bienes_rentas--;
                     sum_ing_br();
                 }
             });

             function add_dec_bienes_rentas(){
                 var new_row = '<tr>';
                 new_row += '<td><select name=\"txt_ing_anio_pat[]\" class=\"txt_ing_anio_pat numeric cbo_anio\"></select></td>';
                 new_row += '<td><textarea name=\"txt_descripcion_ing[]\" class=\"info_textarea\"></textarea></td>';
                 new_row += '<td align=\"center\"><input name=\"txt_val_ing[]\" type=\"text\" class=\"txt_val_ing decimal\" value=\"0\"></td>';
                 new_row += '<td><input class=\"remove_dec_bienes_rentas menos\" type=\"button\" value=\"-\"></td>';
                 new_row += '</tr>';
                 
                 \$(\"#table_dec_bienes_rentas tbody\").append(new_row);
             }

             \$(\"#table_dec_bienes_rentas\").delegate(\".txt_val_ing\", \"keyup\", function() {
                 sum_ing_br();
             });

             function sum_ing_br() {
                 var sum = 0;
                 for (var i = 0; i < \$(\".txt_val_ing\").size(); i++) {
                     if (\$(\".txt_val_ing\").eq(i).val() === \"\") {
                         \$(\".txt_val_ing\").eq(i).val(0);
                     }
                     \$(\".txt_val_ing\").eq(i).val(parseFloat(\$(\".txt_val_ing\").eq(i).val()));
                     sum += parseFloat(\$(\".txt_val_ing\").eq(i).val());
                 }

                 \$(\".txtval_total_ing\").val(sum);
             }



             //2. Cuadro de su Patrimonio Inmobiliario

             var num_row_bienes_inmuebles = (\$(\"#table_bienes_inmuebles tbody tr\").size()-1);
             \$(\"#add_bienes_inmuebles\").click(function() {

                 num_row_bienes_inmuebles++;
                 add_rows_bienes_inmuebles();
                 \$(\".menos\").button();
                 sum_bienes_inmuebles();
                 \$(\".decimal\").numeric(\".\");
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
             });


             \$(\"#table_bienes_inmuebles\").delegate(\".remove_bienes_inmuebles\", \"click\", function() {
                 if (num_row_bienes_inmuebles > 0) {
                     var row_position = (\$(\".remove_bienes_inmuebles\").index(\$(this)) + 1);
                     \$(\"#table_bienes_inmuebles tbody tr\").eq(row_position).remove();
                     num_row_bienes_inmuebles--;
                     sum_bienes_inmuebles();
                 }
             });

             function add_rows_bienes_inmuebles() {
                 var new_row = '<tr>';
                 new_row += '<td>';
                 new_row += '<input name=\"txt_tip_patrimonio[]\" value=\"1\" type=\"hidden\">';
                 new_row += '<input name=\"txt_tip_bien[]\" type=\"text\" class=\"row-edit\">';
                 new_row += '</td>';
                 new_row += '<td><input name=\"txt_ubic[]\" type=\"text\" class=\"row-edit\"></td>';
                 new_row += '<td><input name=\"txt_fec_pat[]\" type=\"text \" class=\"row-edit datepicker\"></td>';
                 new_row += '<td><input name=\"txt_monto_pat[]\" type=\"text\" class=\"decimal txt_monto_pat row-edit decimal\" value=\"0\"></td>';
                 new_row += '<td><input type=\"button\" class=\"remove_bienes_inmuebles menos\" value=\"-\"></td>';
                 new_row += '</tr>';

                 \$(\"#table_bienes_inmuebles tbody\").append(new_row);

             }

             \$(\"#table_bienes_inmuebles\").delegate(\".txt_monto_pat\", \"keyup\", function() {
                 sum_bienes_inmuebles();
             });

             function sum_bienes_inmuebles() {
                 var sum = 0;
                 for (var i = 0; i < \$(\".txt_monto_pat\").size(); i++) {
                     if (\$(\".txt_monto_pat\").eq(i).val() === \"\") {
                         \$(\".txt_monto_pat\").eq(i).val(0);
                     }
                     \$(\".txt_monto_pat\").eq(i).val(parseFloat(\$(\".txt_monto_pat\").eq(i).val()));
                     sum += parseFloat(\$(\".txt_monto_pat\").eq(i).val());
                 }

                 \$(\".txt_total_monto_pat\").val(sum);
             }



             var num_bienes_muebles =(\$(\"#table_bienes_muebles tbody tr\").size()-1);
             \$(\"#add_bienes_muebles\").click(function() {
                 num_bienes_muebles++;
                 add_bienes_muebles();

                 \$(\".menos\").button();
                 \$(\".decimal\").numeric(\".\");

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


             });


             \$(\"#table_bienes_muebles\").delegate(\".rem_bienes_muebles\", \"click\", function() {
                 if (num_bienes_muebles > 0) {
                     var row_position = (\$(\".rem_bienes_muebles\").index(\$(this)) + 1);
                     \$(\"#table_bienes_muebles tbody tr\").eq(row_position).remove();
                     num_bienes_muebles--;
                     sum_bienes_muebless();
                 }
             });




             function add_bienes_muebles() {
                 var new_row = ' <tr>';
                 new_row += '<td>';
                 new_row += '        <input name=\"txt_tip_patrimonio[]\" value=\"2\" type=\"hidden\">';
                 new_row += '        <input name=\"txt_tip_bien[]\" type=\"text\" class=\"row-edit\">';
                 new_row += '    </td>';
                 new_row += '    <td><input name=\"txt_ubic[]\" type=\"text\" class=\"row-edit\"></td>';
                 new_row += '    <td><input name=\"txt_fec_pat[]\" type=\"text\" class=\"row-edit datepicker\"></td>';
                 new_row += '    <td><input name=\"txt_monto_pat_mu[]\" type=\"text\" class=\"txt_monto_pat_mu row-edit decimal\" value=\"0\"></td>';
                 new_row += '    <td><input type=\"button\" class=\"rem_bienes_muebles menos\" value=\"-\"></td>';
                 new_row += '</tr>';


                 \$(\"#table_bienes_muebles tbody\").append(new_row);

             }

             \$(\"#table_bienes_muebles\").delegate(\".txt_monto_pat_mu\", \"keyup\", function() {
                 sum_bienes_muebless();
             });

             function sum_bienes_muebless() {
                 var sum = 0;
                 for (var i = 0; i < \$(\".txt_monto_pat_mu\").size(); i++) {
                     if (\$(\".txt_monto_pat_mu\").eq(i).val() === \"\") {
                         \$(\".txt_monto_pat_mu\").eq(i).val(0);
                     }
                     \$(\".txt_monto_pat_mu\").eq(i).val(parseFloat(\$(\".txt_monto_pat_mu\").eq(i).val()));
                     sum += parseFloat(\$(\".txt_monto_pat_mu\").eq(i).val());
                 }

                 \$(\".txt_total_monto_muebles\").val(sum);
             }



             var num_otros_bienes = (\$(\"#table_otros_bienes tbody tr\").size()-1);
             \$(\"#add_otros_bienes\").click(function(){
                 num_otros_bienes++;
                 add_otros_bienes();
                 \$(\".menos\").button();
                 \$(\".decimal\").numeric(\".\");

             });
             \$(\"#table_otros_bienes\").delegate(\".remove_otros_bienes\", \"click\", function() {
                 if (num_otros_bienes > 0) {
                     var row_position = (\$(\".remove_otros_bienes\").index(\$(this)) + 1);
                     \$(\"#table_otros_bienes tbody tr\").eq(row_position).remove();
                     num_otros_bienes--;
                     sum_bienes_muebles();
                 }
             });

             function add_otros_bienes() {
                 var new_row = '<tr>';
                 new_row += '    <td><input name=\"txt_otr_descrip[]\" type=\"text\" class=\"row-edit\"></td>';
                 new_row += '     <td><input name=\"txt_otr_valor[]\"type=\"text\" class=\"txt_otr_valor row-edit decimal\" value=\"0\"></td>';
                 new_row += '    <td><input type=\"button\" class=\"remove_otros_bienes menos\" value=\"-\"></td>';
                 new_row += ' </tr>';


                 \$(\"#table_otros_bienes tbody\").append(new_row);

             }

             \$(\"#table_otros_bienes\").delegate(\".txt_otr_valor\", \"keyup\", function() {
                 sum_bienes_muebles();
             });

             function sum_bienes_muebles() {
                 var sum = 0;
                 for (var i = 0; i < \$(\".txt_otr_valor\").size(); i++) {
                     if (\$(\".txt_otr_valor\").eq(i).val() === \"\") {
                         \$(\".txt_otr_valor\").eq(i).val(0);
                     }
                     \$(\".txt_otr_valor\").eq(i).val(parseFloat(\$(\".txt_otr_valor\").eq(i).val()));
                     sum += parseFloat(\$(\".txt_otr_valor\").eq(i).val());
                 }

                 \$(\".total_otros_vienes\").val(sum);
             }




             var num_sistema_financiero = (\$(\"#table_sistema_financiero tbody tr\").size()-1);
             \$(\"#add_sistema_financiero\").click(function() {

                 num_sistema_financiero++;
                 add_sistema_financiero();
                 \$(\".menos\").button();
                 \$(\".decimal\").numeric(\".\");
             });
             \$(\"#table_sistema_financiero\").delegate(\".remove_sistema_financiero\", \"click\", function() {
                 if (num_sistema_financiero > 0) {
                     var row_position = (\$(\".remove_sistema_financiero\").index(\$(this)) + 1);
                     \$(\"#table_sistema_financiero tbody tr\").eq(row_position).remove();
                     num_sistema_financiero--;
                     sum_sistema_financiero();
                 }
             });

             function add_sistema_financiero() {
                 var new_row = '<tr>';
                 new_row += '<td><input name=\"txt_clase_sis[]\" type=\"text\" class=\"row-edit\"></td>';
                 new_row += '<td><input name=\"txt_enti_sis[]\" type=\"text\" class=\"row-edit\"></td>';
                 new_row += '<td><input name=\"txt_val_sis[]\" type=\"text\" class=\"txt_val_sis row-edit decimal\" value=\"0\"></td>';
                 new_row += '<td><input type=\"button\" class=\"remove_sistema_financiero menos\" value=\"-\"></td>';
                 new_row += ' </tr>';


                 \$(\"#table_sistema_financiero tbody\").append(new_row);

             }


             \$(\"#table_sistema_financiero\").delegate(\".txt_val_sis\", \"keyup\", function() {
                 sum_sistema_financiero();
             });

             function sum_sistema_financiero() {
                 var sum = 0;
                 for (var i = 0; i < \$(\".txt_val_sis\").size(); i++) {
                     if (\$(\".txt_val_sis\").eq(i).val() === \"\") {
                         \$(\".txt_val_sis\").eq(i).val(0);
                     }
                     \$(\".txt_val_sis\").eq(i).val(parseFloat(\$(\".txt_val_sis\").eq(i).val()));
                     sum += parseFloat(\$(\".txt_val_sis\").eq(i).val());
                 }
                 \$(\".total_sum_val_sis\").val(sum);
             }

             var num_acre_obli_car = 0;
             \$(\"#add_acre_obli_car\").click(function() {
                 num_acre_obli_car++;
                 add_acre_obli_car();
                 \$(\".menos\").button();
                 \$(\".decimal\").numeric(\".\");
             });
             \$(\"#table_acre_obli_car\").delegate(\".remove_acre_obli_car\", \"click\", function(){
                 if (num_acre_obli_car > 0){
                     var row_position = (\$(\".remove_acre_obli_car\").index(\$(this)) + 1);
                     \$(\"#table_acre_obli_car tbody tr\").eq(row_position).remove();
                     num_acre_obli_car--;
                     sum_acre_obli_car();
                 }
             });

             function add_acre_obli_car() {
                 var new_row = '<tr>';
                 new_row += '    <td><input name=\"txt_nat_acre[]\" type=\"text\" class=\"row-edit\"></td>';
                 new_row += '   <td><input name=\"txt_ent_acre[]\" type=\"text\" class=\"row-edit\"></td>';
                 new_row += '    <td><input name=\"txt_mon_acre[]\" type=\"text\" class=\"txt_mon_acre row-edit decimal\" value=\"0\"></td>';
                 new_row += '<td><input type=\"button\" class=\"remove_acre_obli_car menos\" value=\"-\"></td>';
                 new_row += ' </tr>';
                 \$(\"#table_acre_obli_car tbody\").append(new_row);
             }



             \$(\"#table_acre_obli_car\").delegate(\".txt_mon_acre\", \"keyup\", function() {
                 sum_acre_obli_car();
             });

             function sum_acre_obli_car() {
                 var sum = 0;
                 for (var i = 0; i < \$(\".txt_mon_acre\").size(); i++) {
                     if (\$(\".txt_mon_acre\").eq(i).val() === \"\") {
                         \$(\".txt_mon_acre\").eq(i).val(0);
                     }
                     \$(\".txt_mon_acre\").eq(i).val(parseFloat(\$(\".txt_mon_acre\").eq(i).val()));
                     sum += parseFloat(\$(\".txt_mon_acre\").eq(i).val());
                 }

                 \$(\".txt_sum_acre_obli\").val(sum);
             }










         });
    </script>

";
    }

    // line 453
    public function block_titulo($context, array $blocks = array())
    {
        // line 454
        echo "    <div>RUBRO 3</div>
    ";
    }

    // line 456
    public function block_submenu($context, array $blocks = array())
    {
        // line 457
        $this->env->loadTemplate("hojaVidaBundle:update_formularios:menu_actualizacion.html.twig")->display($context);
        // line 458
        echo "  ";
    }

    // line 459
    public function block_cuerpo($context, array $blocks = array())
    {
        echo " 

    <div id=\"tabs3-1\">
        <div class=\"area-registro\">
            <form id=\"frm_info_patrimonial\">
                  <input type=\"hidden\" name=\"id_pos\" value=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->getContext($context, "codigo"), "html", null, true);
        echo "\">
                <div class=\"tab-title\">
                    INFORMACIÓN PATRIMONIAL (ECONÓMICA E INMOBILIARIA)
                </div>
                <table width=\"100%\" border=\"0\" cellspacing=\"10px\" align=\"center\">
                    <tr>
                        <td>
                            <label class=\"labelText\">
                                1. Cuadro de Declaraciones Juradas de Bienes y Rentas
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><br>
                            <table width=\"70%\" class=\"table ui-widget ui-widget-content\" id=\"table_dec_bienes_rentas\">
                                <thead>
                                    <tr >
                                        <th class=\"ui-widget-header\" colspan=\"6\" align=\"center\">
                                            Ingresos &nbsp;<input type=\"button\" class=\"add-icon\" id=\"add_dec_bienes_rentas\" value=\"Nueva fila\"></th>
                                    </tr>   
                                    <tr class=\"ui-widget-header\">
                                        <th width=\"100px\">Año</th>
                                        <th>Descripci&oacute;n</th>
                                        <th>Valor S/.</th>    
                                        <th width=\"50px\"></th>
                                    </tr>
                                </thead>
                                <tbody>



                              ";
        // line 496
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ingre"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "  
                                    <tr>
                                        <td><select name=\"txt_ing_anio_pat[]\" class=\"numeric cbo_anio\"> año </select> ";
            // line 498
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "anio"), "html", null, true);
            echo "</td>
                                        <td><textarea name=\"txt_descripcion_ing[]\" class=\"info_textarea\"> ";
            // line 499
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "DESCRIPCION"), "html", null, true);
            echo " </textarea></td>
                                        <td align=\"center\"><input name=\"txt_val_ing[]\" type=\"text\" class=\"txt_val_ing decimal\" value=\"";
            // line 500
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "VALOR"), "html", null, true);
            echo "\"></td>
                                        <td> ";
            // line 501
            echo $this->getAttribute($this->getContext($context, "item"), "boton");
            echo " </td>
                                    </tr>
                               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 503
        echo "     
                                </tbody>
                            </table>    
                            <div style=\"width: 48%;margin: 10px auto;text-align: right;\">Total:&nbsp;<input class=\"txtval_total_ing\" type=\"text\" value=\"0\"></div>
                            <br><br><br> 

                            <table id=\"frm_otros_ingresos\"  width=\"80%\" class=\"table ui-widget ui-widget-content\">
                                <thead>
                                    <tr>
                                        <td colspan=\"3\" align=\"center\" class=\"ui-widget-header\">
                                            Otros Ingresos:
                                            <input type=\"button\" id=\"add_otros_ing\" class=\"add-icon\" value=\"Nueva fila\">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"2\" class=\"ui-widget-header\">Ingresos del declarante y de la sociedad de gananciales</td>
                                        <td class=\"ui-widget-header\" wdith=\"80px\" align=\"center\">Valor S/.</td>
                                    </tr>

                                </thead>
                                <tbody>
            
                                 ";
        // line 526
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "otrosin"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 527
            echo "                                    <tr>
                                        <td><input name=\"txt_otr_ing[]\" type=\"text\" class=\"row-edit\" value=\"";
            // line 528
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Descripcion"), "html", null, true);
            echo "\"></td>
                                        <td width=\"30px;\">";
            // line 529
            echo $this->getAttribute($this->getContext($context, "item"), "boton");
            echo "</td>
                                        <td><input name=\"txt_otr_val[]\" type=\"text\" class=\"txt_valor_ing row-edit decimal\" value=\"";
            // line 530
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Monto"), "html", null, true);
            echo "\"></td>
                                    </tr>
                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 533
        echo "                                    
                                </tbody>
                            </table>
                            <div style=\"width: 58%;margin: 10px auto;text-align: right;\">Total:&nbsp;<input type=\"text\" class=\"txt_valor_otr_ing decimal\" value=\"0\"></div>

                            <br>
                            <br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class=\"labelText\">
                                2. Cuadro de su Patrimonio Inmobiliario 
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><br>  
                            <table width=\"80%\" id=\"table_bienes_inmuebles\" class=\"table ui-widget ui-widget-content\">
                                <thead>
                                    <tr>
                                        <td class=\"ui-widget-header\" colspan=\"5\" align=\"center\">
                                            Bienes inmuebles: &nbsp;
                                            <input type=\"button\" class=\"add-icon\" id=\"add_bienes_inmuebles\" value=\"Nueva fila\"></td>
                                    </tr>
                                    <tr class=\"ui-widget-header\">
                                        <td align=\"center\">Tipo de Bien</td>
                                        <td align=\"center\">Ubicación</td>
                                        <td align=\"center\">Fecha de Adquisición</td>
                                        <td align=\"center\">Valor de<br> Autovalúo S/.</td>
                                        <td align=\"center\"width=\"50px\"></td>
                                    </tr>
                                </thead>
                                <tbody>
                   
                                    ";
        // line 569
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "patrimonio"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 570
            echo "                                    <tr>
                                        <td>
                                            <input name=\"txt_tip_patrimonio[]\" value=\"1\" type=\"hidden\">
                                            <input name=\"txt_tip_bien[]\" type=\"text\" class=\"row-edit\" value=\"";
            // line 573
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "TipoBien"), "html", null, true);
            echo " \">
                                        </td>
                                        <td><input name=\"txt_ubic[]\" type=\"text\" class=\"row-edit\" value=\"";
            // line 575
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Ubicacion"), "html", null, true);
            echo "\" > </td>
                                        <td><input name=\"txt_fec_pat[]\" type=\"text \" class=\"row-edit datepicker\" value=\"";
            // line 576
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Fecha"), "html", null, true);
            echo "\"></td>
                                        <td><input name=\"txt_monto_pat[]\" type=\"text\" class=\"decimal txt_monto_pat row-edit decimal\" value=\"";
            // line 577
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Monto"), "html", null, true);
            echo "\"></td>
                                        <td>";
            // line 578
            echo $this->getAttribute($this->getContext($context, "item"), "boton");
            echo "</td>
                                    </tr>
                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 580
        echo "     
                                </tbody>
                            </table>
                            <div style=\"width: 60%;margin: 10px auto;text-align: right;\">Total:&nbsp;<input class=\"txt_total_monto_pat\" type=\"text\" value=\"0\"></div>


                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><br>  
                            <table width=\"80%\" class=\"table ui-widget ui-widget-content\" id=\"table_bienes_muebles\">
                                <thead>
                                    <tr>
                                        <td colspan=\"5\" class=\"ui-widget-header\" align=\"center\">
                                            Bienes muebles:
                                            <input type=\"button\" id=\"add_bienes_muebles\" class=\"add-icon\" value=\"Nueva fila\">
                                        </td>
                                    </tr>
                                    <tr class=\"ui-widget-header\">
                                        <td  align=\"center\">Tipo de Bien</td>
                                        <td  align=\"center\">Ubicación</td>
                                        <td  align=\"center\">Fecha de Adquisición</td>
                                        <td  align=\"center\">Valor de<br> Autovalúo S/.</td>
                                        <td width=\"50px\"></td>
                                    </tr>
                                </thead>
                                <tbody>
                                      ";
        // line 608
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "patrimonio2"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 609
            echo "                                    <tr>
                                        <td>
                                            <input name=\"txt_tip_patrimonio[]\" value=\"2\" type=\"hidden\">
                                            <input name=\"txt_tip_bien[]\" type=\"text\" class=\"row-edit\" value=\"";
            // line 612
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "TipoBien"), "html", null, true);
            echo "\">
                                        </td>
                                        <td><input name=\"txt_ubic[]\" type=\"text\" class=\"row-edit\" value=\"";
            // line 614
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Ubicacion"), "html", null, true);
            echo "\"  ></td>
                                        <td><input name=\"txt_fec_pat[]\" type=\"text\" class=\"row-edit datepicker\" value=\"";
            // line 615
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Fecha"), "html", null, true);
            echo "\" ></td>
                                        <td><input name=\"txt_monto_pat[]\" type=\"text\" class=\"txt_monto_pat_mu row-edit decimal\" value=\"";
            // line 616
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Monto"), "html", null, true);
            echo "\" ></td>
                                        <td>";
            // line 617
            echo $this->getAttribute($this->getContext($context, "item"), "boton");
            echo "</td>
                                    </tr>
                                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 620
        echo "
                                </tbody>
                            </table>
                            <div style=\"width: 60%;margin: 10px auto;text-align: right;\">Total:&nbsp;<input class=\"txt_total_monto_muebles\" type=\"text\" value=\"0\"></div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table id=\"table_otros_bienes\" width=\"80%\" class=\"table ui-widget ui-widget-content\" >
                                <thead>
                                    <tr>
                                        <td class=\"ui-widget-header\" colspan=\"3\" align=\"center\">
                                            Otros bienes:&nbsp; <input id=\"add_otros_bienes\" type=\"button\" class=\"add-icon\" value=\"Nueva fila\" >
                                        </td>
                                    </tr>
                                    <tr class=\"ui-widget-header\">
                                        <td  align=\"center\">Detallar</td>
                                        <td  align=\"center\">Valor</td>
                                        <td width=\"50px\"></td>
                                    </tr>
                                </thead>
                                <tbody>
                                        ";
        // line 643
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "patrimoniotros"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 644
            echo "                                    <tr>
\t  
                                        <td><input name=\"txt_otr_descrip[]\" type=\"text\" class=\"row-edit\" value=\"";
            // line 646
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Descripcion"), "html", null, true);
            echo "\"></td>
                                        <td><input name=\"txt_otr_valor[]\"type=\"text\" class=\"txt_otr_valor row-edit decimal\" value=\"";
            // line 647
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Valor"), "html", null, true);
            echo "\"></td>
                                        <td>";
            // line 648
            echo $this->getAttribute($this->getContext($context, "item"), "boton");
            echo "</td>
                                    </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 651
        echo "                                </tbody>
                            </table>
                            <div style=\"width: 60%;margin: 10px auto;text-align: right;\">Total:&nbsp;<input class=\"total_otros_vienes\" type=\"text\" value=\"0\"></div>


                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table  id=\"table_sistema_financiero\"width=\"80%\" class=\"table ui-widget ui-widget-content\">
                                <thead>
                                    <tr>
                                        <td class=\"ui-widget-header\" colspan=\"4\" align=\"center\">
                                            Sistema Financiero &nbsp; 
                                            <input id=\"add_sistema_financiero\" type=\"button\" class=\"add-icon\" value=\"Nueva fila\" >
                                        </td>
                                    </tr>
                                    <tr class=\"ui-widget-header\">
                                        <td align=\"center\">Clase</td>
                                        <td  align=\"center\">Entidad o Tercero</td>
                                        <td align=\"center\">Monto S/.</td>
                                        <td width=\"50px\"></td>
                                    </tr>
                                </thead>
                                <tbody> 
                                    ";
        // line 676
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "financiero"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo " 
                                      
            
                                    <tr> 
                                        <td><input name=\"txt_clase_sis[]\" type=\"text\" class=\"row-edit\" value=\"";
            // line 680
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Clase"), "html", null, true);
            echo "\" ></td>
                                        <td><input name=\"txt_enti_sis[]\" type=\"text\" class=\"row-edit\" value=\"";
            // line 681
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Entidad"), "html", null, true);
            echo "\" ></td>
                                        <td><input name=\"txt_val_sis[]\" type=\"text\" class=\"txt_val_sis row-edit decimal\" value=\"";
            // line 682
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Valor"), "html", null, true);
            echo "\"></td>
                                        <td>";
            // line 683
            echo $this->getAttribute($this->getContext($context, "item"), "boton");
            echo "</td>
                                    </tr>
                                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 686
        echo "                                </tbody>
                            </table>
                            <div style=\"width: 60%;margin: 10px auto;text-align: right;\">Total:&nbsp;<input class=\"total_sum_val_sis\" type=\"text\" value=\"0\"></div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table  id=\"table_acre_obli_car\" width=\"80%\" class=\"table ui-widget ui-widget-content\">
                                <thead>
                                    <tr>
                                        <td class=\"ui-widget-header\" colspan=\"4\" align=\"center\">
                                            Acreencias y Obligaciones a su cargo &nbsp; 
                                            <input id=\"add_acre_obli_car\"  type=\"button\" class=\"add-icon\" value=\"Nueva fila\" >
                                        </td>
                                    </tr>
                                    <tr class=\"ui-widget-header\" >
                                        <td align=\"center\">Naturaleza de la deuda</td>
                                        <td align=\"center\">Entidad o Tercero</td>
                                        <td align=\"center\">Monto S/.</td>
                                        <td width=\"50px\"></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input name=\"txt_nat_acre[]\" type=\"text\" class=\"row-edit\"></td>
                                        <td><input name=\"txt_ent_acre[]\" type=\"text\" class=\"row-edit\"></td>
                                        <td><input name=\"txt_mon_acre[]\" type=\"text\" class=\"txt_mon_acre row-edit decimal\" value=\"0\"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div style=\"width: 60%;margin: 10px auto;text-align: right;\">Total:&nbsp;<input class=\"txt_sum_acre_obli\" type=\"text\" value=\"0\"></div>
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
        return "hojaVidaBundle:update_formularios:frm_updateInfoPatrimonial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  887 => 686,  878 => 683,  874 => 682,  870 => 681,  866 => 680,  857 => 676,  830 => 651,  821 => 648,  817 => 647,  813 => 646,  809 => 644,  805 => 643,  780 => 620,  771 => 617,  767 => 616,  763 => 615,  759 => 614,  754 => 612,  749 => 609,  745 => 608,  715 => 580,  706 => 578,  702 => 577,  698 => 576,  694 => 575,  689 => 573,  684 => 570,  680 => 569,  642 => 533,  633 => 530,  629 => 529,  625 => 528,  622 => 527,  618 => 526,  593 => 503,  584 => 501,  580 => 500,  576 => 499,  572 => 498,  565 => 496,  530 => 464,  521 => 459,  517 => 458,  515 => 457,  512 => 456,  507 => 454,  504 => 453,  62 => 13,  60 => 12,  54 => 9,  50 => 8,  45 => 6,  41 => 5,  37 => 4,  34 => 3,  31 => 2,);
    }
}
