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
            'titulo' => array($this, 'block_titulo'),
            'submenu' => array($this, 'block_submenu'),
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
        // line 14
        echo "        <script>
            \$(document).ready(function() {

                \$(\"#menu\").menu();
                \$(\"#menu2\").menu();


            });
            </script>

        </head>
        <body>

            <div id=\"hoja-registro\">
                <div class=\"header\" style=\"display:block;\">
                    <div class=\"logo-cnm\" style=\"float:left;\"></div>
                    <div class=\"ui-widget-header panel-usuario\">
                        <div class=\"ui-icon ui-icon-person\" style=\"float:left;\"></div>
                        <div class=\"ui-button-text\" style=\"float:left;\">&nbsp;";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "nombre"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "apellido"), "html", null, true);
        echo "</div>
                        <div style=\"clear: left;\"></div>
                    </div>
                    <div style=\"clear: left;\"></div>
                </div> 
                <div style=\"clear: left;\"></div>
                <div style=\"position:relative;
                     border-top: 1px solid #A6C9E2;
                     padding-top: 6px;
                     height: 110px;
                     border-radius: 10px 10px 0 0;
                     background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f0f0fc), to(#E4F2FD));
                     background: -webkit-linear-gradient(top ,#f0f0fc,#E4F2FD );
                     background: -moz-linear-gradient(top,#f0f0fc,#E4F2FD);
                     background: -o-linear-background(top,#f0f0fc,#E4F2FD);
                     background: -ms-linear-background(top,#f0f0fc,#E4F2FD);
                     background: linear-background(top,#f0f0fc,#E4F2FD); 

                     \">
                             <div style=\" color: #2e6e9e;
                              text-align: center;
                              margin-top: 40px;
                              font-weight: bold;
                              font-size: 18px;\">
                    ";
        // line 56
        $this->displayBlock('titulo', $context, $blocks);
        // line 57
        echo " 
                                  </div>                            
                                  <div style=\"width:164px;height: 85px;position:absolute;top:15px;right: 10px;\">
                                      <ul id=\"menu\">
                                          <li>
                                              <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("_lista_usuarios");
        echo "\">
                                                  <span class=\"ui-icon ui-icon-person\"></span>NUEVO
                                              </a>
                                          </li>
                                          <li>
                                              <a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("_lista_postulantes");
        echo "\">
                                                  <span class=\"ui-icon ui-icon-pencil\"></span>MODIFICAR
                                              </a>
                                          </li>
                                          <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("_logout");
        echo "\">
                                                  <span class=\"ui-icon ui-icon-gear\"></span>
                                                  Cerrar Session
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                         ";
        // line 78
        $this->displayBlock('submenu', $context, $blocks);
        // line 79
        echo " 
                         </div>
              ";
        // line 81
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 84
        echo "
                     </div>
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
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/plugins/jqgrid/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/hoja_vida/jquery-ui/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/plugins/jquery_numeric/jquery.numeric.js"), "html", null, true);
        echo "\"></script>
       ";
    }

    // line 56
    public function block_titulo($context, array $blocks = array())
    {
        // line 57
        echo "                    ";
    }

    // line 78
    public function block_submenu($context, array $blocks = array())
    {
        // line 79
        echo "                         ";
    }

    // line 81
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 82
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
        return array (  175 => 82,  172 => 81,  168 => 79,  165 => 78,  161 => 57,  158 => 56,  152 => 12,  148 => 11,  144 => 10,  140 => 9,  135 => 8,  132 => 7,  124 => 84,  122 => 81,  118 => 79,  116 => 78,  106 => 71,  99 => 67,  91 => 62,  84 => 57,  82 => 56,  53 => 32,  31 => 7,  23 => 1,  102 => 49,  97 => 46,  94 => 45,  62 => 17,  52 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 14,  30 => 3,);
    }
}
