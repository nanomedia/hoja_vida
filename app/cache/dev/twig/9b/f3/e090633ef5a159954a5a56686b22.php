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
            // line 30
            echo "
                <tr>
                    <td><input type=\"hidden\" name=\"tra_tipo_pjud[]\" value=\"\">
                        <textarea name=\"tra_ins_pjud[]\" class=\"info_textarea\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFA"), "IdInstitucion"), "html", null, true);
            echo "</textarea>
                    </td>
                    <td>

                        <textarea name=\"tra_exp_pjud[]\" class=\"info_textarea\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFA"), "Expediente"), "html", null, true);
            echo "</textarea>
                        <input type=\"hidden\" name=\"tra_que_pjud[]\">
                    </td>
                    <td><textarea name=\"tra_mot_pjud[]\" class=\"info_textarea\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFA"), "Motivo"), "html", null, true);
            echo "</textarea></td>
                    <td><textarea name=\"tra_est_pjud[]\" class=\"info_textarea\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFA"), "EstadoProc"), "html", null, true);
            echo "</textarea></td>
                    <td> ";
            // line 42
            echo $this->getAttribute($this->getContext($context, "ddpFA"), "boton");
            echo " </td>
                </tr>
\t\t\t\t\t\t\t\t
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpFA'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
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
        // line 77
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
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFB"), "Quejas"), "html", null, true);
            echo "</textarea>
                    </td>
                    <td><textarea name=\"tra_mot_pjud[]\" class=\"info_textarea\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFB"), "Motivo"), "html", null, true);
            echo "</textarea></td>
                    <td><textarea name=\"tra_est_pjud[]\" class=\"info_textarea\">";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFB"), "EstadoProc"), "html", null, true);
            echo "</textarea></td>
                      <td> ";
            // line 91
            echo $this->getAttribute($this->getContext($context, "ddpFB"), "boton");
            echo " </td>
                </tr>


\t\t\t\t\t\t\t\t
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpFB'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
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
        // line 121
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
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFC"), "Motivo"), "html", null, true);
            echo "</textarea>
                    </td>
                    <td><textarea type=\"text\" name=\"tra_est_pjud[]\" class=\"info_textarea\">";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFC"), "EstadoProc"), "html", null, true);
            echo "</textarea></td>
                    <td> ";
            // line 134
            echo $this->getAttribute($this->getContext($context, "ddpFC"), "boton");
            echo " </td>
                </tr>\t\t\t
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpFC'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "            </tbody>
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
               ";
        // line 158
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesoenPodJudD"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddpFD"]) {
            echo "  
 
                <tr>
                    <td><input type=\"hidden\" name=\"con_tipo_pjud[]\" value=\"1\">
                        <textarea name=\"con_ins_pjud[]\" class=\"info_textarea\">";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFD"), "IdInstitucion"), "html", null, true);
            echo "</textarea>
                    </td>
                    <td>
                        <input type=\"hidden\" name=\"con_que_pjud[]\">
                        <textarea name=\"con_exp_pjud[]\" class=\"info_textarea\">";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFD"), "Expediente"), "html", null, true);
            echo "</textarea>
                    </td>
                    <td><textarea  name=\"con_mot_pjud[]\" class=\"info_textarea\">";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFD"), "Motivo"), "html", null, true);
            echo "</textarea></td>
                    <td><textarea  name=\"con_est_pjud[]\" class=\"info_textarea\">";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFD"), "EstadoProc"), "html", null, true);
            echo "</textarea></td>
                    <td></td>
                </tr>
\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpFD'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "
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
                
                
                ";
        // line 194
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesoenPodJudE"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddpFE"]) {
            echo "  
                <tr>
                    <td><b>1</b></td>
                    <td>
                        <input type=\"hidden\" name=\"con_tipo_pjud[]\" value=\"2\">
                        <input type=\"hidden\"name=\"con_ins_pjud[]\">
                        <input type=\"hidden\" name=\"con_exp_pjud[]\">
                        <textarea name=\"con_que_pjud[]\" class=\"info_textarea\"";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFE"), "Quejas"), "html", null, true);
            echo "></textarea></td>
                    <td><textarea name=\"con_mot_pjud[]\" class=\"info_textarea\">";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFE"), "Motivo"), "html", null, true);
            echo "</textarea></td>
                    <td><textarea name=\"con_est_pjud[]\" class=\"info_textarea\">";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFE"), "EstadoProc"), "html", null, true);
            echo "</textarea></td>
                    <td></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpFE'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "                

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
                
                ";
        // line 227
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesoenPodJudF"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddpFF"]) {
            echo "  
                <tr>
                    <td><b>1</b></td>
                    <td>
                        <input type=\"hidden\" name=\"con_tipo_pjud[]\" value=\"3\">
                        <input type=\"hidden\"name=\"con_ins_pjud[]\">
                        <input type=\"hidden\" name=\"con_que_pjud[]\">
                        <input type=\"hidden\" name=\"con_exp_pjud[]\">
                        <textarea  name=\"con_mot_pjud[]\" class=\"info_textarea\" >";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFF"), "Motivo"), "html", null, true);
            echo "</textarea></td>
                    <td><textarea  name=\"con_est_pjud[]\" class=\"info_textarea\">";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFF"), "EstadoProc"), "html", null, true);
            echo "</textarea></td>
                    <td></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpFF'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "            </tbody>
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
        return array (  381 => 240,  371 => 236,  367 => 235,  354 => 227,  332 => 207,  322 => 203,  318 => 202,  314 => 201,  302 => 194,  279 => 173,  269 => 169,  265 => 168,  260 => 166,  253 => 162,  244 => 158,  221 => 137,  212 => 134,  208 => 133,  203 => 131,  188 => 121,  162 => 97,  150 => 91,  146 => 90,  142 => 89,  137 => 87,  122 => 77,  89 => 46,  79 => 42,  75 => 41,  71 => 40,  65 => 37,  58 => 33,  53 => 30,  49 => 29,  19 => 1,);
    }
}
