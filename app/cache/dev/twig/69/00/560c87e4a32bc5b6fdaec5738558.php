<?php

/* hojaVidaBundle:update_formularios:frm_update_rubro2.html.twig */
class __TwigTemplate_6900560c87e4a32bc5b6fdaec5738558 extends Twig_Template
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
        echo "    <div>RUBRO 2</div>
    ";
    }

    // line 25
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 26
        echo "<div style=\"padding: 30px;\">
        <form id=\"frm_info_jue_fis\" action=\"\" method=\"POST\">
        <label class=\"labelText\">
            INFORMACIÓN DE LA OFICINA DE REGISTRO DE JUECES Y FISCALES DEL  CNM:
        </label><input type=\"submit\" class=\"button\" value=\"Guardar\">
            <table width=\"100%\" border=\"0\" cellspacing=\"10px\" align=\"center\">
                <tr>
                    <td>
                        <textarea name=\"tdescripcion\" style=\"height: 200px;width: 100%;font-size: 23px;\"></textarea>
                    </td>
                </tr>
            </table>
                
        </form>

        <form id=\"frm_direc_proc\" action=\"\" method=\"POST\">
        <label class=\"labelText\">
            INFORMACIÓN DE LA DIRECCIÓN DE PROCESOS DISCIPLINARIOS DEL CNM: 
        </label><input type=\"submit\" class=\"button\" value=\"Guardar\">
        <table width=\"100%\" border=\"0\" cellspacing=\"10px\" align=\"center\">
            <tr>
                <td>
                    <textarea name=\"tdescripcion\" style=\"height: 200px;width: 100%;font-size: 23px;\"></textarea>
                </td>
            </tr>
        </table>
                
        </form>
        <form id=\"frm_info_colegio\">
            <table width=\"100%\" border=\"0\" cellspacing=\"10px\" align=\"center\">
                <tr>
                    <td>
                        <label class=\"labelText\">1. DENUNCIAS, QUEJAS, PROCESOS DISCIPLINARIOS Y SANCIONES:</label>
                        <input type=\"submit\" class=\"button\" value=\"Guardar\">
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name=\"tdescripcion\" style=\"height: 200px;width: 100%;font-size: 23px;\"></textarea>
                    </td>
                </tr>
            </table>
                
        </form>
</div>


";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:update_formularios:frm_update_rubro2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  79 => 25,  74 => 22,  71 => 21,  61 => 13,  59 => 12,  53 => 9,  49 => 8,  44 => 6,  40 => 5,  36 => 4,  33 => 3,  30 => 2,);
    }
}
