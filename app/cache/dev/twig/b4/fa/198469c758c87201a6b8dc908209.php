<?php

/* hojaVidaBundle:formularios:frm_info_cc_sbs.html.twig */
class __TwigTemplate_b4fa198469c758c87201a6b8dc908209 extends Twig_Template
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
        echo "<div id=\"tabs3-3\">
    <div class=\"area-registro\">
        <div class=\"tab-title\">
            INFORMACIÓN DE LA CÁMARA DE COMERCIO, INFOCORP Y SBS
        </div>
        <table width=\"100%\" border=\"0\" cellspacing=\"10px\" align=\"center\">
            <tr>
                <td>
                    <form id=\"frm_info_camara\">
                        <table  width=\"80%\" class=\"table ui-widget ui-widget-content\">
                            <tr>
                                <td width=\"20%\" class=\"ui-widget-header\">Cámara de Comercio</td>
                                <td>
                                    <input type=\"hidden\" name=\"hd_tipo[]\" value=\"1\">
                                    <textarea class=\"info_textarea\" type=\"text\" name=\"txt_descripcion[]\" ></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"ui-widget-header\">Infocorp</td>
                                <td>
                                    <input type=\"hidden\" name=\"hd_tipo[]\" value=\"2\">
                                    <textarea class=\"info_textarea\" name=\"txt_descripcion[]\" ></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"ui-widget-header\">SBS</td>
                                <td>
                                    <input type=\"hidden\" name=\"hd_tipo[]\" value=\"3\">
                                    <textarea class=\"info_textarea\" type=\"text\" name=\"txt_descripcion[]\"></textarea>
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
    </div>  

</div>";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:formularios:frm_info_cc_sbs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  31 => 9,  29 => 8,  27 => 7,  41 => 14,  35 => 12,  76 => 44,  48 => 19,  44 => 15,  36 => 12,  32 => 11,  28 => 8,  34 => 11,  23 => 3,  19 => 1,  513 => 379,  511 => 378,  505 => 375,  499 => 372,  492 => 368,  486 => 365,  471 => 353,  466 => 352,  461 => 350,  458 => 349,  349 => 244,  342 => 240,  325 => 226,  309 => 213,  292 => 199,  276 => 186,  260 => 173,  244 => 160,  225 => 144,  208 => 130,  188 => 113,  167 => 95,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 45,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 7,  42 => 5,  38 => 13,  33 => 3,  30 => 10,);
    }
}