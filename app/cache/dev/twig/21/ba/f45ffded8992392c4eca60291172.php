<?php

/* hojaVidaBundle:cuestionarios:tab2.html.twig */
class __TwigTemplate_21baf45ffded8992392c4eca60291172 extends Twig_Template
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
        echo "<ul>
    <li><a href=\"#tabs2-1\">INFORMACIÓN DE LA OFICINA DE <br>REGISTRO DE JUECES Y FISCALES DEL  CNM</a></li>
    <li><a href=\"#tabs2-2\">INFORMACIÓN DE LA DIRECCIÓN DE <br>PROCESOS DISCIPLINARIOS DEL CNM</a></li>
    <li><a href=\"#tabs2-3\">INFORMACIÓN DEL COLEGIO <br> DE ABOGADOS</a></li>

</ul>
";
        // line 7
        $this->env->loadTemplate("hojaVidaBundle:formularios:frm_info1.html.twig")->display($context);
        // line 8
        $this->env->loadTemplate("hojaVidaBundle:formularios:frm_info2.html.twig")->display($context);
        // line 9
        $this->env->loadTemplate("hojaVidaBundle:formularios:frm_info3.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:cuestionarios:tab2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  45 => 15,  43 => 14,  40 => 13,  37 => 12,  31 => 9,  29 => 8,  76 => 44,  48 => 19,  44 => 18,  36 => 12,  28 => 8,  34 => 11,  23 => 3,  19 => 1,  162 => 83,  159 => 82,  155 => 59,  152 => 58,  146 => 11,  142 => 10,  138 => 9,  133 => 8,  130 => 7,  122 => 85,  120 => 82,  108 => 73,  101 => 69,  93 => 64,  84 => 58,  32 => 10,  22 => 1,  513 => 379,  511 => 378,  505 => 375,  499 => 372,  492 => 368,  486 => 365,  471 => 353,  466 => 352,  461 => 350,  458 => 349,  349 => 244,  342 => 240,  325 => 226,  309 => 213,  292 => 199,  276 => 186,  260 => 173,  244 => 160,  225 => 144,  208 => 130,  188 => 113,  167 => 95,  136 => 67,  92 => 25,  89 => 24,  86 => 59,  83 => 22,  80 => 45,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 30,  47 => 7,  42 => 5,  38 => 4,  33 => 3,  30 => 10,);
    }
}
