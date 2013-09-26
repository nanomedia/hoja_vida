<?php

/* hojaVidaBundle:update_formularios:frm_update_rubro4.html.twig */
class __TwigTemplate_90af40ec5c3eaefcaf8a4567800d15af extends Twig_Template
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

    // line 2
    public function block_scripts($context, array $blocks = array())
    {
        // line 3
        echo "
";
        // line 4
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/hoja_vida/jquery-ui/js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/hoja_vida/jquery-ui/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/plugins/jValidate/jquery.validate.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/plugins/jquery_numeric/jquery.numeric.js"), "html", null, true);
        echo "\"></script>
<script>
\$(document).ready(function(){
     ";
        // line 12
        $this->env->loadTemplate("hojaVidaBundle:update_formularios:util.html.twig")->display($context);
        // line 13
        echo "});
</script>




";
    }

    // line 21
    public function block_titulo($context, array $blocks = array())
    {
        // line 22
        echo "    <div>RUBRO 4</div>
    ";
    }

    // line 25
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 26
        echo "
    <div id=\"tabs4-1\">
    <div class=\"area-registro\">
        <form id=\"frm_info_registro\">
            <div class=\"tab-title\">
                INFORMACIÓN DEL REGISTRO DE <br>DEUDORES ALIMENTARIOS MOROSOS - REDAM
                 <input type=\"submit\" class=\"button\" value=\"Guardar\">
            </div>
            ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "info_reg"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            echo "            <table width=\"100%\" border=\"0\" cellspacing=\"10px\" align=\"center\">
                <tr>
                    <td>
                        <textarea name=\"txt_deu\" style=\"height: 200px;width: 100%;font-size: 23px;\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "DEUDORES_ALIMENTARIOS"), "html", null, true);
            echo "  </textarea>
                    </td>
                </tr>
            </table><br><br>
            <div class=\"tab-title\">
                INFORMACIÓN COMPLEMENTARIA
                 <input type=\"submit\" class=\"button\" value=\"Guardar\">
            </div>
            <table width=\"100%\" border=\"0\" cellspacing=\"10px\" align=\"center\">
                <tr>
                    <td>
                        <textarea name=\"txt_com\" style=\"height: 200px;width: 100%;font-size: 23px;\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "COMPLEMENTARIA"), "html", null, true);
            echo "  </textarea>
                    </td>
                </tr>
            </table>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </form>
    </div>  

</div>
    


";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:update_formularios:frm_update_rubro4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 54,  115 => 49,  101 => 38,  96 => 35,  92 => 34,  82 => 26,  79 => 25,  74 => 22,  71 => 21,  61 => 13,  59 => 12,  53 => 9,  49 => 8,  44 => 6,  40 => 5,  36 => 4,  33 => 3,  30 => 2,);
    }
}
