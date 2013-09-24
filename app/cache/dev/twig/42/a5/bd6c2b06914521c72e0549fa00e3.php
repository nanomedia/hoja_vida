<?php

/* hojaVidaBundle:cuestionarios:tab4.html.twig */
class __TwigTemplate_42a5bd6c2b06914521c72e0549fa00e3 extends Twig_Template
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
        echo "
<ul>
    <li><a href=\"#tabs4-1\">INFORMACIÓN DEL REGISTRO</a></li>
</ul>
  ";
        // line 5
        $this->env->loadTemplate("hojaVidaBundle:formularios:frm_info_registro.html.twig")->display($context);
        // line 6
        echo " ";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:cuestionarios:tab4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  27 => 6,  45 => 15,  43 => 14,  40 => 13,  37 => 12,  31 => 9,  29 => 8,  76 => 44,  48 => 19,  44 => 18,  36 => 12,  32 => 10,  28 => 8,  34 => 11,  23 => 3,  19 => 1,  513 => 379,  511 => 378,  505 => 375,  499 => 372,  492 => 368,  486 => 365,  471 => 353,  466 => 352,  461 => 350,  458 => 349,  349 => 244,  342 => 240,  325 => 226,  309 => 213,  292 => 199,  276 => 186,  260 => 173,  244 => 160,  225 => 144,  208 => 130,  188 => 113,  167 => 95,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 45,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 7,  42 => 5,  38 => 4,  33 => 3,  30 => 10,);
    }
}
