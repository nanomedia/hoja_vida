<?php

/* curriculoBundle:index:acceso.html.twig */
class __TwigTemplate_5993ddbf3f4ef975e623d81f1228e096 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <script language=\"JavaScript\" type=text/javascript src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/curriculo/js/jquery-1.8.2.js"), "html", null, true);
        echo "\"></script>
    <script language=\"JavaScript\" type=text/javascript src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/curriculo/js/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.js"), "html", null, true);
        echo "\"></script>
    <script language=\"JavaScript\" type=text/javascript src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/curriculo/js/jquery.numeric.js"), "html", null, true);
        echo "\"></script>

    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/curriculo/css/smoothness/jquery-ui-1.9.2.custom.css\""), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/curriculo/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/curriculo/css/unicorn.main.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/curriculo/css/unicorn.grey.css"), "html", null, true);
        echo "\" class=\"skin-color\" />

    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/curriculo/css/estilo1.css\" type=\"text/css"), "html", null, true);
        echo "\" />
    <!--<script language=\"JavaScript\" type=text/javascript src=\"js/web/login.js\"></script>-->


    <head>
        <title>Intranet CNM</title>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/curriculo/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/curriculo/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/curriculo/css/unicorn.login.css"), "html", null, true);
        echo "\" />

    </head>

    <body>
        


        <div id=\"logo\">
           <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/curriculo/css/img/logo_cnm.png"), "html", null, true);
        echo "\" alt=\"\" />
        </div>
        <div id=\"loginbox\" style=\"height: 236px\">     

            <form id=\"loginform\" class=\"form-vertical\" action=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("_login_check");
        echo "\" method=\"post\">
                <p id=\"textLogin\">Ingrese Usuario y Contraseña para ingresar   </p>
                <div class=\"control-group\">
                    <div class=\"controls\">
                        <div class=\"input-prepend\">
                            <span class=\"add-on\"><i class=\"icon-user\"></i></span><input type=\"text\" placeholder=\"Usuario\" id=\"usuario\" name=\"_username\">
                            <input type=\"hidden\" id=\"nombre_completo\" name=\"nombre_completo\">
                        </div>
                    </div>
                </div>
                <div class=\"control-group\">
                    <div class=\"controls\">
                        <div class=\"input-prepend\">
                            <span class=\"add-on\"><i class=\"icon-lock\"></i></span>
                            <input style=\"\" type=\"password\" placeholder=\"Contraseña\" id=\"contrasenia\" name=\"_password\">
                        </div>
                    </div>
                </div>


                <div class=\"form-actions\">
                    ";
        // line 56
        if ($this->getContext($context, "error")) {
            // line 57
            echo "                        <span style=\"font-weight: bold;color: #ff3333;font-size: 11px;\">Verifique su usuario y/o contraseña.</span><br>
                    ";
        }
        // line 59
        echo "

                    <span class=\"pull-right\" style=\"padding-left: 10px\"><input type=\"submit\" class=\"btn btn-inverse\"></span>
                </div>

            </form>

        </div>

















    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "curriculoBundle:index:acceso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 59,  117 => 57,  115 => 56,  91 => 35,  84 => 31,  72 => 22,  68 => 21,  64 => 20,  53 => 12,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
