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
                    <th>Expediente</th>
                    <th>Motivo</th>
                    <th>Estado</th>
                    <th width=\"50px\"></th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type=\"hidden\" name=\"tra_tipo_mpub[]\" value=\"1\">
                        <input type=\"hidden\" name=\"tra_ins_mpub[]\">
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
        return array (  41 => 14,  35 => 12,  76 => 44,  48 => 19,  44 => 15,  36 => 12,  34 => 11,  32 => 11,  28 => 8,  63 => 40,  19 => 1,  505 => 373,  499 => 369,  493 => 366,  486 => 362,  480 => 359,  465 => 347,  460 => 346,  455 => 344,  452 => 343,  344 => 239,  338 => 236,  321 => 222,  304 => 208,  286 => 193,  269 => 179,  252 => 165,  236 => 152,  216 => 135,  196 => 118,  176 => 101,  158 => 86,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 45,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 27,  42 => 5,  38 => 13,  33 => 3,  30 => 10,);
    }
}
