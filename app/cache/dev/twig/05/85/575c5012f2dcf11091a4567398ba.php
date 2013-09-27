<?php

/* hojaVidaBundle:update_formularios/conducta/html:procesos_MPublico.html.twig */
class __TwigTemplate_0585575c5012f2dcf11091a4567398ba extends Twig_Template
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
\t\t ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesoenMinJudA"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddpFA"]) {
            echo "  


                <tr>
                    <td><input type=\"hidden\" name=\"tra_tipo_mpub[]\" value=\"1\">
                        <textarea name=\"tra_ins_mpub[]\" class=\"info_textarea\">
                        ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFA"), "IdInstitucion"), "html", null, true);
            echo "
                        </textarea>
                    </td>
                    <td>
                        <input type=\"hidden\" name=\"tra_que_mpub[]\">
                        <textarea type=\"text\" name=\"tra_exp_mpub[]\" class=\"info_textarea\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFA"), "Expediente"), "html", null, true);
            echo "</textarea>
                    </td>
                    <td><textarea name=\"tra_mot_mpub[]\"  class=\"info_textarea\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFA"), "Motivo"), "html", null, true);
            echo "</textarea></td>
                    <td><textarea name=\"tra_est_mpub[]\" class=\"info_textarea\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFA"), "EstadoProc"), "html", null, true);
            echo "</textarea></td>
                      <td> ";
            // line 39
            echo $this->getAttribute($this->getContext($context, "ddpFA"), "boton");
            echo " </td>
                </tr>

\t\t\t\t\t\t\t\t
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpFA'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t
\t\t\t

\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
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
\t\t\t



                                ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesoenMinJudB"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddpFB"]) {
            echo "  


                <tr>
                    <td align=\"center\">
                        <b>1</b>
                    </td>
                    <td>
                        <input type=\"hidden\" name=\"tra_tipo_mpub[]\" value=\"2\">
                        <input type=\"hidden\"name=\"tra_ins_mpub[]\">
                        <input type=\"hidden\" name=\"tra_exp_mpub[]\">
                        <textarea name=\"tra_que_mpub[]\" class=\"info_textarea\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFB"), "Quejas"), "html", null, true);
            echo "</textarea></td>
                    <td><textarea name=\"tra_mot_mpub[]\" class=\"info_textarea\">";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFB"), "Motivo"), "html", null, true);
            echo "</textarea></td>
                    <td><textarea name=\"tra_est_mpub[]\" class=\"info_textarea\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFB"), "EstadoProc"), "html", null, true);
            echo "</textarea></td>
                       <td> ";
            // line 88
            echo $this->getAttribute($this->getContext($context, "ddpFB"), "boton");
            echo " </td>
                </tr>
\t\t\t\t\t\t\t\t
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpFB'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t

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
\t\t\t



                                ";
        // line 118
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesoenMinJudC"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddpFC"]) {
            echo "  

                <tr>
                    <td align=\"center\"><b>1</b></td>
                    <td>
                        <input type=\"hidden\" name=\"tra_tipo_mpub[]\" value=\"3\">
                        <input type=\"hidden\"name=\"tra_ins_mpub[]\">
                        <input type=\"hidden\" name=\"tra_que_mpub[]\">
                        <input type=\"hidden\" name=\"tra_exp_mpub[]\">
                        <textarea name=\"tra_mot_mpub[]\" class=\"info_textarea\">";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFC"), "Motivo"), "html", null, true);
            echo "</textarea></td>
                    <td><textarea type=\"text\" name=\"tra_est_mpub[]\" class=\"info_textarea\">";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFC"), "EstadoProc"), "html", null, true);
            echo "</textarea></td>
                      <td> ";
            // line 129
            echo $this->getAttribute($this->getContext($context, "ddpFC"), "boton");
            echo " </td>
                </tr>\t\t\t\t\t\t\t\t
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpFC'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "\t\t\t

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
\t\t\t

                                ";
        // line 157
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesoenadmA"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddpFAV"]) {
            echo "  


              <tr>
                    <td><input type=\"hidden\" name=\"con_tipo_mpub[]\" value=\"1\">
                        <textarea name=\"con_ins_mpub[]\" class=\"info_textarea\">
                        ";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFAV"), "IdInstitucion"), "html", null, true);
            echo "
                        </textarea>
                    </td>
                    <td>
                        <input type=\"hidden\" name=\"con_que_mpub[]\">
                        <textarea name=\"con_exp_mpub[]\" class=\"info_textarea\">";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFAV"), "Expediente"), "html", null, true);
            echo "</textarea>
                    </td>
                    <td><textarea name=\"con_mot_mpub[]\" class=\"info_textarea\">";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFAV"), "Motivo"), "html", null, true);
            echo "</textarea></td>
                    <td><textarea name=\"con_est_mpub[]\" class=\"info_textarea\">";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFAV"), "EstadoProc"), "html", null, true);
            echo "</textarea></td>
                     <td> ";
            // line 172
            echo $this->getAttribute($this->getContext($context, "ddpFAV"), "boton");
            echo " </td>
                </tr>
\t\t\t\t

\t\t\t\t\t\t\t\t
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpFAV'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "\t\t\t
  
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

\t\t\t\t
\t\t\t\t



                                ";
        // line 205
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesoenadmB"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddpFBV"]) {
            echo "  


              <tr>
                    <td align=\"center\"><b>1</b></td>
                        <input type=\"hidden\" name=\"con_tipo_mpub[]\" value=\"2\">
                        <input type=\"hidden\"name=\"con_ins_mpub[]\">
                        <input type=\"hidden\" name=\"con_exp_mpub[]\" >
                    <td>
                        <input type=\"hidden\" name=\"con_que_mpub[]\">
                        <textarea name=\"con_que_mpub[]\" class=\"info_textarea\">";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFBV"), "Quejas"), "html", null, true);
            echo "</textarea>
                    </td>
                    <td><textarea name=\"con_mot_mpub[]\" class=\"info_textarea\">";
            // line 217
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFBV"), "Motivo"), "html", null, true);
            echo "</textarea></td>
                    <td><textarea name=\"con_est_mpub[]\" class=\"info_textarea\">";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFBV"), "EstadoProc"), "html", null, true);
            echo "</textarea></td>
                    <td> ";
            // line 219
            echo $this->getAttribute($this->getContext($context, "ddpFBV"), "boton");
            echo " </td>
                </tr>
\t\t\t\t \t\t\t
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpFBV'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "\t\t\t\t
            </tbody>
        </table><br>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:update_formularios/conducta/html:procesos_MPublico.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 223,  344 => 219,  340 => 218,  336 => 217,  331 => 215,  316 => 205,  287 => 178,  275 => 172,  271 => 171,  267 => 170,  262 => 168,  254 => 163,  243 => 157,  216 => 132,  207 => 129,  203 => 128,  199 => 127,  185 => 118,  157 => 92,  147 => 88,  143 => 87,  139 => 86,  135 => 85,  119 => 74,  87 => 44,  76 => 39,  72 => 38,  68 => 37,  63 => 35,  55 => 30,  44 => 24,  19 => 1,);
    }
}
