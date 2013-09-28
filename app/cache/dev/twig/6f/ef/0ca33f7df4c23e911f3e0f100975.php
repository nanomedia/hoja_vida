<?php

/* hojaVidaBundle:update_formularios:reporte.pdf.twig */
class __TwigTemplate_6fef0ca33f7df4c23e911f3e0f100975 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<!DOCTYPE pdf SYSTEM \"%resources%/dtd/doctype.dtd\">
<pdf>
    <dynamic-page  page-size=\"a4\" font-type=\"DejaVuSans\">

        <span id=\"labels\" color=\"#000000\" font-type=\"DejaVuSans\" font-size=\"13px\">
            <stylesheet>
                <complex-attribute name=\"background\" color=\"#ffffff\" />
            </stylesheet>
        </span>          


        <placeholders>
            <header>
                <div height=\"55px\" width=\"100%\" font-size=\"20px\" color=\"black\"  text-align=\"center\" font-style=\"bold\" >
                    HOJA DE VIDA     
                </div>
            </header>
        </placeholders>

        <div color=\"black\" height=\"20px\"  background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
            I.&nbsp;DATOS PERSONALES
        </div>
        <br></br><br></br>
        <span extends=\"labels\">1. Nombre:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"2px\">&nbsp;dfdfdf&nbsp;</span>
        <br></br><br></br>

        <span extends=\"labels\">2. Lugar y fecha de Nacimiento:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"2px\">&nbsp;dfdfdf&nbsp;</span>
        <span font-size=\"17px\" border.size=\"2px\">&nbsp;dfdfdf&nbsp;</span>
        <br></br><br></br>

        <span extends=\"labels\">3. Edad (a la fecha de entrevista):</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"2px\">&nbsp;dfdfdf&nbsp;</span>
        <br></br><br></br>
        <span extends=\"labels\">4. Persona con Discapacidad:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"2px\">&nbsp;dfdfdf&nbsp;</span>
        <br></br><br></br>
        <span extends=\"labels\">5. Certificación de Discapacidad/Resolución CONADIS:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"2px\">&nbsp;dfdfdf&nbsp;</span>
        <br></br><br></br><br></br>




        <div color=\"black\" height=\"20px\" background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
            II.&nbsp;DATOS COMO POSTULANTE
        </div>
        <br></br><br></br>
        <span extends=\"labels\">1. Cargo al que postula:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"2px\">&nbsp;";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPostulante"), "cargoAPostular"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>

        <span extends=\"labels\">2. Condición:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"2px\">&nbsp;";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPostulante"), "condicion"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>

        <span extends=\"labels\">3. Curso de PROFA o Ascenso en la AMAG:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"2px\">&nbsp;";
        // line 60
        if (($this->getAttribute($this->getContext($context, "DatosPostulante"), "tipoCurso") == 1)) {
            echo " PROFA  ";
        } else {
            echo "  Ascenso ";
        }
        echo "&nbsp;</span>
        <span font-size=\"17px\" border.size=\"2px\">&nbsp;NOTA: ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPostulante"), "nota"), "html", null, true);
        echo "  &nbsp;</span>
        <br></br><br></br>

        <span extends=\"labels\">4. Pre-Promedio:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"2px\">&nbsp;";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPostulante"), "prePromedio"), "html", null, true);
        echo "&nbsp;</span>
        <span extends=\"labels\">Orden de Mérito:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"2px\">&nbsp;";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPostulante"), "ordenMerito"), "html", null, true);
        echo "&nbsp;</span>
        <span extends=\"labels\">Plazas Vacantes:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"2px\">&nbsp;";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPostulante"), "plazasVacantes"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>

        <span extends=\"labels\">5. Examen de Conocimientos:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"2px\">&nbsp;";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPostulante"), "examenConocimientos"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>
        <span extends=\"labels\">6. Postulación en Convocatorias anteriores:</span>&nbsp;&nbsp;
        <br></br><br></br>
        <table>
            <tr background.color=\"#cccccc\" text-align=\"center\" font-style=\"bold\">
                <td>CONVOCATORIA</td>
                <td>PLAZA</td>
                <td>ETAPA</td>             
            </tr>
             ";
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConvocatoriasAnteriores"));
        foreach ($context['_seq'] as $context["_key"] => $context["conv"]) {
            // line 84
            echo "            <tr text-align=\"center\">
                <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "conv"), "convocatoria"), "html", null, true);
            echo "</td>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "conv"), "plaza"), "html", null, true);
            echo "</td>
                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "conv"), "etapa"), "html", null, true);
            echo "</td>

            </tr>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "
        </table>
         <br></br><br></br><br></br>
        <div color=\"black\" height=\"20px\" background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
           III.&nbsp;DATOS ACADÉMICOS
        </div>
        <br></br><br></br>
        <span extends=\"labels\">1. Universidad de Procedencia:</span>
        <br></br><br></br>
        <span font-size=\"17px\" border.size=\"2px\">&nbsp;";
        // line 100
        echo twig_escape_filter($this->env, $this->getContext($context, "daUniv"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>
        <span extends=\"labels\">2. Colegio Profesional y fecha de incorporación:</span>
        <br></br><br></br>
        <span font-size=\"17px\" border.size=\"2px\">&nbsp;";
        // line 104
        echo twig_escape_filter($this->env, $this->getContext($context, "daCole"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>
         <span extends=\"labels\">6. Título Profesional en Otras Disciplinas::</span>
        <br></br><br></br>
        <span font-size=\"17px\" border.size=\"2px\">&nbsp;df&nbsp;</span>
        <br></br><br></br>
         <span extends=\"labels\">7. Tesis para obtener el Título Profesional:</span>
        <br></br><br></br>
        <span font-size=\"17px\" border.size=\"2px\">&nbsp;df&nbsp;</span>
        <br></br><br></br>
    </dynamic-page>



</pdf>";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:update_formularios:reporte.pdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 104,  167 => 100,  156 => 91,  146 => 87,  142 => 86,  138 => 85,  135 => 84,  131 => 83,  118 => 73,  111 => 69,  106 => 67,  101 => 65,  94 => 61,  86 => 60,  79 => 56,  72 => 52,  19 => 1,);
    }
}
