<?php

/* hojaVidaBundle:update_formularios/conducta/html:antecedentes.html.twig */
class __TwigTemplate_5ff47f4804759b78d00f369adcb2121e extends Twig_Template
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
        echo "<h3><label class=\"labelform\">1.&nbsp;&nbsp;ANTECEDENTES PENALES, JUDICIALES Y POLICIALES:</label></h3>
<div>
    <table width=\"80%\" class=\"table ui-widget ui-widget-content\">
        
        
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConantecedentespenalesA"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "        <tr>
            <td width=\"180px\" class=\"ui-widget-header\">Antecedentes Penales:</td>
            <td><textarea name=\"txt_apenales\" class=\"text-area\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "descripcion"), "html", null, true);
            echo " </textarea></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        
        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConantecedentespenalesB"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "        <tr>
            <td  class=\"ui-widget-header\">Antecedentes Judiciales:</td>
            <td><textarea name=\"txt_ajudiciales\" type=\"text\" class=\"text-area\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "descripcion"), "html", null, true);
            echo "</textarea></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ConantecedentespenalesC"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "        
        <tr>
            <td  class=\"ui-widget-header\">Antecedentes Policiales:</td>
            <td><textarea name=\"txt_apoliciales\" type=\"text\" class=\"text-area\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "descripcion"), "html", null, true);
            echo "</textarea></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:update_formularios/conducta/html:antecedentes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  66 => 20,  63 => 19,  54 => 16,  50 => 14,  43 => 12,  30 => 7,  26 => 6,  19 => 1,  119 => 44,  116 => 43,  113 => 42,  110 => 41,  107 => 40,  105 => 39,  100 => 37,  96 => 36,  87 => 31,  83 => 25,  81 => 26,  78 => 25,  73 => 23,  70 => 22,  61 => 14,  58 => 13,  55 => 12,  53 => 11,  48 => 10,  46 => 13,  39 => 5,  34 => 9,  31 => 3,);
    }
}
