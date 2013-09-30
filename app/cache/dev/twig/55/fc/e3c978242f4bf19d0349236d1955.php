<?php

/* hojaVidaBundle:formularios/conducta:procesos_administrativos.html.twig */
class __TwigTemplate_55fce3c978242f4bf19d0349236d1955 extends Twig_Template
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
<h3>
    <label class=\"labelform\">
        3. PROCEDIMIENTOS ADMINISTRATIVOS EN LA ADMINISTRACIÓN PÚBLICA EN GENERAL
    </label>
</h3>
<div>
    <div  class=\"add-icon\" id=\"add_pro_ad_pub_gen\" >Nueva fila</div><br><br>
    <table width=\"80%\" id=\"table_pro_ad_pub_gen\" class=\"table ui-widget ui-widget-content\">
        <thead>
            <tr class=\"ui-widget-header\">
                <th>Institución </th>
                <th>Resolución</th>
                <th>Sanción</th>
                <th>Estado</th>
                <th width=\"50px\"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><textarea name=\"cbo_ins_adm1[]\" class=\"info_textarea\"></textarea></td>
                <td><textarea name=\"txt_res_adm1[]\" class=\"info_textarea\"></textarea></td>
                <td><textarea name=\"txt_san_adm1[]\" class=\"info_textarea\"></textarea></td>
                <td><textarea name=\"txt_est_adm1[]\" class=\"info_textarea\"></textarea></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
<h3>
    <label class=\"labelform\">
        4. SANCIONES ADMINISTRATIVAS EN LA ADMINISTRACIÓN PÚBLICA GENERAL
    </label>
</h3>
<div>
    <div  class=\"add-icon\" id=\"add_sanciones_admin_pub\" >Nueva fila</div><br><br>
    <table  width=\"80%\" id=\"table_sanciones_admin_pub\" class=\"table ui-widget ui-widget-content\">
        <thead>
            <tr class=\"ui-widget-header\">
                <th>Institución </th>
                <th>Resolución</th>
                <th>Sanci&oacute;n</th>
                <th width=\"50px\"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><textarea name=\"cbo_ins_adm2[]\" class=\"info_textarea\"></textarea></td>
                <td><textarea name=\"txt_res_adm2[]\" class=\"info_textarea\"></textarea></td>
                <td><textarea name=\"txt_san_adm2[]\" class=\"info_textarea\"></textarea></td>
                <td></td>
            </tr>

        </tbody>
    </table>
</div>
<h3>
    <label class=\"labelform\">
        5. MEDIDAS DISCIPLINARIAS EN EL PODER JUDICIAL Y MINISTERIO PÚBLICO 
    </label>
</h3>
<div>
    <div  class=\"add-icon\" id=\"add_med_disc_pod_jud\" >Nueva fila</div><br><br>
    <table width=\"80%\" id=\"table_med_disc_pod_jud\" class=\"table ui-widget ui-widget-content\">

        <thead>

            <tr class=\"ui-widget-header\">
                <th>Institución </th>
                <th>Sanci&oacute;n</th>                                    
                <th>Expediente, Resoluci&oacute;n y Motivo</th>
                <th width=\"50px\"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><textarea name=\"cbo_ins_adm3[]\" class=\"info_textarea\"></textarea></td>
                <td><textarea name=\"txt_san_adm3[]\" class=\"info_textarea\"></textarea></td>
                <td><textarea name=\"txt_res_adm3[]\" class=\"info_textarea\"></textarea></td>
                <td></td>
            </tr>

        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:formularios/conducta:procesos_administrativos.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 14,  35 => 12,  76 => 44,  48 => 19,  44 => 15,  36 => 12,  34 => 11,  32 => 11,  28 => 8,  63 => 40,  19 => 1,  505 => 373,  499 => 369,  493 => 366,  486 => 362,  480 => 359,  465 => 347,  460 => 346,  455 => 344,  452 => 343,  344 => 239,  338 => 236,  321 => 222,  304 => 208,  286 => 193,  269 => 179,  252 => 165,  236 => 152,  216 => 135,  196 => 118,  176 => 101,  158 => 86,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 45,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 27,  42 => 5,  38 => 13,  33 => 3,  30 => 10,);
    }
}
