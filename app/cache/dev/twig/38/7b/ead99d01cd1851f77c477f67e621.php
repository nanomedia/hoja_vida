<?php

/* hojaVidaBundle:principal:home.html.twig */
class __TwigTemplate_387bead99d01cd1851f77c477f67e621 extends Twig_Template
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
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/plugins/jqgrid/css/ui.jqgrid.css"), "html", null, true);
        echo "\" />


<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/plugins/jqgrid/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/hoja_vida/jquery-ui/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/plugins/jqgrid/js/i18n/grid.locale-es.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/plugins/jqgrid/js/jquery.jqGrid.src.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(document).ready(function() {

        /* \$(\".auto\").autocomplete({
         source: \"\",
         });
         
         \$(\"#postulantes\").click(function() {
         var cadena = \$(\"#txtdni\").val() + \"\";
         var cade = cadena.split(\"-\");
         if (\$(\"#txtdni\").val() !== \"\") {
         if (cade[0].length !== \"\") {
         location.href = \"/hoja_vida/app_dev.php/registro/datos_mantenimiento/\" + cade[0];
         } else {
         alert(\"Ingresa dni\");
         }
         } else {
         alert(\"Ingrese DNI\");
         }
         });
         */


        /* \$(\"#table-documento\").jqGrid({
         url: '{path('_gridPostulante')}',
         datatype: 'json',
         mtype: 'POST',
         colNames: [\"DNI\", \"NOMBRES\", \"APELLIDOS\", \"EDAD\", \"\"],
         colModel: [
         {name: 'dni', width: \"70px\", index: 'dni', sortable: true, align: \"center\"},
         {name: 'nombres', width: \"80px\", align: \"center\"},
         {name: 'apellidos', width: \"80px\", align: \"center\"},
         {name: 'edad', width: \"50px\", align: \"center\"},
         {name: 'dato', width: 40, align: \"center\"},
         ],
         height: 320,
         width: 800,
         pager: \"#table-documento-paginator\",
         rowNum: 15,
         rowList: [15, 30],
         caption: 'POSTULANTES'
         });
         
         
         \$(\"#table_search_postulante\").delegate(\".row-update\", \"click\", function() {
         var url = \$(this).attr(\"rel\");
         location.href = url;
         //alert(codigo);
         
         });
         */

        \$(\"#options-form\").menu();
        \$(\".button\").button();
        \$(\"#tab-listado\").tabs();
        \$(\".boton\").button({
            icons: {
                primary: \"ui-icon-zoomin\"
            }});


        \$(\"#menu-formularios\").dialog({
            resizable: false,
            height: 300,
            
            modal: true,
            autoOpen: false,
        });

        \$(\".item-formularios\").click(function() {
           
            \$(\"#menu-formularios\").dialog(\"open\");
        });

    });



    </script>
";
    }

    // line 93
    public function block_titulo($context, array $blocks = array())
    {
        // line 94
        echo "    <div>LISTA DE POSTULANTES</div>
    ";
    }

    // line 96
    public function block_cuerpo($context, array $blocks = array())
    {
        echo "   

    <div id=\"tab-listado\">
        <ul>
            <li><a href=\"#tab-listado-1\">LISTA DE POSTULANTES</a></li>
            <!--<li><div class=\"boton\">BUSCAR</div></li>-->
        </ul>

        <div id=\"tab-listado-1\">
            <div id=\"table_search_postulante\" style=\"width:800px;margin:1px auto;\">

                <table border=\"1\" width=\"700px\">
                    <tr>
                        <td>DNI</td>
                        <td>NOMBRES</td>
                        <td>APELLIDOS</td>
                        <td>EDAD</td>
                        <td></td>
                    </tr>
                        ";
        // line 115
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "postulantes"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 116
            echo "                    <tr>
                        <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "dni"), "html", null, true);
            echo "</td>
                        <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "nombres"), "html", null, true);
            echo "</td>
                        <td>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "apellidos"), "html", null, true);
            echo "</td>
                        <td>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "edad"), "html", null, true);
            echo "</td>
                        <td><input type=\"button\" rel=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "pk_dat_postulante"), "html", null, true);
            echo "\" class=\"item-formularios\" value=\"Actualizar\"></td>
                    </tr>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                
                </table>

                <div id=\"menu-formularios\"></div>







                <!--Buscar:
                <input type=\"text\" class=\"auto\" id=\"txtdni\" style=\"width:450px;\">
                <input type=\"button\" id=\"postulantes\" value=\"ver Postulantes\">-->
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:principal:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 123,  199 => 121,  195 => 120,  191 => 119,  187 => 118,  183 => 117,  180 => 116,  176 => 115,  153 => 96,  148 => 94,  145 => 93,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
