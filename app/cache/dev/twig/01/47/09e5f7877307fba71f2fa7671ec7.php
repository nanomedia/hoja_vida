<?php

/* hojaVidaBundle:js:frm_datos_academicos.html.twig */
class __TwigTemplate_014709e5f7877307fba71f2fa7671ec7 extends Twig_Template
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
        echo "  var num_rows_docderecho = (\$(\".rowDocDerecho\").size() - 1);
                \$(\"#add_docderecho\").click(function() {

                    num_rows_docderecho++;
                    add_rows_docderecho();
                    \$(\".cbo_univ_doc_derecho\").eq(\$(\".cbo_univ_doc_derecho\").size()-1).html(cbouniv);
        
                });
                \$(\"#tableDocDerecho\").delegate(\".remove_docderecho\", \"click\", function() {
                    if (num_rows_docderecho > 0) {
                        var row_position = (\$(\".remove_docderecho\").index(\$(this)) + 1);
                        \$(\".rowDocDerecho\").eq(row_position).remove();
                        num_rows_docderecho--;
                    }
                });


                function add_rows_docderecho() {
                    var new_row = '<tr class=\"rowDocDerecho\">';

                    new_row += '<td>';

                    new_row += '     <table  class=\"table ui-widget ui-widget-content\" style=\"margin-bottom: 35px;\">';

                    new_row += '         <tr>';
                    new_row += '             <td width=\"110px\" class=\"ui-widget-header\">Universidad:</td>';
                    new_row += '             <td>';
                    new_row += '                 <select class=\"cbo_univ_doc_derecho\" name=\"cbo_universidad_doc[]\"></select>';
                    new_row += '             </td>';
                    new_row += '         </tr>';
                    new_row += '         <tr>';
                    new_row += '             <td class=\"ui-widget-header\">Nivel:</td>';
                    new_row += '             <td>';
                    new_row += '                 <select name=\"cbo_nivel_doc[]\">';
                    new_row += '                     <option value=\"0\">-ELEGIR-</option>';
                    new_row += '                     <option value=\"1\">TITULADO</option>';
                    new_row += '                     <option value=\"2\">EGRESADO</option>';
                    new_row += '                     <option value=\"3\">ESTUDIOS INCOMPLETOS</option>';
                    new_row += '                 </select>';
                    new_row += '             </td>';
                    new_row += '         </tr>';
                    new_row += '         <tr>';
                    new_row += '             <td class=\"ui-widget-header\">Menci&oacute;n:</td>';
                    new_row += '             <td><textarea name=\"txt_mencion_doc[]\" type=\"text\" class=\"info_textarea\"></textarea></td>';
                    new_row += '         </tr>';
                    new_row += '         <tr>';
                    new_row += '             <td class=\"ui-widget-header\">A&ntilde;o:</td>';
                    new_row += '             <td>';
                    new_row += '                 <select name=\"cbo_anio_doc[]\" class=\"cbo_anio_doc cbo_anio\"></select>';
                    new_row += '             </td>';
                    new_row += '         </tr>';
                    new_row += '     </table>';
                    new_row += ' </td>';
                    new_row += ' <td><input type=\"button\" class=\"remove_docderecho menos\" value=\"-\"></td>';
                    new_row += '</tr>';

                    \$(\"#bodyDocDerecho\").append(new_row);

                    var size = \$(\".cbo_anio_doc\").size();
                    \$(\".cbo_anio_doc\").eq(size - 1).html(comboanio());
                    var size_univ = \$(\".cbo_universidad_doc\").size();

                    \$(\".cbo_universidad_doc\").eq(size_univ - 1).html(comboUniv());

                    \$(\".menos\").button();
                }
                var num_rows_maederecho = (\$(\".rowMaeDerecho\").size() - 1);
                \$(\"#add_maederecho\").click(function() {

                    num_rows_maederecho++;
                    add_rows_maederecho();
                    var size = \$(\".cbo_anio_mae\").size();
                    \$(\".cbo_anio_mae\").eq(size - 1).html(comboanio());

                    var size_univ = \$(\".cbo_universidad_mae\").size();
                    \$(\".cbo_universidad_mae\").eq(size_univ - 1).html(comboUniv());

                });

                \$(\"#tableMaeDerecho\").delegate(\".remove_MaeDerecho\", \"click\", function() {
                    if (num_rows_maederecho > 0) {
                        var row_position = (\$(\".remove_MaeDerecho\").index(\$(this)) + 1);
                        \$(\".rowMaeDerecho\").eq(row_position).remove();
                        num_rows_maederecho--;

                    }
                });

                function add_rows_maederecho() {
                    var new_row = '<tr class=\"rowMaeDerecho\">';
                    new_row += '            <td>';

                    new_row += '                 <table class=\"table ui-widget ui-widget-content\" style=\"margin-bottom: 35px;\">';

                    new_row += '                     <tr>';
                    new_row += '                         <td width=\"110px\" class=\"ui-widget-header\">Universidad:</td>';
                    new_row += '                         <td>';
                    new_row += '                             <select name=\"cbo_universidad_mae[]\" class=\"cbo_universidad_maeder\"></select>';
                    new_row += '                         </td>';
                    new_row += '                     </tr>';
                    new_row += '                     <tr>';
                    new_row += '                         <td class=\"ui-widget-header\">Nivel:</td>';
                    new_row += '                         <td>';
                    new_row += '                             <select name=\"cbo_nivel_mae[]\">';
                    new_row += '                               <option value=\"0\">-ELEGIR-</option>';
                    new_row += '                               <option value=\"1\">TITULADO</option>';
                    new_row += '                               <option value=\"2\">EGRESADO</option>';
                    new_row += '                               <option value=\"3\">ESTUDIOS INCOMPLETOS</option>';
                    new_row += '                             </select>';
                    new_row += '                         </td>';
                    new_row += '                     </tr>';
                    new_row += '                     <tr>';
                    new_row += '                         <td class=\"ui-widget-header\">Menci&oacute;n:</td>';
                    new_row += '                         <td><textarea  name=\"txt_mencion_mae[]\" type=\"text\" class=\"info_textarea\"></textarea></td>';
                    new_row += '                     </tr>';
                    new_row += '                     <tr>';
                    new_row += '                         <td class=\"ui-widget-header\">A&ntilde;o:</td>';
                    new_row += '                         <td> <select name=\"cbo_anio_mae[]\" class=\"cbo_anio_mae cbo_anio\"></select></td>';
                    new_row += '                     </tr>';
                    new_row += '                 </table>';
                    new_row += '             </td>';
                    new_row += '             <td><input type=\"button\" class=\"remove_MaeDerecho menos\" value=\"-\"></td>';
                    new_row += '         </tr>';

                    \$(\"#bodyMaeDerecho\").append(new_row);
                    comboUniv();
                    var size = \$(\".cbo_anio_mae\").size();
                    \$(\".cbo_anio_mae\").eq(size - 1).html(comboanio());
                    \$(\".cbo_universidad_maeder\").eq((\$(\".cbo_universidad_maeder\").size()-1)).html(cbouniv);
                    
                    
                    \$(\".menos\").button();
                }


                var num_MaeDerOtrasDisc = (\$(\".rowMaeDerOtrasDisc\").size() - 1);
                \$(\"#add_MaeDerOtrasDisc\").click(function() {

                    num_MaeDerOtrasDisc++;
                    add_MaeDerOtrasDisc();
                    var size_univ = \$(\".cbo_universidad_otrasdisc\").size();
                    \$(\".cbo_universidad_otrasdisc\").eq(size_univ - 1).html(cbouniv);

                });

                \$(\"#tableMaeDerOtrasDisc\").delegate(\".remove_MaeDerOtrasDisc\", \"click\", function() {
                    if (num_MaeDerOtrasDisc > 0) {
                        var row_position = (\$(\".remove_MaeDerOtrasDisc\").index(\$(this)) + 1);
                        \$(\".rowMaeDerOtrasDisc\").eq(row_position).remove();
                        num_MaeDerOtrasDisc--;
                    }
                });


                function add_MaeDerOtrasDisc() {
                    var new_row = '<tr class=\"rowMaeDerOtrasDisc\">';
                    new_row += '<td><table width=\"70%\" class=\"table ui-widget ui-widget-content\" style=\"margin-bottom: 35px;\">';
                    new_row += '<tr><td width=\"110px\" class=\"ui-widget-header\">Universidad:</td>';
                    new_row += '<td><select name=\"cbo_universidad_otras[]\" class=\"cbo_universidad_otrasdisc\"></select>';
                    new_row += '</td>';
                    new_row += '</tr>';
                    new_row += '<tr><td class=\"ui-widget-header\">Nivel:</td>';
                    new_row += '<td><select name=\"cbo_nivel_otras[]\">';
                    new_row += '<option value=\"0\">-ELEGIR-</option>';
                    new_row += '<option value=\"1\">TITULADO</option>';
                    new_row += '<option value=\"2\">EGRESADO</option>';
                    new_row += '<option value=\"3\">ESTUDIOS INCOMPLETOS</option>';
                    new_row += '</select>';
                    new_row += '</td></tr>';
                    new_row += '<tr><td class=\"ui-widget-header\">Menci&oacute;n:</td>';
                    new_row += '<td><textarea name=\"txt_mencion_otras[]\" type=\"text\" class=\"info_textarea\"></textarea></td>';
                    new_row += '</tr><tr>';
                    new_row += '<td class=\"ui-widget-header\">A&ntilde;o:</td>';
                    new_row += '<td> <select name=\"cbo_anio_otras[]\" class=\"cbo_anio_otras cbo_anio\"></select></td>';
                    new_row += '</tr></table> ';
                    new_row += '</td><td><input type=\"button\" class=\"remove_MaeDerOtrasDisc menos\" value=\"-\"></td></tr>';

                    \$(\"#bodyMaeDerOtrasDisc\").append(new_row);
                    comboUniv();
                    var size = \$(\".cbo_anio_otras\").size();
                    \$(\".cbo_anio_otras\").eq(size - 1).html(comboanio());
                    \$(\".menos\").button();
                }";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:js:frm_datos_academicos.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 40,  19 => 1,  505 => 373,  499 => 369,  493 => 366,  486 => 362,  480 => 359,  465 => 347,  460 => 346,  455 => 344,  452 => 343,  344 => 239,  338 => 236,  321 => 222,  304 => 208,  286 => 193,  269 => 179,  252 => 165,  236 => 152,  216 => 135,  196 => 118,  176 => 101,  158 => 86,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 27,  42 => 5,  38 => 4,  33 => 3,  30 => 2,);
    }
}
