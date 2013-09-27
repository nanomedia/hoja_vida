<?php

/* hojaVidaBundle:update_formularios:update_mov_migratorio.html.twig */
class __TwigTemplate_88d26e69e2778dfbc35e227a21bdbafe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("hojaVidaBundle:plantillas:index.html.twig");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'submenu' => array($this, 'block_submenu'),
            'scripts' => array($this, 'block_scripts'),
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
    public function block_titulo($context, array $blocks = array())
    {
        // line 4
        echo "<div>MOVIMIENTO MIGRATORIO</div>
";
    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        // line 7
        $this->env->loadTemplate("hojaVidaBundle:update_formularios:menu_actualizacion.html.twig")->display($context);
    }

    // line 10
    public function block_scripts($context, array $blocks = array())
    {
        // line 11
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
<script>
    \$(document).ready(function() {
        ";
        // line 14
        $this->env->loadTemplate("hojaVidaBundle:update_formularios:util.html.twig")->display($context);
        // line 15
        echo "        var num_mov_migratorio = (\$(\"#table_mov_migratorio tbody tr\").size() - 1);
        \$(\"#add_mov_migratorio\").click(function() {

            num_mov_migratorio++;
            add_mov_migratorio();
            \$(\".menos\").button();
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
        \$(\"#table_mov_migratorio\").delegate(\".remove_mov_migratorio\", \"click\", function() {
            if (num_mov_migratorio > 0) {
                var row_position = (\$(\".remove_mov_migratorio\").index(\$(this)) + 1);
                \$(\"#table_mov_migratorio tbody tr\").eq(row_position).remove();
                num_mov_migratorio--;
            }
        });

        function add_mov_migratorio() {
            var new_row = '<tr>';
            new_row += '<td align=\"center\">';
            new_row += '<select name=\"txt_tipo[]\">';
            new_row += '<option value=\"0\">-ELEGIR-</option>';
            new_row += '<option value=\"1\">ENTRADA</option>';
            new_row += '<option value=\"2\">SALIDA</option>';
            new_row += '</select>';
            new_row += '</td>';
            new_row += '<td><input name=\"txt_fecha[]\" type=\"text\" class=\"row-edit datepicker\"></td>';
            new_row += '<td><input name=\"txt_destino[]\" type=\"text\" class=\"row-edit\"></td>';
            new_row += '<td><input class=\"remove_mov_migratorio menos\" type=\"button\" value=\"-\"></td>';
            new_row += '</tr>';

            \$(\"#table_mov_migratorio tbody\").append(new_row);

        }

    });


    </script>




";
    }

    // line 84
    public function block_cuerpo($context, array $blocks = array())
    {
        echo "   
    <div class=\"area-registro\">                        
        <form id=\"frm_mov_migratorio\" action=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("_update_movMigratorio");
        echo "\" method=\"POST\">
            <div class=\"tab-title\">
                MOVIMIENTO MIGRATORIO
            </div> <input type=\"submit\" class=\"button\" value=\"Actualizar\">
            <input type=\"hidden\" name=\"id_pos\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getContext($context, "codigo"), "html", null, true);
        echo "\">
            <table width=\"100%\" border=\"0\" cellspacing=\"10px\" align=\"center\">
                <tr>
                    <td>
                        <div  class=\"add-icon\" id=\"add_mov_migratorio\" >Nueva fila</div><br><br>
                        <table width=\"80%\" id=\"table_mov_migratorio\" class=\"table ui-widget ui-widget-content\">
                            <thead>

                                <tr class=\"ui-widget-header\">
                                    <th  width=\"100px\" align=\"center\">Movimiento</th>
                                    <th  width=\"100px\" align=\"center\">Fecha</th>
                                    <th  align=\"center\">Destino / Procedencia</th>
                                    <th width=\"50px\"></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "MovimientoMigratorio"));
        foreach ($context['_seq'] as $context["_key"] => $context["movi"]) {
            // line 107
            echo "                                    <tr>
                                        <td align=\"center\">
                                            <select name=\"txt_tipo[]\">
                                          ";
            // line 110
            echo $this->getAttribute($this->getContext($context, "movi"), "Tipo");
            echo "
                                                </select>
                                            </td>
                                            <td><input name=\"txt_fecha[]\" type=\"text\" class=\"row-edit datepicker\" value=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "movi"), "Fecha"), "html", null, true);
            echo "\"></td>
                                            <td><input name=\"txt_destino[]\" type=\"text\" class=\"row-edit\" value=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "movi"), "DestinoProcedencia"), "html", null, true);
            echo "\"></td>
                                            <td>";
            // line 115
            echo $this->getAttribute($this->getContext($context, "movi"), "boton");
            echo "</td>
                                        </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                                    </tbody>
                                </table>

                            </td>
                        </tr>
                    </table>
                </form>
            </div>  
";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:update_formularios:update_mov_migratorio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 118,  183 => 115,  179 => 114,  175 => 113,  169 => 110,  164 => 107,  160 => 106,  141 => 90,  134 => 86,  128 => 84,  57 => 15,  55 => 14,  49 => 11,  46 => 10,  42 => 7,  39 => 6,  34 => 4,  31 => 3,);
    }
}
