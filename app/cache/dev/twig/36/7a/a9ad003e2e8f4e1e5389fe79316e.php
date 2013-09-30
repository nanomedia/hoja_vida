<?php

/* hojaVidaBundle:formularios:frm_datos_academicos.html.twig */
class __TwigTemplate_367aa9ad003e2e8f4e1e5389fe79316e extends Twig_Template
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
        echo "<div id=\"tabs1-3\">
    <div class=\"area-registro\">
        <div class=\"tab-title\"> DATOS ACAD&Eacute;MICOS</div>
        <form id=\"frm-datos-academicos\">
            <table width=\"65%\"  cellspacing=\"15px\" align=\"center\">
                <tr>
                    <td colspan=\"2\">
                        <label class=\"labelText\">1. Universidad de Procedencia:</label>
                    </td>
                </tr>

                <tr>
                    <td></td>

                    <td>
                        <select class=\"combo-univ\" name=\"cbo_univProcedencia\">
                        
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan=\"2\">
                        <label class=\"labelText\">2. Colegio Profesional y fecha de incorporación:</label>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td> 
                        <select class=\"combo_colegios\" name=\"cbo_colegioProfesional\"></select>
                        <input type=\"text\" name=\"txt_fechaIncorporacion\" class=\"datepicker textbox-datepicker\">
                    </td>
                </tr>

                <tr>
                    <td colspan=\"2\">
                        <label class=\"labelText\">3. Doctorado en Derecho:</label>&nbsp;&nbsp;<div id=\"add_docderecho\" class=\"add-icon\">Agregar</div>
                        <input type=\"hidden\" name=\"txt_detEstudios_doc\" value=\"Doctorado en Derecho\">

                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\">
                        <table align=\"center\" id=\"tableDocDerecho\">
                            <tbody id=\"bodyDocDerecho\">

                                <tr class=\"rowDocDerecho\">
                                    <td>
                                        <table align=\"center\" width=\"70%\" class=\"table ui-widget ui-widget-content\" style=\"margin-bottom: 35px;\">

                                            <tr>
                                                <td width=\"110px\" class=\"ui-widget-header\">Universidad:</td>
                                                <td>
                                                    <select class=\"cbo_universidad_doc combo-univ\" name=\"cbo_universidad_doc[]\"></select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">Nivel:</td>
                                                <td>
                                                    <select name=\"cbo_nivel_doc[]\">
                                                        <option value=\"0\">-ELEGIR-</option>
                                                        <option value=\"1\">TITULADO</option>
                                                        <option value=\"2\">EGRESADO</option>
                                                        <option value=\"3\">ESTUDIOS INCOMPLETOS</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">Menci&oacute;n:</td>
                                                <td><textarea name=\"txt_mencion_doc[]\" type=\"text\" class=\"info_textarea\"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">A&ntilde;o:</td>
                                                <td>
                                                    <select name=\"cbo_anio_doc[]\" class=\"cbo_anio\"></select>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>&nbsp;&nbsp;&nbsp;</td>

                                </tr>

                            </tbody>
                        </table>




                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\">
                        <label class=\"labelText\">4. Maestría en Derecho:</label>&nbsp;&nbsp;
                        <div id=\"add_maederecho\" class=\"add-icon\">Agregar</div>
                        <input type=\"hidden\" name=\"txt_detEstudios_mae\" value=\"Maestría en Derecho\">
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\">

                        <table align=\"center\" id=\"tableMaeDerecho\" >
                            <tbody id=\"bodyMaeDerecho\">
                                <tr class=\"rowMaeDerecho\">
                                    <td>
                                        <table width=\"70%\" class=\"table ui-widget ui-widget-content\" style=\"margin-bottom: 35px;\">

                                            <tr>
                                                <td width=\"110px\" class=\"ui-widget-header\">Universidad:</td>
                                                <td>
                                                    <select name=\"cbo_universidad_mae[]\" class=\"cbo_universidad_mae combo-univ\"></select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">Nivel:</td>
                                                <td>
                                                    <select name=\"cbo_nivel_mae[]\">
                                                        <option value=\"0\">-ELEGIR-</option>
                                                        <option value=\"1\">TITULADO</option>
                                                        <option value=\"2\">EGRESADO</option>
                                                        <option value=\"3\">ESTUDIOS INCOMPLETOS</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">Menci&oacute;n:</td>
                                                <td><textarea  name=\"txt_mencion_mae[]\" type=\"text\" class=\"info_textarea\"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">A&ntilde;o:</td>
                                                <td> <select name=\"cbo_anio_mae[]\" class=\"cbo_anio\"></select></td>
                                            </tr>

                                        </table>
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>

                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\">
                        <label class=\"labelText\">5. Doctorado / Maestría en otras Disciplinas:</label>&nbsp;&nbsp;
                        <div class=\"add-icon\" id=\"add_MaeDerOtrasDisc\">Agregar</div>

                        <input type=\"hidden\" name=\"txt_detEstudios_otras\" value=\"Doctorado / Maestría en otras Disciplinas\">
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\">
                        <table align=\"center\" id=\"tableMaeDerOtrasDisc\" >
                            <tbody id=\"bodyMaeDerOtrasDisc\">
                                <tr class=\"rowMaeDerOtrasDisc\">
                                    <td>
                                        <table width=\"70%\" class=\"table ui-widget ui-widget-content\" style=\"margin-bottom: 35px;\">
                                            <tr>
                                                <td width=\"110px\" class=\"ui-widget-header\">Universidad:</td>
                                                <td>
                                                    <select name=\"cbo_universidad_otras[]\" class=\"cbo_universidad_otras combo-univ\"></select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">Nivel:</td>
                                                <td>
                                                    <select  name=\"cbo_nivel_otras[]\">
                                                        <option value=\"0\">-ELEGIR-</option>
                                                        <option value=\"1\">TITULADO</option>
                                                        <option value=\"2\">EGRESADO</option>
                                                        <option value=\"3\">ESTUDIOS INCOMPLETOS</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">Menci&oacute;n:</td>
                                                <td><textarea name=\"txt_mencion_otras[]\" type=\"text\" class=\"info_textarea\"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td class=\"ui-widget-header\">A&ntilde;o:</td>
                                                <td> <select name=\"cbo_anio_otras[]\" class=\"cbo_anio\"></select></td>
                                            </tr>
                                        </table> 
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\">
                        <label class=\"labelText\">6. Título Profesional en Otras Disciplinas:</label>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\"><textarea class=\"text-area\" name=\"txt_tituloOtros\"></textarea></td>
                </tr>
                <tr>
                    <td colspan=\"2\"><label class=\"labelText\">Tesis para obtener el Título Profesional:</label></td>
                </tr>
                <tr>
                    <td colspan=\"2\"><textarea class=\"text-area\" name=\"txt_tesisTitular\"></textarea></td>
                </tr>
                <tr>
                    <td colspan=\"2\">
                        <label class=\"labelText\">7. Méritos Universitarios:</label>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <select name=\"cbo_puesto_meritos\">
                            <option value=\"0\">-ELEGIR-</option>
                            <option value=\"1\">PRIMER PUESTO</option>
                            <option value=\"2\">QUINTO SUPERIOR</option>
                            <option value=\"3\">TERCER SUPERIOR</option>
                        </select>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label class=\"labelText\">A&ntilde;o:</label>
                        <select name=\"cbo_anio_meritos\" class=\"cbo_anio\"></select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <select name=\"cbo_univ_meritos\" class=\"combo-univ\"></select>
                    </td>
                </tr>
            </table>
        </form>

    </div>  
</div>";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:formularios:frm_datos_academicos.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 44,  48 => 19,  44 => 18,  36 => 12,  34 => 11,  32 => 10,  28 => 8,  63 => 40,  19 => 1,  505 => 373,  499 => 369,  493 => 366,  486 => 362,  480 => 359,  465 => 347,  460 => 346,  455 => 344,  452 => 343,  344 => 239,  338 => 236,  321 => 222,  304 => 208,  286 => 193,  269 => 179,  252 => 165,  236 => 152,  216 => 135,  196 => 118,  176 => 101,  158 => 86,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 45,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 27,  42 => 5,  38 => 4,  33 => 3,  30 => 10,);
    }
}
