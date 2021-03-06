<?php

/* hojaVidaBundle:formularios/conducta:procesos_judiciales.html.twig */
class __TwigTemplate_4373328d45661438630ea7090e074307 extends Twig_Template
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
        echo "<h3><label class=\"labelform\">2. PROCESOS JUDICIALES:</label></h3>
<div>
    <label class=\"labelform\"> PROCESOS JUDICIALES CIVILES, PENALES, DE FAMILIA, LABORALES COMO DEMANDANTE / DENUNCIANTE:</label>
    <br><br>
    <div  class=\"add-icon\" id=\"add_proc_jud_civ_lab_d_d\" >Nueva fila</div><br><br>
    <table width=\"80%\" id=\"table_proc_jud_civ_lab_d_d\" class=\"table ui-widget ui-widget-content\">

        <thead>

            <tr class=\"ui-widget-header\" >
                <th>Expediente</th>
                <th>Órgano Jurisdiccional</th>
                <th>Demandado / Denunciado</th>
                <th>Materia</th>
                <th>Estado</th>
                <th width=\"50px\"></th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input name=\"hd_tipo_jud[]\" type=\"hidden\" value=\"1\">
                    <textarea name=\"txt_exp_con[]\" class=\"info_textarea\"></textarea></td>
                <td><textarea name=\"txt_exp_org_con[]\" class=\"info_textarea\"></textarea></td>
                <td><textarea name=\"txt_dem_agre_con[]\" class=\"info_textarea\"></textarea></td>
                <td><textarea name=\"txt_materia_con[]\" class=\"info_textarea\"></textarea></td>
                <td><textarea name=\"txt_estado_con[]\" class=\"info_textarea\"></textarea></td>
                <td></td>
            </tr>
        </tbody>

    </table>
    <br>
    <label class=\"labelform\">  COMO DEMANDADO / DENUNCIADO:</label><br><br>
    <div  class=\"add-icon\" id=\"add_dem_den\" >Nueva fila</div><br><br>
    <table  width=\"80%\" id=\"table_dem_den\" class=\"table ui-widget ui-widget-content\">
        <thead>

            <tr class=\"ui-widget-header\">
                <th>Expediente</th>
                <th>Órgano Jurisdiccional</th>
                <th>Demandante / Denunciado</th>
                <th>Materia</th>
                <th>Estado</th>
                <th width=\"50px\"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input name=\"hd_tipo_jud[]\" type=\"hidden\" value=\"2\">
                    <textarea name=\"txt_exp_con[]\" type=\"text\" class=\"info_textarea\"></textarea></td>
                <td><textarea name=\"txt_exp_org_con[]\" type=\"text\" class=\"info_textarea\"></textarea></td>
                <td><textarea name=\"txt_dem_agre_con[]\" type=\"text\" class=\"info_textarea\"></textarea></td>
                <td><textarea name=\"txt_materia_con[]\" type=\"text\" class=\"info_textarea\"></textarea></td>
                <td><textarea name=\"txt_estado_con[]\" type=\"text\" class=\"info_textarea\"></textarea></td>
                <td></td>
            </tr>
            

        </tbody>

    </table><br>

    <label class=\"labelform\">COMO AGRAVIADO:</label><br><br>
    <div  class=\"add-icon\" id=\"add_como_agraviado\" >Nueva fila</div><br><br>
    <table width=\"80%\" id=\"table_como_agraviado\" class=\"table ui-widget ui-widget-content\">
        <thead>
            <tr class=\"ui-widget-header\">
                <th>Expediente</th>
                <th>Órgano Jurisdiccional</th>
                <th>Agresor</th>
                <th>Materia</th>
                <th>Estado</th>
                <th width=\"50px\"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input name=\"hd_tipo_jud[]\" type=\"hidden\" value=\"3\">
                    <textarea name=\"txt_exp_con[]\" type=\"text\" class=\"info_textarea\"></textarea></td>
                <td><textarea name=\"txt_exp_org_con[]\" type=\"text\" class=\"info_textarea\"></textarea></td>
                <td><textarea name=\"txt_dem_agre_con[]\" type=\"text\" class=\"info_textarea\"></textarea></td>
                <td><textarea name=\"txt_materia_con[]\" type=\"text\" class=\"info_textarea\"></textarea></td>
                <td><textarea name=\"txt_estado_con[]\" type=\"text\" class=\"info_textarea\"></textarea></td>
                <td></td>
            </tr>
           
        </tbody>
    </table>
    <br><br>
</div>";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:formularios/conducta:procesos_judiciales.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 67,  104 => 66,  70 => 38,  48 => 19,  44 => 18,  34 => 11,  19 => 1,  473 => 344,  467 => 340,  461 => 337,  454 => 333,  448 => 330,  433 => 318,  428 => 317,  423 => 315,  420 => 314,  335 => 233,  318 => 219,  301 => 205,  283 => 190,  266 => 176,  249 => 162,  233 => 149,  213 => 132,  197 => 119,  177 => 102,  159 => 87,  137 => 68,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  74 => 39,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 7,  42 => 5,  38 => 4,  33 => 3,  30 => 10,);
    }
}
