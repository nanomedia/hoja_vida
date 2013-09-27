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
        \$(\"#options-form\").menu();
        \$(\"#options2-form\").menu();
        \$(\".button\").button();
        \$(\"#tab-listado\").tabs();
        \$(\".boton\").button({
            icons: {
                primary: \"ui-icon-zoomin\"
            }});
    });



    </script>

";
    }

    // line 30
    public function block_titulo($context, array $blocks = array())
    {
        // line 31
        echo "    <div>LISTA DE POSTULANTES</div>
    ";
    }

    // line 33
    public function block_cuerpo($context, array $blocks = array())
    {
        echo "   

    <div id=\"tab-listado\">
        <ul>
            <li><a href=\"#tab-listado-1\">LISTA DE POSTULANTES</a></li>
        </ul>

        <div id=\"tab-listado-1\">
            <div id=\"table_search_postulante\" style=\"width:800px;margin:1px auto;\">

                <table width=\"700px\" class=\"table ui-widget ui-widget-content\">
                    <head>
                    <tr class=\"ui-widget-header\" style=\"text-align:center;\">
                        <td>DNI</td>
                        <td>NOMBRES</td>
                        <td>APELLIDOS</td>
                        <td>EDAD</td>
                        <td></td>
                    </tr>
                    </head>
                    <tbody>
                        ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "postulantes"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 55
            echo "                            <tr>
                                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "dni"), "html", null, true);
            echo "</td>
                                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "nombres"), "html", null, true);
            echo "</td>
                                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "apellidos"), "html", null, true);
            echo "</td>
                                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "edad"), "html", null, true);
            echo "</td>
                                <td style=\"text-align:center;\"><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "pk_dat_postulante"), "html", null, true);
            echo "\"><input class=\"button\" type=\"button\" value=\"Actualizar\" ></a></td>
                            </tr>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    
                        </tbody>
                    </table>
                    <input type=\"hidden\" id=\"codigo_pos\" value=\"\">

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
        return array (  147 => 62,  138 => 60,  134 => 59,  130 => 58,  126 => 57,  122 => 56,  119 => 55,  115 => 54,  90 => 33,  85 => 31,  82 => 30,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
