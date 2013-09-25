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


            });
            </script>

        </head>
        <body>

            <div id=\"hoja-registro\">
                <div class=\"header\" style=\"display:none;\">
                    <div class=\"logo-cnm\" style=\"float:left;\"></div>
                    <div class=\"ui-widget-header panel-usuario\">
                        <div class=\"ui-icon ui-icon-person\" style=\"float:left;\"></div>
                        <div class=\"ui-button-text\" style=\"float:left;\">&nbsp;";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "nombre"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "apellido"), "html", null, true);
        echo "</div>
                        <div style=\"clear: left;\"></div>
                    </div>
                    <div style=\"clear: left;\"></div>
                </div> 
                <div style=\"clear: left;\"></div>
                <div style=\"
                     border-top: 1px solid #A6C9E2;
                     padding-top: 6px;

                     border-radius: 10px 10px 0 0;
                     background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f0f0fc), to(#E4F2FD));
                     background: -webkit-linear-gradient(top ,#f0f0fc,#E4F2FD );
                     background: -moz-linear-gradient(top,#f0f0fc,#E4F2FD);
                     background: -o-linear-background(top,#f0f0fc,#E4F2FD);
                     background: -ms-linear-background(top,#f0f0fc,#E4F2FD);
                     background: linear-background(top,#f0f0fc,#E4F2FD); 

                     \">
                         <div style=\"width: 77%;
                              float: left;
                              color: #2e6e9e;
                              text-align: center;
                              margin-top: 32px;
                              font-weight: bold;
                              font-size: 18px;
                              padding-left: 105px;
                              \">
                    ";
        // line 59
        $this->displayBlock('titulo', $context, $blocks);
        // line 60
        echo "                              
                              </div>
                              <div style=\"width:164px;float:left;height: 85px;\">
                                  <ul id=\"menu\">
                                      <li>
                                          <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("_lista_usuarios");
        echo "\">
                                              <span class=\"ui-icon ui-icon-person\"></span>Lista Usuarios
                                          </a>
                                      </li>
                                      <li>
                                          <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("_lista_postulantes");
        echo "\">
                                              <span class=\"ui-icon ui-icon-pencil\"></span>Lista Postulantes
                                          </a>
                                      </li>
                                      <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("_logout");
        echo "\">
                                              <span class=\"ui-icon ui-icon-gear\"></span>
                                              Cerrar Session
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                              <div style=\"clear: left;\"></div>
                         </div>
              ";
        // line 83
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 86
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

    // line 59
    public function block_titulo($context, array $blocks = array())
    {
        // line 60
        echo "                    ";
    }

    // line 83
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 84
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
        return array (  166 => 84,  163 => 83,  159 => 60,  156 => 59,  150 => 12,  146 => 11,  142 => 10,  138 => 9,  133 => 8,  130 => 7,  122 => 86,  120 => 83,  108 => 74,  101 => 70,  93 => 65,  86 => 60,  84 => 59,  51 => 31,  32 => 14,  22 => 1,  494 => 403,  483 => 398,  477 => 395,  471 => 392,  466 => 390,  462 => 389,  458 => 388,  454 => 387,  450 => 386,  443 => 384,  405 => 350,  400 => 348,  397 => 347,  63 => 16,  61 => 15,  53 => 10,  49 => 9,  44 => 7,  40 => 6,  36 => 5,  33 => 4,  30 => 7,);
    }
}
