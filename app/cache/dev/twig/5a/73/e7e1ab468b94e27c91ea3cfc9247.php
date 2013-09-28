<?php

/* hojaVidaBundle:formularios:frm_datos_postulante.html.twig */
class __TwigTemplate_5a73e7e1ab468b94e27c91ea3cfc9247 extends Twig_Template
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
        echo "
<div id=\"tabs1-2\">
    <div class=\"area-registro\">
        <div class=\"tab-title\">DATOS COMO POSTULANTE</div>
        <form id=\"frm-como-postulante\">
            <table width=\"65%\" border=\"0\" cellspacing=\"15px\"  align=\"center\">
                <tr >
                    <td width=\"35%\"><label class=\"labelText\">Cargo al que postula:</label></td>
                    <td><input type=\"text\" name=\"txt_cargoAPostular\" class=\"textbox obligate\"></td>
                </tr>
                <tr>
                    <td><label class=\"labelText\">Condici&oacute;n:</label></td>
                    <td><input type=\"text\" name=\"txt_condicion\" class=\"textbox obligate\"></td>
                </tr>
                <tr>
                    <td><label class=\"labelText\">Curso de PROFA o Ascenso en la AMAG:</label></td>
                    <td>
                        <select name=\"cbo_tipoCurso\">
                            <option value=\"0\">-ELEGIR-</option>
                            <option value=\"1\">PROFA</option>
                            <option value=\"2\">Ascenso</option>
                        </select>
                        &nbsp;&nbsp;&nbsp;
                        <label class=\"labelText\">Nota:</label>
                        <input type=\"text\" name=\"txt_nota\" class=\"numeric nota\" size=\"5\" >
                    </td>
                </tr>
                <tr>
                    <td><label class=\"labelText\">Pre-Promedio:</label></td>
                    <td><input type=\"text\" name=\"txt_prePromedio\" class=\"numeric nota obligate\"  size=\"5\" ></td>
                </tr>
                <tr>
                    <td><label class=\"labelText\">Orden de m&eacute;rito:</label></td>
                    <td><input type=\"text\"  name=\"txt_ordenMerito\" class=\"numeric num obligate\" size=\"5\" ></td>
                </tr>
                <tr>
                    <td><label class=\"labelText\">Plazas vacantes:</label></td>
                    <td><input type=\"text\"  name=\"txt_plazasVacantes\" class=\"numeric num obligate\" size=\"5\" ></td>
                </tr>

                <tr>
                    <td><label class=\"labelText\">Examen de conocimientos</label></td>
                    <td><input type=\"text\" name=\"txt_ex_cono\" class=\"textbox obligate\"></td>
                </tr>
                <tr>
                    <td><label class=\"labelText\">Afiliaci&oacute;n curricular</label></td>
                    <td><input type=\"text\" name=\"afi_curr\" class=\"textbox obligate\"></td>
                </tr>
                <tr>
                    <td colspan=\"2\"><label class=\"labelText\">Postulación en Convocatorias anteriores:</label></td>
                </tr>
                <tr>
                    <td colspan=\"2\">
                        <div  class=\"add-icon\" id=\"add_canteriores\" >Nueva fila</div><br><br>
                        <table  id=\"table_canteriores\" align=\"center\" class=\"table ui-widget ui-widget-content\" >
                            <thead>
                                <tr class=\"ui-widget-header\">
                                    <th width=\"40px\"></th>
                                    <th width=\"80px\">Convocatoria</th>
                                    <th width=\"400px\">Plaza</th>
                                    <th width=\"80px\">Etapa</th>
                                    <th width=\"40px\"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align=\"center\">1</td>
                                    <td><input type=\"text\" name=\"convocatoria[]\" class=\"row-edit\" class=\"obligate\"></td>
                                    <td><input type=\"text\" name=\"plaza[]\" class=\"row-edit\" class=\"obligate\"></td>
                                    <td><input type=\"text\" name=\"etapa[]\" class=\"row-edit\" class=\"obligate\"></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>

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
        return "hojaVidaBundle:formularios:frm_datos_postulante.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 44,  48 => 19,  44 => 18,  36 => 12,  34 => 11,  32 => 10,  28 => 8,  63 => 40,  19 => 1,  508 => 376,  502 => 372,  496 => 369,  489 => 365,  483 => 362,  468 => 350,  463 => 349,  458 => 347,  455 => 346,  347 => 242,  341 => 239,  324 => 225,  307 => 211,  289 => 196,  272 => 182,  255 => 168,  239 => 155,  219 => 138,  199 => 121,  179 => 104,  158 => 86,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 45,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 27,  42 => 5,  38 => 4,  33 => 3,  30 => 10,);
    }
}
