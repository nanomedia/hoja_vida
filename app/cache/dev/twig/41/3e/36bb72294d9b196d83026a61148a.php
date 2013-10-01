<?php

/* hojaVidaBundle:formularios/conducta:procesos_PJudicial.html.twig */
class __TwigTemplate_413e36bb72294d9b196d83026a61148a extends Twig_Template
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
                    <th>Expediente</th>
                    <th>Motivo</th>
                    <th>Estado</th>
                    <th width=\"50px\"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type=\"hidden\" name=\"tra_tipo_pjud[]\" value=\"1\">
                        <input type=\"hidden\" name=\"tra_ins_pjud[]\">
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
                        <textarea name=\"con_ins_pjud[]\" class=\"info_textarea\"></textarea>
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
        return "hojaVidaBundle:formularios/conducta:procesos_PJudicial.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 67,  104 => 66,  70 => 38,  48 => 19,  44 => 18,  34 => 11,  19 => 1,  473 => 344,  467 => 340,  461 => 337,  454 => 333,  448 => 330,  433 => 318,  428 => 317,  423 => 315,  420 => 314,  335 => 233,  318 => 219,  301 => 205,  283 => 190,  266 => 176,  249 => 162,  233 => 149,  213 => 132,  197 => 119,  177 => 102,  159 => 87,  137 => 68,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  74 => 39,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 7,  42 => 5,  38 => 4,  33 => 3,  30 => 10,);
    }
}
