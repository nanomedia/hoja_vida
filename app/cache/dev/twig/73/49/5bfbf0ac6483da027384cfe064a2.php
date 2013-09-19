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
        echo "        ";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/plugins/jqgrid/js/jquery-ui-1.8.16.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/plugins/jqgrid/js/i18n/grid.locale-es.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/plugins/jqgrid/js/jquery.jqGrid.src.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(document).ready(function() {

        \$(\"#table-documento\").jqGrid({
            url: '";
        // line 17
        echo $this->env->getExtension('routing')->getPath("_curo");
        echo "',
            datatype: 'json',
            mtype: 'POST',
            colNames: [\"DNI\", \"NOMBRES\", \"APELLIDOS\", \"EMAIL\", \"\"],
            colModel: [
                {name: 'dni', width: '80px', index: 'dni', resizable: true, sortable: true, align: \"center\"},
                {name: 'nombre', index: 'nombre', resizable: true, sortable: true, align: \"center\"},
                {name: 'apellido', index: 'apellido', resizable: true, sortable: true, align: \"center\"},
                {name: 'email', width: '190px', index: 'email', resizable: true, sortable: true, align: \"center\"},
                {name: 'myac', width: 90, fixed: true, sortable: false, resize: false, align: \"center\"},
            ],
            height: 370,
            width: 800,
            pager: \"#table-documento-paginator\",
            rowNum: 15,
            rowList: [15, 30],
            caption: 'POSTULANTES'
        });
    });
    </script>

";
    }

    // line 42
    public function block_titulo($context, array $blocks = array())
    {
        // line 43
        echo "    <div class=\"single-theme\">PANEL DE CONTROL</div>
";
    }

    // line 45
    public function block_cuerpo($context, array $blocks = array())
    {
        echo "   

    <div class=\"main-panel\">
        
        
       <div style=\"width: 800px;margin: 5px auto;\"> 
        <table id=\"table-documento\"></table>
        <div id=\"table-documento-paginator\"></div>
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
        return array (  102 => 45,  97 => 43,  94 => 42,  68 => 17,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
