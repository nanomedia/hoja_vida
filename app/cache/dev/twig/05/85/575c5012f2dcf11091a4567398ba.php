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
\t\t\t


                                ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesoenMinJudA"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddpFA"]) {
            echo "  


                <tr>
                    <td><input type=\"hidden\" name=\"tra_tipo_mpub[]\" value=\"1\">
                        <select name=\"tra_ins_mpub[]\">
                            <option value=\"1\">MP</option>
                            <option value=\"2\">PJ</option>
                        </select>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFA"), "IdInstitucion"), "html", null, true);
            echo "
                    </td>
                    <td>
                        <input type=\"hidden\" name=\"tra_que_mpub[]\">
                        <textarea type=\"text\" name=\"tra_exp_mpub[]\" class=\"info_textarea\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFA"), "Expediente"), "html", null, true);
            echo "</textarea>
                    </td>
                    <td><textarea name=\"tra_mot_mpub[]\"  class=\"info_textarea\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFA"), "Motivo"), "html", null, true);
            echo "</textarea></td>
                    <td><textarea name=\"tra_est_mpub[]\" class=\"info_textarea\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFA"), "EstadoProc"), "html", null, true);
            echo "</textarea></td>
                      <td> ";
            // line 43
            echo $this->getAttribute($this->getContext($context, "ddpFA"), "boton");
            echo " </td>
                </tr>

\t\t\t\t\t\t\t\t
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpFA'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
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
        // line 78
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
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFB"), "Quejas"), "html", null, true);
            echo "</textarea></td>
                    <td><textarea name=\"tra_mot_mpub[]\" class=\"info_textarea\">";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFB"), "Motivo"), "html", null, true);
            echo "</textarea></td>
                    <td><textarea name=\"tra_est_mpub[]\" class=\"info_textarea\">";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFB"), "EstadoProc"), "html", null, true);
            echo "</textarea></td>
                       <td> ";
            // line 92
            echo $this->getAttribute($this->getContext($context, "ddpFB"), "boton");
            echo " </td>
                </tr>
\t\t\t\t\t\t\t\t
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpFB'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
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
        // line 122
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
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFC"), "Motivo"), "html", null, true);
            echo "</textarea></td>
                    <td><textarea type=\"text\" name=\"tra_est_mpub[]\" class=\"info_textarea\">";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFC"), "EstadoProc"), "html", null, true);
            echo "</textarea></td>
                      <td> ";
            // line 133
            echo $this->getAttribute($this->getContext($context, "ddpFC"), "boton");
            echo " </td>
                </tr>\t\t\t\t\t\t\t\t
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpFC'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
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
        // line 161
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesoenadmA"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddpFAV"]) {
            echo "  


              <tr>
                    <td><input type=\"hidden\" name=\"con_tipo_mpub[]\" value=\"1\">
                        <select name=\"con_ins_mpub[]\">
                            <option value=\"1\">MP</option>
                            <option value=\"2\">PJ</option>
                        </select>";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFAV"), "IdInstitucion"), "html", null, true);
            echo "
                    </td>
                    <td>
                        <input type=\"hidden\" name=\"con_que_mpub[]\">
                        <textarea name=\"con_exp_mpub[]\" class=\"info_textarea\">";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFAV"), "Expediente"), "html", null, true);
            echo "</textarea>
                    </td>
                    <td><textarea name=\"con_mot_mpub[]\" class=\"info_textarea\">";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFAV"), "Motivo"), "html", null, true);
            echo "</textarea></td>
                    <td><textarea name=\"con_est_mpub[]\" class=\"info_textarea\">";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFAV"), "EstadoProc"), "html", null, true);
            echo "</textarea></td>
                     <td> ";
            // line 177
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
        // line 183
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
        // line 210
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
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFBV"), "Quejas"), "html", null, true);
            echo "</textarea>
                    </td>
                    <td><textarea name=\"con_mot_mpub[]\" class=\"info_textarea\">";
            // line 222
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFBV"), "Motivo"), "html", null, true);
            echo "</textarea></td>
                    <td><textarea name=\"con_est_mpub[]\" class=\"info_textarea\">";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpFBV"), "EstadoProc"), "html", null, true);
            echo "</textarea></td>
                    <td> ";
            // line 224
            echo $this->getAttribute($this->getContext($context, "ddpFBV"), "boton");
            echo " </td>
                </tr>
\t\t\t\t \t\t\t
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpFBV'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
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
        return array (  359 => 228,  349 => 224,  345 => 223,  341 => 222,  336 => 220,  321 => 210,  292 => 183,  280 => 177,  276 => 176,  272 => 175,  267 => 173,  260 => 169,  247 => 161,  220 => 136,  207 => 132,  203 => 131,  189 => 122,  161 => 96,  151 => 92,  147 => 91,  143 => 90,  139 => 89,  123 => 78,  91 => 48,  80 => 43,  76 => 42,  224 => 140,  215 => 137,  211 => 133,  206 => 134,  165 => 100,  153 => 94,  149 => 93,  125 => 80,  92 => 49,  82 => 45,  78 => 44,  68 => 40,  61 => 36,  49 => 29,  194 => 114,  191 => 124,  187 => 112,  182 => 110,  140 => 90,  130 => 71,  126 => 70,  122 => 69,  100 => 55,  64 => 27,  56 => 25,  48 => 23,  41 => 21,  205 => 119,  196 => 100,  192 => 99,  188 => 98,  184 => 97,  180 => 96,  176 => 95,  168 => 101,  145 => 92,  136 => 68,  132 => 67,  128 => 66,  124 => 65,  120 => 64,  116 => 66,  108 => 60,  81 => 35,  67 => 39,  59 => 28,  55 => 27,  51 => 26,  83 => 25,  74 => 43,  66 => 20,  63 => 29,  50 => 14,  46 => 13,  43 => 23,  34 => 9,  26 => 6,  19 => 1,  102 => 37,  99 => 36,  96 => 35,  93 => 34,  90 => 33,  88 => 32,  77 => 25,  72 => 41,  69 => 22,  60 => 35,  57 => 13,  54 => 16,  52 => 24,  47 => 27,  45 => 9,  38 => 5,  33 => 4,  30 => 7,);
    }
}
