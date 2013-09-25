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

                                ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesoadministrativosD"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddpD"]) {
            echo "  
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><textarea name=\"cbo_ins_adm1[]\" class=\"info_textarea\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpD"), "IdInstitucion"), "html", null, true);
            echo "</textarea></td>
\t\t\t\t\t\t\t\t\t<td><textarea type=\"text\" name=\"txt_res_adm1[]\" class=\"info_textarea\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpD"), "Resolucion"), "html", null, true);
            echo "</textarea></td>
\t\t\t\t\t\t\t\t\t<td><textarea type=\"text\" name=\"txt_san_adm1[]\" class=\"info_textarea\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpD"), "Sancion"), "html", null, true);
            echo "</textarea></td>
\t\t\t\t\t\t\t\t\t<td><textarea type=\"text\" name=\"txt_est_adm1[]\" class=\"info_textarea\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpD"), "Estado"), "html", null, true);
            echo "</textarea></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpD'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t

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
\t\t

                                ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesoadministrativosE"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddpE"]) {
            echo "  
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select name=\"cbo_ins_adm2[]\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">-Elegir-</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">PJ</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">MP</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">SERVIR</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpE"), "IdInstitucion"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td><textarea type=\"text\" name=\"txt_res_adm2[]\" class=\"info_textarea\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpE"), "Resolucion"), "html", null, true);
            echo "</textarea></td>
\t\t\t\t\t\t\t\t\t\t<td><textarea type=\"text\" name=\"txt_san_adm2[]\" class=\"info_textarea\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpE"), "Sancion"), "html", null, true);
            echo "</textarea></td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t</tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpE'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t


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

                                ";
        // line 101
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesoadministrativosF"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddpF"]) {
            echo "  
\t\t\t\t\t

            <tr>
                <td>
                    <select name=\"cbo_ins_adm3[]\">
                        <option value=\"0\">-Elegir-</option>
                        <option value=\"1\">MP</option>
                        <option value=\"2\">PJ</option>
                    </select>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpF"), "IdInstitucion"), "html", null, true);
            echo "
                </td>
                <td><textarea type=\"text\" name=\"txt_san_adm3[]\" class=\"info_textarea\">";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpF"), "Sancion"), "html", null, true);
            echo "</textarea></td>
                <td><textarea type=\"text\" name=\"txt_res_adm3[]\" class=\"info_textarea\">";
            // line 113
            echo "</textarea></td>
                <td></td>
            </tr>
\t\t\t\t\t\t\t\t\t

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpF'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "\t\t


        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:update_formularios/conducta/html:procesos_administrativos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 119,  185 => 113,  181 => 112,  176 => 110,  162 => 101,  134 => 75,  123 => 70,  119 => 69,  113 => 66,  97 => 55,  71 => 31,  60 => 26,  56 => 25,  52 => 24,  48 => 23,  41 => 21,  19 => 1,);
    }
}
