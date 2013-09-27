<?php

/* hojaVidaBundle:formularios/conducta:procesos_MPublico.html.twig */
class __TwigTemplate_c149fba6c56f12add333d6b44894f026 extends Twig_Template
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
        7. EN EL MINISTERIO PÚBLICO
    </label>
</h3>
<div>
    <b>EN TRÁMITE</b>
    <div style=\"padding: 13px 0 0 21px;\">
        <label class=\"labelform\"> 1. PROCESOS DISCIPLINARIOS:</label><br><br>
        <div  class=\"add-icon\" id=\"add_min_pub_tra_proc_disc\" >Nueva fila</div><br><br>
        <table id=\"table_min_pub_tra_proc_disc\" width=\"80%\" class=\"table ui-widget ui-widget-content\">
            <thead>
                <tr class=\"ui-widget-header\">
                    <th>Institución </th>
                    <th>Expediente</th>
                    <th>Motivo</th>
                    <th>Estado</th>
                    <th width=\"50px\"></th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type=\"hidden\" name=\"tra_tipo_mpub[]\" value=\"1\">
                        <textarea name=\"tra_ins_mpub[]\" class=\"info_textarea\"></textarea>
                    </td>
                    <td>
                        <input type=\"hidden\" name=\"tra_que_mpub[]\">
                        <textarea type=\"text\" name=\"tra_exp_mpub[]\" class=\"info_textarea\"></textarea>
                    </td>
                    <td><textarea name=\"tra_mot_mpub[]\"  class=\"info_textarea\"></textarea></td>
                    <td><textarea name=\"tra_est_mpub[]\" class=\"info_textarea\"></textarea></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <br>
        <label class=\"labelform\">
            2. DENUNCIAS Y/O QUEJAS ANTE LA FISCALÍA SUPREMA DE CONTROL INTERNO:
        </label>Total:<br><br>
        <div  class=\"add-icon\" id=\"add_min_pub_tra_den_fisc\" >Nueva fila</div><br><br>
        <table  id=\"table_min_pub_tra_den_fisc\" width=\"80%\" class=\"table ui-widget ui-widget-content\">
            <thead>
                <tr class=\"ui-widget-header\">
                    <th>Nº</th>
                    <th>Denuncia y/o queja</th>
                    <th>Motivo</th>
                    <th>Estado</th>
                    <th width=\"50px\"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align=\"center\">
                        <b>1</b>
                    </td>
                    <td>
                        <input type=\"hidden\" name=\"tra_tipo_mpub[]\" value=\"2\">
                        <input type=\"hidden\"name=\"tra_ins_mpub[]\">
                        <input type=\"hidden\" name=\"tra_exp_mpub[]\">
                        <textarea name=\"tra_que_mpub[]\" class=\"info_textarea\"></textarea></td>
                    <td><textarea name=\"tra_mot_mpub[]\" class=\"info_textarea\"></textarea></td>
                    <td><textarea name=\"tra_est_mpub[]\" class=\"info_textarea\"></textarea></td>
                    <td></td>
                </tr>
            </tbody>
        </table><br>

        <label class=\"labelform\">
            3. INVESTIGACIONES PRELIMINARES:
        </label><br><br>
        <div  class=\"add-icon\" id=\"add_min_pub_tra_inv_prel\" >Nueva fila</div><br><br>
        <table id=\"table_min_pub_tra_inv_prel\" width=\"80%\" class=\"table ui-widget ui-widget-content\">

            <thead>
                <tr class=\"ui-widget-header\">
                    <th>Nº</th>
                    <th>Motivo</th>
                    <th>Estado</th>
                    <th width=\"30px\"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align=\"center\"><b>1</b></td>
                    <td>
                        <input type=\"hidden\" name=\"tra_tipo_mpub[]\" value=\"3\">
                        <input type=\"hidden\"name=\"tra_ins_mpub[]\">
                        <input type=\"hidden\" name=\"tra_que_mpub[]\">
                        <input type=\"hidden\" name=\"tra_exp_mpub[]\">
                        <textarea name=\"tra_mot_mpub[]\" class=\"info_textarea\"></textarea></td>
                    <td><textarea type=\"text\" name=\"tra_est_mpub[]\" class=\"info_textarea\"></textarea></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <b>CONCLUIDAS:</b>
    <div style=\"padding: 13px 0 0 21px;\">
        <label class=\"labelform\">
            1. PROCESOS DISCIPLINARIOS EN EL MINISTERIO P&Uacute;BLICO:
        </label><br><br>
        <div  class=\"add-icon\" id=\"add_min_pub_con_proc_desc\" >Nueva fila</div><br><br>
        <table  width=\"80%\" id=\"table_min_pub_con_proc_desc\" class=\"table ui-widget ui-widget-content\">
            <thead>
                <tr class=\"ui-widget-header\">
                    <th>Institución </th>
                    <th>Expediente</th>
                    <th>Motivo</th>
                    <th>Estado</th>
                    <th width=\"50px\"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type=\"hidden\" name=\"con_tipo_mpub[]\" value=\"1\">
                        <textarea name=\"con_ins_mpub[]\" class=\"info_textarea\"></textarea>
                    </td>
                    <td>
                        <input type=\"hidden\" name=\"con_que_mpub[]\">
                        <textarea name=\"con_exp_mpub[]\" class=\"info_textarea\"></textarea>
                    </td>
                    <td><textarea name=\"con_mot_mpub[]\" class=\"info_textarea\"></textarea></td>
                    <td><textarea name=\"con_est_mpub[]\" class=\"info_textarea\"></textarea></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <br>
        <label class=\"labelform\">
            2. DENUNCIAS Y/O QUEJAS ANTE LA FISCALÍA SUPREMA DE CONTROL INTERNO:
        </label>Total:<br><br>
        <div  class=\"add-icon\" id=\"add_min_pub_con_den_fis\" >Nueva fila</div><br><br>
        <table  width=\"80%\" id=\"table_min_pub_con_den_fis\" class=\"table ui-widget ui-widget-content\">

            <thead>
                <tr class=\"ui-widget-header\">
                    <th>Nº</th>
                    <th>Quejas, Visitas e Investigaciones</th>
                    <th>Motivo</th>
                    <th>Estado</th>
                    <th width=\"50px\"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align=\"center\"><b>1</b></td>
                        <input type=\"hidden\" name=\"con_tipo_mpub[]\" value=\"2\">
                        <input type=\"hidden\"name=\"con_ins_mpub[]\">
                        <input type=\"hidden\" name=\"con_exp_mpub[]\" >
                    <td><input type=\"text\" name=\"con_que_mpub[]\" class=\"row-edit\"></td>
                    <td><input type=\"text\" name=\"con_mot_mpub[]\" class=\"row-edit\"></td>
                    <td><input type=\"text\" name=\"con_est_mpub[]\"class=\"row-edit\"></td>
                    <td></td>
                </tr>
            </tbody>
        </table><br>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:formularios/conducta:procesos_MPublico.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
