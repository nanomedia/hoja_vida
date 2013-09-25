<?php

/* hojaVidaBundle:update_formularios/conducta/html:procesos_judiciales.html.twig */
class __TwigTemplate_cd8eca0a362eeb18f1f599c360740e1e extends Twig_Template
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
        echo "<h3><label class=\"labelform\">2. PROCESOS JUDICIALES:</label></h3>
<div>
    <label class=\"labelform\"> PROCESOS JUDICIALES CIVILES, PENALES, DE FAMILIA, LABORALES COMO DEMANDANTE / DENUNCIANTE:</label>
    <br><br>
    <div  class=\"add-icon\" id=\"add_proc_jud_civ_lab_d_d\" >Nueva fila</div><br><br>
    <table width=\"80%\" id=\"table_proc_jud_civ_lab_d_d\" class=\"table ui-widget ui-widget-content\">

        <thead>

            <tr class=\"ui-widget-header\" >
                <th>Expediente</th>
                <th>Expediente Órgano</th>
                <th>Demandado / Denunciado</th>
                <th>Materia</th>
                <th>Estado</th>
                <th width=\"50px\"></th>

            </tr>
        </thead>
        <tbody>


                                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesojudicialesA"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddp"]) {
            echo "  
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><input name=\"hd_tipo_jud[]\" type=\"hidden\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<textarea name=\"txt_exp_con[]\" class=\"info_textarea\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddp"), "Expediente"), "html", null, true);
            echo "</textarea></td>
\t\t\t\t\t\t\t\t\t<td><textarea name=\"txt_exp_org_con[]\" class=\"info_textarea\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddp"), "Organo"), "html", null, true);
            echo "</textarea></td>
\t\t\t\t\t\t\t\t\t<td><textarea name=\"txt_dem_agre_con[]\" class=\"info_textarea\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddp"), "Demandadoagresor"), "html", null, true);
            echo "</textarea></td>
\t\t\t\t\t\t\t\t\t<td><textarea name=\"txt_materia_con[]\" class=\"info_textarea\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddp"), "Materia"), "html", null, true);
            echo "</textarea></td>
\t\t\t\t\t\t\t\t\t<td><textarea name=\"txt_estado_con[]\" class=\"info_textarea\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddp"), "Estado"), "html", null, true);
            echo "</textarea></td>
                                                                       
                                                                        <td>";
            // line 32
            echo $this->getAttribute($this->getContext($context, "ddp"), "boton");
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t\t\t\t\t\t

\t\t

        </tbody>

    </table>
    <br>
    <label class=\"labelform\">  COMO DEMANDADO / DENUNCIADO:</label><br><br>
    <div  class=\"add-icon\" id=\"add_dem_den\" >Nueva fila</div><br><br>
    <table  width=\"80%\" id=\"table_dem_den\" class=\"table ui-widget ui-widget-content\">
        <thead>

            <tr class=\"ui-widget-header\">
                <th>Expediente</th>
                <th>Expediente Órgano</th>
                <th>Demandante / Denunciado</th>
                <th>Materia</th>
                <th>Estado</th>
                <th width=\"50px\"></th>
            </tr>
        </thead>
        <tbody>


                                ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesojudicialesB"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddpB"]) {
            echo "  
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><input name=\"hd_tipo_jud[]\" type=\"hidden\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<textarea name=\"txt_exp_con[]\" class=\"info_textarea\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpB"), "Expediente"), "html", null, true);
            echo "</textarea></td>
\t\t\t\t\t\t\t\t\t<td><textarea name=\"txt_exp_org_con[]\" class=\"info_textarea\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpB"), "Organo"), "html", null, true);
            echo "</textarea></td>
\t\t\t\t\t\t\t\t\t<td><textarea name=\"txt_dem_agre_con[]\" class=\"info_textarea\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpB"), "Demandadoagresor"), "html", null, true);
            echo "</textarea></td>
\t\t\t\t\t\t\t\t\t<td><textarea name=\"txt_materia_con[]\" class=\"info_textarea\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpB"), "Materia"), "html", null, true);
            echo "</textarea></td>
\t\t\t\t\t\t\t\t\t<td><textarea name=\"txt_estado_con[]\" class=\"info_textarea\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpB"), "Estado"), "html", null, true);
            echo "</textarea></td>
\t\t\t\t\t\t\t\t\t <td>";
            // line 68
            echo $this->getAttribute($this->getContext($context, "ddpB"), "boton");
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpB'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t\t\t\t\t\t\t

        </tbody>

    </table><br>

    <label class=\"labelform\">COMO AGRAVIADO:</label><br><br>
    <div  class=\"add-icon\" id=\"add_como_agraviado\" >Nueva fila</div><br><br>
    <table width=\"80%\" id=\"table_como_agraviado\" class=\"table ui-widget ui-widget-content\">
        <thead>
            <tr class=\"ui-widget-header\">
                <th>Expediente</th>
                <th>Órgano Jurisdiccional</th>
                <th>Agresor</th>
                <th>Materia</th>
                <th>Estado</th>
                <th width=\"50px\"></th>
            </tr>
        </thead>
        <tbody>

                                ";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConprocesojudicialesC"));
        foreach ($context['_seq'] as $context["_key"] => $context["ddpC"]) {
            echo "  
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><input name=\"hd_tipo_jud[]\" type=\"hidden\" value=\"1\">
\t\t\t\t\t\t\t\t\t<textarea name=\"txt_exp_con[]\" class=\"info_textarea\">";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpC"), "Expediente"), "html", null, true);
            echo "</textarea></td>
\t\t\t\t\t\t\t\t\t<td><textarea name=\"txt_exp_org_con[]\" class=\"info_textarea\">";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpC"), "Organo"), "html", null, true);
            echo "</textarea></td>
\t\t\t\t\t\t\t\t\t<td><textarea name=\"txt_dem_agre_con[]\" class=\"info_textarea\">";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpC"), "Demandadoagresor"), "html", null, true);
            echo "</textarea></td>
\t\t\t\t\t\t\t\t\t<td><textarea name=\"txt_materia_con[]\" class=\"info_textarea\">";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpC"), "Materia"), "html", null, true);
            echo "</textarea></td>
\t\t\t\t\t\t\t\t\t<td><textarea name=\"txt_estado_con[]\" class=\"info_textarea\">";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ddpC"), "Estado"), "html", null, true);
            echo "</textarea></td>
\t\t\t\t\t\t\t\t\t<td> ";
            // line 100
            echo $this->getAttribute($this->getContext($context, "ddpC"), "boton");
            echo " </td>
\t\t\t\t\t\t\t\t</tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddpC'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "           
        </tbody>
    </table>
    <br><br>
</div>";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:update_formularios/conducta/html:procesos_judiciales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 103,  196 => 100,  192 => 99,  188 => 98,  184 => 97,  180 => 96,  176 => 95,  168 => 92,  145 => 71,  136 => 68,  132 => 67,  128 => 66,  124 => 65,  120 => 64,  116 => 63,  108 => 60,  81 => 35,  67 => 30,  59 => 28,  55 => 27,  51 => 26,  83 => 25,  74 => 23,  66 => 20,  63 => 29,  50 => 14,  46 => 13,  43 => 23,  34 => 9,  26 => 6,  19 => 1,  102 => 37,  99 => 36,  96 => 35,  93 => 34,  90 => 33,  88 => 32,  77 => 25,  72 => 32,  69 => 22,  60 => 14,  57 => 13,  54 => 16,  52 => 11,  47 => 10,  45 => 9,  38 => 5,  33 => 4,  30 => 7,);
    }
}