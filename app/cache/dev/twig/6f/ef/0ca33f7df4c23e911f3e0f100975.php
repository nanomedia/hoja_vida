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
        <span extends=\"labels\">4. Persona con Discapacidad:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPersonales"), "discapacidad"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>
        ";
        // line 65
        if (($this->getAttribute($this->getContext($context, "DatosPersonales"), "discapacidad") == "SI")) {
            // line 66
            echo "        <span extends=\"labels\">5. Certificación de Discapacidad/Resolución CONADIS:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPersonales"), "certDiscapacidad"), "html", null, true);
            echo "&nbsp;</span>
        <br></br><br></br><br></br>
        ";
        }
        // line 70
        echo "        <div color=\"black\" height=\"20px\" background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
            II.&nbsp;DATOS COMO POSTULANTE
        </div>
        <br></br><br></br>
        <span extends=\"labels\">1. Cargo al que postula:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPostulante"), "cargoAPostular"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>

        <span extends=\"labels\">2. Condición:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPostulante"), "condicion"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>

        <span extends=\"labels\">3. Curso en la AMAG:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 83
        if (($this->getAttribute($this->getContext($context, "DatosPostulante"), "tipoCurso") == 1)) {
            echo " PROFA  ";
        } else {
            echo "  Ascenso ";
        }
        echo "&nbsp;</span>
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;NOTA: ";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPostulante"), "nota"), "html", null, true);
        echo "  &nbsp;</span>
        <br></br><br></br>

        <span extends=\"labels\">4. Pre-Promedio:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPostulante"), "prePromedio"), "html", null, true);
        echo "&nbsp;</span>
        <span extends=\"labels\">Orden de Mérito:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPostulante"), "ordenMerito"), "html", null, true);
        echo "&nbsp;</span>
        <span extends=\"labels\">Plazas Vacantes:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosPostulante"), "plazasVacantes"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>

        <span extends=\"labels\">5. Examen de Conocimientos:</span>&nbsp;&nbsp;
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 96
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
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConvocatoriasAnteriores"));
        foreach ($context['_seq'] as $context["_key"] => $context["conv"]) {
            // line 107
            echo "            <tr text-align=\"center\">
                <td padding=\"10px\">";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "conv"), "convocatoria"), "html", null, true);
            echo "</td>
                <td padding=\"10px\">";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "conv"), "plaza"), "html", null, true);
            echo "</td>
                <td padding=\"10px\">";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "conv"), "etapa"), "html", null, true);
            echo "</td>

            </tr>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "
        </table>
        <br></br><br></br><br></br>
        <div color=\"black\" height=\"20px\" background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
            III.&nbsp;DATOS ACADÉMICOS
        </div>
        <br></br><br></br>
        <span extends=\"labels\">1. Universidad de Procedencia:</span>
        <br></br><br></br>
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 123
        echo twig_escape_filter($this->env, $this->getContext($context, "daUniv"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>
        <span extends=\"labels\">2. Colegio Profesional y fecha de incorporación:</span>
        <br></br><br></br>
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 127
        echo twig_escape_filter($this->env, $this->getContext($context, "daCole"), "html", null, true);
        echo "&nbsp;</span>
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosAcademicos"), "fechaIncorporacion"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>
        <span extends=\"labels\">3. Doctorado en Derecho:</span>
        <br></br><br></br>
        ";
        // line 132
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "DocDerecho"));
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 133
            echo "        <table font-size=\"13px\">
            <tr >
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">&nbsp;Universidad:</td>
                <td padding=\"10px\">";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doc"), "Universidad"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">Nivel</td>
                <td padding=\"10px\">";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doc"), "Nivel"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">Mensión</td>
                <td padding=\"10px\">";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doc"), "Mension"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">Año</td>
                <td padding=\"10px\">";
            // line 148
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
        // line 154
        echo "        <span extends=\"labels\">4. Maestría en Derecho:</span>
        <br></br><br></br>
        ";
        // line 156
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "MaeDerecho"));
        foreach ($context['_seq'] as $context["_key"] => $context["mae"]) {
            // line 157
            echo "        <table font-size=\"13px\">
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">&nbsp;Universidad:</td>
                <td padding=\"10px\">";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mae"), "Universidad"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">Nivel</td>
                <td padding=\"10px\">";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mae"), "Nivel"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">Mensión</td>
                <td padding=\"10px\">";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mae"), "Mension"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">Año</td>
                <td padding=\"10px\">";
            // line 172
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
        // line 177
        echo "        <span extends=\"labels\">5. Doctorado / Maestría en otras Disciplinas:</span>
        <br></br><br></br>
        ";
        // line 179
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "OtrasDisciplinas"));
        foreach ($context['_seq'] as $context["_key"] => $context["otr"]) {
            // line 180
            echo "        <table  font-size=\"13px\">
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">&nbsp;Universidad:</td>
                <td padding=\"10px\">";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "otr"), "Universidad"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">Nivel</td>
                <td padding=\"10px\">";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "otr"), "Nivel"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">Mensión</td>
                <td padding=\"10px\">";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "otr"), "Mension"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td width=\"100px\" padding=\"10px\" font-style=\"bold\">Año</td>
                <td padding=\"10px\">";
            // line 195
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
        // line 200
        echo "        <span extends=\"labels\">6. Título Profesional en Otras Disciplinas:</span>
        <br></br><br></br>
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;&nbsp;";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosAcademicos"), "tituloOtros"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>
        <span extends=\"labels\">7. Tesis para obtener el Título Profesional:</span>
        <br></br><br></br>
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;&nbsp;";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "DatosAcademicos"), "tesisTitular"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>
        <span extends=\"labels\">8. Méritos Universitarios:</span>
        <br></br><br></br>
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "MeritosUniv"), "Puesto"), "html", null, true);
        echo "&nbsp;</span>
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "MeritosUniv"), "Universidad"), "html", null, true);
        echo "&nbsp;</span>
        <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "MeritosUniv"), "Anio"), "html", null, true);
        echo "&nbsp;</span>
        <br></br><br></br>
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
        // line 231
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "DocDesProfesional"));
        foreach ($context['_seq'] as $context["_key"] => $context["docdes"]) {
            // line 232
            echo "            <tr>
                <td text-align=\"center\" padding=\"10px\">";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docdes"), "Num"), "html", null, true);
            echo "</td>
                <td text-align=\"center\" padding=\"10px\">";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docdes"), "NumExp"), "html", null, true);
            echo "</td>
                <td padding=\"10px\">";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docdes"), "Ddas"), "html", null, true);
            echo "</td>
                <td padding=\"10px\">";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docdes"), "Ddae"), "html", null, true);
            echo "</td>
                <td padding=\"10px\">";
            // line 237
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docdes"), "Materia"), "html", null, true);
            echo "</td>
                <td padding=\"10px\">";
            // line 238
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docdes"), "Especialidad"), "html", null, true);
            echo "</td>
                <td padding=\"10px\" text-align=\"center\">";
            // line 239
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docdes"), "Calificacion1"), "html", null, true);
            echo "</td>
                <td padding=\"10px\" text-align=\"center\">";
            // line 240
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docdes"), "Calificacion2"), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['docdes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "        </table>
        <br></br><br></br>
        <span extends=\"labels\">2. Magistrado Ratificado:</span>

        <b>
        ";
        // line 248
        if (($this->getAttribute($this->getContext($context, "MagistradoRatificado"), "respuesta1") == 0)) {
            echo "NO,
        ";
        } elseif (($this->getAttribute($this->getContext($context, "MagistradoRatificado"), "respuesta1") == 1)) {
            // line 249
            echo "SI,
        ";
        } elseif (($this->getAttribute($this->getContext($context, "MagistradoRatificado"), "respuesta1") == 2)) {
            // line 250
            echo "Aun no ha sido objeto de proceso de ratificación,
        ";
        } elseif (($this->getAttribute($this->getContext($context, "MagistradoRatificado"), "respuesta1") == 3)) {
            // line 251
            echo "En convocatoria,
        ";
        }
        // line 252
        echo " </b>&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "MagistradoRatificado"), "respuesta2"), "html", null, true);
        echo "&nbsp;
            <br></br><br></br>
        ";
        // line 254
        if ((($this->getAttribute($this->getContext($context, "MagistradoRatificado"), "respuesta1") == 0) || ($this->getAttribute($this->getContext($context, "MagistradoRatificado"), "respuesta1") == 1))) {
            // line 255
            echo "            <b> Resolución N°</b> <span font-size=\"17px\" border.size=\"1px\">&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "MagistradoRatificado"), "resolucion"), "html", null, true);
            echo "</span>
            <b> de fecha </b><span font-size=\"17px\" border.size=\"1px\">&nbsp;";
            // line 256
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "MagistradoRatificado"), "fechaRes"), "html", null, true);
            echo "</span>
        ";
        }
        // line 258
        echo "
            <span font-size=\"17px\" border.size=\"1px\">";
        // line 259
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
        // line 276
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "CalJudFis"));
        foreach ($context['_seq'] as $context["_key"] => $context["cal"]) {
            // line 277
            echo "                <tr>
                    <td text-align=\"center\" padding=\"10px\">";
            // line 278
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cal"), "Num"), "html", null, true);
            echo "</td>
                    <td text-align=\"center\" padding=\"10px\">";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cal"), "NumExp"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 280
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cal"), "TipResolucion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 281
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cal"), "FechaRes"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 282
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cal"), "Ddagraviado"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 283
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cal"), "Ddagresor"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 284
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cal"), "Materia"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 285
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cal"), "Especialidad"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 286
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cal"), "Nota"), "html", null, true);
            echo "</td>
                </tr>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "            </table>
            <br></br><br></br>
            <span extends=\"labels\">4. SITUACIÓN LABORAL ACTUAL:</span>
            <br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 293
        echo twig_escape_filter($this->env, $this->getContext($context, "SitLaboral"), "html", null, true);
        echo "</div>
            <br></br><br></br>
            <span extends=\"labels\">(Tres últimas)</span>
            <br></br><br></br>
                ";
        // line 297
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "DetSituacionLaboral"));
        foreach ($context['_seq'] as $context["_key"] => $context["detsit"]) {
            // line 298
            echo "            <table>
                <tr>
                    <td width=\"150px\" padding=\"10px\">Centro de Trabajo:</td>
                    <td padding=\"10px\">";
            // line 301
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "detsit"), "CentroTrabajo"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td padding=\"10px\">Cargo:</td>
                    <td padding=\"10px\">";
            // line 305
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "detsit"), "Cargo"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td padding=\"10px\">Periodo:</td>
                    <td padding=\"10px\">";
            // line 309
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
        // line 314
        echo "            <span extends=\"labels\">5. DOCENCIA UNIVERSITARIA</span>
            <br></br><br></br>
                ";
        // line 316
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "DocenciaUniversitaria"));
        foreach ($context['_seq'] as $context["_key"] => $context["docuni"]) {
            // line 317
            echo "            <table>
                <tr>
                    <td width=\"150px\" padding=\"10px\">Universidad:</td>
                    <td padding=\"10px\">";
            // line 320
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docuni"), "Universidad"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td padding=\"10px\">Facultad:</td>
                    <td padding=\"10px\">";
            // line 324
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docuni"), "Facultad"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td padding=\"10px\">Condición:</td>
                    <td padding=\"10px\">";
            // line 328
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docuni"), "Condicion"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td padding=\"10px\">Categoria:</td>
                    <td padding=\"10px\">";
            // line 332
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docuni"), "Categoria"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td padding=\"10px\">Cursos:</td>
                    <td padding=\"10px\">";
            // line 336
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docuni"), "Cursos"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td padding=\"10px\">Periodo:</td>
                    <td padding=\"10px\">";
            // line 340
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "docuni"), "Periodo"), "html", null, true);
            echo "</td>
                </tr>
            </table> <br></br><br></br><br></br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['docuni'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        echo "
            <span extends=\"labels\">6. PUBLICACIONES:</span><br></br><br></br><br></br>
            <span extends=\"labels\">6.1. Libros o Textos Universitarios</span>
            <br></br><br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 348
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Publicaciones"), "librosTextosUniv"), "html", null, true);
        echo "</div>
            <br></br><br></br><br></br>
            <span extends=\"labels\">6.2. Investigaciones Jurídicas Doctrinarias o de Campo</span>
            <br></br><br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 352
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Publicaciones"), "invJuridicas"), "html", null, true);
        echo "</div>
            <br></br><br></br><br></br>
            <span extends=\"labels\">6.3. Ensayos en materia Jurídica</span>
            <br></br><br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 356
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Publicaciones"), "ensayosJuridico"), "html", null, true);
        echo "</div>
            <br></br><br></br><br></br>
            <span extends=\"labels\">6.4. Artículos en materia Jurídica</span>
            <br></br><br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 360
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Publicaciones"), "articulosJuridicos"), "html", null, true);
        echo "</div>
            <br></br><br></br><br></br>
            <span extends=\"labels\">6.5. Artículos en materia No Jurídica</span>
            <br></br><br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 364
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Publicaciones"), "articulosNoJuridicos"), "html", null, true);
        echo "</div>
            <br></br><br></br><br></br>
            <span extends=\"labels\">7. Producción Jurisdiccional o Fiscal:&nbsp;</span><b>";
        // line 366
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ProdJurFiscal"), "Respuesta"), "html", null, true);
        echo "</b><br></br><br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 367
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
        // line 377
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "LicenciasOtorgadas"));
        foreach ($context['_seq'] as $context["_key"] => $context["lic"]) {
            // line 378
            echo "                <tr >
                    <td text-align=\"center\" padding=\"10px\">";
            // line 379
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lic"), "Anio"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 380
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lic"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 381
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lic"), "Dias"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 384
        echo "                <tr>
                    <td padding=\"10px\" colspan=\"2\"><div text-align=\"right\">TOTAL:</div></td>
                    <td padding=\"10px\" text-align=\"center\">";
        // line 386
        echo twig_escape_filter($this->env, $this->getContext($context, "SumDias"), "html", null, true);
        echo "</td>
                </tr>
            </table>          
            <br></br><br></br><br></br>

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
        // line 400
        echo twig_escape_filter($this->env, $this->getContext($context, "anteA"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td padding=\"10px\">Antecedente Judiciales</td>
                    <td padding=\"10px\">";
        // line 404
        echo twig_escape_filter($this->env, $this->getContext($context, "anteB"), "html", null, true);
        echo "</td>
                </tr>

                <tr>
                    <td padding=\"10px\">Antecedente Policiales</td>
                    <td padding=\"10px\">";
        // line 409
        echo twig_escape_filter($this->env, $this->getContext($context, "anteC"), "html", null, true);
        echo "</td>
                </tr>

            </table>
            <br></br><br></br><br></br>
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
        // line 426
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_rep"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 427
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 428
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "expediente"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 429
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "organo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 430
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "demandadoagresor"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 431
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "materia"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 432
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "estado"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 435
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
        // line 448
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repB"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 449
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 450
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "expediente"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 451
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "organo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 452
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "demandadoagresor"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 453
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "materia"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 454
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "estado"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 457
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
        // line 469
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repC"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 470
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 471
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "expediente"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 472
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "organo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 473
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "demandadoagresor"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 474
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "materia"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 475
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "estado"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 478
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
        // line 491
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repD"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 492
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 493
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "idinstitucion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 494
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "resolucion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 495
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "sancion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 496
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "estado"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 499
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
        // line 511
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repE"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 512
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 513
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "idinstitucion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 514
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "resolucion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 515
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "sancion"), "html", null, true);
            echo "</td>
                </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 518
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
        // line 530
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repF"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 531
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 532
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "idinstitucion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 533
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "sancion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 534
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "resolucion"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 537
        echo "            </table>
            <br></br><br></br><br></br>
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
        // line 555
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFA"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 556
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 557
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "expediente"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 558
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 559
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "estadoproc"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 562
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
        // line 575
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFB"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 576
            echo "                <tr>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 577
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Num"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 578
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Quejas"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 579
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 580
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EstadoProc"), "html", null, true);
            echo "</td>

                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 584
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
        // line 596
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFC"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 597
            echo "                <tr>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 598
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Num"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 599
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 600
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EstadoProc"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 603
        echo "            </table>
            <br></br><br></br><br></br>

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
        // line 620
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFD"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 621
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 622
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "IdInstitucion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 623
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Expediente"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 624
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 625
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EstadoProc"), "html", null, true);
            echo "</td>                    
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 628
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
        // line 641
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFE"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 642
            echo "                <tr>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 643
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Num"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 644
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Quejas"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 645
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 646
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EstadoProc"), "html", null, true);
            echo "</td>                    
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 649
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
        // line 661
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFF"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 662
            echo "                <tr>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 663
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Num"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 664
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 665
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EstadoProc"), "html", null, true);
            echo "</td>                    
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 668
        echo "            </table>
            <br></br><br></br><br></br>
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
        // line 686
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFA2"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 687
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 688
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Expediente"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 689
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 690
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EstadoProc"), "html", null, true);
            echo "</td>                    
                </tr>                
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 693
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
        // line 706
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFB2"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 707
            echo "                <tr>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 708
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Num"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 709
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Quejas"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 710
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 711
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EstadoProc"), "html", null, true);
            echo "</td>                    
                </tr>                
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 714
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
        // line 727
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFC2"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 728
            echo "                <tr>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 729
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Num"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 730
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 731
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EstadoProc"), "html", null, true);
            echo "</td>  
                </tr>     
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 734
        echo "            </table>
            <br></br><br></br><br></br>
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
        // line 749
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFD2"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 750
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 751
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "IdInstitucion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 752
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Expediente"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 753
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 754
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EstadoProc"), "html", null, true);
            echo "</td>                    
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 757
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
        // line 770
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul_repFE2"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 771
            echo "                <tr>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 772
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Num"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 773
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Quejas"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 774
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Motivo"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 775
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "EstadoProc"), "html", null, true);
            echo "</td>                    
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 778
        echo "            </table>

            <br></br><br></br><br></br>
            <div color=\"black\" height=\"20px\"  background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
                VI.&nbsp;INFORMACIÓN DE LA OFICINA DE REGISTRO DE JUECES Y FISCALES DEL CNM
            </div>
            <br></br><br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 785
        echo twig_escape_filter($this->env, $this->getContext($context, "info1"), "html", null, true);
        echo "</div>

            <br></br><br></br><br></br>
            <div color=\"black\" height=\"20px\"  background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
                VII.&nbsp;INFORMACIÓN DE LA DIRECCIÓN DE PROCESOS DISCIPLINARIOS DEL CNM
            </div>
            <br></br><br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 792
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
        // line 803
        echo twig_escape_filter($this->env, $this->getContext($context, "info3"), "html", null, true);
        echo "</div>
            <br></br><br></br><br></br>

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
        // line 824
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "Ingresos1"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 825
            echo "                <tr>
                    <td text-align=\"center\" padding=\"10px\">";
            // line 826
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "anio"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 827
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "descripcion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 828
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "valor"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 831
        echo "                <tr>
                    <td padding=\"10px\" colspan=\"2\" text-align=\"right\">TOTAL:</td>
                    <td padding=\"10px\" text-align=\"center\">";
        // line 833
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
        // line 847
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "otrosingresos"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 848
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 849
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Descripcion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" width=\"40px\" text-align=\"center\">";
            // line 850
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Monto"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 853
        echo "                <tr>
                    <td padding=\"10px\" text-align=\"right\">TOTAL:</td>
                    <td padding=\"10px\" text-align=\"center\">";
        // line 855
        echo twig_escape_filter($this->env, $this->getContext($context, "sum2"), "html", null, true);
        echo "</td>
                </tr>
            </table>

            <br></br><br></br><br></br>
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
        // line 876
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpostul"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 877
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 878
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "TipoBien"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 879
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Ubicacion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 880
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Fecha"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 881
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Monto"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 884
        echo "                <tr>
                    <td colspan=\"3\" padding=\"10px\" text-align=\"right\">TOTAL:</td>
                    <td padding=\"10px\" text-align=\"center\">";
        // line 886
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
        // line 903
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpo"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 904
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 905
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "TipoBien"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 906
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Ubicacion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 907
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Fecha"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 908
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Monto"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 911
        echo "                <tr>
                    <td colspan=\"3\" padding=\"10px\" text-align=\"right\">TOTAL:</td>
                    <td padding=\"10px\" text-align=\"center\">";
        // line 913
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
        // line 927
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dpatri"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 928
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 929
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Descripcion"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 930
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Valor"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 933
        echo "                <tr>
                    <td padding=\"10px\" text-align=\"right\">TOTAL:</td>
                    <td padding=\"10px\" text-align=\"center\">";
        // line 935
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
        // line 951
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "Financi"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 952
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 953
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Clase"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 954
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Entidad"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 955
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Valor"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 958
        echo "
                <tr>
                    <td colspan=\"2\" padding=\"10px\" text-align=\"right\">TOTAL:</td>
                    <td text-align=\"center\">";
        // line 961
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
        // line 976
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "Acre_array"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 977
            echo "                <tr>
                    <td padding=\"10px\">";
            // line 978
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Naturaleza"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 979
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Entidad"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\" text-align=\"center\">";
            // line 980
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Valor"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 983
        echo "
                <tr>
                    <td colspan=\"2\" padding=\"10px\" text-align=\"right\">TOTAL:</td>
                    <td text-align=\"center\">";
        // line 986
        echo twig_escape_filter($this->env, $this->getContext($context, "sum7"), "html", null, true);
        echo "</td>
                </tr>
            </table>
            <br></br><br></br><br></br>
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
        // line 1000
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dataMovMig"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1001
            echo "                <tr>
                    <td text-align=\"center\" padding=\"10px\">";
            // line 1002
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Tipo"), "html", null, true);
            echo "</td>
                    <td text-align=\"center\" padding=\"10px\">";
            // line 1003
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "Fecha"), "html", null, true);
            echo "</td>
                    <td padding=\"10px\">";
            // line 1004
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "DestinoProcedencia"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1007
        echo "            </table>
            <br></br><br></br><br></br>
            <div color=\"black\" height=\"20px\"  background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
                XII.INFORMACIÓN DE LA CÁMARA DE COMERCIO, INFOCORP Y SBS
            </div>
            <br></br><br></br><br></br>
            <table>
                <tr>
                    <td text-align=\"center\" width=\"120px\" padding=\"10px\">Cámara de Comercio</td>
                    <td padding=\"10px\">";
        // line 1016
        echo twig_escape_filter($this->env, $this->getContext($context, "info21"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td text-align=\"center\" padding=\"10px\">Infocorp</td>
                    <td padding=\"10px\">";
        // line 1020
        echo twig_escape_filter($this->env, $this->getContext($context, "info22"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td text-align=\"center\" padding=\"10px\">SBS</td>
                    <td padding=\"10px\">";
        // line 1024
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
        // line 1032
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubro4"), "DeudoresAlimentarios"), "html", null, true);
        echo "</div>

            <br></br><br></br><br></br>
            <div color=\"black\" height=\"20px\"  background.color=\"#cccccc\" font-style=\"bold\" font-size=\"13px\"   >
                XIV. INFORMACIÓN COMPLEMENTARIA
            </div>
            <br></br><br></br><br></br>
            <div border.color=\"black\" padding=\"10px\">";
        // line 1039
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
        return array (  1983 => 1039,  1973 => 1032,  1962 => 1024,  1955 => 1020,  1948 => 1016,  1937 => 1007,  1928 => 1004,  1924 => 1003,  1920 => 1002,  1917 => 1001,  1913 => 1000,  1896 => 986,  1891 => 983,  1882 => 980,  1878 => 979,  1874 => 978,  1871 => 977,  1867 => 976,  1849 => 961,  1844 => 958,  1835 => 955,  1831 => 954,  1827 => 953,  1824 => 952,  1820 => 951,  1801 => 935,  1797 => 933,  1788 => 930,  1784 => 929,  1781 => 928,  1777 => 927,  1760 => 913,  1756 => 911,  1747 => 908,  1743 => 907,  1739 => 906,  1735 => 905,  1732 => 904,  1728 => 903,  1708 => 886,  1704 => 884,  1695 => 881,  1691 => 880,  1687 => 879,  1683 => 878,  1680 => 877,  1676 => 876,  1652 => 855,  1648 => 853,  1639 => 850,  1635 => 849,  1632 => 848,  1628 => 847,  1611 => 833,  1607 => 831,  1598 => 828,  1594 => 827,  1590 => 826,  1587 => 825,  1583 => 824,  1559 => 803,  1545 => 792,  1535 => 785,  1526 => 778,  1517 => 775,  1513 => 774,  1509 => 773,  1505 => 772,  1502 => 771,  1498 => 770,  1483 => 757,  1474 => 754,  1470 => 753,  1466 => 752,  1462 => 751,  1459 => 750,  1455 => 749,  1438 => 734,  1429 => 731,  1425 => 730,  1421 => 729,  1418 => 728,  1414 => 727,  1399 => 714,  1390 => 711,  1386 => 710,  1382 => 709,  1378 => 708,  1375 => 707,  1371 => 706,  1356 => 693,  1347 => 690,  1343 => 689,  1339 => 688,  1336 => 687,  1332 => 686,  1312 => 668,  1303 => 665,  1299 => 664,  1295 => 663,  1292 => 662,  1288 => 661,  1274 => 649,  1265 => 646,  1261 => 645,  1257 => 644,  1253 => 643,  1250 => 642,  1246 => 641,  1231 => 628,  1222 => 625,  1218 => 624,  1214 => 623,  1210 => 622,  1207 => 621,  1203 => 620,  1184 => 603,  1175 => 600,  1171 => 599,  1167 => 598,  1164 => 597,  1160 => 596,  1146 => 584,  1136 => 580,  1132 => 579,  1128 => 578,  1124 => 577,  1121 => 576,  1117 => 575,  1102 => 562,  1093 => 559,  1089 => 558,  1085 => 557,  1082 => 556,  1078 => 555,  1058 => 537,  1049 => 534,  1045 => 533,  1041 => 532,  1038 => 531,  1034 => 530,  1020 => 518,  1011 => 515,  1007 => 514,  1003 => 513,  1000 => 512,  996 => 511,  982 => 499,  973 => 496,  969 => 495,  965 => 494,  961 => 493,  958 => 492,  954 => 491,  939 => 478,  930 => 475,  926 => 474,  922 => 473,  918 => 472,  914 => 471,  911 => 470,  907 => 469,  893 => 457,  884 => 454,  880 => 453,  876 => 452,  872 => 451,  868 => 450,  865 => 449,  861 => 448,  846 => 435,  837 => 432,  833 => 431,  829 => 430,  825 => 429,  821 => 428,  818 => 427,  814 => 426,  794 => 409,  786 => 404,  779 => 400,  762 => 386,  758 => 384,  749 => 381,  745 => 380,  741 => 379,  738 => 378,  734 => 377,  721 => 367,  717 => 366,  712 => 364,  705 => 360,  698 => 356,  691 => 352,  684 => 348,  678 => 344,  668 => 340,  661 => 336,  654 => 332,  647 => 328,  640 => 324,  633 => 320,  628 => 317,  624 => 316,  620 => 314,  609 => 309,  602 => 305,  595 => 301,  590 => 298,  586 => 297,  579 => 293,  573 => 289,  564 => 286,  560 => 285,  556 => 284,  552 => 283,  548 => 282,  544 => 281,  540 => 280,  536 => 279,  532 => 278,  529 => 277,  525 => 276,  505 => 259,  502 => 258,  497 => 256,  492 => 255,  490 => 254,  484 => 252,  480 => 251,  476 => 250,  472 => 249,  467 => 248,  460 => 243,  451 => 240,  447 => 239,  443 => 238,  439 => 237,  435 => 236,  431 => 235,  427 => 234,  423 => 233,  420 => 232,  416 => 231,  394 => 212,  390 => 211,  386 => 210,  379 => 206,  372 => 202,  368 => 200,  357 => 195,  350 => 191,  343 => 187,  336 => 183,  331 => 180,  327 => 179,  323 => 177,  312 => 172,  305 => 168,  298 => 164,  291 => 160,  286 => 157,  282 => 156,  278 => 154,  266 => 148,  259 => 144,  252 => 140,  245 => 136,  240 => 133,  236 => 132,  229 => 128,  225 => 127,  218 => 123,  207 => 114,  197 => 110,  193 => 109,  189 => 108,  186 => 107,  182 => 106,  169 => 96,  162 => 92,  157 => 90,  152 => 88,  145 => 84,  137 => 83,  130 => 79,  123 => 75,  116 => 70,  110 => 67,  107 => 66,  105 => 65,  100 => 63,  94 => 60,  87 => 56,  83 => 55,  74 => 51,  62 => 42,  19 => 1,);
    }
}
