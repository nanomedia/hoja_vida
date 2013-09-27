<?php

/* hojaVidaBundle:update_formularios:update_info_cam.html.twig */
class __TwigTemplate_56b67acb7799bf2dad81c9869cbfc4a0 extends Twig_Template
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
        echo "<div>INFORMACIÓN DE LA CÁMARA DE COMERCIO, INFOCORP Y SBS</div>
    ";
    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        // line 7
        $this->env->loadTemplate("hojaVidaBundle:update_formularios:menu_actualizacion.html.twig")->display($context);
        // line 8
        echo "  ";
    }

    // line 9
    public function block_scripts($context, array $blocks = array())
    {
        // line 10
        echo " ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
<script>
    \$(document).ready(function() {
        \$(\".button\").button();

    });

    </script>
";
    }

    // line 20
    public function block_cuerpo($context, array $blocks = array())
    {
        echo "   

    <div class=\"area-registro\">
        <form id=\"frm_info_camara\" action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("_actualiza_expprofesional");
        echo "\" method=\"POST\">
            <div class=\"tab-title\">
                INFORMACIÓN DE LA CÁMARA DE COMERCIO, INFOCORP Y SBS
            </div>
            <input type=\"submit\" class=\"button\" value=\"Actualizar\">
            <table width=\"100%\" border=\"0\" cellspacing=\"10px\" align=\"center\">
                <tr>
                    <td>
                        <input type=\"hidden\" name=\"id_pos\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getContext($context, "codigo"), "html", null, true);
        echo "\">
                        <table  width=\"80%\" class=\"table ui-widget ui-widget-content\">
                            <tr>
                                <td width=\"20%\" class=\"ui-widget-header\">Cámara de Comercio</td>
                                <td>
                                    <input type=\"hidden\" name=\"hd_tipo[]\" value=\"1\">
                                    <textarea class=\"info_textarea\" type=\"text\" name=\"txt_descripcion[]\" >";
        // line 37
        echo twig_escape_filter($this->env, $this->getContext($context, "info1"), "html", null, true);
        echo "</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"ui-widget-header\">Infocorp</td>
                                <td>
                                    <input type=\"hidden\" name=\"hd_tipo[]\" value=\"2\">
                                    <textarea class=\"info_textarea\" name=\"txt_descripcion[]\" >";
        // line 44
        echo twig_escape_filter($this->env, $this->getContext($context, "info2"), "html", null, true);
        echo "</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"ui-widget-header\">SBS</td>
                                <td>
                                    <input type=\"hidden\" name=\"hd_tipo[]\" value=\"3\">
                                    <textarea class=\"info_textarea\" type=\"text\" name=\"txt_descripcion[]\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getContext($context, "info3"), "html", null, true);
        echo "</textarea>
                                </td>
                            </tr>
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
        return "hojaVidaBundle:update_formularios:update_info_cam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 51,  102 => 44,  92 => 37,  83 => 31,  72 => 23,  65 => 20,  51 => 10,  48 => 9,  44 => 8,  42 => 7,  39 => 6,  34 => 4,  31 => 3,);
    }
}
