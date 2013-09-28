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
                <th>Expediente Órgano</th>
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
                <th>Expediente Órgano</th>
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
        return array (  41 => 14,  35 => 12,  76 => 44,  48 => 19,  44 => 15,  36 => 12,  34 => 11,  32 => 11,  28 => 8,  63 => 40,  19 => 1,  508 => 376,  502 => 372,  496 => 369,  489 => 365,  483 => 362,  468 => 350,  463 => 349,  458 => 347,  455 => 346,  347 => 242,  341 => 239,  324 => 225,  307 => 211,  289 => 196,  272 => 182,  255 => 168,  239 => 155,  219 => 138,  199 => 121,  179 => 104,  158 => 86,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 45,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 27,  42 => 5,  38 => 13,  33 => 3,  30 => 10,);
    }
}