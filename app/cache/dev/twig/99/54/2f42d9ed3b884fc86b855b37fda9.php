<?php

/* hojaVidaBundle:update_formularios:frm_update_conducta.html.twig */
class __TwigTemplate_99542f42d9ed3b884fc86b855b37fda9 extends Twig_Template
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
\$(document).ready(function(){
    ";
        // line 9
        $this->env->loadTemplate("hojaVidaBundle:update_formularios:util.html.twig")->display($context);
        // line 10
        echo "    ";
        $this->env->loadTemplate("hojaVidaBundle:update_formularios/conducta/js:procesos_MPublico.html.twig")->display($context);
        // line 11
        echo "
    ";
        // line 12
        $this->env->loadTemplate("hojaVidaBundle:update_formularios/conducta/js:procesos_MPublico.html.twig")->display($context);
        // line 13
        echo "    ";
        $this->env->loadTemplate("hojaVidaBundle:update_formularios/conducta/js:procesos_PJudicial.html.twig")->display($context);
        // line 14
        echo "    ";
        $this->env->loadTemplate("hojaVidaBundle:update_formularios/conducta/js:procesos_administrativos.html.twig")->display($context);
        // line 15
        echo "    ";
        $this->env->loadTemplate("hojaVidaBundle:update_formularios/conducta/js:procesos_PJudicial.html.twig")->display($context);
        // line 16
        echo "    ";
        $this->env->loadTemplate("hojaVidaBundle:update_formularios/conducta/js:procesos_MPublico.html.twig")->display($context);
        // line 17
        echo "        
});
    
    
    </script>
";
    }

    // line 25
    public function block_titulo($context, array $blocks = array())
    {
        // line 26
        echo "    <div>CONDUCTA</div>
    ";
    }

    // line 28
    public function block_cuerpo($context, array $blocks = array())
    {
        echo "   
    <div class=\"area-registro\">

        <div class=\"tab-title\">CONDUCTA</div>

        <form id=\"frm-conducta\">
            <div id=\"ac_conducta\">
                ";
        // line 35
        $this->env->loadTemplate("hojaVidaBundle:update_formularios/conducta/html:antecedentes.html.twig")->display($context);
        // line 36
        echo "                ";
        $this->env->loadTemplate("hojaVidaBundle:update_formularios/conducta/html:procesos_judiciales.html.twig")->display($context);
        // line 37
        echo "                ";
        $this->env->loadTemplate("hojaVidaBundle:update_formularios/conducta/html:procesos_administrativos.html.twig")->display($context);
        // line 38
        echo "                ";
        $this->env->loadTemplate("hojaVidaBundle:update_formularios/conducta/html:procesos_PJudicial.html.twig")->display($context);
        // line 39
        echo "                ";
        $this->env->loadTemplate("hojaVidaBundle:update_formularios/conducta/html:procesos_MPublico.html.twig")->display($context);
        // line 40
        echo "            </div>
            </form>
        </div>  
";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:update_formularios:frm_update_conducta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 40,  106 => 39,  103 => 38,  100 => 37,  97 => 36,  95 => 35,  84 => 28,  79 => 26,  76 => 25,  67 => 17,  64 => 16,  61 => 15,  58 => 14,  55 => 13,  53 => 12,  50 => 11,  47 => 10,  45 => 9,  38 => 5,  33 => 4,  30 => 3,);
    }
}
