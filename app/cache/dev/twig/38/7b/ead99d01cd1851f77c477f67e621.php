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
            width: 400,
            modal: true,
            autoOpen: false,
        });

        \$(\"#content-menu\").menu();

<<<<<<< HEAD
 
=======
>>>>>>> 7991ed05889c6f9fd7ed6df311218f701bda0941
        \$(\".item-formularios\").click(function() {
            \$(\"#codigo_pos\").val(\$(this).attr(\"rel\"));
            \$(\"#menu-formularios\").dialog(\"open\");
        });

        \$(\".frm_url\").click(function() {
            var url = \$(this).attr(\"rel\");
            location.href = url + \"/\" + \$(\"#codigo_pos\").val();
        });

    });



    </script>
";
    }

<<<<<<< HEAD
    // line 101
    public function block_titulo($context, array $blocks = array())
    {
        // line 102
=======
    // line 100
    public function block_titulo($context, array $blocks = array())
    {
        // line 101
>>>>>>> 7991ed05889c6f9fd7ed6df311218f701bda0941
        echo "    <div>LISTA DE POSTULANTES</div>
    ";
    }

<<<<<<< HEAD
    // line 104
=======
    // line 103
>>>>>>> 7991ed05889c6f9fd7ed6df311218f701bda0941
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
<<<<<<< HEAD
        // line 123
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "postulantes"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 124
            echo "                    <tr>
                        <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "dni"), "html", null, true);
            echo "</td>
                        <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "nombres"), "html", null, true);
            echo "</td>
                        <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "apellidos"), "html", null, true);
            echo "</td>
                        <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "edad"), "html", null, true);
            echo "</td>
                        <td><input type=\"button\" rel=\"";
            // line 129
=======
        // line 122
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "postulantes"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 123
            echo "                    <tr>
                        <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "dni"), "html", null, true);
            echo "</td>
                        <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "nombres"), "html", null, true);
            echo "</td>
                        <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "apellidos"), "html", null, true);
            echo "</td>
                        <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "edad"), "html", null, true);
            echo "</td>
                        <td><input type=\"button\" rel=\"";
            // line 128
>>>>>>> 7991ed05889c6f9fd7ed6df311218f701bda0941
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "pk_dat_postulante"), "html", null, true);
            echo "\" class=\"item-formularios\" value=\"Actualizar\"></td>
                    </tr>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
        // line 131
=======
        // line 130
>>>>>>> 7991ed05889c6f9fd7ed6df311218f701bda0941
        echo "                
                </table>
                <input type=\"hidden\" id=\"codigo_pos\" value=\"\">
                <div id=\"menu-formularios\">
                    <ul id=\"content-menu\">
                        <li><a href=\"#\" rel=\"";
<<<<<<< HEAD
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/registro/frm_update_datospersonales\" class=\"frm_url\">DATOS PERSONALES</a></li>
                        <li><a href=\"#\" rel=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/registro/frm_update_datospostulante\" class=\"frm_url\">DATOS POSTULANTE</a></li>
                        <li><a href=\"#\" rel=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/registro/frm_update_datosacademicos\" class=\"frm_url\">DATOS ACADEMICOS</a></li>
                        <li><a href=\"#\" rel=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/registro/frm_update_expprofesional\" class=\"frm_url\">EXPERIENCIA PROFESIONAL</a></li>
                        <li><a href=\"#\" rel=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/registro/frm_update_conducta\" class=\"frm_url\">CONDUCTA</a></li>
                        <li><a href=\"#\" rel=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/registro/rubro2\" class=\"frm_url\">RUBRO 2</a></li>
                        <li><a href=\"#\" rel=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/registro/rubro3\" class=\"frm_url\">RUBRO 3</a></li>    
                        <li><a href=\"#\" rel=\"";
        // line 143
=======
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/registro/frm_update_datospostulante\" class=\"frm_url\">DATOS POSTULANTE</a></li>
                        <li><a href=\"#\" rel=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/registro/frm_update_datosacademicos\" class=\"frm_url\">DATOS ACADEMICOS</a></li>
                        <li><a href=\"#\" rel=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/registro/frm_update_expprofesional\" class=\"frm_url\">EXPERIENCIA PROFESIONAL</a></li>
                        <li><a href=\"#\" rel=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/registro/frm_update_conducta\" class=\"frm_url\">CONDUCTA</a></li>
                        <li><a href=\"#\" rel=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/registro/rubro2\" class=\"frm_url\">RUBRO 2</a></li>
                        <li><a href=\"#\" rel=\"";
        // line 140
>>>>>>> 7991ed05889c6f9fd7ed6df311218f701bda0941
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/registro/rubro4\" class=\"frm_url\">RUBRO 4</a></li>
                    </ul>
                </div>


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
<<<<<<< HEAD
        return array (  251 => 143,  247 => 142,  243 => 141,  239 => 140,  235 => 139,  231 => 138,  227 => 137,  223 => 136,  216 => 131,  207 => 129,  203 => 128,  199 => 127,  195 => 126,  191 => 125,  188 => 124,  184 => 123,  161 => 104,  156 => 102,  153 => 101,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
=======
        return array (  242 => 140,  238 => 139,  234 => 138,  230 => 137,  226 => 136,  222 => 135,  215 => 130,  206 => 128,  202 => 127,  198 => 126,  194 => 125,  190 => 124,  187 => 123,  183 => 122,  160 => 103,  155 => 101,  152 => 100,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
>>>>>>> 7991ed05889c6f9fd7ed6df311218f701bda0941
    }
}
