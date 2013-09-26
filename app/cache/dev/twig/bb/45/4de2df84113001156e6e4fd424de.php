<?php

/* hojaVidaBundle:formularios:frm_conducta.html.twig */
class __TwigTemplate_bb454de2df84113001156e6e4fd424de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"tabs1-5\">
    <div class=\"area-registro\">

        <div class=\"tab-title\">CONDUCTA</div>


        <form id=\"frm-conducta\">
            <div id=\"ac_conducta\">
               
                ";
        // line 10
        $this->env->loadTemplate("hojaVidaBundle:formularios/conducta:antecedentes.html.twig")->display($context);
        // line 11
        echo "                ";
        $this->env->loadTemplate("hojaVidaBundle:formularios/conducta:procesos_judiciales.html.twig")->display($context);
        // line 12
        echo "                ";
        $this->env->loadTemplate("hojaVidaBundle:formularios/conducta:procesos_administrativos.html.twig")->display($context);
        // line 13
        echo "                ";
        $this->env->loadTemplate("hojaVidaBundle:formularios/conducta:procesos_PJudicial.html.twig")->display($context);
        // line 14
        echo "                ";
        $this->env->loadTemplate("hojaVidaBundle:formularios/conducta:procesos_MPublico.html.twig")->display($context);
        // line 15
        echo "
                </div>
            </form>
        </div>  
    </div>
";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:formularios:frm_conducta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  41 => 14,  38 => 13,  35 => 12,  32 => 11,  30 => 10,  19 => 1,);
    }
}
