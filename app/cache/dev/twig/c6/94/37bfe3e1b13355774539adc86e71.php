<?php

/* hojaVidaBundle:cuestionarios:tab3.html.twig */
class __TwigTemplate_c69437bfe3e1b13355774539adc86e71 extends Twig_Template
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
    <li><a href=\"#tabs3-1\">&nbsp;<br>INFORMACIÓN PATRIMONIAL</a></li>
    <li><a href=\"#tabs3-2\">&nbsp;<br>MOVIMIENTO  MIGRATORIO </a></li>
    <li><a href=\"#tabs3-3\">INFORMACIÓN DE LA CÁMARA DE COMERCIO,<br> INFOCORP Y SBS</a></li>
</ul>

";
        // line 7
        $this->env->loadTemplate("hojaVidaBundle:formularios:frm_info_patrimonial.html.twig")->display($context);
        // line 8
        $this->env->loadTemplate("hojaVidaBundle:formularios:frm_mov_migratorio.html.twig")->display($context);
        // line 9
        $this->env->loadTemplate("hojaVidaBundle:formularios:frm_info_cc_sbs.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:cuestionarios:tab3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 9,  29 => 8,  27 => 7,  41 => 14,  35 => 12,  76 => 44,  48 => 19,  44 => 15,  36 => 12,  32 => 11,  28 => 8,  34 => 11,  23 => 3,  19 => 1,  513 => 379,  511 => 378,  505 => 375,  499 => 372,  492 => 368,  486 => 365,  471 => 353,  466 => 352,  461 => 350,  458 => 349,  349 => 244,  342 => 240,  325 => 226,  309 => 213,  292 => 199,  276 => 186,  260 => 173,  244 => 160,  225 => 144,  208 => 130,  188 => 113,  167 => 95,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 45,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 7,  42 => 5,  38 => 13,  33 => 3,  30 => 10,);
    }
}
