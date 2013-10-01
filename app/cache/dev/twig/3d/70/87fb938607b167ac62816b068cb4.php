<?php

/* hojaVidaBundle:formularios:frm_datos_personales.html.twig */
class __TwigTemplate_3d7087fb938607b167ac62816b068cb4 extends Twig_Template
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
        echo "<div id=\"tabs1-1\">
    <div class=\"area-registro\">
        <div class=\"tab-title\">DATOS PERSONALES</div>

        <form id=\"frm-datos-personales\" enctype=\"multipart/form-data\">
            <table width=\"65%\" border=\"0\" cellspacing=\"10px\" align=\"center\">
                <tr>
                    <td width=\"37%\"><label class=\"labelText\">Nombres:</label></td>
                    <td>
                        <input type=\"text\" disabled id=\"txt_nombres\" class=\"textbox\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos_personales"), "nombre"), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"txt_nombres\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos_personales"), "nombre"), "html", null, true);
        echo "\">

                    </td>
                </tr>
                <tr>
                    <td><label class=\"labelText\">Apellidos:</label></td>
                    <td>
                        <input type=\"text\" disabled id=\"txt_apellidos\" class=\"textbox\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos_personales"), "apellido"), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"txt_apellidos\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos_personales"), "apellido"), "html", null, true);
        echo "\">
                    </td>
                </tr>
                <tr>
                    <td><label class=\"labelText\">Lugar de nacimiento:</label></td>
                    <td><input type=\"text\" name=\"txt_lugarNac\" id=\"txt_lugarNac\" class=\"textbox\"></td>
                </tr>
                <tr>
                    <td><label class=\"labelText\">Fecha de Nacimiento:</label></td>
                    <td><input type=\"text\" name=\"txt_fechaNac\" id=\"txt_fechaNac\" class=\"datepicker textbox txt_fechaNac\"></td>
                </tr>
                <tr>
                    <td><label class=\"labelText\">Edad (a la fecha de Entrevista):</label></td>
                    <td><b><label id=\"lbledad\">0</label></b>
                        <input type=\"hidden\" name=\"txt_edad\" class=\"txt_edad\" id=\"txt_edad\" size=\"5\" value=\"0\"></td>
                </tr>
                <tr>
                    <td><label class=\"labelText\">Calificaci&oacute;n Curricular:</label></td>
                    <td>
                        <input type=\"text\" name=\"txt_calcur\" class=\"textbox numeric\">
                    </td>
                </tr>
                
                <tr>
                    <td><label class=\"labelText\">DNI:</label></td>
                    <td>
                        <input type=\"text\" disabled id=\"txt_dni\"  class=\"textbox numeric\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos_personales"), "dni"), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"txt_dni\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos_personales"), "dni"), "html", null, true);
        echo "\">
                    </td>
                </tr>
                <tr>
                    <td><label class=\"labelText\">Persona con discapacidad:</label></td>
                    <td>
                        <div id=\"rad-disc\">
                            <input type=\"radio\" id=\"rad-disc1\" class=\"rad_discapacidad\" name=\"rad_discapacidad\" value=\"SI\" /><label for=\"rad-disc1\">SI</label>
                            <input type=\"radio\" id=\"rad-disc2\" class=\"rad_discapacidad\" name=\"rad_discapacidad\" value=\"NO\" checked=\"checked\" /><label for=\"rad-disc2\">NO</label>
                        </div>
                    </td>
                </tr>
                <tr >
                    <td colspan=\"2\" >
                        <div class=\"certi_discapacidad\" style=\"display:none;\">
                            <label class=\"labelText\" >Certificación de Discapacidad/Resolución CONADIS:</label>
                            <input type=\"text\" name=\"txt_certDiscapacidad\" class=\"textbox txt_certDiscapacidad\" >
                        </div>
                    </td>
                </tr>
            </table>
        </form>
        <table width=\"65%\" border=\"0\" cellspacing=\"10px\" align=\"center\">
            <tr>
                <td><label class=\"labelText\">Cargar Foto:</label></td>
                <td>
                    <form action=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("_uploadFoto");
        echo "\" method=\"POST\" id=\"UploadPhoto\" enctype=\"multipart/form-data\"> 
                        <input type=\"hidden\" name=\"txt_dni\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos_personales"), "dni"), "html", null, true);
        echo "\">
                        <input type=\"file\" name=\"foto\" id=\"idfoto\" />
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:formularios:frm_datos_personales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 73,  110 => 72,  81 => 46,  77 => 45,  48 => 19,  44 => 18,  34 => 11,  30 => 10,  19 => 1,);
    }
}
