<?php

/* curriculoBundle:index:panel_usuario.html.twig */
class __TwigTemplate_73495bfbf0ac6483da027384cfe064a2 extends Twig_Template
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
        echo "       ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo " 
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/hoja_vida/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/plugins/jqgrid/css/ui.jqgrid.css"), "html", null, true);
        echo "\" />


<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/plugins/jqgrid/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/hoja_vida/jquery-ui/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>

<script>
    \$(document).ready(function() {


        \$(\".auto\").autocomplete({
            source: '";
        // line 17
        echo $this->env->getExtension('routing')->getPath("_grid_usuarios");
        echo "'
        });
        \$(\"#tab-listado\").tabs();
        \$(\".boton\").button({
            icons: {
                primary: \"ui-icon-zoomin\"
            }});



        \$(\"#hdvida\").click(function() {
            var cadena = \$(\"#txtdni\").val() + \"\";
            var cade = cadena.split(\"-\");
            if (\$(\"#txtdni\").val() !==\"\") {
                if (cade[0].length !== \"\") {
                    location.href = \"/hoja_vida/app_dev.php/registro/index/\" + cade[0];
                } else {
                    alert(\"Ingresa dni\");
                }
            }else{
                alert(\"Ingrese DNI\");
            }
        });

    });
    </script>

";
    }

    // line 45
    public function block_titulo($context, array $blocks = array())
    {
        // line 46
        echo "    NUEVO
";
    }

    // line 49
    public function block_cuerpo($context, array $blocks = array())
    {
        echo "   
    <div id=\"tab-listado\">
        <ul>
            <li><a href=\"#tab-listado-1\">BUSQUEDA DE USUARIOS</a></li>

        </ul>
        <div id=\"tab-listado-1\">
            <div style=\"width: 800px;margin: 5px auto;\"> 
                Buscar:
                <input type=\"text\" class=\"auto\" id=\"txtdni\" style=\"width:450px;\">
                <input type=\"button\" id=\"hdvida\" value=\"Hoja de Vida\">
            </div>  
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "curriculoBundle:index:panel_usuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 49,  97 => 46,  94 => 45,  62 => 17,  52 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
