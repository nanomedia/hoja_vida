<?php

/* hojaVidaBundle:formularios:frm_mov_migratorio.html.twig */
class __TwigTemplate_551537d7c84c7e9bb3cf1375a5ee11c4 extends Twig_Template
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
        echo "<div id=\"tabs3-2\">
    <div class=\"area-registro\">                        
        <div class=\"tab-title\">
            MOVIMIENTO MIGRATORIO
        </div>
        <form id=\"frm_mov_migratorio\">
            <table width=\"100%\" border=\"0\" cellspacing=\"10px\" align=\"center\">
                <tr>
                    <td>
                        <div  class=\"add-icon\" id=\"add_mov_migratorio\" >Nueva fila</div><br><br>
                        <table width=\"80%\" id=\"table_mov_migratorio\" class=\"table ui-widget ui-widget-content\">
                            <thead>

                                <tr class=\"ui-widget-header\">
                                    <th  width=\"100px\" align=\"center\">Movimiento</th>
                                    <th  width=\"100px\" align=\"center\">Fecha</th>
                                    <th  align=\"center\">Destino / Procedencia</th>
                                    <th width=\"50px\"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align=\"center\">
                                        <select name=\"txt_tipo[]\">
                                            <option value=\"0\">-ELEGIR-</option>
                                            <option value=\"1\">ENTRADA</option>
                                            <option value=\"2\">SALIDA</option>
                                        </select>
                                    </td>
                                    <td><input name=\"txt_fecha[]\" type=\"text\" class=\"row-edit datepicker\"></td>
                                    <td><input name=\"txt_destino[]\" type=\"text\" class=\"row-edit\"></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>

                    </td>
                </tr>
            </table>
        </form>
    </div>  

</div>";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:formularios:frm_mov_migratorio.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  45 => 15,  43 => 14,  40 => 13,  37 => 12,  31 => 9,  29 => 8,  76 => 44,  48 => 19,  44 => 18,  36 => 12,  32 => 10,  28 => 8,  34 => 11,  23 => 3,  19 => 1,  513 => 379,  511 => 378,  505 => 375,  499 => 372,  492 => 368,  486 => 365,  471 => 353,  466 => 352,  461 => 350,  458 => 349,  349 => 244,  342 => 240,  325 => 226,  309 => 213,  292 => 199,  276 => 186,  260 => 173,  244 => 160,  225 => 144,  208 => 130,  188 => 113,  167 => 95,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 45,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 7,  42 => 5,  38 => 4,  33 => 3,  30 => 10,);
    }
}
