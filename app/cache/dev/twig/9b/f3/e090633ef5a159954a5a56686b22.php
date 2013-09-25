<?php

/* hojaVidaBundle:update_formularios/conducta/html:procesos_PJudicial.html.twig */
class __TwigTemplate_9bf3e090633ef5a159954a5a56686b22 extends Twig_Template
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
        echo "<h3>
    <label class=\"labelform\">
        6. EN EL PODER JUDICIAL
    </label>
</h3>
<div>

    <b>EN TRÁMITE:</b>
    <div style=\"padding: 13px 0 0 21px;\">
        <label class=\"labelform\">
            1. PROCESOS DISCIPLINARIOS:
        </label><br><br>
        <div  class=\"add-icon\" id=\"add_tra_proc_disc\" >Nueva fila</div><br><br>
        <table  id=\"table_tra_proc_disc\" width=\"80%\" class=\"table ui-widget ui-widget-content\">
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
                    <td><input type=\"hidden\" name=\"tra_tipo_pjud[]\" value=\"1\">
                        <select name=\"tra_ins_pjud[]\">
                            <option value=\"1\">MP</option>
                            <option value=\"2\">PJ</option>
                        </select>
                    </td>
                    <td>

                        <textarea type=\"text\" name=\"tra_exp_pjud[]\" class=\"info_textarea\"></textarea>
                        <input type=\"hidden\" name=\"tra_que_pjud[]\">
                    </td>
                    <td><textarea name=\"tra_mot_pjud[]\" class=\"info_textarea\"></textarea></td>
                    <td><textarea name=\"tra_est_pjud[]\" class=\"info_textarea\"></textarea></td>
                    <td></td>
                </tr>

            </tbody>
        </table>
        <br>
        <label class=\"labelform\">
            2. QUEJAS, VISITAS E INVESTIGACIONES ANTE LA OCMA / ODECMA
        </label>Total:<br><br>
        <div  class=\"add-icon\" id=\"add_que_vis_inv\" >Nueva fila</div><br><br>
        <table id=\"table_que_vis_inv\" width=\"80%\" class=\"table ui-widget ui-widget-content\">
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
                    <td>
                        <input type=\"hidden\" name=\"tra_tipo_pjud[]\" value=\"2\">
                        <input type=\"hidden\" name=\"tra_ins_pjud[]\">
                        <input type=\"hidden\" name=\"tra_exp_pjud[]\" >
                        <textarea  type=\"hidden\" name=\"tra_que_pjud[]\" class=\"info_textarea\"></textarea>
                    </td>
                    <td><textarea name=\"tra_mot_pjud[]\" class=\"info_textarea\"></textarea></td>
                    <td><textarea name=\"tra_est_pjud[]\" class=\"info_textarea\"></textarea></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <br>

        <label class=\"labelform\">
            3. INVESTIGACIONES PRELIMINARES:
        </label><br><br>
        <div  class=\"add-icon\" id=\"add_invs_preliminares\" >Nueva fila</div><br><br>
        <table width=\"80%\" id=\"table_invs_preliminares\" class=\"table ui-widget ui-widget-content\">
            <thead>
                <tr class=\"ui-widget-header\">
                    <th>Nº</th>
                    <th>Motivo</th>
                    <th>Estado</th>
                    <th width=\"50px\"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b>1</b></td>
                    <td>
                        <input type=\"hidden\" name=\"tra_tipo_pjud[]\" value=\"3\">
                        <input type=\"hidden\"name=\"tra_ins_pjud[]\">
                        <input type=\"hidden\" name=\"tra_que_pjud[]\">
                        <input type=\"hidden\" name=\"tra_exp_pjud[]\">
                        <textarea name=\"tra_mot_pjud[]\" class=\"info_textarea\"></textarea>
                    </td>
                    <td><textarea type=\"text\" name=\"tra_est_pjud[]\" class=\"info_textarea\"></textarea></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <b>CONCLUIDAS:</b>
    <div style=\"padding: 13px 0 0 21px;\">
        <label class=\"labelform\">
            1. PROCESOS DISCIPLINARIOS:
        </label><br><br>
        <div  class=\"add-icon\" id=\"add_proc_desciplinarios\" >Nueva fila</div><br><br>
        <table id=\"table_proc_desciplinarios\" width=\"80%\" class=\"table ui-widget ui-widget-content\">
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
                    <td><input type=\"hidden\" name=\"con_tipo_pjud[]\" value=\"1\">
                        <select name=\"con_ins_pjud[]\">
                            <option value=\"1\">MP</option>
                            <option value=\"2\">PJ</option>
                        </select>
                    </td>
                    <td>
                        <input type=\"hidden\" name=\"con_que_pjud[]\">
                        <textarea name=\"con_exp_pjud[]\" class=\"info_textarea\"></textarea>
                    </td>
                    <td><textarea  name=\"con_mot_pjud[]\" class=\"info_textarea\"></textarea></td>
                    <td><textarea  name=\"con_est_pjud[]\" class=\"info_textarea\"></textarea></td>
                    <td></td>
                </tr>

            </tbody>
        </table>
        <br>
        <label class=\"labelform\">
            2. QUEJAS, VISITAS E INVESTIGACIONES ANTE LA OCMA / ODECMA
        </label>Total:<br><br>
        <div  class=\"add-icon\" id=\"add_que_vis_ocma\" >Nueva fila</div><br><br>
        <table id=\"table_que_vis_ocma\"  width=\"80%\" class=\"table ui-widget ui-widget-content\">
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
                    <td><b>1</b></td>
                    <td>
                        <input type=\"hidden\" name=\"con_tipo_pjud[]\" value=\"2\">
                        <input type=\"hidden\"name=\"con_ins_pjud[]\">
                        <input type=\"hidden\" name=\"con_exp_pjud[]\">
                        <textarea name=\"con_que_pjud[]\" class=\"info_textarea\"></textarea></td>
                    <td><textarea name=\"con_mot_pjud[]\" class=\"info_textarea\"></textarea></td>
                    <td><textarea name=\"con_est_pjud[]\" class=\"info_textarea\"></textarea></td>
                    <td></td>
                </tr>

            </tbody>
        </table><br>

        <label class=\"labelform\">
            3. INVESTIGACIONES PRELIMINARES:
        </label><br><br>
        <div  class=\"add-icon\" id=\"add_inv_preli\">Nueva fila</div><br><br>
        <table width=\"80%\" id=\"table_inv_preli\"class=\"table ui-widget ui-widget-content\">
            <thead>
                <tr class=\"ui-widget-header\">
                    <th>Nº</th>
                    <th>Motivo</th>
                    <th>Estado</th>
                    <th width=\"50px\"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b>1</b></td>
                    <td>
                        <input type=\"hidden\" name=\"con_tipo_pjud[]\" value=\"3\">
                        <input type=\"hidden\"name=\"con_ins_pjud[]\">
                        <input type=\"hidden\" name=\"con_que_pjud[]\">
                        <input type=\"hidden\" name=\"con_exp_pjud[]\">
                        <textarea  name=\"con_mot_pjud[]\" class=\"info_textarea\" ></textarea></td>
                    <td><textarea  name=\"con_est_pjud[]\" class=\"info_textarea\"></textarea></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:update_formularios/conducta/html:procesos_PJudicial.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  109 => 40,  106 => 39,  103 => 38,  100 => 37,  97 => 36,  95 => 35,  84 => 28,  79 => 26,  76 => 25,  67 => 17,  64 => 16,  61 => 15,  58 => 14,  55 => 13,  53 => 12,  50 => 11,  47 => 10,  45 => 9,  38 => 5,  33 => 4,  30 => 3,);
    }
}
