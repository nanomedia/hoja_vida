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
\$(document).ready(function(){
    ";
        // line 9
        $this->env->loadTemplate("hojaVidaBundle:update_formularios:util.html.twig")->display($context);
        // line 10
        echo "    ";
        $this->env->loadTemplate("hojaVidaBundle:update_formularios/conducta/js:procesos_judiciales.html.twig")->display($context);
        echo " 
    ";
        // line 11
        $this->env->loadTemplate("hojaVidaBundle:update_formularios/conducta/js:procesos_MPublico.html.twig")->display($context);
        // line 12
        echo "    ";
        $this->env->loadTemplate("hojaVidaBundle:update_formularios/conducta/js:procesos_PJudicial.html.twig")->display($context);
        // line 13
        echo "    ";
        $this->env->loadTemplate("hojaVidaBundle:update_formularios/conducta/js:procesos_administrativos.html.twig")->display($context);
        // line 14
        echo "        
});
    
    
    </script>
";
    }

    // line 22
    public function block_titulo($context, array $blocks = array())
    {
        // line 23
        echo "    <div>CONDUCTA</div>
    ";
    }

    // line 25
    public function block_submenu($context, array $blocks = array())
    {
        // line 26
        $this->env->loadTemplate("hojaVidaBundle:update_formularios:menu_actualizacion.html.twig")->display($context);
        // line 27
        echo "  ";
    }

    // line 31
    public function block_cuerpo($context, array $blocks = array())
    {
        echo "   
    <div class=\"area-registro\">

        <div class=\"tab-title\">CONDUCTA</div>

        <form id=\"frm-conducta\" action=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("_actualiza_conducta");
        echo "\" method=\"POST\">
            <input type=\"hidden\" name=\"id_pos\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getContext($context, "codigo"), "html", null, true);
        echo "\">
            <div id=\"ac_conducta\">
                ";
        // line 39
        $this->env->loadTemplate("hojaVidaBundle:update_formularios/conducta/html:antecedentes.html.twig")->display($context);
        // line 40
        echo "                ";
        $this->env->loadTemplate("hojaVidaBundle:update_formularios/conducta/html:procesos_judiciales.html.twig")->display($context);
        // line 41
        echo "                ";
        $this->env->loadTemplate("hojaVidaBundle:update_formularios/conducta/html:procesos_administrativos.html.twig")->display($context);
        // line 42
        echo "                ";
        $this->env->loadTemplate("hojaVidaBundle:update_formularios/conducta/html:procesos_PJudicial.html.twig")->display($context);
        // line 43
        echo "                ";
        $this->env->loadTemplate("hojaVidaBundle:update_formularios/conducta/html:procesos_MPublico.html.twig")->display($context);
        // line 44
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
        return array (  119 => 44,  116 => 43,  113 => 42,  110 => 41,  107 => 40,  105 => 39,  100 => 37,  96 => 36,  87 => 31,  83 => 27,  81 => 26,  78 => 25,  73 => 23,  70 => 22,  61 => 14,  58 => 13,  55 => 12,  53 => 11,  48 => 10,  46 => 9,  39 => 5,  34 => 4,  31 => 3,);
    }
}
