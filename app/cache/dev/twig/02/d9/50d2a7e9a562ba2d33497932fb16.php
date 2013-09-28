<?php

/* hojaVidaBundle:update_formularios:frm_update_datospostulante.html.twig */
class __TwigTemplate_02d950d2a7e9a562ba2d33497932fb16 extends Twig_Template
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

    // line 3
    public function block_scripts($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/hoja_vida/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<script>
    \$(document).ready(function() {

        var num_rows_canteriores = (\$(\"#table_canteriores tbody tr\").size() - 1);

        \$(\"#add_canteriores\").click(function() {

            num_rows_canteriores++;
            add_rows_canteriores();
            actualizar_table_canteriores();
            \$(\".menos\").button();
            \$(\".numeric\").numeric();

        });
        \$(\"#table_canteriores\").delegate(\".remove_canteriores\", \"click\", function() {
            if (num_rows_canteriores > 0) {
                var row_position = (\$(\".remove_canteriores\").index(\$(this)) + 1);
                \$(\"#table_canteriores tbody tr\").eq(row_position).remove();
                num_rows_canteriores--;
                actualizar_table_canteriores();
            }
        });
        function actualizar_table_canteriores(){
            for (var i = 1; i <= num_rows_canteriores; i++){
                \$(\"#table_canteriores tbody tr:eq(\" + i + \") td:eq(0)\").html(i + 1);
            }
        }
        
        function add_rows_canteriores(){
            var new_row = '<tr>';
            new_row += '<td align=\"center\"></td>';
            new_row += '<td><input type=\"text\" name=\"convocatoria[]\" class=\"row-edit\"></td>';
            new_row += '<td><input type=\"text\" name=\"plaza[]\" class=\"row-edit\"></td>';
            new_row += '<td><input type=\"text\" name=\"etapa[]\" class=\"row-edit\"></td>';
            new_row += '<td><input class=\"remove_canteriores menos\" type=\"button\" value=\"-\"></td>';
            new_row += '</tr>';
            
            \$(\"#table_canteriores tbody\").append(new_row);
        }
        ";
        // line 45
        $this->env->loadTemplate("hojaVidaBundle:update_formularios:util.html.twig")->display($context);
        // line 46
        echo "    });
    

</script>

";
    }

    // line 54
    public function block_titulo($context, array $blocks = array())
    {
        // line 55
        echo "    <div>DATOS POSTULANTE</div>
";
    }

    // line 58
    public function block_submenu($context, array $blocks = array())
    {
        // line 59
        $this->env->loadTemplate("hojaVidaBundle:update_formularios:menu_actualizacion.html.twig")->display($context);
        // line 60
        echo "  ";
    }

    // line 63
    public function block_cuerpo($context, array $blocks = array())
    {
        echo "   

    <div id=\"tabs1-2\">
        <div class=\"area-registro\">
            <form id=\"frm-como-postulante\" action=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("_updateDatosPostulante");
        echo "\" method=\"POST\">
             <div class=\"tab-title\">DATOS COMO POSTULANTE </div><input type=\"submit\" class=\"button\" value=\"Actualizar\">
                <table width=\"65%\" border=\"0\" cellspacing=\"15px\"  align=\"center\">
                    ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "variable"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 71
            echo "                    <tr >
                        <input type=\"hidden\" name=\"id_pos\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getContext($context, "codigo"), "html", null, true);
            echo "\">
                        <td width=\"35%\"><label class=\"labelText\">Cargo al que postula:</label></td>
                        <td><input type=\"text\" name=\"txt_cargoAPostular\" class=\"textbox obligate\" value=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "CARGO_A_POSTULAR"), "html", null, true);
            echo "\" ></td>
                    </tr>
                    <tr>
                        <td><label class=\"labelText\">Condici&oacute;n:</label></td>
                        <td><input type=\"text\" name=\"txt_condicion\" class=\"textbox obligate\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "CONDICION"), "html", null, true);
            echo "\" ></td>
                    </tr>
                    <tr>
                        <td><label class=\"labelText\">Curso de PROFA o Ascenso en la AMAG:</label></td>
                        <td>
                            <select name=\"cbo_tipoCurso\">
                                <option value=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "TIPO_CURSO"), "html", null, true);
            echo "\">  ";
            if (($this->getAttribute($this->getContext($context, "item"), "TIPO_CURSO") == 1)) {
                echo " PROFA  ";
            } else {
                echo "  Ascenso ";
            }
            echo "</option>
                                <option value=\"0\">-ELEGIR-</option>
                                <option value=\"1\">PROFA</option>
                                <option value=\"2\">Ascenso</option>
                            </select>
                            &nbsp;&nbsp;&nbsp;
                            <label class=\"labelText\">Nota:</label>
                            <input type=\"text\" name=\"txt_nota\" class=\"numeric nota\" size=\"5\"  value=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "NOTA"), "html", null, true);
            echo "\"  >
                        </td>
                    </tr>
                    <tr>
                        <td><label class=\"labelText\">Pre-Promedio:</label></td>
                        <td><input type=\"text\" name=\"txt_prePromedio\" class=\"numeric nota obligate\"  size=\"5\"  value=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "PRE_PROMEDIO"), "html", null, true);
            echo "\"  ></td>
                    </tr>
                    <tr>
                        <td><label class=\"labelText\">Orden de m&eacute;rito:</label></td>
                        <td><input type=\"text\"  name=\"txt_ordenMerito\" class=\"numeric num obligate\" size=\"5\" value=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "ORDEN_MERITO"), "html", null, true);
            echo "\" ></td>
                    </tr>
                    <tr>
                        <td><label class=\"labelText\">Plazas vacantes:</label></td>
                        <td><input type=\"text\"  name=\"txt_plazasVacantes\" class=\"numeric num obligate\" size=\"5\" value=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "PLAZAS_VACANTES"), "html", null, true);
            echo "\" ></td>
                    </tr>

                    <tr>
                        <td><label class=\"labelText\">Examen de conocimientos</label></td>
                        <td><input type=\"text\" name=\"txt_ex_cono\" class=\"textbox obligate\" value=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EXAMEN_CONOCIMIENTOS"), "html", null, true);
            echo "\" ></td>
                    </tr>
                    <tr>
                        <td><label class=\"labelText\">Afiliaci&oacute;n curricular</label></td>
                        <td><input type=\"text\" name=\"afi_curr\" class=\"textbox obligate\" value=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "AFILIACION_CURRICULAR"), "html", null, true);
            echo "\" ></td>
                    </tr>
                    <tr>
                        <td colspan=\"2\"><label class=\"labelText\">Postulación en Convocatorias anteriores:</label></td>
                    </tr>
                    <tr>
                        <td colspan=\"2\">
                            <div  class=\"add-icon\" id=\"add_canteriores\" >Nueva fila</div><br><br>
                            <table  id=\"table_canteriores\" align=\"center\" class=\"table ui-widget ui-widget-content\" >
                                <thead>
                                    <tr class=\"ui-widget-header\">
                                        <th width=\"40px\"></th>
                                        <th width=\"80px\">Convocatoria</th>
                                        <th width=\"400px\">Plaza</th>
                                        <th width=\"80px\">Etapa</th>
                                        <th width=\"40px\"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   ";
            // line 132
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConvocatoriasAnteriores"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo " 
                                    
                                    <tr>
                                        <td align=\"center\"> ";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Num"), "html", null, true);
                echo " </td>
                                        <td><input type=\"text\" name=\"convocatoria[]\" class=\"row-edit\" class=\"obligate\" value=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "convocatoria"), "html", null, true);
                echo "\" ></td>
                                        <td><input type=\"text\" name=\"plaza[]\" class=\"row-edit\" class=\"obligate\" value=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "plaza"), "html", null, true);
                echo "\" ></td>
                                        <td><input type=\"text\" name=\"etapa[]\" class=\"row-edit\" class=\"obligate\" value=\"";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "etapa"), "html", null, true);
                echo "\" ></td>
                                        <td>";
                // line 139
                echo $this->getAttribute($this->getContext($context, "item"), "boton");
                echo "</td>
                                    </tr>
                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo " 
                                    
                                </tbody>
                            </table>

                        </td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "      
                </table>
            </form>

        </div>
    </div> 


";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:update_formularios:frm_update_datospostulante.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 148,  260 => 141,  251 => 139,  247 => 138,  243 => 137,  239 => 136,  235 => 135,  227 => 132,  205 => 113,  198 => 109,  190 => 104,  183 => 100,  176 => 96,  168 => 91,  152 => 84,  143 => 78,  136 => 74,  131 => 72,  128 => 71,  124 => 70,  118 => 67,  110 => 63,  106 => 60,  104 => 59,  101 => 58,  96 => 55,  93 => 54,  84 => 46,  82 => 45,  39 => 5,  34 => 4,  31 => 3,);
    }
}
