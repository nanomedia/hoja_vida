<?php

/* hojaVidaBundle:update_formularios:frm_update_datospersonales.html.twig */
class __TwigTemplate_b68293e3747051d1266d6a8fa7bba479 extends Twig_Template
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


";
    }

    // line 11
    public function block_titulo($context, array $blocks = array())
    {
        // line 12
        echo "    <div>CONDUCTA</div>
    ";
    }

    // line 14
    public function block_cuerpo($context, array $blocks = array())
    {
        echo "   
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getContext($context, "programador"), "html", null, true);
        echo "
    
    <div id=\"tabs1-1\">
    <div class=\"area-registro\">
        <div class=\"tab-title\">DATOS PERSONALES</div>

        <form id=\"frm-datos-personales\" enctype=\"multipart/form-data\">
            <table width=\"65%\" border=\"0\" cellspacing=\"10px\" align=\"center\">
                <tr>
                    <td width=\"37%\"><label class=\"labelText\">Nombres:</label></td>
                    <td>
                        <input type=\"text\" disabled id=\"txt_nombres\" class=\"textbox\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos_personales"), "nombre"), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"txt_nombres\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos_personales"), "nombre"), "html", null, true);
        echo "\">

                    </td>
                </tr>
                <tr>
                    <td><label class=\"labelText\">Apellidos:</label></td>
                    <td>
                        <input type=\"text\" disabled id=\"txt_apellidos\" class=\"textbox\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos_personales"), "apellido"), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"txt_apellidos\" value=\"";
        // line 35
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
                <!--<tr>
                    <td><label class=\"labelText\">Foto:</label></td>
                    <td><input type=\"file\" name=\"file_foto\" id=\"file_foto\"></td>
                </tr>-->

                <tr>
                    <td><label class=\"labelText\">Edad (a la fecha de Entrevista):</label></td>
                    <td><b><label id=\"lbledad\">0</label></b>
                        <input type=\"hidden\" name=\"txt_edad\" class=\"txt_edad\" id=\"txt_edad\" size=\"5\" value=\"0\"></td>
                </tr>
                <tr>
                    <td><label class=\"labelText\">DNI:</label></td>
                    <td>
                        <input type=\"text\" disabled id=\"txt_dni\"  class=\"textbox numeric\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos_personales"), "dni"), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"txt_dni\" value=\"";
        // line 61
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
    </div>
</div>
    
";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:update_formularios:frm_update_datospersonales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 61,  119 => 60,  91 => 35,  87 => 34,  77 => 27,  73 => 26,  59 => 15,  54 => 14,  49 => 12,  46 => 11,  38 => 5,  33 => 4,  30 => 3,);
    }
}
