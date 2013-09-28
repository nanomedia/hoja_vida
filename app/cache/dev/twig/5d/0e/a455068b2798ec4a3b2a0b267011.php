<?php

/* hojaVidaBundle:cuestionarios:tab1.html.twig */
class __TwigTemplate_5d0ea455068b2798ec4a3b2a0b267011 extends Twig_Template
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
    <li><a href=\"#tabs1-1\">DATOS PERSONALES</a></li>
    <li><a href=\"#tabs1-2\">DATOS COMO POSTULANTE</a></li>
    <li><a href=\"#tabs1-3\">DATOS ACADEMICOS</a></li>
    <li><a href=\"#tabs1-4\">EXPERIENCIA PROFESIONAL</a></li>
    <li><a href=\"#tabs1-5\">CONDUCTA</a></li>
</ul>
";
        // line 8
        $this->env->loadTemplate("hojaVidaBundle:formularios:frm_datos_personales.html.twig")->display($context);
        // line 9
        $this->env->loadTemplate("hojaVidaBundle:formularios:frm_datos_postulante.html.twig")->display($context);
        // line 10
        $this->env->loadTemplate("hojaVidaBundle:formularios:frm_datos_academicos.html.twig")->display($context);
        // line 11
        $this->env->loadTemplate("hojaVidaBundle:formularios:frm_exp_profesional.html.twig")->display($context);
        // line 12
        $this->env->loadTemplate("hojaVidaBundle:formularios:frm_conducta.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:cuestionarios:tab1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 12,  34 => 11,  32 => 10,  28 => 8,  63 => 40,  19 => 1,  508 => 376,  502 => 372,  496 => 369,  489 => 365,  483 => 362,  468 => 350,  463 => 349,  458 => 347,  455 => 346,  347 => 242,  341 => 239,  324 => 225,  307 => 211,  289 => 196,  272 => 182,  255 => 168,  239 => 155,  219 => 138,  199 => 121,  179 => 104,  158 => 86,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 27,  42 => 5,  38 => 4,  33 => 3,  30 => 9,);
    }
}
