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

    // line 214
    public function block_titulo($context, array $blocks = array())
    {
        // line 215
        echo "    <div>DATOS ACADEMICOS</div>
    ";
    }

    // line 217
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
                        <select class=\"combo-univ\" name=\"cbo_univProcedencia\">";
        // line 231
        echo $this->getAttribute($this->getContext($context, "DatosAcademicos"), "UnivProcedencia");
        echo "</select>
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
                        <select class=\"combo_colegios\" name=\"cbo_colegioProfesional\">";
        // line 244
        echo $this->getAttribute($this->getContext($context, "DatosAcademicos"), "ColegioProfesional");
        echo "</select>
                        <input type=\"text\" name=\"txt_fechaIncorporacion\" class=\"datepicker textbox-datepicker\" value=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosAcademicos"), "FechaIncorporacion"), "html", null, true);
        echo "\">
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
                                ";
        // line 260
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "DocDerecho"));
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 261
            echo "                                    <tr class=\"rowDocDerecho\">
                                        <td>
                                            <table align=\"center\" width=\"70%\" class=\"table ui-widget ui-widget-content\" style=\"margin-bottom: 35px;\">

                                                <tr>
                                                    <td width=\"110px\" class=\"ui-widget-header\">Universidad:</td>
                                                    <td>
                                                        <select  name=\"cbo_universidad_doc[]\">
                                                    ";
            // line 269
            echo $this->getAttribute($this->getContext($context, "doc"), "Universidad");
            echo "
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"ui-widget-header\">Nivel:</td>
                                                        <td>
                                                            <select name=\"cbo_nivel_doc[]\">
                                                                ";
            // line 277
            echo $this->getAttribute($this->getContext($context, "doc"), "Nivel");
            echo "
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"ui-widget-header\">Mensi&oacute;n:</td>
                                                        <td><textarea name=\"txt_mencion_doc[]\" type=\"text\" class=\"info_textarea\">";
            // line 283
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doc"), "Mension"), "html", null, true);
            echo "</textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"ui-widget-header\">A&ntilde;o:</td>
                                                        <td>
                                                            <select name=\"cbo_anio_doc[]\" > ";
            // line 288
            echo $this->getAttribute($this->getContext($context, "doc"), "Anio");
            echo "</select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>";
            // line 293
            echo $this->getAttribute($this->getContext($context, "doc"), "boton");
            echo "</td>

                                        </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        echo "
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
                                        ";
        // line 318
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "MaeDerecho"));
        foreach ($context['_seq'] as $context["_key"] => $context["mae"]) {
            // line 319
            echo "                                        <tr class=\"rowMaeDerecho\">
                                            <td>
                                                <table width=\"70%\" class=\"table ui-widget ui-widget-content\" style=\"margin-bottom: 35px;\">

                                                    <tr>
                                                        <td width=\"110px\" class=\"ui-widget-header\">Universidad:</td>
                                                        <td>
                                                            <select name=\"cbo_universidad_mae[]\" class=\"cbo_universidad_mae combo-univ\">
                                                            ";
            // line 327
            echo $this->getAttribute($this->getContext($context, "mae"), "Universidad");
            echo "
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"ui-widget-header\">Nivel:</td>
                                                        <td>
                                                            <select name=\"cbo_nivel_mae[]\">
                                                            ";
            // line 335
            echo $this->getAttribute($this->getContext($context, "mae"), "Nivel");
            echo "
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"ui-widget-header\">Mensi&oacute;n:</td>
                                                        <td><textarea  name=\"txt_mencion_mae[]\" type=\"text\" class=\"info_textarea\">";
            // line 341
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mae"), "Mension"), "html", null, true);
            echo "</textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"ui-widget-header\">A&ntilde;o:</td>
                                                        <td> <select name=\"cbo_anio_mae[]\" class=\"cbo_anio\">";
            // line 345
            echo $this->getAttribute($this->getContext($context, "mae"), "Anio");
            echo "</select></td>
                                                    </tr>

                                                </table>
                                            </td>
                                            <td>";
            // line 350
            echo $this->getAttribute($this->getContext($context, "mae"), "boton");
            echo "</td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mae'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        echo "                                    </tbody>

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
                                        ";
        // line 370
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "OtrasDisciplinas"));
        foreach ($context['_seq'] as $context["_key"] => $context["otr"]) {
            // line 371
            echo "                                        <tr class=\"rowMaeDerOtrasDisc\">
                                            <td>
                                                <table width=\"70%\" class=\"table ui-widget ui-widget-content\" style=\"margin-bottom: 35px;\">
                                                    <tr>
                                                        <td width=\"110px\" class=\"ui-widget-header\">Universidad:</td>
                                                        <td>
                                                            <select name=\"cbo_universidad_otras[]\" class=\"cbo_universidad_otras combo-univ\">
                                                            ";
            // line 378
            echo $this->getAttribute($this->getContext($context, "otr"), "Universidad");
            echo "
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"ui-widget-header\">Nivel:</td>
                                                        <td>
                                                            <select  name=\"cbo_nivel_otras[]\">
                                                                ";
            // line 386
            echo $this->getAttribute($this->getContext($context, "otr"), "Nivel");
            echo "
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"ui-widget-header\">Mensi&oacute;n:</td>
                                                        <td><textarea name=\"txt_mencion_otras[]\" type=\"text\" class=\"info_textarea\">";
            // line 392
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "otr"), "Mension"), "html", null, true);
            echo "</textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"ui-widget-header\">A&ntilde;o:</td>
                                                        <td> <select name=\"cbo_anio_otras[]\" class=\"cbo_anio\">";
            // line 396
            echo $this->getAttribute($this->getContext($context, "otr"), "Anio");
            echo "</select></td>
                                                    </tr>
                                                </table> 
                                            </td>
                                            <td>";
            // line 400
            echo $this->getAttribute($this->getContext($context, "otr"), "boton");
            echo "</td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['otr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 403
        echo "                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"2\">
                                <label class=\"labelText\">6. Título Profesional en Otras Disciplinas:</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"2\"><textarea class=\"text-area\" name=\"txt_tituloOtros\">";
        // line 413
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosAcademicos"), "TituloOtros"), "html", null, true);
        echo "</textarea></td>
                        </tr>
                        <tr>
                            <td colspan=\"2\"><label class=\"labelText\">Tesis para obtener el Título Profesional:</label></td>
                        </tr>
                        <tr>
                            <td colspan=\"2\"><textarea class=\"text-area\" name=\"txt_tesisTitular\">";
        // line 419
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosAcademicos"), "TesisTitular"), "html", null, true);
        echo "</textarea></td>
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
                           ";
        // line 430
        echo $this->getAttribute($this->getContext($context, "MeritosUniv"), "Puesto");
        echo "
                                    </select>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <label class=\"labelText\">A&ntilde;o:</label>
                                    <select name=\"cbo_anio_meritos\" class=\"cbo_anio\">
                           ";
        // line 434
        echo $this->getAttribute($this->getContext($context, "MeritosUniv"), "Anio");
        echo "
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <select name=\"cbo_univ_meritos\" class=\"combo-univ\">
                         ";
        // line 442
        echo $this->getAttribute($this->getContext($context, "MeritosUniv"), "Universidad");
        echo "
                                            </select>
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
        return array (  586 => 442,  575 => 434,  568 => 430,  554 => 419,  545 => 413,  533 => 403,  524 => 400,  517 => 396,  510 => 392,  501 => 386,  490 => 378,  481 => 371,  477 => 370,  458 => 353,  449 => 350,  441 => 345,  434 => 341,  425 => 335,  414 => 327,  404 => 319,  400 => 318,  377 => 297,  367 => 293,  359 => 288,  351 => 283,  342 => 277,  331 => 269,  321 => 261,  317 => 260,  299 => 245,  295 => 244,  279 => 231,  261 => 217,  256 => 215,  253 => 214,  46 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,);
    }
}
