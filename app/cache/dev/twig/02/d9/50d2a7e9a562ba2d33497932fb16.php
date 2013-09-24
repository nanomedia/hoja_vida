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
        function actualizar_table_canteriores() {
            for (var i = 1; i <= num_rows_canteriores; i++) {
                \$(\"#table_canteriores tbody tr:eq(\" + i + \") td:eq(0)\").html(i + 1);
            }

        }
        function add_rows_canteriores() {
            var new_row = '<tr>';
            new_row += '<td align=\"center\"></td>';
            new_row += '<td><input type=\"text\" name=\"convocatoria[]\" class=\"row-edit\"></td>';
            new_row += '<td><input type=\"text\" name=\"plaza[]\" class=\"row-edit\"></td>';
            new_row += '<td><input type=\"text\" name=\"etapa[]\" class=\"row-edit\"></td>';
            new_row += '<td><input class=\"remove_canteriores menos\" type=\"button\" value=\"-\"></td>';
            new_row += '</tr>';

            \$(\"#table_canteriores tbody\").append(new_row);

        }
    });



    </script>

";
    }

    // line 55
    public function block_titulo($context, array $blocks = array())
    {
        // line 56
        echo "    <div>datos postulante</div>
    ";
    }

    // line 58
    public function block_cuerpo($context, array $blocks = array())
    {
        echo "   

    <div id=\"tabs1-2\">
        <div class=\"area-registro\">
            <div class=\"tab-title\">DATOS COMO POSTULANTE</div>
            <form id=\"frm-como-postulante\">
                <table width=\"65%\" border=\"0\" cellspacing=\"15px\"  align=\"center\">
                    <tr >
                        <td width=\"35%\"><label class=\"labelText\">Cargo al que postula:</label></td>
                        <td><input type=\"text\" name=\"txt_cargoAPostular\" class=\"textbox obligate\"></td>
                    </tr>
                    <tr>
                        <td><label class=\"labelText\">Condici&oacute;n:</label></td>
                        <td><input type=\"text\" name=\"txt_condicion\" class=\"textbox obligate\"></td>
                    </tr>
                    <tr>
                        <td><label class=\"labelText\">Curso de PROFA o Ascenso en la AMAG:</label></td>
                        <td>
                            <select name=\"cbo_tipoCurso\">
                                <option value=\"0\">-ELEGIR-</option>
                                <option value=\"1\">PROFA</option>
                                <option value=\"2\">Ascenso</option>
                            </select>
                            &nbsp;&nbsp;&nbsp;
                            <label class=\"labelText\">Nota:</label>
                            <input type=\"text\" name=\"txt_nota\" class=\"numeric nota\" size=\"5\" >
                        </td>
                    </tr>
                    <tr>
                        <td><label class=\"labelText\">Pre-Promedio:</label></td>
                        <td><input type=\"text\" name=\"txt_prePromedio\" class=\"numeric nota obligate\"  size=\"5\" ></td>
                    </tr>
                    <tr>
                        <td><label class=\"labelText\">Orden de m&eacute;rito:</label></td>
                        <td><input type=\"text\"  name=\"txt_ordenMerito\" class=\"numeric num obligate\" size=\"5\" ></td>
                    </tr>
                    <tr>
                        <td><label class=\"labelText\">Plazas vacantes:</label></td>
                        <td><input type=\"text\"  name=\"txt_plazasVacantes\" class=\"numeric num obligate\" size=\"5\" ></td>
                    </tr>

                    <tr>
                        <td><label class=\"labelText\">Examen de conocimientos</label></td>
                        <td><input type=\"text\" name=\"txt_ex_cono\" class=\"textbox obligate\"></td>
                    </tr>
                    <tr>
                        <td><label class=\"labelText\">Afiliaci&oacute;n curricular</label></td>
                        <td><input type=\"text\" name=\"afi_curr\" class=\"textbox obligate\"></td>
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
                                    <tr>
                                        <td align=\"center\">1</td>
                                        <td><input type=\"text\" name=\"convocatoria[]\" class=\"row-edit\" class=\"obligate\"></td>
                                        <td><input type=\"text\" name=\"plaza[]\" class=\"row-edit\" class=\"obligate\"></td>
                                        <td><input type=\"text\" name=\"etapa[]\" class=\"row-edit\" class=\"obligate\"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>

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
        return "hojaVidaBundle:update_formularios:frm_update_datospostulante.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 58,  93 => 56,  90 => 55,  38 => 5,  33 => 4,  30 => 3,);
    }
}
