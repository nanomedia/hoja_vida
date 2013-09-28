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
            <tr>
                <td><textarea name=\"cbo_ins_adm1[]\" class=\"info_textarea\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpD"), "IdInstitucion"), "html", null, true);
            echo "</textarea></td>
                <td><textarea type=\"text\" name=\"txt_res_adm1[]\" class=\"info_textarea\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpD"), "Resolucion"), "html", null, true);
            echo "</textarea></td>
                <td><textarea type=\"text\" name=\"txt_san_adm1[]\" class=\"info_textarea\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpD"), "Sancion"), "html", null, true);
            echo "</textarea></td>
                <td><textarea type=\"text\" name=\"txt_est_adm1[]\" class=\"info_textarea\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpD"), "Estado"), "html", null, true);
            echo "</textarea></td>
                <td> ";
            // line 27
            echo $this->getAttribute($this->getContext($context, "ddpD"), "boton");
            echo " </td>
            </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpD'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "

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


                                ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesoadministrativosE"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddpE"]) {
            echo "  


            <tr>
                <td><textarea name=\"cbo_ins_adm2[]\" class=\"info_textarea\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpE"), "IdInstitucion"), "html", null, true);
            echo "</textarea></td>
                <td><textarea type=\"text\" name=\"txt_res_adm2[]\" class=\"info_textarea\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpE"), "Resolucion"), "html", null, true);
            echo "</textarea></td>
                <td><textarea type=\"text\" name=\"txt_san_adm2[]\" class=\"info_textarea\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpE"), "Sancion"), "html", null, true);
            echo "</textarea></td>
                <td> ";
            // line 62
            echo $this->getAttribute($this->getContext($context, "ddpE"), "boton");
            echo " </td>
            </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpE'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "


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
        // line 91
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesoadministrativosF"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddpF"]) {
            echo "  
            <tr>
                <td><textarea name=\"cbo_ins_adm3[]\" class=\"info_textarea\">";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpF"), "IdInstitucion"), "html", null, true);
            echo "</textarea></td>
                <td><textarea type=\"text\" name=\"txt_san_adm3[]\" class=\"info_textarea\">";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpF"), "Sancion"), "html", null, true);
            echo "</textarea></td>
                <td><textarea type=\"text\" name=\"txt_res_adm3[]\" class=\"info_textarea\">";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpF"), "Expediente"), "html", null, true);
            echo "</textarea></td>
                <td> ";
            // line 96
            echo $this->getAttribute($this->getContext($context, "ddpF"), "boton");
            echo " </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpF'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "        </tbody>
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
        return array (  186 => 99,  177 => 96,  173 => 95,  169 => 94,  165 => 93,  158 => 91,  131 => 66,  121 => 62,  117 => 61,  109 => 59,  64 => 27,  60 => 26,  56 => 25,  52 => 24,  41 => 21,  205 => 103,  196 => 100,  192 => 99,  188 => 98,  184 => 97,  180 => 96,  176 => 95,  168 => 92,  145 => 71,  136 => 68,  132 => 67,  128 => 66,  124 => 65,  120 => 64,  108 => 60,  72 => 32,  67 => 30,  59 => 28,  51 => 26,  74 => 31,  66 => 20,  63 => 29,  54 => 16,  50 => 14,  43 => 23,  30 => 7,  26 => 6,  19 => 1,  119 => 44,  116 => 63,  113 => 60,  110 => 41,  107 => 40,  105 => 39,  100 => 55,  96 => 36,  87 => 31,  83 => 25,  81 => 35,  78 => 25,  73 => 23,  70 => 22,  61 => 14,  58 => 13,  55 => 27,  53 => 11,  48 => 23,  46 => 13,  39 => 5,  34 => 9,  31 => 3,);
    }
}