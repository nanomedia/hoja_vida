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
\t\t\t
\t\t\t

                                ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesoenPodJudA"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddpFA"]) {
            echo "  

                <tr>
                    <td><input type=\"hidden\" name=\"tra_tipo_pjud[]\" value=\"1\">
                        <select name=\"tra_ins_pjud[]\">
                            <option value=\"1\">MP</option>
                            <option value=\"2\">PJ</option>
                        </select>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFA"), "IdInstitucion"), "html", null, true);
            echo "
                    </td>
                    <td>

                        <textarea type=\"text\" name=\"tra_exp_pjud[]\" class=\"info_textarea\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFA"), "Expediente"), "html", null, true);
            echo "</textarea>
                        <input type=\"hidden\" name=\"tra_que_pjud[]\">
                    </td>
                    <td><textarea name=\"tra_mot_pjud[]\" class=\"info_textarea\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFA"), "Motivo"), "html", null, true);
            echo "</textarea></td>
                    <td><textarea name=\"tra_est_pjud[]\" class=\"info_textarea\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFA"), "EstadoProc"), "html", null, true);
            echo "</textarea></td>
                    <td></td>
                </tr>
\t\t\t\t\t\t\t\t
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpFA'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t

\t\t\t
    
\t\t\t\t
\t\t\t\t

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





                                ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesoenPodJudB"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddpFB"]) {
            echo "  



                <tr>
                    <td align=\"center\"><b>1</b></td>
                    <td>
                        <input type=\"hidden\" name=\"tra_tipo_pjud[]\" value=\"2\">
                        <input type=\"hidden\" name=\"tra_ins_pjud[]\">
                        <input type=\"hidden\" name=\"tra_exp_pjud[]\" >
                        <textarea  type=\"hidden\" name=\"tra_que_pjud[]\" class=\"info_textarea\">";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFB"), "Quejas"), "html", null, true);
            echo "</textarea>
                    </td>
                    <td><textarea name=\"tra_mot_pjud[]\" class=\"info_textarea\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFB"), "Motivo"), "html", null, true);
            echo "</textarea></td>
                    <td><textarea name=\"tra_est_pjud[]\" class=\"info_textarea\">";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFB"), "EstadoProc"), "html", null, true);
            echo "</textarea></td>
                    <td></td>
                </tr>


\t\t\t\t\t\t\t\t
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpFB'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t

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


                                ";
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesoenPodJudC"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddpFC"]) {
            echo "  


                <tr>
                    <td><b>1</b></td>
                    <td>
                        <input type=\"hidden\" name=\"tra_tipo_pjud[]\" value=\"3\">
                        <input type=\"hidden\"name=\"tra_ins_pjud[]\">
                        <input type=\"hidden\" name=\"tra_que_pjud[]\">
                        <input type=\"hidden\" name=\"tra_exp_pjud[]\">
                        <textarea name=\"tra_mot_pjud[]\" class=\"info_textarea\">";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFC"), "Motivo"), "html", null, true);
            echo "</textarea>
                    </td>
                    <td><textarea type=\"text\" name=\"tra_est_pjud[]\" class=\"info_textarea\">";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFC"), "EstadoProc"), "html", null, true);
            echo "</textarea></td>
                    <td></td>
                </tr>

\t\t\t\t\t\t\t\t
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpFC'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "\t\t\t

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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 142,  205 => 136,  200 => 134,  185 => 124,  159 => 100,  146 => 93,  142 => 92,  137 => 90,  122 => 80,  89 => 49,  78 => 44,  74 => 43,  68 => 40,  61 => 36,  49 => 29,  19 => 1,);
    }
}
