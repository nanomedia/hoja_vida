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
        return array (  41 => 14,  35 => 12,  76 => 44,  48 => 19,  44 => 15,  36 => 12,  34 => 11,  32 => 11,  28 => 8,  63 => 40,  19 => 1,  505 => 373,  499 => 369,  493 => 366,  486 => 362,  480 => 359,  465 => 347,  460 => 346,  455 => 344,  452 => 343,  344 => 239,  338 => 236,  321 => 222,  304 => 208,  286 => 193,  269 => 179,  252 => 165,  236 => 152,  216 => 135,  196 => 118,  176 => 101,  158 => 86,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 45,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 27,  42 => 5,  38 => 13,  33 => 3,  30 => 10,);
    }
}
