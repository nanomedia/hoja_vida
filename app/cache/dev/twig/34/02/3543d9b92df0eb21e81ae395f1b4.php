<?php

/* hojaVidaBundle:js:frm_info_patrimonial.html.twig */
class __TwigTemplate_34023543d9b92df0eb21e81ae395f1b4 extends Twig_Template
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
        echo "//frm info patrimonial

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

                        var num_rows_otros_ing = 0;
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

                        
                        
                           var num_dec_bienes_rentas = 0;
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

                        function add_dec_bienes_rentas() {
                            var new_row = ' <tr>';
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
    
                        var num_row_bienes_inmuebles= 0;
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


                        
                         var num_bienes_muebles = 0;
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
                        
                        
                        
                         var num_otros_bienes = 0;
                        \$(\"#add_otros_bienes\").click(function() {

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
                        
                        
                        
                        
                          var num_sistema_financiero = 0;
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
                        \$(\"#table_acre_obli_car\").delegate(\".remove_acre_obli_car\", \"click\", function() {
                            if (num_acre_obli_car > 0) {
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
                        
                        
                        
                        ";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:js:frm_info_patrimonial.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  23 => 3,  19 => 1,  162 => 83,  159 => 82,  155 => 59,  152 => 58,  146 => 11,  142 => 10,  138 => 9,  133 => 8,  130 => 7,  122 => 85,  120 => 82,  108 => 73,  101 => 69,  93 => 64,  84 => 58,  32 => 13,  22 => 1,  513 => 379,  511 => 378,  505 => 375,  499 => 372,  492 => 368,  486 => 365,  471 => 353,  466 => 352,  461 => 350,  458 => 349,  349 => 244,  342 => 240,  325 => 226,  309 => 213,  292 => 199,  276 => 186,  260 => 173,  244 => 160,  225 => 144,  208 => 130,  188 => 113,  167 => 95,  136 => 67,  92 => 25,  89 => 24,  86 => 59,  83 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 30,  47 => 7,  42 => 5,  38 => 4,  33 => 3,  30 => 7,);
    }
}
