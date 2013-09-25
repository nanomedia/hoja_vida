<?php

/* hojaVidaBundle:update_formularios:frm_update_datosacademicos.html.twig */
class __TwigTemplate_c8ff8e0fc29787b6b9b4395c5f8339fa extends Twig_Template
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
        echo "            ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/hoja_vida/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<script>
    \$(document).ready(function() {
        ";
        // line 8
        $this->env->loadTemplate("hojaVidaBundle:update_formularios:util.html.twig")->display($context);
        // line 9
        echo "
        var num_rows_docderecho = (\$(\".rowDocDerecho\").size() - 1);
        \$(\"#add_docderecho\").click(function() {

            num_rows_docderecho++;
            add_rows_docderecho();

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
            new_row += '                 <select class=\"cbo_universidad_doc combo-univ\" name=\"cbo_universidad_doc[]\"></select>';
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
            new_row += '             <td class=\"ui-widget-header\">Mensi&oacute;n:</td>';
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
            new_row += '                             <select name=\"cbo_universidad_mae[]\" class=\"cbo_universidad_mae combo-univ\"></select>';
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
            new_row += '                         <td class=\"ui-widget-header\">Mensi&oacute;n:</td>';
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
            \$(\".menos\").button();
        }


        var num_MaeDerOtrasDisc = (\$(\".rowMaeDerOtrasDisc\").size() - 1);
        \$(\"#add_MaeDerOtrasDisc\").click(function() {

            num_MaeDerOtrasDisc++;
            add_MaeDerOtrasDisc();
            var size_univ = \$(\".cbo_universidad_otras\").size();
            \$(\".cbo_universidad_otras\").eq(size_univ - 1).html(comboUniv());

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
            new_row += '<td><select name=\"cbo_universidad_otras[]\" class=\"cbo_universidad_otras combo-univ\"></select>';
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
            new_row += '<tr><td class=\"ui-widget-header\">Mensi&oacute;n:</td>';
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
        }
    });

    </script>
















    ";
    }

    // line 210
    public function block_titulo($context, array $blocks = array())
    {
        // line 211
        echo "    <div>DATOS ACADEMICOS</div>
    ";
    }

    // line 213
    public function block_cuerpo($context, array $blocks = array())
    {
        echo "   
    <div class=\"area-registro\">
        <div class=\"tab-title\"> DATOS ACAD&Eacute;MICOS</div>
        <form id=\"frm-datos-academicos\">
            <table width=\"65%\"  cellspacing=\"15px\" align=\"center\">
                <tr>
                    <td colspan=\"2\">
                        <label class=\"labelText\">1. Universidad de Procedencia:</label>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <select class=\"combo-univ\" name=\"cbo_univProcedencia\"></select>
                    </td>
                </tr>

                <tr>
                    <td colspan=\"2\">
                        <label class=\"labelText\">2. Colegio Profesional y fecha de incorporación:</label>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td> 
                        <select class=\"combo_colegios\" name=\"cbo_colegioProfesional\"></select>
                        <input type=\"text\" name=\"txt_fechaIncorporacion\" class=\"datepicker textbox-datepicker\">
                    </td>
                </tr>

                <tr>
                    <td colspan=\"2\">
                        <label class=\"labelText\">3. Doctorado en Derecho:</label>&nbsp;&nbsp;<div id=\"add_docderecho\" class=\"add-icon\">Agregar</div>
                        <input type=\"hidden\" name=\"txt_detEstudios_doc\" value=\"Doctorado en Derecho\">

                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\">
                        <table align=\"center\" id=\"tableDocDerecho\">
                            <tbody id=\"bodyDocDerecho\">

                                <tr class=\"rowDocDerecho\">
                                    <td>
                                        <table align=\"center\" width=\"70%\" class=\"table ui-widget ui-widget-content\" style=\"margin-bottom: 35px;\">

                                            <tr>
                                                <td width=\"110px\" class=\"ui-widget-header\">Universidad:</td>
                                                <td>
                                                    <select class=\"cbo_universidad_doc combo-univ\" name=\"cbo_universidad_doc[]\"></select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">Nivel:</td>
                                                <td>
                                                    <select name=\"cbo_nivel_doc[]\">
                                                        <option value=\"0\">-ELEGIR-</option>
                                                        <option value=\"1\">TITULADO</option>
                                                        <option value=\"2\">EGRESADO</option>
                                                        <option value=\"3\">ESTUDIOS INCOMPLETOS</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">Mensi&oacute;n:</td>
                                                <td><textarea name=\"txt_mencion_doc[]\" type=\"text\" class=\"info_textarea\"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">A&ntilde;o:</td>
                                                <td>
                                                    <select name=\"cbo_anio_doc[]\" class=\"cbo_anio\"></select>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>&nbsp;&nbsp;&nbsp;</td>

                                </tr>

                            </tbody>
                        </table>




                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\">
                        <label class=\"labelText\">4. Maestría en Derecho:</label>&nbsp;&nbsp;
                        <div id=\"add_maederecho\" class=\"add-icon\">Agregar</div>
                        <input type=\"hidden\" name=\"txt_detEstudios_mae\" value=\"Maestría en Derecho\">
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\">

                        <table align=\"center\" id=\"tableMaeDerecho\" >
                            <tbody id=\"bodyMaeDerecho\">
                                <tr class=\"rowMaeDerecho\">
                                    <td>
                                        <table width=\"70%\" class=\"table ui-widget ui-widget-content\" style=\"margin-bottom: 35px;\">

                                            <tr>
                                                <td width=\"110px\" class=\"ui-widget-header\">Universidad:</td>
                                                <td>
                                                    <select name=\"cbo_universidad_mae[]\" class=\"cbo_universidad_mae combo-univ\"></select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">Nivel:</td>
                                                <td>
                                                    <select name=\"cbo_nivel_mae[]\">
                                                        <option value=\"0\">-ELEGIR-</option>
                                                        <option value=\"1\">TITULADO</option>
                                                        <option value=\"2\">EGRESADO</option>
                                                        <option value=\"3\">ESTUDIOS INCOMPLETOS</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">Mensi&oacute;n:</td>
                                                <td><textarea  name=\"txt_mencion_mae[]\" type=\"text\" class=\"info_textarea\"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">A&ntilde;o:</td>
                                                <td> <select name=\"cbo_anio_mae[]\" class=\"cbo_anio\"></select></td>
                                            </tr>

                                        </table>
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>

                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\">
                        <label class=\"labelText\">5. Doctorado / Maestría en otras Disciplinas:</label>&nbsp;&nbsp;
                        <div class=\"add-icon\" id=\"add_MaeDerOtrasDisc\">Agregar</div>

                        <input type=\"hidden\" name=\"txt_detEstudios_otras\" value=\"Doctorado / Maestría en otras Disciplinas\">
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\">
                        <table align=\"center\" id=\"tableMaeDerOtrasDisc\" >
                            <tbody id=\"bodyMaeDerOtrasDisc\">
                                <tr class=\"rowMaeDerOtrasDisc\">
                                    <td>
                                        <table width=\"70%\" class=\"table ui-widget ui-widget-content\" style=\"margin-bottom: 35px;\">
                                            <tr>
                                                <td width=\"110px\" class=\"ui-widget-header\">Universidad:</td>
                                                <td>
                                                    <select name=\"cbo_universidad_otras[]\" class=\"cbo_universidad_otras combo-univ\"></select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">Nivel:</td>
                                                <td>
                                                    <select  name=\"cbo_nivel_otras[]\">
                                                        <option value=\"0\">-ELEGIR-</option>
                                                        <option value=\"1\">TITULADO</option>
                                                        <option value=\"2\">EGRESADO</option>
                                                        <option value=\"3\">ESTUDIOS INCOMPLETOS</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">Mensi&oacute;n:</td>
                                                <td><textarea name=\"txt_mencion_otras[]\" type=\"text\" class=\"info_textarea\"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">A&ntilde;o:</td>
                                                <td> <select name=\"cbo_anio_otras[]\" class=\"cbo_anio\"></select></td>
                                            </tr>
                                        </table> 
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\">
                        <label class=\"labelText\">6. Título Profesional en Otras Disciplinas:</label>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\"><textarea class=\"text-area\" name=\"txt_tituloOtros\"></textarea></td>
                </tr>
                <tr>
                    <td colspan=\"2\"><label class=\"labelText\">Tesis para obtener el Título Profesional:</label></td>
                </tr>
                <tr>
                    <td colspan=\"2\"><textarea class=\"text-area\" name=\"txt_tesisTitular\"></textarea></td>
                </tr>
                <tr>
                    <td colspan=\"2\">
                        <label class=\"labelText\">7. Méritos Universitarios:</label>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <select name=\"cbo_puesto_meritos\">
                            <option value=\"0\">-ELEGIR-</option>
                            <option value=\"1\">PRIMER PUESTO</option>
                            <option value=\"2\">QUINTO SUPERIOR</option>
                            <option value=\"3\">TERCER SUPERIOR</option>
                        </select>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label class=\"labelText\">A&ntilde;o:</label>
                        <select name=\"cbo_anio_meritos\" class=\"cbo_anio\"></select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <select name=\"cbo_univ_meritos\" class=\"combo-univ\"></select>
                    </td>
                </tr>
            </table>
        </form>

    </div>  
";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:update_formularios:frm_update_datosacademicos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 213,  252 => 211,  249 => 210,  46 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,);
    }
}
