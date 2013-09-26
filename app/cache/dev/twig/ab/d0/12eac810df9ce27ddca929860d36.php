<?php

/* hojaVidaBundle:js:frm_datos_personales.html.twig */
class __TwigTemplate_abd012eac810df9ce27ddca929860d36 extends Twig_Template
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

    \$(\".rad_discapacidad\").click(function() {
        if (\$(this).is(\":checked\")) {
            \$(\".txt_certDiscapacidad\").val(\"\");

            if (\$(this).val() === \"SI\") {
                \$(\".certi_discapacidad\").css(\"display\", \"block\");
            } else {
                \$(\".certi_discapacidad\").css(\"display\", \"none\");
            }
        }
    });
    function edad(data) {
        var fec = data.split(\"/\");
        var fecha = new Date(fec[2] + \"/\" + fec[1] + \"/\" + fec[0]);
        var hoy = new Date();
        var ed = parseInt((hoy - fecha) / 365 / 24 / 60 / 60 / 1000);
        return ed;
    }

    \$(\".txt_fechaNac\").change(function() {
        \$(\".txt_edad\").val(edad(\$(this).val()));
        \$(\"#lbledad\").html(edad(\$(this).val()));
    });


";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:js:frm_datos_personales.html.twig";
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  34 => 11,  23 => 3,  19 => 1,  513 => 379,  511 => 378,  505 => 375,  499 => 372,  492 => 368,  486 => 365,  471 => 353,  466 => 352,  461 => 350,  458 => 349,  349 => 244,  342 => 240,  325 => 226,  309 => 213,  292 => 199,  276 => 186,  260 => 173,  244 => 160,  225 => 144,  208 => 130,  188 => 113,  167 => 95,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 7,  42 => 5,  38 => 4,  33 => 3,  30 => 2,);
=======
        return array (  63 => 40,  19 => 1,  513 => 379,  511 => 378,  505 => 375,  499 => 372,  492 => 368,  486 => 365,  471 => 353,  466 => 352,  461 => 350,  458 => 349,  349 => 244,  342 => 240,  325 => 226,  309 => 213,  292 => 199,  276 => 186,  260 => 173,  244 => 160,  225 => 144,  208 => 130,  188 => 113,  167 => 95,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 27,  42 => 5,  38 => 4,  33 => 3,  30 => 2,);
>>>>>>> 7991ed05889c6f9fd7ed6df311218f701bda0941
    }
}
