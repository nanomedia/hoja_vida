<?php

/* hojaVidaBundle:update_formularios:menu_actualizacion.html.twig */
class __TwigTemplate_97877a737b4d08f24c7ccd2f557dfaca extends Twig_Template
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
        echo "<style>
        #menu2 .ui-menu { width: 250px; }
    </style>
    <div style=\"width:164px;height: 85px;position:absolute;top:0px;left: 10px;\">
        <ul id=\"menu2\">
            <li>
                <a href=\"#\"><span class=\"ui-icon ui-icon-folder-open\"></span>Rubro 1</a>
                <ul>
                    <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_frm_update_datospostulante", array("codigo" => $this->getContext($context, "codigo"))), "html", null, true);
        echo "\"><span class=\"ui-icon ui-icon-refresh\"></span>DATOS COMO POSTULANTE</a></li>
                    <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_frm_update_datosacademicos", array("codigo" => $this->getContext($context, "codigo"))), "html", null, true);
        echo "\"><span class=\"ui-icon ui-icon-refresh\"></span>DATOS ACADEMICOS</a></li>
                    <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_frm_update_expprofesional", array("codigo" => $this->getContext($context, "codigo"))), "html", null, true);
        echo "\"><span class=\"ui-icon ui-icon-refresh\"></span>EXPERIENCIA PROFESIONAL</a></li>
                    <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_frm_update_conducta", array("codigo" => $this->getContext($context, "codigo"))), "html", null, true);
        echo "\"><span class=\"ui-icon ui-icon-refresh\"></span>CONDUCTA</a></li>
                </ul>
            </li>
            <li>
                <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_rubro2", array("codigo" => $this->getContext($context, "codigo"))), "html", null, true);
        echo "\"><span class=\"ui-icon ui-icon-folder-open\"></span>Rubro 2</a>
            </li>
            <li>
                <a href=\"\"><span class=\"ui-icon ui-icon-folder-open\"></span>Rubro 3</a>
                <ul>
                    <li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_frm_updateInfoPatrimonial", array("codigo" => $this->getContext($context, "codigo"))), "html", null, true);
        echo "\"><span class=\"ui-icon ui-icon-refresh\"></span>INFORMACI&Oacute; PATRIMONIAL</a></li>
                    <li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_frm_update_movMigratorio", array("codigo" => $this->getContext($context, "codigo"))), "html", null, true);
        echo "\"><span class=\"ui-icon ui-icon-refresh\"></span>MOVIMIENTO MIGRATORIO</a></li>
                    <li><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_frm_update_info_cam", array("codigo" => $this->getContext($context, "codigo"))), "html", null, true);
        echo "\"><span class=\"ui-icon ui-icon-refresh\"></span>INFO. INFOCORP Y SBS</a></li>
                </ul>
            </li>
            <li>
                <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_rubro4", array("codigo" => $this->getContext($context, "codigo"))), "html", null, true);
        echo "\">
                    <span class=\"ui-icon ui-icon-folder-open\"></span>Rubro 4
                </a>
            </li>
        </ul>
    </div>";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:update_formularios:menu_actualizacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 27,  64 => 23,  60 => 22,  56 => 21,  48 => 16,  41 => 12,  37 => 11,  33 => 10,  29 => 9,  52 => 32,  19 => 1,  273 => 148,  260 => 141,  251 => 139,  247 => 138,  243 => 137,  239 => 136,  235 => 135,  227 => 132,  205 => 113,  198 => 109,  190 => 104,  183 => 100,  176 => 96,  168 => 91,  152 => 84,  143 => 78,  136 => 74,  131 => 72,  128 => 71,  124 => 70,  118 => 67,  110 => 63,  106 => 60,  104 => 59,  101 => 58,  96 => 55,  93 => 54,  84 => 46,  82 => 45,  39 => 5,  34 => 4,  31 => 3,);
    }
}
