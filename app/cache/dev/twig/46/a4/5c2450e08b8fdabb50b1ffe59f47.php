<?php

/* hojaVidaBundle:formularios:frm_info_patrimonial.html.twig */
class __TwigTemplate_46a45c2450e08b8fdabb50b1ffe59f47 extends Twig_Template
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
        echo "<div id=\"tabs3-1\">
    <div class=\"area-registro\">
        <form id=\"frm_info_patrimonial\">
            <div class=\"tab-title\">
                INFORMACIÓN PATRIMONIAL (ECONÓMICA E INMOBILIARIA)
            </div>
            <table width=\"100%\" border=\"0\" cellspacing=\"10px\" align=\"center\">
                <tr>
                    <td>
                        <label class=\"labelText\">
                            1. Cuadro de Declaraciones Juradas de Bienes y Rentas
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br><br>
                        <table width=\"70%\" class=\"table ui-widget ui-widget-content\" id=\"table_dec_bienes_rentas\">
                            <thead>
                                <tr >
                                    <th class=\"ui-widget-header\" colspan=\"6\" align=\"center\">
                                        Ingresos &nbsp;<input type=\"button\" class=\"add-icon\" id=\"add_dec_bienes_rentas\" value=\"Nueva fila\"></th>
                                </tr>   
                                <tr class=\"ui-widget-header\">
                                    <th width=\"100px\">Año</th>
                                    <th>Descripci&oacute;n</th>
                                    <th>Valor S/.</th>    
                                    <th width=\"50px\"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><select name=\"txt_ing_anio_pat[]\" class=\"numeric cbo_anio\"></select></td>
                                    <td><textarea name=\"txt_descripcion_ing[]\" class=\"info_textarea\"></textarea></td>
                                    <td align=\"center\"><input name=\"txt_val_ing[]\" type=\"text\" class=\"txt_val_ing decimal\" value=\"0\"></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>    
                        <div style=\"width: 48%;margin: 10px auto;text-align: right;\">Total:&nbsp;<input class=\"txtval_total_ing\" type=\"text\" value=\"0\"></div>
                        <br><br><br> 

                        <table id=\"frm_otros_ingresos\"  width=\"80%\" class=\"table ui-widget ui-widget-content\">
                            <thead>
                                <tr>
                                    <td colspan=\"3\" align=\"center\" class=\"ui-widget-header\">
                                        Otros Ingresos:
                                        <input type=\"button\" id=\"add_otros_ing\" class=\"add-icon\" value=\"Nueva fila\">

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\" class=\"ui-widget-header\">Ingresos del declarante y de la sociedad de gananciales</td>
                                    <td class=\"ui-widget-header\" wdith=\"80px\" align=\"center\">Valor S/.</td>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td><input name=\"txt_otr_ing[]\" type=\"text\" class=\"row-edit\"></td>
                                    <td width=\"30px;\"></td>
                                    <td><input name=\"txt_otr_val[]\" type=\"text\" class=\"txt_valor_ing row-edit decimal\"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div style=\"width: 58%;margin: 10px auto;text-align: right;\">Total:&nbsp;<input type=\"text\" class=\"txt_valor_otr_ing decimal\" value=\"0\"></div>

                        <br>
                        <br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class=\"labelText\">
                            2. Cuadro de su Patrimonio Inmobiliario 
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br><br>  
                        <table width=\"80%\" id=\"table_bienes_inmuebles\" class=\"table ui-widget ui-widget-content\">
                            <thead>
                                <tr>
                                    <td class=\"ui-widget-header\" colspan=\"5\" align=\"center\">
                                        Bienes inmuebles: &nbsp;
                                        <input type=\"button\" class=\"add-icon\" id=\"add_bienes_inmuebles\" value=\"Nueva fila\"></td>
                                </tr>
                                <tr class=\"ui-widget-header\">
                                    <td align=\"center\">Tipo de Bien</td>
                                    <td align=\"center\">Ubicación</td>
                                    <td align=\"center\">Fecha de Adquisición</td>
                                    <td align=\"center\">Valor de<br> Autovalúo S/.</td>
                                    <td align=\"center\"width=\"50px\"></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input name=\"txt_tip_patrimonio[]\" value=\"1\" type=\"hidden\">
                                        <input name=\"txt_tip_bien[]\" type=\"text\" class=\"row-edit\">
                                    </td>
                                    <td><input name=\"txt_ubic[]\" type=\"text\" class=\"row-edit\"></td>
                                    <td><input name=\"txt_fec_pat[]\" type=\"text \" class=\"row-edit datepicker\"></td>
                                    <td><input name=\"txt_monto_pat[]\" type=\"text\" class=\"decimal txt_monto_pat row-edit decimal\" value=\"0\"></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>
                        <div style=\"width: 60%;margin: 10px auto;text-align: right;\">Total:&nbsp;<input class=\"txt_total_monto_pat\" type=\"text\" value=\"0\"></div>


                    </td>
                </tr>
                <tr>
                    <td>
                        <br><br>  
                        <table width=\"80%\" class=\"table ui-widget ui-widget-content\" id=\"table_bienes_muebles\">
                            <thead>
                                <tr>
                                    <td colspan=\"5\" class=\"ui-widget-header\" align=\"center\">
                                        Bienes muebles:
                                        <input type=\"button\" id=\"add_bienes_muebles\" class=\"add-icon\" value=\"Nueva fila\">
                                    </td>
                                </tr>
                                <tr class=\"ui-widget-header\">
                                    <td  align=\"center\">Tipo de Bien</td>
                                    <td  align=\"center\">Ubicación</td>
                                    <td  align=\"center\">Fecha de Adquisición</td>
                                    <td  align=\"center\">Valor de<br> Autovalúo S/.</td>
                                    <td width=\"50px\"></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input name=\"txt_tip_patrimonio[]\" value=\"2\" type=\"hidden\">
                                        <input name=\"txt_tip_bien[]\" type=\"text\" class=\"row-edit\">
                                    </td>
                                    <td><input name=\"txt_ubic[]\" type=\"text\" class=\"row-edit\"></td>
                                    <td><input name=\"txt_fec_pat[]\" type=\"text\" class=\"row-edit datepicker\"></td>
                                    <td><input name=\"txt_monto_pat[]\" type=\"text\" class=\"txt_monto_pat_mu row-edit decimal\" value=\"0\"></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>
                        <div style=\"width: 60%;margin: 10px auto;text-align: right;\">Total:&nbsp;<input class=\"txt_total_monto_muebles\" type=\"text\" value=\"0\"></div>

                    </td>
                </tr>
                <tr>
                    <td>
                        <table id=\"table_otros_bienes\" width=\"80%\" class=\"table ui-widget ui-widget-content\" >
                            <thead>
                                <tr>
                                    <td class=\"ui-widget-header\" colspan=\"3\" align=\"center\">
                                        Otros bienes:&nbsp; <input id=\"add_otros_bienes\" type=\"button\" class=\"add-icon\" value=\"Nueva fila\" >
                                    </td>
                                </tr>
                                <tr class=\"ui-widget-header\">
                                    <td  align=\"center\">Detallar</td>
                                    <td  align=\"center\">Valor</td>
                                    <td width=\"50px\"></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input name=\"txt_otr_descrip[]\" type=\"text\" class=\"row-edit\"></td>
                                    <td><input name=\"txt_otr_valor[]\"type=\"text\" class=\"txt_otr_valor row-edit decimal\" value=\"0\"></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <div style=\"width: 60%;margin: 10px auto;text-align: right;\">Total:&nbsp;<input class=\"total_otros_vienes\" type=\"text\" value=\"0\"></div>


                    </td>
                </tr>
                <tr>
                    <td>
                        <table  id=\"table_sistema_financiero\"width=\"80%\" class=\"table ui-widget ui-widget-content\">
                            <thead>
                                <tr>
                                    <td class=\"ui-widget-header\" colspan=\"4\" align=\"center\">
                                        Sistema Financiero &nbsp; 
                                        <input id=\"add_sistema_financiero\" type=\"button\" class=\"add-icon\" value=\"Nueva fila\" >
                                    </td>
                                </tr>
                                <tr class=\"ui-widget-header\">
                                    <td align=\"center\">Clase</td>
                                    <td  align=\"center\">Entidad o Tercero</td>
                                    <td align=\"center\">Monto S/.</td>
                                    <td width=\"50px\"></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input name=\"txt_clase_sis[]\" type=\"text\" class=\"row-edit\"></td>
                                    <td><input name=\"txt_enti_sis[]\" type=\"text\" class=\"row-edit\"></td>
                                    <td><input name=\"txt_val_sis[]\" type=\"text\" class=\"txt_val_sis row-edit decimal\" value=\"0\"></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <div style=\"width: 60%;margin: 10px auto;text-align: right;\">Total:&nbsp;<input class=\"total_sum_val_sis\" type=\"text\" value=\"0\"></div>

                    </td>
                </tr>
                <tr>
                    <td>
                        <table  id=\"table_acre_obli_car\" width=\"80%\" class=\"table ui-widget ui-widget-content\">
                            <thead>
                                <tr>
                                    <td class=\"ui-widget-header\" colspan=\"4\" align=\"center\">
                                        Acreencias y Obligaciones a su cargo &nbsp; 
                                        <input id=\"add_acre_obli_car\"  type=\"button\" class=\"add-icon\" value=\"Nueva fila\" >
                                    </td>
                                </tr>
                                <tr class=\"ui-widget-header\" >
                                    <td align=\"center\">Naturaleza de la deuda</td>
                                    <td align=\"center\">Entidad o Tercero</td>
                                    <td align=\"center\">Monto S/.</td>
                                    <td width=\"50px\"></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input name=\"txt_nat_acre[]\" type=\"text\" class=\"row-edit\"></td>
                                    <td><input name=\"txt_ent_acre[]\" type=\"text\" class=\"row-edit\"></td>
                                    <td><input name=\"txt_mon_acre[]\" type=\"text\" class=\"txt_mon_acre row-edit decimal\" value=\"0\"></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <div style=\"width: 60%;margin: 10px auto;text-align: right;\">Total:&nbsp;<input class=\"txt_sum_acre_obli\" type=\"text\" value=\"0\"></div>
                    </td>
                </tr>
            </table>
        </form>
    </div>  

</div>";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:formularios:frm_info_patrimonial.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  45 => 15,  43 => 14,  40 => 13,  37 => 12,  31 => 9,  29 => 8,  76 => 44,  48 => 19,  44 => 18,  36 => 12,  32 => 10,  28 => 8,  34 => 11,  23 => 3,  19 => 1,  513 => 379,  511 => 378,  505 => 375,  499 => 372,  492 => 368,  486 => 365,  471 => 353,  466 => 352,  461 => 350,  458 => 349,  349 => 244,  342 => 240,  325 => 226,  309 => 213,  292 => 199,  276 => 186,  260 => 173,  244 => 160,  225 => 144,  208 => 130,  188 => 113,  167 => 95,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 45,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 7,  42 => 5,  38 => 4,  33 => 3,  30 => 10,);
    }
}
