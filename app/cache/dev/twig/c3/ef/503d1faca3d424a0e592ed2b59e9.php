<?php

/* hojaVidaBundle:update_formularios/conducta/html:procesos_administrativos.html.twig */
class __TwigTemplate_c3ef503d1faca3d424a0e592ed2b59e9 extends Twig_Template
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
                <td><textarea type=\"text\" name=\"txt_res_adm1[]\" class=\"info_textarea\"></textarea></td>
                <td><textarea type=\"text\" name=\"txt_san_adm1[]\" class=\"info_textarea\"></textarea></td>
                <td><textarea type=\"text\" name=\"txt_est_adm1[]\" class=\"info_textarea\"></textarea></td>
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
                <td>
                    <select name=\"cbo_ins_adm2[]\">
                        <option value=\"0\">-Elegir-</option>
                        <option value=\"1\">PJ</option>
                        <option value=\"2\">MP</option>
                        <option value=\"4\">SERVIR</option>
                    </select>
                </td>

                <td><textarea type=\"text\" name=\"txt_res_adm2[]\" class=\"info_textarea\"></textarea></td>
                <td><textarea type=\"text\" name=\"txt_san_adm2[]\" class=\"info_textarea\"></textarea></td>
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
                <td>
                    <select name=\"cbo_ins_adm3[]\">
                        <option value=\"0\">-Elegir-</option>
                        <option value=\"1\">MP</option>
                        <option value=\"2\">PJ</option>
                    </select>
                </td>
                <td><textarea type=\"text\" name=\"txt_san_adm3[]\" class=\"info_textarea\"></textarea></td>
                <td><textarea type=\"text\" name=\"txt_res_adm3[]\" class=\"info_textarea\"></textarea></td>
                <td></td>
            </tr>

        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:update_formularios/conducta/html:procesos_administrativos.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  109 => 40,  106 => 39,  103 => 38,  100 => 37,  97 => 36,  95 => 35,  84 => 28,  79 => 26,  76 => 25,  67 => 17,  64 => 16,  61 => 15,  58 => 14,  55 => 13,  53 => 12,  50 => 11,  47 => 10,  45 => 9,  38 => 5,  33 => 4,  30 => 3,);
    }
}
