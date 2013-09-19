<?php

/* hojaVidaBundle:plantillas:index.html.twig */
class __TwigTemplate_0b86d37a69cec52cad041528a76d271d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>.::HOJA DE VIDA::.</title>

        ";
        // line 7
        $this->displayBlock('scripts', $context, $blocks);
        // line 12
        echo "
    </head>
    <body>

        <div id=\"hoja-registro\">
            <div style=\"padding-bottom: 20px;\">
                <div class=\"logo-cnm\" style=\"float:left;\"></div>
                <div class=\"panel-usuario\"> Bienvenido: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "nombre"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "apellido"), "html", null, true);
        echo "
                    <div style=\"text-align: right;padding:  8px 30px 0 0;\"><a href=\"#\" style=\"color: #ffffff;font-size: 13px;\">cerrar sesion</a></div>
                </div>
                <div style=\"clear: left;\"></div>
            </div> 
            <div style=\"clear: left;\"></div>
            
        <div style=\"
             border:1px solid #000;
             padding: 20px 10px 20px 20px;
             margin: 0 5px 0 5px;
             font-weight: bold;
             background-color: #ffffff;
             \">
        <a href=\"\">Buscar</a> | <a href=\"\">Nuevo Postulante</a> | <a href=\"\">Postulantes</a> 
        </div>
    
            
              ";
        // line 37
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 40
        echo "        </div>
    </body>
</html>
";
    }

    // line 7
    public function block_scripts($context, array $blocks = array())
    {
        // line 8
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/hoja_vida/jquery-ui/css/redmond/jquery-ui-1.10.3.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/hoja_vida/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        ";
    }

    // line 37
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 38
        echo "
               ";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:plantillas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 38,  87 => 37,  80 => 9,  75 => 8,  72 => 7,  65 => 40,  63 => 37,  40 => 19,  31 => 12,  29 => 7,  21 => 1,);
    }
}
