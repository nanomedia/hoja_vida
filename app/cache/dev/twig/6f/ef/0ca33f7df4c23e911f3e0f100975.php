<?php

/* hojaVidaBundle:update_formularios:reporte.pdf.twig */
class __TwigTemplate_6fef0ca33f7df4c23e911f3e0f100975 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<!DOCTYPE pdf SYSTEM \"%resources%/dtd/doctype.dtd\">
<pdf>
    <dynamic-page>
        <div id=\"layer-1\" color=\"black\" font-type=\"judson\" font-size=\"16px\">
            <stylesheet>
                <complex-attribute name=\"border\" color=\"black\" />
                <complex-attribute name=\"background\" color=\"white\" />
            </stylesheet>
        </div>

        <div extends=\"layer-1\">
            ";
        // line 13
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "
        </div>


        </dynamic-page>



    </pdf>";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:update_formularios:reporte.pdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 13,  19 => 1,);
    }
}
