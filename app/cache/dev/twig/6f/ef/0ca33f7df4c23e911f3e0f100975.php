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
        <placeholders>
            <header>
                <div width=\"100%\" font-size=\"11px\" height=\"37px\" color=\"black\"  text-align=\"right\" font-style=\"bold\" >
                    Dirección de Selección y Nombramiento
                    <hr></hr>
                </div>
                <div height=\"20px\">
                    <page-info offset=\"1\" format=\"page %s for %s\" />
                </div>
            </header>
            <footer>
                <div height=\"21px\" text-align=\"right\" padding-top=\"30px\" padding-right=\"30px\" border.type=\"bottom\" border.size=\"1px\">
                    <page-info offset=\"0\" format=\"Página %s de %s\" />
                </div>
            </footer>
        </placeholders>

        <span id=\"labels\" color=\"#000000\" font-type=\"DejaVuSans\" font-size=\"13px\">
            <stylesheet>
                <complex-attribute name=\"background\" color=\"#ffffff\" />
            </stylesheet>
        </span>  
        <div>
            <div  width=\"530px\"  float=\"left\">
                <div font-size=\"20px\" color=\"black\"  text-align=\"center\" font-style=\"bold\" >
                    Consejo Nacional de la Magistratura
                </div>
                <div font-size=\"12px\" color=\"#000000\"  text-align=\"center\" >
                    Dirección de Selección y Nombramiento
                </div>
                <div margin-top=\"12px\" font-size=\"14px\" color=\"black\"  text-align=\"center\" font-style=\"bold\" >
                    Convocatoria N° 001-2013-SN/CNM
                </div> 
                <div text-decoration=\"underline\" height=\"55px\" font-size=\"20px\" color=\"black\"  text-align=\"center\" font-style=\"bold\" >
                    HOJA DE VIDA
                </div>
            </div>   
            <div width=\"100px\" float=\"left\"><img src=\"web/fotos/";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPersonales"), "foto"), "html", null, true);
        echo "\" height=\"125px\" width=\"100px\"/></div> 
        </div>
        
        <div color=\"black\" height=\"20px\"  background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
            I.&nbsp;DATOS PERSONALES
        </div>
        <br></br><br></br>
        <span extends=\"labels\">1. Nombre:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">
            &nbsp;";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPersonales"), "nombres"), "html", null, true);
        echo ",&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPersonales"), "apellidos"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>

        <span extends=\"labels\">2. Lugar y fecha de Nacimiento:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPersonales"), "lugarNac"), "html", null, true);
        echo "&nbsp;</span>
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPersonales"), "fechaNac"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>

        <span extends=\"labels\">3. Edad (a la fecha de entrevista):</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPersonales"), "edad"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>
        
        <span extends=\"labels\">4. Calificación Curricular:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPersonales"), "calCurricular"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>
        
        <span extends=\"labels\">5. DNI:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPersonales"), "dni"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>
        
        <span extends=\"labels\">6. Persona con Discapacidad:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPersonales"), "discapacidad"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>
        ";
        // line 74
        if (($this->getAttribute($this->getContext($context, "DatosPersonales"), "discapacidad") == "SI")) {
            // line 75
            echo "        <span extends=\"labels\">7. Certificación de Discapacidad/Resolución CONADIS:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPersonales"), "certDiscapacidad"), "html", null, true);
            echo "&nbsp;</span>
        <br></br><br></br><br></br>
        ";
        }
        // line 79
        echo "        <div color=\"black\" height=\"20px\" background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
            II.&nbsp;DATOS COMO POSTULANTE
        </div>
        <br></br><br></br>
        <span extends=\"labels\">1. Cargo al que postula:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPostulante"), "cargoAPostular"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>

        <span extends=\"labels\">2. Condición:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPostulante"), "condicion"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>

        <span extends=\"labels\">3. Curso en la AMAG:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 92
        if (($this->getAttribute($this->getContext($context, "DatosPostulante"), "tipoCurso") == 1)) {
            echo " PROFA  ";
        } else {
            echo "  Ascenso ";
        }
        echo "&nbsp;</span>
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;NOTA: ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPostulante"), "nota"), "html", null, true);
        echo "  &nbsp;</span>
        <br></br><br></br>

        <span extends=\"labels\">4. Pre-Promedio:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPostulante"), "prePromedio"), "html", null, true);
        echo "&nbsp;</span>
        <span extends=\"labels\">Orden de Mérito:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPostulante"), "ordenMerito"), "html", null, true);
        echo "&nbsp;</span>
        <span extends=\"labels\">Plazas Vacantes:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPostulante"), "plazasVacantes"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>

        <span extends=\"labels\">5. Examen de Conocimientos:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPostulante"), "examenConocimientos"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>
        <span extends=\"labels\">6. Postulación en Convocatorias anteriores:</span>&nbsp;&nbsp;
        <br></br><br></br>
        <table>
            <tr background.color=\"#cccccc\" text-align=\"center\" font-style=\"bold\">
                <td height=\"25px\">CONVOCATORIA</td>
                <td>PLAZA</td>
                <td>ETAPA</td>             
            </tr>
             ";
        // line 115
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConvocatoriasAnteriores"));
        foreach ($context['_seq'] as $context["_key"] => $context["conv"]) {
            // line 116
            echo "            <tr text-align=\"center\">
                <td padding=\"10px\">";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "conv"), "convocatoria"), "html", null, true);
            echo "</td>
                <td padding=\"10px\">";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "conv"), "plaza"), "html", null, true);
            echo "</td>
                <td padding=\"10px\">";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "conv"), "etapa"), "html", null, true);
            echo "</td>

            </tr>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "        </table>
        <page-break></page-break>
        <div color=\"black\" height=\"20px\" background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
            III.&nbsp;DATOS ACADÉMICOS
        </div>
        <br></br><br></br>
        <span extends=\"labels\">1. Universidad de Procedencia:</span>
        <br></br><br></br>
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 131
        echo twig_escape_filter($this->env, $this->getContext($context, "daUniv"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>
        <span extends=\"labels\">2. Colegio Profesional y fecha de incorporación:</span>
        <br></br><br></br>
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 135
        echo twig_escape_filter($this->env, $this->getContext($context, "daCole"), "html", null, true);
        echo "&nbsp;</span>
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosAcademicos"), "fechaIncorporacion"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>
        <span extends=\"labels\">3. Doctorado en Derecho:</span>
        <br></br><br></br>
        ";
        // line 140
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "DocDerecho"));
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 141
            echo "        <table font-size=\"13px\">
            <tr >
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">&nbsp;Universidad:</td>
                <td padding=\"10px\">";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doc"), "Universidad"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">Nivel</td>
                <td padding=\"10px\">";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doc"), "Nivel"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">Mención</td>
                <td padding=\"10px\">";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doc"), "Mension"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">Año</td>
                <td padding=\"10px\">";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doc"), "Anio"), "html", null, true);
            echo "</td>
            </tr>

        </table>
        <br></br><br></br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "        <span extends=\"labels\">4. Maestría en Derecho:</span>
        <br></br><br></br>
        ";
        // line 164
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "MaeDerecho"));
        foreach ($context['_seq'] as $context["_key"] => $context["mae"]) {
            // line 165
            echo "        <table font-size=\"13px\">
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">&nbsp;Universidad:</td>
                <td padding=\"10px\">";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mae"), "Universidad"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">Nivel</td>
                <td padding=\"10px\">";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mae"), "Nivel"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">Mención</td>
                <td padding=\"10px\">";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mae"), "Mension"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">Año</td>
                <td padding=\"10px\">";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mae"), "Anio"), "html", null, true);
            echo "</td>
            </tr>
        </table>
        <br></br><br></br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mae'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "        <span extends=\"labels\">5. Doctorado / Maestría en otras Disciplinas:</span>
        <br></br><br></br>
        ";
        // line 187
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "OtrasDisciplinas"));
        foreach ($context['_seq'] as $context["_key"] => $context["otr"]) {
            // line 188
            echo "        <table  font-size=\"13px\">
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">&nbsp;Universidad:</td>
                <td padding=\"10px\">";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "otr"), "Universidad"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">Nivel</td>
                <td padding=\"10px\">";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "otr"), "Nivel"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">Mención</td>
                <td padding=\"10px\">";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "otr"), "Mension"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">Año</td>
                <td padding=\"10px\">";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "otr"), "Anio"), "html", null, true);
            echo "</td>
            </tr>
        </table>
        <br></br><br></br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['otr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "        <span extends=\"labels\">6. Título Profesional en Otras Disciplinas:</span>
        <br></br><br></br>
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;&nbsp;";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosAcademicos"), "tituloOtros"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>
        <span extends=\"labels\">7. Tesis para obtener el Título Profesional:</span>
        <br></br><br></br>
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;&nbsp;";
        // line 214
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosAcademicos"), "tesisTitular"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>
        <span extends=\"labels\">8. Méritos Universitarios:</span>
        <br></br><br></br>
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "MeritosUniv"), "Puesto"), "html", null, true);
        echo "&nbsp;</span>
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 219
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "MeritosUniv"), "Universidad"), "html", null, true);
        echo "&nbsp;</span>
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 220
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "MeritosUniv"), "Anio"), "html", null, true);
        echo "&nbsp;</span>
        <page-break></page-break>
        <div color=\"black\" height=\"20px\" background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
            IV.&nbsp;EXPERIENCIA PROFESIONAL
        </div>
        <br></br><br></br>
        <span extends=\"labels\">1. Documentos Calificados de DESEMPEÑO PROFESIONAL:</span>
        <br></br><br></br>
        <table>
            <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                <td padding=\"10px\" width=\"30px\" text-align=\"center\">N°</td>
                <td padding=\"10px\" width=\"40px\" text-align=\"center\">N° Exp.</td>
                <td padding=\"10px\">Demandante/<br></br>Denunciante/<br></br>Agraviado/<br></br>Solicitante</td>
                <td padding=\"10px\">Demandado/<br></br>Denunciado/<br></br>Agresor/<br></br>Entidad</td>
                <td padding=\"10px\" text-align=\"center\">Materia</td>
                <td padding=\"10px\">Especialidad</td>
                <td padding=\"10px\">1° <br></br>Calificación</td>
                <td padding=\"10px\">2°<br></br>Calificación<br></br>(R.R)</td>
            </tr>
            ";
        // line 239
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "DocDesProfesional"));
        foreach ($context['_seq'] as $context["_key"] => $context["docdes"]) {
            // line 240
            echo "            <tr>
                <td text-align=\"center\" padding=\"10px\">";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docdes"), "Num"), "html", null, true);
            echo "</td>
                <td text-align=\"center\" padding=\"10px\">";
            // line 242
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docdes"), "NumExp"), "html", null, true);
            echo "</td>
                <td padding=\"10px\">";
            // line 243
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docdes"), "Ddas"), "html", null, true);
            echo "</td>
                <td padding=\"10px\">";
            // line 244
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docdes"), "Ddae"), "html", null, true);
            echo "</td>
                <td padding=\"10px\">";
            // line 245
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docdes"), "Materia"), "html", null, true);
            echo "</td>
                <td padding=\"10px\">";
            // line 246
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docdes"), "Especialidad"), "html", null, true);
            echo "</td>
                <td padding=\"10px\" text-align=\"center\">";
            // line 247
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docdes"), "Calificacion1"), "html", null, true);
            echo "</td>
                <td padding=\"10px\" text-align=\"center\">";
            // line 248
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docdes"), "Calificacion2"), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['docdes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "        </table>
        <br></br><br></br>
        <span extends=\"labels\">2. Magistrado Ratificado:</span>

        <b>
        ";
        // line 256
        if (($this->getAttribute($this->getContext($context, "MagistradoRatificado"), "respuesta1") == 0)) {
            echo "NO,
        ";
        } elseif (($this->getAttribute($this->getContext($context, "MagistradoRatificado"), "respuesta1") == 1)) {
            // line 257
            echo "SI,
        ";
        } elseif (($this->getAttribute($this->getContext($context, "MagistradoRatificado"), "respuesta1") == 2)) {
            // line 258
            echo "Aun no ha sido objeto de proceso de ratificación,
        ";
        } elseif (($this->getAttribute($this->getContext($context, "MagistradoRatificado"), "respuesta1") == 3)) {
            // line 259
            echo "En convocatoria,
        ";
        }
        // line 260
        echo " </b>&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "MagistradoRatificado"), "respuesta2"), "html", null, true);
        echo "&nbsp;
            <br></br><br></br>
        ";
        // line 262
        if ((($this->getAttribute($this->getContext($context, "MagistradoRatificado"), "respuesta1") == 0) || ($this->getAttribute($this->getContext($context, "MagistradoRatificado"), "respuesta1") == 1))) {
            // line 263
            echo "            <b> Resolución N°</b> <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "MagistradoRatificado"), "resolucion"), "html", null, true);
            echo "</span>
            <b> de fecha </b><span font-size=\"17px\" border.size=\"1px\">&nbsp;";
            // line 264
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "MagistradoRatificado"), "fechaRes"), "html", null, true);
            echo "</span>
        ";
        }
        // line 266
        echo "
            <span font-size=\"17px\" border.size=\"1px\">";
        // line 267
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "MagistradoRatificado"), "respuesta3"), "html", null, true);
        echo "</span>
            <br></br><br></br>
            <span extends=\"labels\">3. Calidad de sus Decisiones Judiciales y Fiscales<br></br>
                (En caso de Magistrados Ratificados o No Ratificados):</span>
            <br></br><br></br>
            <table>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\" width=\"30px\" text-align=\"center\">N°</td>
                    <td padding=\"10px\" width=\"30px\" text-align=\"center\">N° Exp.</td>
                    <td padding=\"10px\">Tipo de <br></br>Resolución</td>
                    <td padding=\"10px\">Fecha<br></br> de Res.</td>
                    <td padding=\"10px\">Demandante/<br></br>Denunciante/<br></br>Agraviado</td>
                    <td padding=\"10px\">Demandado/<br></br>Denunciado/<br></br>Agresor</td>
                    <td padding=\"10px\">Materia</td>
                    <td padding=\"10px\">Especialidad</td>
                    <td padding=\"10px\">Nota</td>
                </tr>
            ";
        // line 284
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "CalJudFis"));
        foreach ($context['_seq'] as $context["_key"] => $context["cal"]) {
            // line 285
            echo "                <tr>
                    <td text-align=\"center\" padding=\"10px\">";
            // line 286
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cal"), "Num"), "html", null, true);
            echo "</td>
                    <td text-align=\"center\" padding=\"10px\">";
            // line 287
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cal"), "NumExp"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 288
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cal"), "TipResolucion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 289
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cal"), "FechaRes"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 290
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cal"), "Ddagraviado"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 291
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cal"), "Ddagresor"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 292
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cal"), "Materia"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 293
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cal"), "Especialidad"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 294
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cal"), "Nota"), "html", null, true);
            echo "</td>
                </tr>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        echo "            </table>
            <br></br><br></br>
            <span extends=\"labels\">4. SITUACIÓN LABORAL ACTUAL:</span>
            <br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 301
        echo twig_escape_filter($this->env, $this->getContext($context, "SitLaboral"), "html", null, true);
        echo "</div>
            <br></br><br></br>
            <span extends=\"labels\">(Tres últimas)</span>
            <br></br><br></br>
                ";
        // line 305
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "DetSituacionLaboral"));
        foreach ($context['_seq'] as $context["_key"] => $context["detsit"]) {
            // line 306
            echo "            <table>
                <tr>
                    <td width=\"150px\" padding=\"10px\">Centro de Trabajo:</td>
                    <td padding=\"10px\">";
            // line 309
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "detsit"), "CentroTrabajo"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td padding=\"10px\">Cargo:</td>
                    <td padding=\"10px\">";
            // line 313
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "detsit"), "Cargo"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td padding=\"10px\">Periodo:</td>
                    <td padding=\"10px\">";
            // line 317
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "detsit"), "Periodo"), "html", null, true);
            echo "</td>
                </tr>
            </table>
            <br></br><br></br><br></br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detsit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 322
        echo "            <span extends=\"labels\">5. DOCENCIA UNIVERSITARIA</span>
            <br></br><br></br>
                ";
        // line 324
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "DocenciaUniversitaria"));
        foreach ($context['_seq'] as $context["_key"] => $context["docuni"]) {
            // line 325
            echo "            <table>
                <tr>
                    <td width=\"150px\" padding=\"10px\">Universidad:</td>
                    <td padding=\"10px\">";
            // line 328
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docuni"), "Universidad"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td padding=\"10px\">Facultad:</td>
                    <td padding=\"10px\">";
            // line 332
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docuni"), "Facultad"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td padding=\"10px\">Condición:</td>
                    <td padding=\"10px\">";
            // line 336
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docuni"), "Condicion"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td padding=\"10px\">Categoria:</td>
                    <td padding=\"10px\">";
            // line 340
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docuni"), "Categoria"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td padding=\"10px\">Cursos:</td>
                    <td padding=\"10px\">";
            // line 344
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docuni"), "Cursos"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td padding=\"10px\">Periodo:</td>
                    <td padding=\"10px\">";
            // line 348
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docuni"), "Periodo"), "html", null, true);
            echo "</td>
                </tr>
            </table> <br></br><br></br><br></br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['docuni'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        echo "
            <span extends=\"labels\">6. PUBLICACIONES:</span><br></br><br></br><br></br>
            <span extends=\"labels\">6.1. Libros o Textos Universitarios</span>
            <br></br><br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 356
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Publicaciones"), "librosTextosUniv"), "html", null, true);
        echo "</div>
            <br></br><br></br><br></br>
            <span extends=\"labels\">6.2. Investigaciones Jurídicas Doctrinarias o de Campo</span>
            <br></br><br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 360
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Publicaciones"), "invJuridicas"), "html", null, true);
        echo "</div>
            <br></br><br></br><br></br>
            <span extends=\"labels\">6.3. Ensayos en materia Jurídica</span>
            <br></br><br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 364
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Publicaciones"), "ensayosJuridico"), "html", null, true);
        echo "</div>
            <br></br><br></br><br></br>
            <span extends=\"labels\">6.4. Artículos en materia Jurídica</span>
            <br></br><br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 368
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Publicaciones"), "articulosJuridicos"), "html", null, true);
        echo "</div>
            <br></br><br></br><br></br>
            <span extends=\"labels\">6.5. Artículos en materia No Jurídica</span>
            <br></br><br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 372
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Publicaciones"), "articulosNoJuridicos"), "html", null, true);
        echo "</div>
            <br></br><br></br><br></br>
            <span extends=\"labels\">7. Producción Jurisdiccional o Fiscal:&nbsp;</span><b>";
        // line 374
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ProdJurFiscal"), "Respuesta"), "html", null, true);
        echo "</b><br></br><br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 375
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ProdJurFiscal"), "DetRespuesta"), "html", null, true);
        echo "</div>
            <br></br><br></br><br></br>
            <span extends=\"labels\"> 8. Licencias Otorgadas (de los últimos cinco años)</span>
            <br></br><br></br><br></br>
            <table>
                <tr >
                    <td padding=\"10px\" width=\"50px\" text-align=\"center\">AÑO</td>
                    <td padding=\"10px\" text-align=\"center\">MOTIVO</td>
                    <td padding=\"10px\" width=\"50px\" text-align=\"center\">DÍAS</td>
                </tr>
                ";
        // line 385
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "LicenciasOtorgadas"));
        foreach ($context['_seq'] as $context["_key"] => $context["lic"]) {
            // line 386
            echo "                <tr >
                    <td text-align=\"center\" padding=\"10px\">";
            // line 387
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lic"), "Anio"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 388
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lic"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 389
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lic"), "Dias"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 392
        echo "                <tr>
                    <td padding=\"10px\" colspan=\"2\"><div text-align=\"right\">TOTAL:</div></td>
                    <td padding=\"10px\" text-align=\"center\">";
        // line 394
        echo twig_escape_filter($this->env, $this->getContext($context, "SumDias"), "html", null, true);
        echo "</td>
                </tr>
            </table>          
            <br></br><br></br><br></br>
            <page-break></page-break>
            <div color=\"black\" height=\"20px\" background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
                V. &nbsp;CONDUCTA
            </div>      
            <br></br><br></br><br></br>
            <span extends=\"labels\">1. ANTECEDENTES PENALES, JUDICIALES Y POLICIALES</span>
            <br></br><br></br><br></br>
            <table>
                <tr>
                    <td width=\"140px\" padding=\"10px\">Antecedentes Penales</td>
                    <td padding=\"10px\">";
        // line 408
        echo twig_escape_filter($this->env, $this->getContext($context, "anteA"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td padding=\"10px\">Antecedente Judiciales</td>
                    <td padding=\"10px\">";
        // line 412
        echo twig_escape_filter($this->env, $this->getContext($context, "anteB"), "html", null, true);
        echo "</td>
                </tr>

                <tr>
                    <td padding=\"10px\">Antecedente Policiales</td>
                    <td padding=\"10px\">";
        // line 417
        echo twig_escape_filter($this->env, $this->getContext($context, "anteC"), "html", null, true);
        echo "</td>
                </tr>

            </table>
            <page-break></page-break>
            <span extends=\"labels\">2. PROCESOS JUDICIALES</span>
            <br></br><br></br><br></br>
            <span extends=\"labels\">PROCESOS JUDICIALES CIVILES, PENALES, DE FAMILIA, LABORALES COMO DEMANDANTE / DENUNCIANTE</span>
            <br></br><br></br><br></br>
            <table>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\">Expediente</td>
                    <td padding=\"10px\">Órgano<br></br>Jurisdiccional</td>
                    <td padding=\"10px\">Demandado/<br></br>Denunciado</td>
                    <td padding=\"10px\">Materia</td>
                    <td padding=\"10px\">Estado</td>
                </tr>
                ";
        // line 434
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_rep"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 435
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 436
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "expediente"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 437
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "organo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 438
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "demandadoagresor"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 439
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "materia"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 440
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "estado"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 443
        echo "            </table>
            <br></br><br></br><br></br>
            <span extends=\"labels\">COMO DEMANDADO / DENUNCIADO</span>
            <br></br><br></br><br></br>

            <table>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\">Expediente</td>
                    <td padding=\"10px\">Órgano<br></br>Jurisdiccional</td>
                    <td padding=\"10px\">Demandado/<br></br>Denunciado</td>
                    <td padding=\"10px\">Materia</td>
                    <td padding=\"10px\">Estado</td>
                </tr>
                ";
        // line 456
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repB"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 457
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 458
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "expediente"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 459
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "organo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 460
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "demandadoagresor"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 461
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "materia"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 462
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "estado"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 465
        echo "            </table>
            <br></br><br></br><br></br>
            <span extends=\"labels\">COMO AGRAVIADO</span>
            <br></br><br></br><br></br>
            <table>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\">Expediente</td>
                    <td padding=\"10px\">Órgano<br></br>Jurisdiccional</td>
                    <td padding=\"10px\">Agresor</td>
                    <td padding=\"10px\">Materia</td>
                    <td padding=\"10px\">Estado</td>
                </tr>
                ";
        // line 477
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repC"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 478
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 479
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "expediente"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 480
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "organo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 481
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "demandadoagresor"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 482
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "materia"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 483
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "estado"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 486
        echo "            </table>
            <br></br><br></br><br></br>
            <span extends=\"labels\">
                3. PROCEDIMIENTOS ADMINISTRATIVOS EN LA ADMINISTRACIÓN PÚBLICA EN GENERAL
            </span>
            <br></br><br></br><br></br>
            <table>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\">Institución</td>
                    <td padding=\"10px\">Resolución</td>
                    <td padding=\"10px\">Sanción</td>
                    <td padding=\"10px\">Estado</td>
                </tr>
                ";
        // line 499
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repD"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 500
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 501
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "idinstitucion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 502
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "resolucion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 503
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "sancion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 504
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "estado"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 507
        echo "            </table>
            <br></br><br></br><br></br>
            <span extends=\"labels\">
                4. SANCIONES ADMINISTRATIVAS EN LA ADMINISTRACIÓN PÚBLICA GENERAL
            </span>
            <br></br><br></br><br></br>
            <table>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\">Institución</td>
                    <td padding=\"10px\">Resolución</td>
                    <td padding=\"10px\">Sanción</td>
                </tr>
                    ";
        // line 519
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repE"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 520
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 521
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "idinstitucion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 522
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "resolucion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 523
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "sancion"), "html", null, true);
            echo "</td>
                </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 526
        echo "            </table>
            <br></br><br></br><br></br>
            <span extends=\"labels\">
                5. MEDIDAS DISCIPLINARIAS EN EL PODER JUDICIAL Y MINISTERIO PÚBLICO
            </span>
            <br></br><br></br><br></br>
            <table>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\">Institución</td>
                    <td padding=\"10px\">Sanción</td>
                    <td padding=\"10px\">Expediente, Resolución y Motivo</td>
                </tr>
                ";
        // line 538
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repF"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 539
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 540
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "idinstitucion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 541
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "sancion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 542
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "resolucion"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 545
        echo "            </table>
            <page-break></page-break>
            <span extends=\"labels\">
                6. EN EL PODER JUDICIAL
            </span>
            <br></br><br></br><br></br>
            <span background.color=\"#000000\" font-style=\"bold\"  color=\"#ffffff\">&nbsp;EN TRÁMITE&nbsp;</span>
            <br></br><br></br><br></br>
            <span extends=\"labels\">
                1. PROCESOS DISCIPLINARIOS
            </span>
            <br></br><br></br><br></br>
            <table>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\">Expediente</td>
                    <td padding=\"10px\">Motivo</td>
                    <td padding=\"10px\">Estado</td>
                </tr>
                ";
        // line 563
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFA"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 564
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 565
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "expediente"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 566
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 567
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "estadoproc"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 570
        echo "            </table>
            <br></br><br></br><br></br>
            <span extends=\"labels\">
                2. QUEJAS, VISITAS E INVESTIGACIONES ANTE LA OCMA / ODECMA
            </span>
            <br></br><br></br><br></br>
            <table>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\" width=\"30px\" text-align=\"center\">Nº</td>
                    <td padding=\"10px\">Quejas, Visitas e<br></br>Investigaciones</td>
                    <td padding=\"10px\">Motivo</td>
                    <td padding=\"10px\">Estado</td>
                </tr>
                ";
        // line 583
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFB"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 584
            echo "                <tr>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 585
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Num"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 586
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Quejas"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 587
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 588
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EstadoProc"), "html", null, true);
            echo "</td>

                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 592
        echo "            </table>
            <br></br><br></br><br></br>
            <span extends=\"labels\">
                3. INVESTIGACIONES PRELIMINARES
            </span>
            <br></br><br></br><br></br>
            <table>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\" width=\"30px\" text-align=\"center\">Nº</td>
                    <td padding=\"10px\">Motivo</td>
                    <td padding=\"10px\">Estado</td>
                </tr>
                ";
        // line 604
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFC"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 605
            echo "                <tr>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 606
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Num"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 607
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 608
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EstadoProc"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 611
        echo "            </table>
            <page-break></page-break>

            <span background.color=\"#000000\" font-style=\"bold\"  color=\"#ffffff\">&nbsp;CONCLUIDAS&nbsp;</span>
            <br></br><br></br><br></br>

            <span extends=\"labels\">
                1. PROCESOS DISCIPLINARIOS EN EL PODER JUDICIAL
            </span>
            <br></br><br></br><br></br>
            <table>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\">Institución</td>
                    <td padding=\"10px\">Expediente</td>
                    <td padding=\"10px\">Motivo</td>
                    <td padding=\"10px\">Estado</td>                    
                </tr>
                ";
        // line 628
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFD"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 629
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 630
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "IdInstitucion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 631
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Expediente"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 632
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 633
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EstadoProc"), "html", null, true);
            echo "</td>                    
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 636
        echo "            </table>
            <br></br><br></br><br></br>
            <span extends=\"labels\">
                2. QUEJAS, VISITAS E INVESTIGACIONES ANTE LA OCMA / ODECMA
            </span>
            <br></br><br></br><br></br>
            <table>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\" width=\"30px\" text-align=\"center\">Nº</td>
                    <td padding=\"10px\">Quejas, Visitas e <br></br>Investigaciones</td>
                    <td padding=\"10px\">Motivo</td>
                    <td padding=\"10px\">Estado</td>                    
                </tr>
                ";
        // line 649
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFE"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 650
            echo "                <tr>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 651
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Num"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 652
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Quejas"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 653
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 654
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EstadoProc"), "html", null, true);
            echo "</td>                    
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 657
        echo "            </table>
            <br></br><br></br><br></br>
            <span extends=\"labels\">
                3. INVESTIGACIONES PRELIMINARES
            </span>
            <br></br><br></br><br></br>
            <table>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\" width=\"30px\" text-align=\"center\">Nº</td>
                    <td padding=\"10px\">Motivo</td>
                    <td padding=\"10px\">Estado</td>                    
                </tr>
                ";
        // line 669
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFF"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 670
            echo "                <tr>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 671
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Num"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 672
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 673
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EstadoProc"), "html", null, true);
            echo "</td>                    
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 676
        echo "            </table>
            <page-break></page-break>
            <span extends=\"labels\">
                7. EN EL MINISTERIO PÚBLICO
            </span>
            <br></br><br></br><br></br>
            <span background.color=\"#000000\" font-style=\"bold\"  color=\"#ffffff\">&nbsp;EN TRÁMITE&nbsp;</span>
            <br></br><br></br><br></br>
            <span extends=\"labels\">
                1. PROCESOS DISCIPLINARIOS
            </span>
            <br></br><br></br><br></br>
            <table>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\">Expediente</td>
                    <td padding=\"10px\">Motivo</td>
                    <td padding=\"10px\">Estado</td>                    
                </tr>
                ";
        // line 694
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFA2"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 695
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 696
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Expediente"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 697
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 698
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EstadoProc"), "html", null, true);
            echo "</td>                    
                </tr>                
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 701
        echo "            </table>
            <br></br><br></br><br></br>
            <span extends=\"labels\">
                2. DENUNCIAS Y/O QUEJAS ANTE LA FISCALÍA SUPREMA DE CONTROL INTERNO:
            </span>
            <br></br><br></br><br></br>
            <table>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\" width=\"30px\" text-align=\"center\">Nº</td>
                    <td padding=\"10px\">Denuncia y/o Queja</td>
                    <td padding=\"10px\">Motivo</td>
                    <td padding=\"10px\">Estado</td>                    
                </tr>
                ";
        // line 714
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFB2"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 715
            echo "                <tr>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 716
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Num"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 717
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Quejas"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 718
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 719
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EstadoProc"), "html", null, true);
            echo "</td>                    
                </tr>                
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 722
        echo "            </table>

            <br></br><br></br><br></br>
            <span extends=\"labels\">
                3. INVESTIGACIONES PRELIMINARES:
            </span>
            <br></br><br></br><br></br>
            <table>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\" width=\"30px\" text-align=\"center\">Nº</td>
                    <td padding=\"10px\">Motivo</td>
                    <td padding=\"10px\">Estado</td>                    
                </tr>
                ";
        // line 735
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFC2"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 736
            echo "                <tr>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 737
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Num"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 738
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 739
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EstadoProc"), "html", null, true);
            echo "</td>  
                </tr>     
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 742
        echo "            </table>
            <page-break></page-break>
            <span background.color=\"#000000\" font-style=\"bold\"  color=\"#ffffff\">&nbsp;CONCLUIDAS&nbsp;</span>
            <br></br><br></br><br></br>
            <span extends=\"labels\">
                1. PROCESOS DISCIPLINARIOS EN EL MINISTERIO PÚBLICO:
            </span>
            <br></br><br></br><br></br>
            <table>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\" text-align=\"center\">Institución</td>
                    <td padding=\"10px\">Expediente</td>
                    <td padding=\"10px\">Motivo</td>
                    <td padding=\"10px\">Estado</td>                    
                </tr>
                ";
        // line 757
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFD2"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 758
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 759
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "IdInstitucion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 760
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Expediente"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 761
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 762
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EstadoProc"), "html", null, true);
            echo "</td>                    
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 765
        echo "            </table>
            <br></br><br></br><br></br>
            <span extends=\"labels\">
                2. DENUNCIAS Y/O QUEJAS ANTE LA FISCALÍA SUPREMA DE CONTROL INTERNO:
            </span>
            <br></br><br></br><br></br>
            <table>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\" width=\"30px\" text-align=\"center\">Nº</td>
                    <td padding=\"10px\">Quejas, Visitas e <br></br>Investigaciones</td>
                    <td padding=\"10px\">Motivo</td>
                    <td padding=\"10px\">Estado</td>                    
                </tr>
                ";
        // line 778
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFE2"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 779
            echo "                <tr>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 780
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Num"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 781
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Quejas"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 782
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 783
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EstadoProc"), "html", null, true);
            echo "</td>                    
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 786
        echo "            </table>

            <page-break></page-break>
            <div color=\"black\" height=\"20px\"  background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
                VI.&nbsp;INFORMACIÓN DE LA OFICINA DE REGISTRO DE JUECES Y FISCALES DEL CNM
            </div>
            <br></br><br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 793
        echo twig_escape_filter($this->env, $this->getContext($context, "info1"), "html", null, true);
        echo "</div>

            <br></br><br></br><br></br>
            <div color=\"black\" height=\"20px\"  background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
                VII.&nbsp;INFORMACIÓN DE LA DIRECCIÓN DE PROCESOS DISCIPLINARIOS DEL CNM
            </div>
            <br></br><br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 800
        echo twig_escape_filter($this->env, $this->getContext($context, "info2"), "html", null, true);
        echo "</div>
            <br></br><br></br><br></br>

            <div color=\"black\" height=\"20px\"  background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
                VIII.&nbsp;INFORMACIÓN DEL COLEGIO DE ABOGADOS
            </div>
            <br></br><br></br><br></br>
            <span extends=\"labels\">
                1. DENUNCIAS, QUEJAS, PROCESOS DISCIPLINARIOS Y SANCIONES
            </span>
            <br></br><br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 811
        echo twig_escape_filter($this->env, $this->getContext($context, "info3"), "html", null, true);
        echo "</div>
            <page-break></page-break>

            <div color=\"black\" height=\"20px\"  background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
                X. INFORMACIÓN PATRIMONIAL (ECONÓMICA E INMOBILIARIA)
            </div>

            <br></br><br></br><br></br>
            <span extends=\"labels\">
                1. Cuadro de Declaraciones Juradas de Bienes y Rentas
            </span>
            <br></br><br></br><br></br>
            <table>
                <tr>
                    <td colspan=\"3\" padding=\"10px\" text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">INGRESOS</td>
                </tr>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\" width=\"40px\">Año</td>
                    <td padding=\"10px\">Descripción</td>
                    <td padding=\"10px\" width=\"45px\">Valor</td>                    
                </tr>
                ";
        // line 832
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "Ingresos1"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 833
            echo "                <tr>
                    <td text-align=\"center\" padding=\"10px\">";
            // line 834
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "anio"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 835
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "descripcion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 836
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "valor"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 839
        echo "                <tr>
                    <td padding=\"10px\" colspan=\"2\" text-align=\"right\">TOTAL:</td>
                    <td padding=\"10px\" text-align=\"center\">";
        // line 841
        echo twig_escape_filter($this->env, $this->getContext($context, "sum1"), "html", null, true);
        echo "</td>
                </tr>
            </table>

            <br></br><br></br><br></br>

            <table>
                <tr>
                    <td colspan=\"2\" padding=\"10px\" text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">OTROS INGRESOS</td>
                </tr>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\" width=\"40px\">Ingresos del declarante y de la sociedad de gananciales</td>
                    <td padding=\"10px\" width=\"45px\">Valor</td>                    
                </tr>
                ";
        // line 855
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "otrosingresos"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 856
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 857
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Descripcion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" width=\"40px\" text-align=\"center\">";
            // line 858
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Monto"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 861
        echo "                <tr>
                    <td padding=\"10px\" text-align=\"right\">TOTAL:</td>
                    <td padding=\"10px\" text-align=\"center\">";
        // line 863
        echo twig_escape_filter($this->env, $this->getContext($context, "sum2"), "html", null, true);
        echo "</td>
                </tr>
            </table>

            <page-break></page-break>
            <span extends=\"labels\">
                2. Cuadro de su Patrimonio Inmobiliario
            </span>
            <br></br><br></br><br></br>
            <table>
                <tr>
                    <td colspan=\"4\" padding=\"10px\" text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                        Bienes inmuebles: 
                    </td>
                </tr>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\" >Tipo de Bien</td>
                    <td padding=\"10px\">Ubicación</td>
                    <td padding=\"10px\">Fecha de Adquisición</td>
                    <td padding=\"10px\">Valor de <br></br> Autovalúo S/.</td>
                </tr>
                ";
        // line 884
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 885
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 886
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "TipoBien"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 887
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Ubicacion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 888
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Fecha"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 889
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Monto"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 892
        echo "                <tr>
                    <td colspan=\"3\" padding=\"10px\" text-align=\"right\">TOTAL:</td>
                    <td padding=\"10px\" text-align=\"center\">";
        // line 894
        echo twig_escape_filter($this->env, $this->getContext($context, "sum3"), "html", null, true);
        echo "</td>
                </tr>
            </table>

            <br></br><br></br><br></br>
            <table>
                <tr>
                    <td colspan=\"4\" padding=\"10px\" text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                        Bienes muebles: 
                    </td>
                </tr>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\" >Tipo de Bien</td>
                    <td padding=\"10px\">Ubicación</td>
                    <td padding=\"10px\">Fecha de Adquisición</td>
                    <td padding=\"10px\">Valor de <br></br> Autovalúo S/.</td>
                </tr>
                ";
        // line 911
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpo"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 912
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 913
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "TipoBien"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 914
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Ubicacion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 915
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Fecha"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 916
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Monto"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 919
        echo "                <tr>
                    <td colspan=\"3\" padding=\"10px\" text-align=\"right\">TOTAL:</td>
                    <td padding=\"10px\" text-align=\"center\">";
        // line 921
        echo twig_escape_filter($this->env, $this->getContext($context, "sum4"), "html", null, true);
        echo "</td>
                </tr>
            </table>
            <br></br><br></br><br></br>
            <table>
                <tr>
                    <td colspan=\"2\" padding=\"10px\" text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                        Otros Bienes: 
                    </td>
                </tr>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\">Detallar</td>
                    <td padding=\"10px\" width=\"40px\">Valor</td>
                </tr>
                ";
        // line 935
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpatri"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 936
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 937
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Descripcion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 938
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Valor"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 941
        echo "                <tr>
                    <td padding=\"10px\" text-align=\"right\">TOTAL:</td>
                    <td padding=\"10px\" text-align=\"center\">";
        // line 943
        echo twig_escape_filter($this->env, $this->getContext($context, "sum5"), "html", null, true);
        echo "</td>
                </tr>
            </table>
            <br></br><br></br><br></br>
            <table>
                <tr>
                    <td colspan=\"3\" padding=\"10px\" text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                        Sistema Financiero
                    </td>
                </tr>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\">Clase</td>
                    <td padding=\"10px\">Entidad o Tercero</td>
                    <td padding=\"10px\">Monto S/.</td>
                </tr>

                ";
        // line 959
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "Financi"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 960
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 961
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Clase"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 962
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Entidad"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 963
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Valor"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 966
        echo "
                <tr>
                    <td colspan=\"2\" padding=\"10px\" text-align=\"right\">TOTAL:</td>
                    <td padding=\"10px\" text-align=\"center\">";
        // line 969
        echo twig_escape_filter($this->env, $this->getContext($context, "sum6"), "html", null, true);
        echo "</td>
                </tr>
            </table>
            <br></br><br></br><br></br>
            <table>
                <tr>
                    <td colspan=\"3\" padding=\"10px\" text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                        Acreencias y Obligaciones a su cargo
                    </td>
                </tr>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\" >Naturaleza de la deuda</td>
                    <td padding=\"10px\">Entidad o Tercero</td>
                    <td padding=\"10px\">Monto S/.</td>
                </tr>
                ";
        // line 984
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "Acre_array"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 985
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 986
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Naturaleza"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 987
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Entidad"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 988
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Valor"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 991
        echo "
                <tr>
                    <td colspan=\"2\" padding=\"10px\" text-align=\"right\">TOTAL:</td>
                    <td padding=\"10px\" text-align=\"center\">";
        // line 994
        echo twig_escape_filter($this->env, $this->getContext($context, "sum7"), "html", null, true);
        echo "</td>
                </tr>
            </table>
            <page-break></page-break>
            <div color=\"black\" height=\"20px\"  background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
                XI. MOVIMIENTO MIGRATORIO
            </div>
            <br></br><br></br><br></br>
            <table>
                <tr text-align=\"center\" background.color=\"#cccccc\" font-style=\"bold\">
                    <td padding=\"10px\">Movimiento</td>
                    <td padding=\"10px\">Fecha</td>
                    <td padding=\"10px\">Destino / Procedencia</td>
                </tr>
                ";
        // line 1008
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dataMovMig"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1009
            echo "                <tr>
                    <td text-align=\"center\" padding=\"10px\">";
            // line 1010
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Tipo"), "html", null, true);
            echo "</td>
                    <td text-align=\"center\" padding=\"10px\">";
            // line 1011
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Fecha"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 1012
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "DestinoProcedencia"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1015
        echo "            </table>
            <page-break></page-break>
            <div color=\"black\" height=\"20px\"  background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
                XII.INFORMACIÓN DE LA CÁMARA DE COMERCIO, INFOCORP Y SBS
            </div>
            <br></br><br></br><br></br>
            <table>
                <tr>
                    <td text-align=\"center\" width=\"120px\" padding=\"10px\">Cámara de Comercio</td>
                    <td padding=\"10px\">";
        // line 1024
        echo twig_escape_filter($this->env, $this->getContext($context, "info21"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td text-align=\"center\" padding=\"10px\">Infocorp</td>
                    <td padding=\"10px\">";
        // line 1028
        echo twig_escape_filter($this->env, $this->getContext($context, "info22"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td text-align=\"center\" padding=\"10px\">SBS</td>
                    <td padding=\"10px\">";
        // line 1032
        echo twig_escape_filter($this->env, $this->getContext($context, "info23"), "html", null, true);
        echo "</td>
                </tr>
            </table>
            <br></br><br></br><br></br>
            <div color=\"black\" height=\"20px\"  background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
                XIII. INFORMACIÓN DEL REGISTRO DE DEUDORES ALIMENTARIOS MOROSOS - REDAM
            </div>
            <br></br><br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 1040
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubro4"), "DeudoresAlimentarios"), "html", null, true);
        echo "</div>

            <br></br><br></br><br></br>
            <div color=\"black\" height=\"20px\"  background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
                XIV. INFORMACIÓN COMPLEMENTARIA
            </div>
            <br></br><br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 1047
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubro4"), "Complementaria"), "html", null, true);
        echo "</div>
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
        return array (  1997 => 1047,  1987 => 1040,  1976 => 1032,  1969 => 1028,  1962 => 1024,  1951 => 1015,  1942 => 1012,  1938 => 1011,  1934 => 1010,  1931 => 1009,  1927 => 1008,  1910 => 994,  1905 => 991,  1896 => 988,  1892 => 987,  1888 => 986,  1885 => 985,  1881 => 984,  1863 => 969,  1858 => 966,  1849 => 963,  1845 => 962,  1841 => 961,  1838 => 960,  1834 => 959,  1815 => 943,  1811 => 941,  1802 => 938,  1798 => 937,  1795 => 936,  1791 => 935,  1774 => 921,  1770 => 919,  1761 => 916,  1757 => 915,  1753 => 914,  1749 => 913,  1746 => 912,  1742 => 911,  1722 => 894,  1718 => 892,  1709 => 889,  1705 => 888,  1701 => 887,  1697 => 886,  1694 => 885,  1690 => 884,  1666 => 863,  1662 => 861,  1653 => 858,  1649 => 857,  1646 => 856,  1642 => 855,  1625 => 841,  1621 => 839,  1612 => 836,  1608 => 835,  1604 => 834,  1601 => 833,  1597 => 832,  1573 => 811,  1559 => 800,  1549 => 793,  1540 => 786,  1531 => 783,  1527 => 782,  1523 => 781,  1519 => 780,  1516 => 779,  1512 => 778,  1497 => 765,  1488 => 762,  1484 => 761,  1480 => 760,  1476 => 759,  1473 => 758,  1469 => 757,  1452 => 742,  1443 => 739,  1439 => 738,  1435 => 737,  1432 => 736,  1428 => 735,  1413 => 722,  1404 => 719,  1400 => 718,  1396 => 717,  1392 => 716,  1389 => 715,  1385 => 714,  1370 => 701,  1361 => 698,  1357 => 697,  1353 => 696,  1350 => 695,  1346 => 694,  1326 => 676,  1317 => 673,  1313 => 672,  1309 => 671,  1306 => 670,  1302 => 669,  1288 => 657,  1279 => 654,  1275 => 653,  1271 => 652,  1267 => 651,  1264 => 650,  1260 => 649,  1245 => 636,  1236 => 633,  1232 => 632,  1228 => 631,  1224 => 630,  1221 => 629,  1217 => 628,  1198 => 611,  1189 => 608,  1185 => 607,  1181 => 606,  1178 => 605,  1174 => 604,  1160 => 592,  1150 => 588,  1146 => 587,  1142 => 586,  1138 => 585,  1135 => 584,  1131 => 583,  1116 => 570,  1107 => 567,  1103 => 566,  1099 => 565,  1096 => 564,  1092 => 563,  1072 => 545,  1063 => 542,  1059 => 541,  1055 => 540,  1052 => 539,  1048 => 538,  1034 => 526,  1025 => 523,  1021 => 522,  1017 => 521,  1014 => 520,  1010 => 519,  996 => 507,  987 => 504,  983 => 503,  979 => 502,  975 => 501,  972 => 500,  968 => 499,  953 => 486,  944 => 483,  940 => 482,  936 => 481,  932 => 480,  928 => 479,  925 => 478,  921 => 477,  907 => 465,  898 => 462,  894 => 461,  890 => 460,  886 => 459,  882 => 458,  879 => 457,  875 => 456,  860 => 443,  851 => 440,  847 => 439,  843 => 438,  839 => 437,  835 => 436,  832 => 435,  828 => 434,  808 => 417,  800 => 412,  793 => 408,  776 => 394,  772 => 392,  763 => 389,  759 => 388,  755 => 387,  752 => 386,  748 => 385,  735 => 375,  731 => 374,  726 => 372,  719 => 368,  712 => 364,  705 => 360,  698 => 356,  692 => 352,  682 => 348,  675 => 344,  668 => 340,  661 => 336,  654 => 332,  647 => 328,  642 => 325,  638 => 324,  634 => 322,  623 => 317,  616 => 313,  609 => 309,  604 => 306,  600 => 305,  593 => 301,  587 => 297,  578 => 294,  574 => 293,  570 => 292,  566 => 291,  562 => 290,  558 => 289,  554 => 288,  550 => 287,  546 => 286,  543 => 285,  539 => 284,  519 => 267,  516 => 266,  511 => 264,  506 => 263,  504 => 262,  498 => 260,  494 => 259,  490 => 258,  486 => 257,  481 => 256,  474 => 251,  465 => 248,  461 => 247,  457 => 246,  453 => 245,  449 => 244,  445 => 243,  441 => 242,  437 => 241,  434 => 240,  430 => 239,  408 => 220,  404 => 219,  400 => 218,  393 => 214,  386 => 210,  382 => 208,  371 => 203,  364 => 199,  357 => 195,  350 => 191,  345 => 188,  341 => 187,  337 => 185,  326 => 180,  319 => 176,  312 => 172,  305 => 168,  300 => 165,  296 => 164,  292 => 162,  280 => 156,  273 => 152,  266 => 148,  259 => 144,  254 => 141,  250 => 140,  243 => 136,  239 => 135,  232 => 131,  222 => 123,  212 => 119,  208 => 118,  204 => 117,  201 => 116,  197 => 115,  184 => 105,  177 => 101,  172 => 99,  167 => 97,  160 => 93,  152 => 92,  145 => 88,  138 => 84,  131 => 79,  125 => 76,  122 => 75,  120 => 74,  115 => 72,  108 => 68,  101 => 64,  94 => 60,  87 => 56,  83 => 55,  74 => 51,  62 => 42,  19 => 1,);
    }
}
